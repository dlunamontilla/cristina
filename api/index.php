<?php
include __DIR__ . "/../app/autoload.php";

use assets\DLTools\DLRequest;
use app\Events;
use app\Indicators;
use app\Province;
use app\TaskList;
use app\User;

$events = new Events;
$request = new DLRequest;
$user = new User;
$indicators = new Indicators;
$provinces = new Province;

if ($user->auth()) {

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

        $id = (int) $user->getId();

        $values[':user_id'] = $id;

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
        echo $tasklist->getList();
        exit;
    }

    // Crear una lista de tareas:
    if ($request->post([
        'tasklist_name' => true,
        'users_id' => true
    ])) {
        $values = $request->getValues();

        $tasklist = new TaskList;
        
        // Actualizar el ID del usuario
        $values['users_id'] = $user->getId();
        
        $isSet = $tasklist->add((array) $values);
        echo json_encode(["info" => $isSet]);
        exit;
    }

    // Eliminar una tarea de la lista:
    if ($request->post([
        'id' => true,
        'user_id' => true
    ])) {
        /**
         * @var 
         */
        $values = $request->getValues();
        $tasklist = new TaskList;
        $info = $tasklist->delete((array) $values);
        echo json_encode(["info" => $info]);
        exit;
    }

    // Obtener indicadores:
    if ($request->get(['indicators' => false])) {
        header("content-type: application/json; charset=utf-8");
        echo $indicators->getData();
        exit;
    }
}

// Crear una sesión de usuario:
if ($request->post([
    "email" => true,
    "password" => true
])) {
    $values = (array) $request->getValues();
    $info = $user->createLogin($values);

    if ($info) {
        $indicators->users_id = $user->getId();
        $indicators->create();
    }

    echo json_encode(["info" => $info]);
    exit;
}

if ($request->post([
    'email' => true, //Listo
    'password' => true, //Listo
    'name' => true, // Listo
    'lastname' => true, // Listo
    'date_of_birth' => true, // Listo
    'postal_address' => true, // Listo
    'locality' => true, // Listo
    'dni' => true, // Listo
    'bank_account' => true, // Listo
    'gender' => true, // Listo
    'phone' => true, // LIsto
    'province_id' => true, // Listo
    'invoice_id' => true // Listo
])) {
    $values = (array) $request->getValues();
    $info = $user->create($values);
    echo json_encode(["info" => $info]);
    exit;
}
// $user->close();

if ($request->module('getProfile')) {
    echo $user->getProfile();
    exit;
}

// Actualizar contraseña de usuario
if ($request->post(['password' => true])) {
    $values = (object) $request->getValues();

    /** @var string  */
    $password = $values->password;
    echo json_encode(["info" => $user->updatePassword($password)]);
    exit;
}

// Eliminar un usuario por su identificador
if ($request->post(["id" => true])) {
    $id = (int) $request->getValues()->id;
    echo json_encode(["info" => $user->delete($id)]);
    exit;
}

// Cerrar la sesión de usuario
if ($request->module('logout')) {
    echo json_encode(["info" => $user->close()]);
    exit;
}

// Obtener una lista de provincias
if ($request->module('getProvinces')) {
    echo $provinces->getProvinces();
    exit;
}