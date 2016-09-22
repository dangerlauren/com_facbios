<?php


// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class FacbiosModelDefault extends JModelList
{

	protected function getListQuery()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$this->setState('list.limit', 15);
		$query = $db->getQuery(true);
 
		// Create the base select statement.
		// $query->select($db->quoteName(array('id', 'title', 'year', 'students', 'solution', 'reqs', 'semester', 'team_photo', 'graphic1', 'graphic2', 'webcast', 'problem', 'name')))
  //               ->from($db->quoteName('#__projects'))
            $query->select(array('a.*'))
            ->select($db->quoteName('b.id', 'coid'))
            ->select($db->quoteName('b.name', 'coname'))
            ->select($db->quoteName('b.url', 'courl'))
				->from($db->quoteName('#__projects', 'a'))
				->join('LEFT', $db->quoteName('#__sponsors', 'b') .' ON (' . $db->quoteName('a.company') . ' = ' . $db->quoteName('b.id') . ')')
				->where($db->quoteName('a.company') . ' = ' . ('b.id'))
                ->order('year DESC');
 		$db->setQuery($query);
		$db->execute();
		$sdps = $db->loadObjectList();
		return $query;
	}

	protected function populateState($ordering = null, $direction = null) {
	  $app = JFactory::getApplication();

	  $limit = $app->getUserStateFromRequest('global.list.limit', 'limit', $app->getCfg('list_limit'), 'uint');
	  $this->setState('list.limit', $limit);
	  // As you can see if no limit is set, it gets it from default value of config, 
	  // but you can replace $app->getCfg('list_limit') by any integer you want to 
	  // override default limit value

	  $limitstart = $app->input->get('limitstart', 0, 'uint');
	  $this->setState('list.start', $limitstart);

	  $limitstart = $app->input->get('limitstart', 0, 'uint');
	  $this->setState('list.start', $limitstart); 
	}
}