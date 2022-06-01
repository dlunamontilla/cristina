<?php

namespace app;
use database\Connect;

class Province extends Connect {
    public function __construct() {
        parent::__construct();
    }

    /**
     * @return string Devuelve una lista de provincia en formato JSON
     */
    public function getProvinces(): string {
        $this->setJSON();
        $pdo = $this->getPDO();

        $stmt = $pdo->prepare("SELECT * FROM dl_province ORDER BY province_name ASC;");
        $stmt->execute();

        return json_encode($stmt->fetchAll(\PDO::FETCH_ASSOC));
    }
}