<?php

namespace app;

use database\Connect;

class TaskList extends Connect {
    public function __construct() {
        parent::__construct();
    }

    /**
     * @return string Devuelve una lista de tareas obtenida de la base de datos.
     */
    public function get(): string {
        $this->setJSON();
        $pdo = $this->getPDO();

        $stmt = $pdo->prepare("SELECT * FROM dl_tasklist WHERE users_id = :id ORDER BY tasklist_id DESC;");
        $stmt->execute([
            ':id' => 1
        ]);

        return json_encode($stmt->fetchAll(\PDO::FETCH_ASSOC));
    }

    /**
     * @return bool verdadero si se guardó la tarea en la base de datos.
     */
    public function set(array $tasklist): bool {
        $task = (object) $tasklist;

        $pdo = $this->getPDO();

        $stmt = $pdo->prepare("SELECT tasklist_name from dl_tasklist WHERE tasklist_name = :name");
        $stmt->execute([
            ':name' => (string) $task->tasklist_name
        ]);

        if ($stmt->fetch()) return false;


        $stmt = $pdo->prepare('INSERT INTO dl_tasklist(`tasklist_name`, `users_id`) VALUES(
            :name,
            :id
        )');

        return $stmt->execute([
            ':name' => (string) $task->tasklist_name,
            ':id' => (int) $task->users_id
        ]);
    }
}
