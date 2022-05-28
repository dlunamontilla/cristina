<?php

namespace app;
use database\Connect;

class Indicators extends Connect {
    public function __construct() {}

    public function get(): array {
        $this->setJSON();
        $pdo = $this->getPDO();

        return [];
    }
}