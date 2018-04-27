<?php
 
namespace Quadrios\Providers;
 
use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;
 
class QuadriosServiceProvider extends ServiceProvider
{
 
	/**
	 * Register the service provider.
	 */
	public function register()
	{
 
	}
	
	
	
	/**
	 * Boot a template for the header that will be displayed in the template plugin instead of the original header.
	 */
	public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.init.templates', function(Partial $partial)
        {
           $partial->set('header', 'Quadrios::content.QuadriosHeader');
        }, 0);
        return false;
    }
	
	
}