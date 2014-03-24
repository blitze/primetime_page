<?php
/**
 *
 * @package primetime
 * @copyright (c) 2013 Daniel A. (blitze)
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace primetime\pages\acp;

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*
*/
class pages_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $phpbb_container;
		
		$user		= $phpbb_container->get('user');
		$template	= $phpbb_container->get('template');
		
		// Set up the page
		$this->tpl_name = 'acp_pages';
		$this->page_title = 'ACP_PRIMETIME_DASHBOARD';
		$template->assign_vars([
			'L_TITLE'			=> $this->page_title,
			'L_TITLE_EXPLAIN'	=> '',
		]);
	}
}
