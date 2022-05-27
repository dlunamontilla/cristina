<?php

namespace database;

include __DIR__ . "/../app/autoload.php";

class LoadData extends Connect {
    public function __construct() { /* constructor de la clase LoadData */
        parent::__construct();  /* instancia de la clase Connect */
    }

    /**
     * Carga las provincias en la base de datos.
     * @return bool
     */
    public function pushProvinces(): bool { /* devuelve true si losd atos cargaron correctamento si no devuelve false */
        /**
         * @var string Lista de todas las provincias de España
         */
        $provinces = <<<JSON
        [{"province":"Álava (Araba) (País Vasco, ES)"},{"province":"Albacete (Castilla-La Mancha, ES)"},{"province":"Alicante (Comunidad Valenciana, ES)"},{"province":"Almería (Andalucía, ES)"},{"province":"Asturias (Principado de Asturias, ES)"},{"province":"Ávila (Castilla y León, ES)"},{"province":"Badajoz (Extremadura, ES)"},{"province":"Barcelona (Cataluña, ES)"},{"province":"Burgos (Castilla y León, ES)"},{"province":"Cáceres (Extremadura, ES)"},{"province":"Cádiz (Andalucía, ES)"},{"province":"Cantabria (Cantabria, ES)"},{"province":"Castellón (Comunidad Valenciana, ES)"},{"province":"Ciudad Real (Castilla-La Mancha, ES)"},{"province":"Córdoba (Andalucía, ES)"},{"province":"Cuenca (Castilla-La Mancha, ES)"},{"province":"Gerona (Girona) (Cataluña, ES)"},{"province":"Granada (Andalucía, ES)"},{"province":"Guadalajara (Castilla-La Mancha, ES)"},{"province":"Guipúzcoa (Gipuzkoa) (País Vasco, ES)"},{"province":"Huelva (Andalucía, ES)"},{"province":"Huesca (Aragon, ES)"},{"province":"Islas Baleares (Islas Baleares, ES)"},{"province":"Jaén (Andalucía, ES)"},{"province":"La Coruña (A Coruña) (Galicia, ES)"},{"province":"La Rioja (La Rioja, ES)"},{"province":"Las Palmas (Canarias, ES)"},{"province":"León (Castilla y León, ES)"},{"province":"Lérida (Lleida) (Cataluña, ES)"},{"province":"Lugo (Galicia, ES)"},{"province":"Madrid (Comunidad de Madrid, ES)"},{"province":"Málaga (Andalucía, ES)"},{"province":"Murcia (Región de Murcia, ES)"},{"province":"Navarra (Comunidad Foral de Navarra, ES)"},{"province":"Orense (Ourense) (Galicia, ES)"},{"province":"Palencia (Castilla y León, ES)"},{"province":"Pontevedra (Galicia, ES)"},{"province":"Salamanca (Castilla y León, ES)"},{"province":"Santa Cruz de Tenerife (Canarias, ES)"},{"province":"Segovia (Castilla y León, ES)"},{"province":"Sevilla (Andalucía, ES)"},{"province":"Soria (Castilla y León, ES)"},{"province":"Tarragona (Cataluña, ES)"},{"province":"Teruel (Aragon, ES)"},{"province":"Toledo (Castilla-La Mancha, ES)"},{"province":"Valencia (Comunidad Valenciana, ES)"},{"province":"Valladolid (Castilla y León, ES)"},{"province":"Vizcaya (Bizkaia) (País Vasco, ES)"},{"province":"Zamora (Castilla y León, ES)"},{"province":"Zaragoza (Aragon, ES)"}]
        JSON;

        $data = json_decode($provinces); /* 'json_decode' convierte la cadena de texto en formato JSON en PHP */

        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("DELETE FROM dl_province WHERE provice_id == '1'");
        $stmt->execute();

        $stmt = $pdo->prepare('INSERT INTO dl_province(`province_name`) values(:province_name)');

        $pdo->beginTransaction(); /* ayuda a que los datos carguen rápidamente y no tarde en completar la carga de los datos */

        foreach ($data as $key => $value) { /* sentencia que hace enviar los datos a la tabla */
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
    public function pushActivities(): bool {
        /**
         * @var string Lista de actividades
         */
        $activities = <<<JSON
        [{"activity":"Seleccione Actividad..."},{"activity":"Abdominales"},{"activity":"Aerobic"},{"activity":"Burpes"},{"activity":"Body Pump"},{"activity":"Body Balance"},{"activity":"Cardio Hit"},{"activity":"Crossfit"},{"activity":"Cycling"},{"activity":"Duet Boxing"},{"activity":"Duet Camp"},{"activity":"Estiramientos"},{"activity":"Gap"},{"activity":"Hipopresivos"},{"activity":"Pilates"},{"activity":"Tai Chi"},{"activity":"Tonificación"},{"activity":"Yoga"},{"activity":"Zumba"}]
        JSON;

        $data = json_decode($activities);

        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("DELETE FROM dl_activities");
        $stmt->execute();

        $stmt = $pdo->prepare('INSERT INTO dl_activities(`activities_name`) values(:activities_name)');

        $pdo->beginTransaction();

        foreach ($data as $key => $value) {
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
     * @return string
     */
    public function pushSchedule(): string {
        $json = <<<JSON
            [{"day":"Lunes","start":"15:15","end":"15:30"},{"day":"Miércoles","start":"15:15","end":"15:30"},{"day":"Jueves","start":"11:45","end":"12:00"},{"day":"Jueves","start":"15:15","end":"15:30"},{"day":"Viernes","start":"15:15","end":"15:30"},{"day":"Lunes","start":"15:00","end":"15:45"},{"day":"Martes","start":"15:00","end":"15:45"},{"day":"Miércoles","start":"15:00","end":"15:45"},{"day":"Viernes","start":"15:00","end":"15:45"},{"day":"Lunes","start":"16:30","end":"17:00"},{"day":"Martes","start":"16:30","end":"17:00"},{"day":"Viernes","start":"16:30","end":"17:00"},{"day":"Martes","start":"10:00","end":"11:00"},{"day":"Martes","start":"21:00","end":"22:00"},{"day":"Miércoles","start":"10:00","end":"11:00"},{"day":"Miércoles","start":"19:00","end":"19:45"},{"day":"Jueves","start":"10:00","end":"11:00"},{"day":"Jueves","start":"21:00","end":"22:00"},{"day":"Sábado","start":"18:00","end":"18:45"},{"day":"Domingo","start":"18:00","end":"18:45"},{"day":"Martes","start":"9:00","end":"10:15"},{"day":"Martes","start":"20:00","end":"21:00"},{"day":"Miércoles","start":"9:00","end":"10:15"},{"day":"Jueves","start":"9:00","end":"10:15"},{"day":"Viernes","start":"20:00","end":"21:00"},{"day":"Sábado","start":"11:00","end":"11:45"},{"day":"Lunes","start":"20:00","end":"21:00"},{"day":"Miércoles","start":"20:00","end":"21:00"},{"day":"Jueves","start":"20:00","end":"21:00"},{"day":"Sábado","start":"20:00","end":"21:00"},{"day":"Domingo","start":"20:00","end":"21:00"},{"day":"Lunes","start":"19:30","end":"20:15"},{"day":"Martes","start":"17:15","end":"18:00"},{"day":"Martes","start":"19:30","end":"20:15"},{"day":"Miércoles","start":"17:15","end":"18:00"},{"day":"Miércoles","start":"19:30","end":"20:15"},{"day":"Jueves","start":"19:30","end":"20"},{"day":"Viernes","start":"19:30","end":"20:15"},{"day":"Sábado","start":"19:30","end":"20:15"},{"day":"Domingo","start":"19:30","end":"20:15"},{"day":"Lunes","start":"9:00","end":"9:45"},{"day":"Lunes","start":"20:15","end":"21:00"},{"day":"Martes","start":"9:00","end":"9:45"},{"day":"Martes","start":"20:15","end":"21:00"},{"day":"Miércoles","start":"9:00","end":"9:45"},{"day":"Miércoles","start":"20:15","end":"21:00"},{"day":"Jueves","start":"9:00","end":"9:45"},{"day":"Jueves","start":"20:15","end":"21:00"},{"day":"Viernes","start":"9:00","end":"9:45"},{"day":"Viernes","start":"20:15","end":"21:00"},{"day":"Sábado","start":"10:00","end":"10:45"},{"day":"Domingo","start":"10:00","end":"10:45"},{"day":"Domingo","start":"20:00","end":"20:45"},{"day":"Martes","start":"19:15","end":"20:00"},{"day":"Miércoles","start":"19:15","end":"20:00"},{"day":"Jueves","start":"19:15","end":"20:00"},{"day":"Lunes","start":"14:00","end":"15:30"},{"day":"Martes","start":"14:00","end":"15:30"},{"day":"Miércoles","start":"14:00","end":"15:30"},{"day":"Jueves","start":"14:00","end":"15:30"},{"day":"Lunes","start":"11:00","end":"11:45"},{"day":"Lunes","start":"17:15","end":"18:00"},{"day":"Miércoles","start":"11:00","end":"11:45"},{"day":"Miércoles","start":"21:00","end":"21:45"},{"day":"Jueves","start":"17:15","end":"18:00"},{"day":"Viernes","start":"17:15","end":"18:00"},{"day":"Lunes","start":"11:45","end":"12:00"},{"day":"Lunes","start":"18:15","end":"19:00"},{"day":"Martes","start":"18:15","end":"19:00"},{"day":"Jueves","start":"18:15","end":"19:00"},{"day":"Viernes","start":"11:00","end":"11:45"},{"day":"Viernes","start":"18:15","end":"19:00"},{"day":"Lunes","start":"21:00","end":"22:00"},{"day":"Miércoles","start":"11:45","end":"12:00"},{"day":"Viernes","start":"14:30","end":"15:30"},{"day":"Lunes","start":"10:00","end":"10:45"},{"day":"Lunes","start":"19:00","end":"19:45"},{"day":"Martes","start":"13:00","end":"13:45"},{"day":"Martes","start":"18:00","end":"18:45"},{"day":"Jueves","start":"13:00","end":"13:45"},{"day":"Jueves","start":"19:00","end":"19:45"},{"day":"Viernes","start":"10:00","end":"10:45"},{"day":"Viernes","start":"19:00","end":"19:45"},{"day":"Lunes","start":"16:15","end":"17:00"},{"day":"Martes","start":"16:15","end":"17:00"},{"day":"Miércoles","start":"16:15","end":"17:00"},{"day":"Jueves","start":"16:15","end":"17:00"},{"day":"Lunes","start":"13:00","end":"14:00"},{"day":"Miércoles","start":"13:00","end":"14:00"},{"day":"Miércoles","start":"18:15","end":"19:00"},{"day":"Viernes","start":"18:00","end":"18:45"},{"day":"Lunes","start":"12:00","end":"12:45"},{"day":"Lunes","start":"18:00","end":"18:45"},{"day":"Martes","start":"12:00","end":"12:45"},{"day":"Miércoles","start":"12:00","end":"12:45"},{"day":"Miércoles","start":"18:00","end":"18:45"},{"day":"Jueves","start":"12:00","end":"12:45"},{"day":"Jueves","start":"18:00","end":"18:45"},{"day":"Viernes","start":"12:00","end":"12:45"},{"day":"Sábado","start":"12:00","end":"12:45"},{"day":"Domingo","start":"12:00","end":"12:45"}]
        JSON;

        return "No se puede cargar el horario de forma automática";
    }
}


$data = new LoadData;

$data->pushActivities();
$data->pushProvinces();
