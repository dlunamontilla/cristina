<?php

namespace app;
use database\Connect;

/**
 * Esta clase se encargará de leer y registrar eventos.
 * @package Events
 * @author Cristina López
 * @version 0.0.1b
 */
class Events extends Connect {
    /**
     * @var \PDO
     */
    private $pdo;
    
    public function __construct() {
        parent::__construct();
        $this->pdo = $this->getPDO();
    }

    /**
     * Permite registrar el evento en la tabla "dl_events"
     * @param array $param 
     * @return bool
     */
    public function register(array $param): bool {
        $stmt = $this->pdo->prepare("INSERT INTO dl_events VALUES(NULL, :title, :color, :initial_date, :final_date, :user_id)");
        return $stmt->execute($param);
    }

    /**
     * Obtiene un registro de eventos.
     * @return array
     */
    public function get(): array {
        $this->setJSON();

        $pdo = $this->getPDO();

        $stmt = $pdo->prepare("SELECT * FROM dl_events");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}