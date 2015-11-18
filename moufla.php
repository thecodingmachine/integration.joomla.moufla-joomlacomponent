<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by Moufla
$controller = JControllerLegacy::getInstance('Moufla');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('display'));

// Redirect if set by the controller
$controller->redirect();