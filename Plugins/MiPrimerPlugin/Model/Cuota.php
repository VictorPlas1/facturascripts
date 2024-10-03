<?php

namespace FacturaScripts\Plugins\MiPrimerPlugin\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;


class Cuota extends ModelClass
{
    use ModelTrait;
    public $idcuota;
    public $idalumno;
    public $fecha;
    public $fechapago;
    public $importe;
    public $formapago;
    public $tipo;

    public static function primaryColumn(): string
    {
        return "idcuota";
    }
    public static function tableName(): string
    {
        return "cuotas";
    }
}
