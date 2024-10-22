<?php

namespace FacturaScripts\Plugins\MiPrimerPlugin\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Evaluacion extends ModelClass
{
    use ModelTrait;
    public $idevaluacion;
    public $idalumno;
    public $idasignatura;
    public $idprofesor;
    public $fecha;
    public $nota;
    public $comportamiento;
    public $observaciones;



    // Estos dos metodos son obligatorios sobre escribir
    public static function primaryColumn(): string // Define la clave primaria
    {
        return "idevaluacion";
    }
    public static function tableName(): string // Define la tabla de la base de datos
    {
        return "evaluaciones";
    }
    public function url(string $type = 'auto', string $list = 'ListAlumno?activetab=List'): string
    {
        return parent::url($type, $list);
    }
}
