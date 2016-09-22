<?php

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Get instance of controller
$controller = JControllerLegacy::getInstance('Facbios');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();

