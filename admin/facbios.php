<?php

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


// Create the controller
$controller = JControllerLegacy::getInstance('Facbios');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute(JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();