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
        // Assign data to the view
/*      $this->msg = 'This is mouflaaaa !';
        $this->id = $input->get("id");
        $this->desc = $input->get("desc");*/
        // Display the view
        //parent::display($tpl);

        // Let's get the response of Mouf through the Joomla's input
        $input = JFactory::getApplication()->input;
        $htmlResponse = $input->getRaw("response");
        $htmlResponse->sendContent();
    }
}