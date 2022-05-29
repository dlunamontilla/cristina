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
         * @var bool
         */
        $exist = !!$stmt->fetchAll();

        // Datos para la creación del inicio de sesión:
        $data = [
            "token" => sha1($credentials['password']),
            "email" => $credentials['email']
        ];

        if ($exist) return setcookie('token', json_encode($data), time() + 7200);
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
}
