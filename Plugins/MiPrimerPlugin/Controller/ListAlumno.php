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
        $page['icon'] = 'fas fa-user-friends';
        return $page;
    }


    protected function createViews()
    {
        $this->addView('ListAlumno', 'Alumno');
        $this->addSearchFields('ListAlumno', ['nombre', 'telefono', 'dni', 'fechanacimiento', 'email']);
        $this->addOrderBy('ListAlumno', ['nombre'], 'Nombre');
        $this->addOrderBy('ListAlumno', ['fechanacimiento'], 'Fecha');
        $this->addFilterPeriod('ListAlumno', 'date', 'period', 'fechanacimiento');
    }
    protected function loadData($viewName, $view)
    {
        switch ($viewName) {
            case 'ListAlumno':
                $view->loadData();
                break;
        }
    }
}
