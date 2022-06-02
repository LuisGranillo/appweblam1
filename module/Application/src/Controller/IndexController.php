<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    public function SaludarAction()
    {
        $saludo="Hola";
        if(isset($_GET['nombre'])) $saludo .=" " .$_GET['nombre'];
        $arreglo=['saludo'=> $saludo,];
        return new ViewModel($arreglo);

    }
    public function trianguloAction(){
        $titulo="triangulo";
        $cadhtml='<img src="http://localhost/lun30/pmvc2.php?ancho=' .$_GET['ancho'] .'&alto=' .$_GET['alto'] .'">';
        $arreglo=[
            'titulo'=> $titulo,
            'triangulo'=>$cadhtml
        ];
        return new ViewModel($arreglo);

    }
    public function triangulojqueryAction() {return new ViewModel();}
}
