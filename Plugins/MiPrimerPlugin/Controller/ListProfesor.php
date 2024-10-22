<?php

namespace FacturaScripts\Plugins\MiPrimerPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListProfesor extends ListController
{
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'Profesores';
        $page['menu'] = 'Academia';
        $page['icon'] = 'fa-solid fa-person-chalkboard';
        return $page;
    }
    protected function createViews()
    {
        $this->addView('ListProfesor', 'Profesor', 'Profesores', 'fa-solid fa-person-chalkboard');
        $this->addSearchFields('ListProfesor', ['nombre', 'correo']);
    }
    protected function loadData($viewName, $view)
    {
        switch ($viewName) {

            case 'ListProfesor':
                $view->loadData();
                break;
        }
    }
}
