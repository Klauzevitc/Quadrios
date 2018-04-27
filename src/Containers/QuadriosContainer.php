<?php
 
namespace Quadrios\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class QuadriosContainer
{
    public function call(Twig $twig):string
    {
        //return $twig->render('Quadrios::content.Quadrios');
    }
}