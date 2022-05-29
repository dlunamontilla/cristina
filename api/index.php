<?php
include __DIR__ . "/../app/autoload.php";

use assets\DLTools\DLRequest;
use app\Events;
use app\Indicators;
use app\TaskList;

$events = new Events;
$request = new DLRequest;

/**
 * @var array
 * Parámetros para el registro de eventos. Dado que todos
 * son true se hace obligatorio que los campos del 
 * formulario tengan contenido, de lo contrario, no se
 * almacenará información en la base de datos.
 */
$register_events = [
    "color" => true,
    "final_date" => true,
    "final_time" => true,
    "initial_date" => true,
    "initial_time" => true,
    "title" => true,
    "user_id" => true
];

// Se comprueba que la petición ha sido exitoso.
if ($request->post($register_events)) {
    $values = $request->getValues(":");

    // Almacenar fecha y hora en una variable:
    $initial_date = $values[":initial_date"] . " " . $values[':initial_time'];
    $final_date = $values[":final_date"] . " " . $values[':final_time'];

    $values = (array) $request->getValues(":", [
        "color", "initial_date", "final_date", "title", "user_id"
    ]);

    $values[':initial_date'] = $initial_date;
    $values[':final_date'] = $final_date;

    // Justo en esta parte se produce el registro de eventos y se
    // informa mediante «true» o «false» si el registro tuvo éxito.
    echo json_encode($events->register($values));
    exit;
}

// Carga los eventos
if ($request->get(["events" => false])) {
    echo json_encode($events->get());
    exit;
}

// Carga los eventos
if ($request->get(["eventsByGroup" => false])) {
    echo json_encode($events->getByVolume());
    exit;
}

// Obtener información:
if ($request->get(["info" => false])) {
    header("content-type: application/json; charset=utf-8");
    echo json_encode($_SERVER);
    exit;
}

// Obtener una lista de tareas:
if ($request->get(["tasklist" => false])) {
    $tasklist = new TaskList;
    echo $tasklist->get();
    exit;
}

// Crear una lista de tareas:
if ($request->post([
    'tasklist_name' => true,
    'users_id' => true
])) {
    $values = $request->getValues();

    $tasklist = new TaskList;
    $isSet = $tasklist->set((array) $values);

    echo json_encode(["info" => $isSet]);
    exit;
}

$indicators = new Indicators;

echo $indicators->getDeviceName();

// echo json_encode($_POST);
