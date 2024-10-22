<?php

namespace FacturaScripts\Plugins\MiPrimerPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListAsignatura extends ListController
{
    public function getPageData(): array
    {
        $page = parent::getPageData(); // Ejecuta el metodo en la clase padre, sobreescribo el metodo pero solo las propiedades que yo quiera,primero se ejecuta en la clase padre.
        $page['title'] = 'Asignaturas';
        $page['menu'] = 'Academia';
        $page['icon'] = 'fa-solid fa-file-contract';
        return $page;
    }
    protected function createViews() // Metodo que crea las vistas
    {
        $this->addView('ListAsignatura', 'Asignatura', 'Asignaturas', 'fa-solid fa-file-contract');
    }
    protected function loadData($viewName, $view)
    {
        switch ($viewName) {
            case 'ListAsignatura':

                $view->loadData();
                break;
        }
    }
}
