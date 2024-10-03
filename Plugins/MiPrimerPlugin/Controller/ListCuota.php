<?php

namespace FacturaScripts\Plugins\MiPrimerPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListCuota extends ListController
{
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'Cuotas';
        $page['menu'] = 'Academia';
        $page['icon'] = 'fa fa-money-bill-alt';
        return $page;
    }

    protected function createViews()
    {

        $this->addView('ListCuota', 'Cuota');
        $this->addSearchFields('ListCuota', ['idcuota', 'idalumno', 'fecha', 'fechapago', 'importe', 'formapago', 'tipo']);
        $this->addOrderBy('ListCuota', ['idcuota'], 'Cuota');
        $this->addOrderBy('ListCuota', ['fecha'], 'Fecha');
        $this->addFilterPeriod('ListCuota', 'date', 'period', 'fecha');
    }

    protected function loadData($viewName, $view)
    {
        switch ($viewName) {
            case 'ListCuota':
                $view->loadData();
                break;
        }
    }
}
