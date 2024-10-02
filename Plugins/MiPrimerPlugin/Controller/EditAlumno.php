<?php

namespace FacturaScripts\Plugins\MiPrimerPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditAlumno extends EditController
{
    public function getModelClassName(): string
    {
        return 'Alumno';
    }
    //Comentario
}
