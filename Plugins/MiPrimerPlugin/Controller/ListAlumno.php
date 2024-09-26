<?php

namespace FacturaScripts\Plugins\MiPrimerPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListAlumno extends ListController
{
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'Alumnos';
        $page['menu'] = 'Academia';
        $page['icon'] = 'fas fa-friends';
        return $page;
    }


    protected function createViews()
    {
        $this->addView('ListAlumno', 'Alumno');
    }
}
