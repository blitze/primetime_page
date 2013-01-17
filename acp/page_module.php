<?php
/**
*
* @package acp
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/
class phpbb_ext_primetime_page_acp_page_module
{
	var $u_action;
	var $new_config = array();

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $request;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		global $cache;

	
		$submit = $request->is_set_post('submit');

		$this->tpl_name = 'acp_page';

		if ($submit)
		{
			
		}

		switch ($mode)
		{
			case "edit":
			case "add":
			break;

			case "enable":
			case "disable":
			break;

			default:

			//echo PAGES_TABLE;	

			break;
		}
	}
}
