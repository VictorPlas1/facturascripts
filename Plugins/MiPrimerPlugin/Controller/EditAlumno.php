<?php

namespace FacturaScripts\Plugins\MiPrimerPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\PanelController;
use FacturaScripts\Dinamic\Lib\ExtendedController\PanelController as ExtendedControllerPanelController;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

class EditAlumno extends ExtendedControllerPanelController
{

    protected function createViews()
    {
        $this->addEditView('EditAlumno', 'Alumno', 'Alumno', 'fas fa-user-friends');
        $this->addListView('ListCuota', 'Cuota', 'Cuotas', 'fas fa-wallet');
        $this->addListView('ListMatricula', 'Matricula', 'Matricula', 'fa-solid fa-user-plus');
        $this->addListView('ListEvaluacion', 'Evaluacion', 'Evaluacion', 'fa-solid fa-user-plus');
    }
    protected function loadData($viewName, $view)
    {
        switch ($viewName) {
            case 'EditAlumno':
                $code = $this->request->get('code');
                $view->loadData($code);
                break;
            case 'ListCuota':
                $where = [new DataBaseWhere('idalumno', $this->request->get('code'))];
                $view->loadData('', $where);
                break;
            case 'ListMatricula':
                $where = [new DataBaseWhere('idalumno', $this->request->get('code'))];
                $view->loadData('', $where);
                break;
            case 'ListEvaluacion':
                $where = [new DataBaseWhere('idalumno', $this->request->get('code'))];
                $view->loadData('', $where);
        }
    }



    public function getModelClassName(): string
    {
        return 'Alumno';
    }
}
