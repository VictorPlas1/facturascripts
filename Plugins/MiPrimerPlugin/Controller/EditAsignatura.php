<?php

namespace FacturaScripts\Plugins\MiPrimerPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditAsignatura extends EditController
{
    public function getModelClassName(): string
    {
        return 'Asignatura';
    }
}
