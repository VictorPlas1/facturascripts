<?php

namespace FacturaScripts\Plugins\MiPrimerPlugin\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Alumno extends ModelClass
{
    use ModelTrait;
    public $idalumno;
    public $dni;
    public $nombre;
    public $fechanacimiento;
    public $email;
    public $telefono;


    // Estos dos metodos son obligatorios sobre escribir
    public static function primaryColumn(): string // Define la clave primaria
    {
        return "idalumno";
    }
    public static function tableName(): string // Define la tabla de la base de datos
    {
        return "alumnos";
    }
}
