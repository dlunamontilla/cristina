<?php

namespace app;

use database\Connect;

class Indicators extends Connect {
    /**
     * @var int Se almacena el identificador del usuario.
     */
    public $users_id;

    public function __construct() {
        parent::__construct();

        $user = new User;
        $this->users_id = $user->getId();
    }

    /**
     * Obtiene la dirección del cliente.
     * 
     * @return string
     */
    private function getIP(): string {
        $ip = (string) $_SERVER['REMOTE_ADDR'];
        return $ip;
    }

    /**
     * Devuelve un array con información de acceso del usuario.
     * 
     * @return array
     */
    public function get(): array {
        $this->setJSON();
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare('SELECT * FROM dl_indicators WHERE indicators_id = :id LIMIT 3 ORDER BY indicators_id DESC;');

        $stmt->execute([
            ':id' => (int) $this->getUserId()
        ]);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Devuelve el ID del usuario
     * @return int
     */
    public function getUserId(): int {
        $data = [];
        if (array_key_exists('token', $_COOKIE)) {
            $data = json_decode($_COOKIE['token']);
        }
        
        $users_id = $data->users_id;
        return (int) $this->users_id
            ? $this->users_id
            : $users_id;
    }

    /**
     * Devuelve el nombre del navegador que está utilizando.
     * 
     * @return string
     */
    public function getBrowser(): string {
        $dataString = array_key_exists('HTTP_SEC_CH_UA', $_SERVER)
            ? $_SERVER['HTTP_SEC_CH_UA']
            : $_SERVER['HTTP_USER_AGENT'];

        preg_match("/(Firefox|Chrome|Edge|Opera|Brave|Yandex)/", $dataString, $browser);
        // print_r($browser);

        return array_key_exists(0, $browser)
            ? $browser[0]
            : "";
    }

    /**
     * Devuelve el nombre del sistema operativo que está utilizando
     * el usuario de la página.
     * 
     * @return string
     */
    public function getSystem(): string {
        $dataString = array_key_exists('HTTP_SEC_CH_UA', $_SERVER)
            ? $_SERVER['HTTP_SEC_CH_UA']
            : $_SERVER['HTTP_USER_AGENT'];

        preg_match("/(Android|Ubuntu|Windows|Mac|Linux)/", $dataString, $system);

        return array_key_exists(0, $system)
            ? $system[0]
            : "";
    }

    /**
     * Devuelve el nombre del sistema operativo que está utilizando
     * el usuario de la página.
     * 
     * @return string
     */
    public function getDeviceType(): string {
        $dataString = array_key_exists('HTTP_SEC_CH_UA', $_SERVER)
            ? $_SERVER['HTTP_SEC_CH_UA']
            : $_SERVER['HTTP_USER_AGENT'];

        preg_match("/(Desktop|Mobile|Tablet|iPhone|Android|Samsung|iPad)/i", $dataString, $device_type);

        
        $device = array_key_exists(0, $device_type)
            ? $device_type[0]
            : "";

        if (empty($device)) {
            $device = "Desktop";
        }

        return $device;
    }

    /**
     * Devuelve el nombre del sistema operativo que está utilizando
     * el usuario de la página.
     * 
     * @return string
     */
    public function getDeviceName(): string {
        $dataString = array_key_exists('HTTP_SEC_CH_UA', $_SERVER)
            ? $_SERVER['HTTP_SEC_CH_UA']
            : $_SERVER['HTTP_USER_AGENT'];

        preg_match("/(WebKit|Trident|Gecko)/i", $dataString, $device_name);

        
        $device = array_key_exists(0, $device_name)
            ? $device_name[0]
            : "";

        if (empty($device)) {
            $device = "Desktop";
        }

        return $device;
    }

    /**
     * Almacena en la base de datos información de acceso del usuario.
     * 
     * @return bool
     */
    public function create(): bool {
        $pdo = $this->getPDO();

        $stmt = $pdo->prepare('INSERT INTO dl_indicators(
            `ip`,
            `device_type`,
            `device_name`,
            `operating_system`,
            `browser`,
            `users_id`
        ) VALUES(
            :ip,
            :type,
            :name,
            :system,
            :browser,
            :users_id
        )');

        return $stmt->execute([
            ':ip' => $this->getIP(),
            ':type' => $this->getDeviceType(),
            ':name' => $this->getDeviceName(),
            ':system' => $this->getSystem(),
            ':browser' => $this->getBrowser(),
            ':users_id' => $this->getUserId(),
        ]);
    }

    /**
     * Devuelve los datos de la tabla indicators en formato JSON si estas existen.
     * 
     * @return string
     */
    public function getData(): string {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM dl_indicators WHERE users_id = :id ORDER BY indicators_id DESC LIMIT 3");
        
        $stmt->execute([
            ':id' => $this->getUserId()
        ]);

        return json_encode($stmt->fetchAll(\PDO::FETCH_ASSOC));
    }
}
