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


    protected function createViews() //Recomendable hacerlo asi en el examen.
    {
        $this->createAlumno();
        $this->createCuota();
        $this->createMatricula();
        $this->createEvaluacion();
    }
    protected function createAlumno($viewName = 'ListAlumno')
    {
        $this->addView($viewName, 'Alumno', 'Alumnos', 'fas fa-user-friends');
        $this->addSearchFields($viewName, ['nombre', 'telefono', 'dni', 'fechanacimiento', 'email']);
        $this->addOrderBy($viewName, ['nombre'], 'Nombre');
        $this->addOrderBy($viewName, ['fechanacimiento'], 'Fecha');
        $this->addFilterPeriod($viewName, 'date', 'period', 'fechanacimiento');
    }
    protected function createCuota($viewName = 'ListCuota')
    {
        $this->addView($viewName, 'Cuota', 'Cuotas', 'fas fa-receipt');
        $this->addSearchFields($viewName, ['idcuota', 'idalumno', 'fecha', 'fechapago', 'importe', 'formapago', 'tipo']);
        $this->addOrderBy($viewName, ['idcuota'], 'Cuota');
        $this->addOrderBy($viewName, ['fecha'], 'Fecha');
        $this->addFilterPeriod($viewName, 'date', 'period', 'fecha');
    }
    protected function createMatricula($viewName = 'ListMatricula')
    {
        $this->addView($viewName, 'Matricula', 'Matricula', 'fa-solid fa-user-plus');
        $this->addSearchFields($viewName, ['idmatricula', 'idalumno', 'fechadealta', 'fechadebaja', 'cuota']);
    }
    protected function createEvaluacion($viewName = 'ListEvaluacion')
    {
        $this->addView($viewName, 'Evaluacion', 'Evaluacion', 'fa-solid fa-user-plus');
    }


    protected function loadData($viewName, $view)
    {
        switch ($viewName) {
            case 'ListAlumno':
            case 'ListCuota':
            case 'ListMatricula':
            case 'ListEvaluacion':
                $view->loadData();
                break;
        }
    }
}
