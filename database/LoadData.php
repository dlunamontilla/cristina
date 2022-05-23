<?php
include __DIR__ . "/conexion.php";

class LoadData extends Connect {
    public function __construct() {
        parent::__construct();
    }

    /**
     * Carga las provincias en la base de datos.
     * @param string $stringData Debe pasar como parámetro un string
     * en formato JSON.
     * 
     * @return bool
     */
    public function pushProvinces(string $stringData): bool {
        $data = json_decode($stringData);

        $pdo = $this->getPDO();
        $stmt = $pdo->prepare('INSERT INTO dl_province(`province_name`) values(:province_name)');

        $pdo->beginTransaction();

        foreach($data as $key => $value) {
            $stmt->execute([
                ':province_name' => $value->province
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
 * @var \LoadData Objeto que permite cargar los datos en la base
 * de datos a partir de un JSON.
 */
$loadData = new LoadData;