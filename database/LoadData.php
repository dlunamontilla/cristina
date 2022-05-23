<?php
include __DIR__ . "/conexion.php";

class LoadData extends Connect {
    public function __construct() { /* constructor de la clase LoadData */
        parent::__construct();  /* instancia de la clase Connect */
    }

    /**
     * Carga las provincias en la base de datos.
     * @param string $stringData nombre que recibe la variable que tiene una cadena de texto en formato JSON.
     * 
     * @return bool
     */
    public function pushProvinces(string $stringData): bool { /* devuelve true si losd atos cargaron correctamento si no devuelve false */
        $data = json_decode($stringData); /* 'json_decode' convierte la cadena de texto en formato JSON en PHP */

        $pdo = $this->getPDO();
        $stmt = $pdo->prepare('INSERT INTO dl_province(`province_name`) values(:province_name)');

        $pdo->beginTransaction(); /* ayuda a que los datos carguen rápidamente y no tarde en completar la carga de los datos */

        foreach($data as $key => $value) { /* sentencia que hace enviar los datos a la tabla */
            $stmt->execute([
                ':province_name' => $value->province
            ]);
        }

        return $pdo->commit(); /* funcion que se ejecuta cuando se termine de ejecutar 'foreach' y envia todos los datos a la tabla provincia */
    }

    /**
     * Carga los datos de las actividades.
     * 
     * @param string $stringData Debe pasar como parámetro un string
     * en formato JSON.
     * 
     * @return bool
     */
    public function pushActivities(string $stringData): bool {
        $data = json_decode($stringData);

        $pdo = $this->getPDO();
        $stmt = $pdo->prepare('INSERT INTO dl_activities(`activities_name`) values(:activities_name)');

        $pdo->beginTransaction();

        foreach($data as $key => $value) {
            $stmt->execute([
                ':activities_name' => $value->activity
            ]);
        }

        return $pdo->commit();
    }

    /**
     * Carga los datos de las actividades.
     * 
     * @param string $stringData Debe pasar como parámetro un string
     * en formato JSON.
     * 
     * @return bool
     */
    public function pushSchedule(string $stringData): bool {
        $data = json_decode($stringData);

        $pdo = $this->getPDO();
        $stmt = $pdo->prepare('INSERT INTO dl_schedule(`start_time`, `ending_time`) values(:start_time, :ending_time)');

        $pdo->beginTransaction();

        foreach($data as $key => $value) {
            list($start, $end) = explode("-", $value->schedule);

            $stmt->execute([
                ':start_time' => $start,
                ':ending_time' => $end
            ]);
        }

        return $pdo->commit();
    }

}

exit;

/**
 * @var \LoadData clase que tiene una serie de métodos que permite cargar los datos en formato JSON 
 * en la base de datos MySQL.
 */
$loadData = new LoadData;