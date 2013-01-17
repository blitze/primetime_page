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
* @package module_install
*/
class phpbb_ext_primetime_page_acp_page_info
{
	function module()
	{
		return array(
			//'filename'	=> 'acp_pages',
			'title'		=> 'ACP_PAGE_MANAGEMENT',
			'parent'	=> 'ACP_MOD_MANAGEMENT',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'pages'		=> array('title' => 'PAGES', 'auth' => '', 'cat' => array('ACP_PAGES')),
			),
		);
	}
}
