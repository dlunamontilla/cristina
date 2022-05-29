<?php

namespace app;

use database\Connect;

class User extends Connect {
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

        /**
         * @var array
         */
        $exist = $stmt->fetch(\PDO::FETCH_ASSOC);

        // Datos para la creación del inicio de sesión:
        $data = [
            "token" => sha1($credentials['password']),
            "email" => $credentials['email'],
            "users_id" => $exist['users_id']
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
}
