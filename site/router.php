<?php
function facbiosBuildRoute(&$query)
{
       $segments = array();
       if (isset($query['view']))
       {
                $segments[] = $query['view'];
                unset($query['view']);
       }
       if (isset($query['id']))
       {
                $segments[] = $query['id'];
                unset($query['id']);
       };
       return $segments;
}

function facbiosParseRoute($segments)
{
       $vars = array();
       switch($segments[0])
       {
               case 'default':
                       $vars['view'] = 'default';
                       break;
               case 'details':
                       $vars['view'] = 'details';
                       $id = explode(':', $segments[1]);
                       $vars['id'] = (int) $id[0];
                       break;
       }
       return $vars;
}
?>