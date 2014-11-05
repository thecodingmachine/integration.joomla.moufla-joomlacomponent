<?php

use Symfony\Component\HttpFoundation\Response;

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * HTML View class for the HelloWorld Component
 */
class MouflaViewMoufla extends JView
{
    // Overwriting JView display method
    function display($tpl = null) {
        // Let's get the response of Mouf through the Joomla's input
        $input = JFactory::getApplication()->input;
        $htmlResponse = $input->getRaw("response");
        $htmlResponse->sendContent();

        // If the request was a Json Request, you should kill the app
        if (!is_null($input->get("mouflaJson"))
            && $input->get("mouflaJson") == "true") {
            $app = JFactory::getApplication();
            $app->close();
        }
    }
}