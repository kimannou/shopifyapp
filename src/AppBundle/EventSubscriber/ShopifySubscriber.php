<?php
namespace AppBundle\EventSubscriber;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage;

class ShopifySubscriber implements EventSubscriberInterface
{
    public function onKernelRequest()
    {
		// Get Symfony to interface with this existing session
		$session = new Session(new PhpBridgeSessionStorage());

		if(!isset($_SESSION['shop'])) {
			die('Access denied, no Shop data available');
		}
		// symfony will now interface with the existing PHP session
		$session->set('shop', $_SESSION['shop']);
    }
    public static function getSubscribedEvents()
    {
        return array(
            'kernel.request' => 'onKernelRequest'
        );
    }
}
