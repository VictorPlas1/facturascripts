<?php

namespace FacturaScripts\Plugins\MiPrimerPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditProfesor extends EditController
{
    public function getModelClassName(): string
    {
        return 'Profesor';
    }
    //Comentario
}
