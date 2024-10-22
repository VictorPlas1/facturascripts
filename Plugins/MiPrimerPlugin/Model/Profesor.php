<?php

namespace FacturaScripts\Plugins\MiPrimerPlugin\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Profesor extends ModelClass
{
    use ModelTrait;
    public $idprofesor;
    public $nombre;
    public $correo;




    public static function primaryColumn(): string
    {
        return "idprofesor";
    }
    public static function tableName(): string
    {
        return "profesores";
    }
}
