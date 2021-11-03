<?php
/**
 * @package Plugin Full Trust for Joomla! 3.8
 * @version 1.0.0
 * @author HikeOrders
 * @copyright (C) 2019 - HikeOrders.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html; see LICENSE.txt
 * @website https://hikeorders.com/trust/home
 **/

// Check to ensure this file is included in Joomla!
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

class plgSystemFullTrust extends JPlugin
{
	
	
    function __construct( &$subject, $params )
    {

        parent::__construct($subject, $params);
		
    }

    function onBeforeCompileHead()
    {
        $document = JFactory::getDocument();

        // apply styles only to front-end
        if (substr(JURI::base(), -15) != "/administrator/")
        {
            $widget_id = $this->params->get('widget_id');
            $widget_id = trim($widget_id);


            if(empty($widget_id) == false ) {
                $url = "https://fulltrustcdn.hikeorders.com/widget/hko-full-trust.min.js?widgetId=".$widget_id;
                $document->addScript($url, "text/javascript", false, true);
            }

        }
    }
}
