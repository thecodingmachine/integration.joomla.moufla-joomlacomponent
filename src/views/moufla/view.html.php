<?php
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
    function display($tpl = null)
    {
        var_dump("--Je suis dans le display de la view--");
        $input = JFactory::getApplication()->input;

        // Assign data to the view
        $this->msg = 'This is mouflaaaa !';
        $this->id = $input->get("id");
        $this->desc = $input->get("desc");

        // Display the view
        //parent::display($tpl);

       echo "le test de la mort qui tue, c'est la ?";
    }
}