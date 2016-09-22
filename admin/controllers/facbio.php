<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_sdprojects
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * Sdprojects Controller
 *
 * @package     Joomla.Administrator
 * @subpackage  com_sdprojects
 * @since       0.0.9
 */
class FacbiosControllerFacbio extends JControllerForm
{
	protected $view_list = 'facbios';
	function save(){
		$jinput = JFactory::getApplication()->input;
		$file = $jinput->files->get('jform');
		$data = $jinput->get( 'jform', null, 'post', 'array' );
        
        return parent::save();
    }
}