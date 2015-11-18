<?php

use Symfony\Component\HttpFoundation\Response;

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * HTML View class
 */
class MouflaViewMoufla extends JViewLegacy
{
    // Overwriting JView display method
    function display($tpl = null) {
        // Let's get the response of Mouf through the Joomla's input
        $input = JFactory::getApplication()->input;
        $htmlResponse = $input->getRaw("response");


        $emitter = new \Zend\Diactoros\Response\SapiEmitter();
        $emitter->emit($htmlResponse);

        // If the request was a Json Request, you should kill the app
        if (!is_null($input->get("mouflaJson"))
            && $input->get("mouflaJson") == "true") {
            $app = JFactory::getApplication();
            $app->close();
        }
    }
}