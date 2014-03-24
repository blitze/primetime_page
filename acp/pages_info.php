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
* @package module_install
*/
class pages_info
{
	function module()
	{
		return array(
			'filename'	=> '\primetime\pages\acp\pages_module',
			'title'		=> 'ACP_PAGE_MANAGEMENT',
			'parent'	=> 'ACP_MOD_MANAGEMENT',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'menu'		=> array('title' => 'PAGES', 'auth' => '', 'cat' => array('ACP_PAGES')),
			),
		);
	}
}

