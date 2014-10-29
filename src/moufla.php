<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import joomla controller library
jimport('joomla.application.component.controller');

var_dump("--Je suis dans moufla.php du composant--");

// Get an instance of the controller prefixed by Moufla
$controller = JController::getInstance('Moufla');

// If you want to do something in the controller
//http://localhost/moufla_2.5/index.php?option=com_moufla&task=insert
//This would try to call a function insert() of our controller.

//$controller->doSomething();

// Perform the Request task
$input = JFactory::getApplication()->input;
//$controller->execute($input->getCmd('doSomething', 'doSomething'));
//$controller->execute($input->getCmd('task', 'task'));

// Redirect if set by the controller
$controller->redirect();