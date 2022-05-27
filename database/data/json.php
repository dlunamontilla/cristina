<?php
namespace database\data;

/**
 * @return string Devuelve una lista de actividades en formato JSON
 */
function getActivities(): string {
    /**
     * @var string Lista de actividades
     */
    $activities = <<<JSON
    [{"activity":"Seleccione Actividad..."},{"activity":"Abdominales"},{"activity":"Aerobic"},{"activity":"Burpes"},{"activity":"Body Pump"},{"activity":"Body Balance"},{"activity":"Cardio Hit"},{"activity":"Crossfit"},{"activity":"Cycling"},{"activity":"Duet Boxing"},{"activity":"Duet Camp"},{"activity":"Estiramientos"},{"activity":"Gap"},{"activity":"Hipopresivos"},{"activity":"Pilates"},{"activity":"Tai Chi"},{"activity":"Tonificación"},{"activity":"Yoga"},{"activity":"Zumba"}]
    JSON;

    return $activities;
}

/**
 * @return string Devuelve una lista de 50 provincias en formato JSON
 */
function getProvinces(): string {
    /**
     * @var string Lista de todas las provincias de España
     */
    $provinces = <<<JSON
    [{"province":"Álava (Araba) (País Vasco, ES)"},{"province":"Albacete (Castilla-La Mancha, ES)"},{"province":"Alicante (Comunidad Valenciana, ES)"},{"province":"Almería (Andalucía, ES)"},{"province":"Asturias (Principado de Asturias, ES)"},{"province":"Ávila (Castilla y León, ES)"},{"province":"Badajoz (Extremadura, ES)"},{"province":"Barcelona (Cataluña, ES)"},{"province":"Burgos (Castilla y León, ES)"},{"province":"Cáceres (Extremadura, ES)"},{"province":"Cádiz (Andalucía, ES)"},{"province":"Cantabria (Cantabria, ES)"},{"province":"Castellón (Comunidad Valenciana, ES)"},{"province":"Ciudad Real (Castilla-La Mancha, ES)"},{"province":"Córdoba (Andalucía, ES)"},{"province":"Cuenca (Castilla-La Mancha, ES)"},{"province":"Gerona (Girona) (Cataluña, ES)"},{"province":"Granada (Andalucía, ES)"},{"province":"Guadalajara (Castilla-La Mancha, ES)"},{"province":"Guipúzcoa (Gipuzkoa) (País Vasco, ES)"},{"province":"Huelva (Andalucía, ES)"},{"province":"Huesca (Aragon, ES)"},{"province":"Islas Baleares (Islas Baleares, ES)"},{"province":"Jaén (Andalucía, ES)"},{"province":"La Coruña (A Coruña) (Galicia, ES)"},{"province":"La Rioja (La Rioja, ES)"},{"province":"Las Palmas (Canarias, ES)"},{"province":"León (Castilla y León, ES)"},{"province":"Lérida (Lleida) (Cataluña, ES)"},{"province":"Lugo (Galicia, ES)"},{"province":"Madrid (Comunidad de Madrid, ES)"},{"province":"Málaga (Andalucía, ES)"},{"province":"Murcia (Región de Murcia, ES)"},{"province":"Navarra (Comunidad Foral de Navarra, ES)"},{"province":"Orense (Ourense) (Galicia, ES)"},{"province":"Palencia (Castilla y León, ES)"},{"province":"Pontevedra (Galicia, ES)"},{"province":"Salamanca (Castilla y León, ES)"},{"province":"Santa Cruz de Tenerife (Canarias, ES)"},{"province":"Segovia (Castilla y León, ES)"},{"province":"Sevilla (Andalucía, ES)"},{"province":"Soria (Castilla y León, ES)"},{"province":"Tarragona (Cataluña, ES)"},{"province":"Teruel (Aragon, ES)"},{"province":"Toledo (Castilla-La Mancha, ES)"},{"province":"Valencia (Comunidad Valenciana, ES)"},{"province":"Valladolid (Castilla y León, ES)"},{"province":"Vizcaya (Bizkaia) (País Vasco, ES)"},{"province":"Zamora (Castilla y León, ES)"},{"province":"Zaragoza (Aragon, ES)"}]
    JSON;

    return $provinces;
}


/**
 * @return string Devuelve una lista de horarios.
 */
function getSchedule(): string {
    /**
     * @var string Lista de horarios disponibles
     */
    $schedule = <<<JSON
    [{"schedule":"15:15-15:30"},{"schedule":"11:45-12:00"},{"schedule":"15:00-15:45"},{"schedule":"16:30-17:00"},{"schedule":"10:00-11:00"},{"schedule":"21:00-22:00"},{"schedule":"19:00-19:45"},{"schedule":"18:00-18:45"},{"schedule":"9:00-10:15"},{"schedule":"20:00-21:00"},{"schedule":"11:00-11:45"},{"schedule":"19:30-20-15"},{"schedule":"17:15-18:00"},{"schedule":"9:00-9:45"},{"schedule":"20:15-21:00"},{"schedule":"10:00-10:45"},{"schedule":"20:00-20:45"},{"schedule":"19:15-20:00"},{"schedule":"14:00-15:30"},{"schedule":"21:00-21:45"},{"schedule":"18:15-19:00"},{"schedule":"14:30-15:30"},{"schedule":"13:00-13:45"},{"schedule":"16:15-17:00"},{"schedule":"13:00-14:00"},{"schedule":"12:00-12:45"}]
    JSON;

    return $schedule;
}


