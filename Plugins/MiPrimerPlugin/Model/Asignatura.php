<?php

namespace FacturaScripts\Plugins\MiPrimerPlugin\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Asignatura extends ModelClass
{
    use ModelTrait;
    public $idasignatura;
    public $idprofesor;
    public $nombre;
    public $material;
    public $plazas;



    public static function primaryColumn(): string
    {
        return "idasignatura";
    }
    public static function tableName(): string
    {
        return "asignaturas";
    }
}
