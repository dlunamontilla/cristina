<?php

namespace app;

use database\Connect;

class User extends Connect {
    /**
     * @var int Identificador del usuario
     */
    private $users_id = 0;

    public function __construct() {
        parent::__construct();
    }

    /**
     * @param array $credentials Crea una sesión de usuario.
     * @return bool Si se creó con éxito devolverá verdadero,
     * de lo contrario, devolverá falso.
     */
    public function createLogin(array $credentials): bool {
        $pdo = $this->getPDO();

        $stmt = $pdo->prepare("SELECT * FROM dl_users WHERE email = :email AND password = :password");
        $stmt->execute([
            ':email' => (string) $credentials['email'],
            ':password' => (string) sha1($credentials['password'])
        ]);

        $this->find($credentials['email']);

        /**
         * @var array
         */
        $exist = $stmt->fetch(\PDO::FETCH_ASSOC);

        $data = !!$exist ? $exist : [];


        // Datos para la creación del inicio de sesión:
        $data = [
            "token" => sha1($credentials['password']),
            "email" => $credentials['email'],
            "users_id" => @$exist['users_id']
        ];

        if (!!$exist) return setcookie('token', json_encode($data), time() + 7200);
        return false;
    }

    /**
     * @return bool Devuelve verdadero si la sesión se ha iniciado.
     */
    public function auth(): bool {
        if (!array_key_exists('token', $_COOKIE)) return false;

        $dataString = $_COOKIE['token'];
        $data = json_decode($dataString);


        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM dl_users WHERE password = :password AND email = :email");
        $stmt->execute([
            ':password' => (string) $data->token,
            ':email' => (string) $data->email
        ]);

        return !!$stmt->fetch();
    }

    /**
     * @return bool Devuelve verdadero si cierra la sesión del usuario.
     */
    public function close(): bool {
        return setcookie('token', '', time() - 5000);
    }

    /**
     * @param array $param Datos del formulario de registro de usuarios.
     * @return bool Devuelve verdadero si ha sido creado con éxito el usuario, de lo contrario
     * devuelve falso.
     */
    public function create(array $param): bool {
        $pdo = $this->getPDO();

        $data = (object) $param;

        if ($this->find($data->email)) return false;

        $stmt = $pdo->prepare('INSERT INTO dl_users(
            `email`,
            `password`,
            `name`,
            `lastname`,
            `date_of_birth`,
            `postal_address`,
            `locality`,
            `DNI`,
            `bank_account`,
            `gender`,
            `phone`,
            `province_id`,
            `role_id`,
            `invoice_id`
            ) VALUES(
                :email,
                :password,
                :name,
                :lastname,
                :date_of_birth,
                :postal_address,
                :locality,
                :dni,
                :bank_account,
                :gender,
                :phone,
                :province_id,
                :role_id,
                :invoice_id
            )');

        return $stmt->execute([
            ':email' => (string) $data->email,
            ':password' => (string) sha1($data->password),
            ':name' => (string) $data->name,
            ':lastname' => (string) $data->lastname,
            ':date_of_birth' => (string) $data->date_of_birth,
            ':postal_address' => (string) $data->postal_address,
            ':locality' => (string) $data->locality,
            ':dni' => (string) $data->dni,
            ':bank_account' => (string) $data->bank_account,
            ':gender' => (string) $data->gender,
            ':phone' => (string) $data->phone,
            ':province_id' => (int) $data->province_id,
            ':role_id' => 2,
            ':invoice_id' => (int) $data->invoice_id
        ]);
    }

    /**
     * Devuelve «true» si al buscar un usuario existe previamente en la base
     * de datos, de lo contrario, devuelve «false».
     * 
     * @param string $username Usuario de la aplicación.
     * @return bool
     */
    public function find(string $username): bool {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT users_id, email FROM dl_users WHERE email = :email");
        $stmt->execute([
            ':email' => (string) $username
        ]);

        $exist = $stmt->fetch(\PDO::FETCH_ASSOC);

        if (!is_array($exist) || array_key_exists('users_id', $exist)) {
            return false;
        }

        $this->users_id = @$exist['users_id'];

        return !!$exist;
    }

    /**
     * Devuelve el identificador del usuario en la base de datos.
     * @return int 
     */
    public function getId(): int {
        $data = (object) [];

        if (array_key_exists('token', $_COOKIE)) {
            $data = (object) json_decode($_COOKIE['token']);
        }

        return property_exists($data, 'users_id')
            ? $data->users_id
            : $this->users_id;
    }

    /**
     * @return string Devuelve datos en formato JSON
     */
    public function getProfile(): string {
        $this->setJSON();
        $pdo = $this->getPDO();

        $stmt = $pdo->prepare("SELECT * FROM dl_users WHERE users_id = :id");
        $stmt->execute([
            ':id' => $this->getId()
        ]);

        $data = $stmt->fetch(\PDO::FETCH_ASSOC);

        if (is_array($data)) {
            $date = $data['date_of_birth'];

            unset($data['password']);
            $dateFormat = new DateFormat($date);
            $data['date_of_birth'] = $dateFormat->getDate();
            $data['date_of_birth_short'] = $dateFormat->getDate(true);
            $data['date_of_birth_original'] = $date;
            
            $stmt = $pdo->prepare('SELECT * FROM dl_invoice WHERE invoice_id = :id');
            $stmt->execute([
                ':id' => $data['province_id']
            ]);

            $rate = $stmt->fetch(\PDO::FETCH_ASSOC);

            if (is_array($rate)) {
                $data = array_merge($data, $rate);
            }
            
            $stmt = $pdo->prepare("SELECT * FROM dl_province WHERE province_id = :id");
            $stmt->execute([
                ':id' => $data['province_id']
            ]);

            $province = $stmt->fetch(\PDO::FETCH_ASSOC);

            if (is_array($province)) {
                $data = array_merge($data, $province);
            }
        }


        return $data
            ? json_encode($data)
            : json_encode(["message" => "No se pudo obtener los datos del usuario, porque posiblemente no haya iniciado sesión"]);
    }

    /**
     * @string $password Contraseña del usuario 
     * @return bool Actualizar la contraseña del usuario. Si se hizo exitosamente,
     * devolverá «true», de lo contrario, devolverá «false».
     */
    public function updatePassword(string $password): bool {
        $pdo = $this->getPDO();

        $stmt = $pdo->prepare("UPDATE dl_users SET password = :password WHERE users_id = :id");
        return $stmt->execute([
            ':password' => sha1($password),
            ':id' => $this->getId()
        ]);
    }

    /**
     * @param int $id Identificador del usuario a eliminar
     */
    public function delete(int $id): bool {
        // Prevenir que se elimine el administrador.
        if ($id === 1) return false;

        // Prevenir que cualquier usuario pueda eliminar otros usuarios.
        if ($this->getId() !== 1) {
            return false;
        }

        $pdo = $this->getPDO();

        $stmt = $pdo->prepare("DELETE FROM dl_users WHERE users_id = :id");
        return $stmt->execute([
            ':id' => (int) $id
        ]);
    }

    /**
     * @param int $id ID del usuario al que se le va a actualizar la contraseña
     * @return bool
     */
    public function updatePasswordOtherUsers(int $id, string $password): bool {
        if ($id === 1) return false;

        if ($this->getId() !== 1) return false;

        $pdo = $this->getPDO();

        $stmt = $pdo->prepare("UPDATE dl_users set password = :password WHERE users_id = :id");
        return $stmt->execute([
            ':password' => sha1($password),
            ':id' => (int) $id
        ]);
    }
}
