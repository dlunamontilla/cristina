<?php
namespace database;

class Connect {
    /**
     * @var \PDO Conexión con la base de datos.
     */
    private $pdo;
    
    /**
     * @param string $username Usuario de la base de datos. El usuario
     * por defecto es root.
     * 
     * @param string $password Contraseña de la base de datos. Por defecto
     * la contraseña se encuentra en blanco.
     */
    public function __construct(string $username = "david", string $password = "entorno2") {
        
        try {
            $this->pdo = new \PDO('mysql:host=localhost; dbname=gimnasio', $username, $password);
        }catch(\PDOException $error) {
            print_r($error);
        }
    }

    /**
     * @return \PDO
     */
    public function getPDO(): \PDO {
        return $this->pdo;
    }
}