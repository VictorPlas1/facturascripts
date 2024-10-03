<?php

namespace FacturaScripts\Plugins\MiPrimerPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditCuota extends EditController
{
    public function getModelClassName(): string
    {
        return 'Cuota';
    }
}
