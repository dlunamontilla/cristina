<?php

namespace app;

class DateFormat {
    /**
     * @var string Fecha con formato de partida
     */
    private $dateFormat;

    /**
     * @var string Fecha con formato resultante
     */
    private string $date;

    /**
     * @param string $date Pase una fecha como argumento del constructor para 
     * formatearla a un formato legible.
     */
    public function __construct(string $date) {
        $this->dateFormat = $date;
        
    }

    /**
     * @param bool $short Si es false, mostrará la fecha completa, de lo contrario, 
     * la mostrará corta.
     * 
     * @return string Devuelve una fecha formateada y legible para las personas.
     */
    private function format(bool $short = false): void {
        $date = (preg_split('/\s/', $this->dateFormat))[0];
        $data = preg_split('/\-/', $date);

        $newDate = (object) [
            "year" => (int) $data[0],
            "month" => (string) $data[1],
            "day" => (int) $data[2]
        ];

        $months = [
            "01" => "enero",
            "02" => "febrero",
            "03" => "marzo",
            "04" => "abril",
            "05" => "mayo",
            "06" => "junio",
            "07" => "julio",
            "08" => "agosto",
            "09" => "septiembre",
            "10" => "octubre",
            "11" => "noviembre",
            "12" => "dicimbre"
        ];

        if (!$short) {
            $this->date = "$newDate->day de " . $months[$newDate->month] .  " de $newDate->year";
            return;
        }

        if ($short) {
            $this->date = "$newDate->day/" . $months[$newDate->month] . "/$newDate->year";
            return;
        }
    }

    /**
     * @param bool $short el valor por defecto es false. Si se le pasa como 
     * parámetro «true» devuelve una fecha corta.
     */
    public function getDate(bool $short = false): string {
        $this->format($short);
        return $this->date;
    }
}