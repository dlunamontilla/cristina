<?php

namespace app;

use database\Connect;

class TaskList extends Connect {
    /**
     * @var int Identificador del usuario asociado a la 
     * lista de tareas.
     */
    private $id;

    public function __construct() {
        parent::__construct();

        $user = new User;

        $this->id = (int) $user->getId();
    }

    /**
     * @return string Devuelve una lista de tareas obtenida de la base de datos.
     */
    public function getList(): string {
        $this->setJSON();
        $pdo = $this->getPDO();

        $stmt = $pdo->prepare("SELECT * FROM dl_tasklist WHERE users_id = :id ORDER BY tasklist_id DESC;");
        $stmt->execute([
            ':id' => (int) $this->id
        ]);
        
        return json_encode($stmt->fetchAll(\PDO::FETCH_ASSOC));
    }

    /**
     * @return bool verdadero si se guardó la tarea en la base de datos.
     */
    public function add(array $tasklist): bool {
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
            ':id' => (int) $this->id
        ]);
    }

    /**
     * @param array $param Lista de parámetros necesarios para eliminar la lista de tareas.
     * @return bool Devuelve verdadero si se eliminó una tarea.
     */
    public function delete(array $param): bool {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare('DELETE FROM dl_tasklist WHERE users_id = :id AND tasklist_id = :tasklist_id;');

        return $stmt->execute([
            ':id' => (int) $param['user_id'],
            ':tasklist_id' => (int) $param['id']
        ]);
    }
}
