<?php
 
namespace Quadrios\Providers;

use IO\Extensions\Functions\Partial;
use IO\Helper\TemplateContainer;
use IO\Helper\ResourceContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;
 
/*use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;*/
 
class QuadriosServiceProvider extends ServiceProvider{
 
	/**
	 * Register the service provider.
	 */
	public function register(){}
	
	
	
	/**
	 * Boot a template for the header that will be displayed in the template plugin instead of the original header.
	 */
	public function boot(Twig $twig, Dispatcher $eventDispatcher)    {
		
		$eventDispatcher->listen('IO.Resources.Import', function (ResourceContainer $container){
            //$container->addStyleTemplate('Quadrios::content.QuadriosCSS');		
			
            //$container->addScriptTemplate('Quadrios::content.QuadriosScript');
        }, self::PRIORITY);
		
		
        /*$eventDispatcher->listen('IO.init.templates', function(Partial $partial){
			
           $partial->set('header', 'Quadrios::PageDesign.Partials.QuadriosHeader');
		   $partial->set('footer', 'Quadrios::PageDesign.Partials.QuadriosFooter');
		   $partial->set('page-design', 'Quadrios::PageDesign.QuadriosPageDesign');
        }, 0);*/
		
		
		
        return false;
    }	
	
}