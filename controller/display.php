<?php
/**
 *
 * @package primetime
 * @copyright (c) 2013 Daniel A. (blitze)
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace primetime\pages\controller;

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

// This is required for all controllers
use Symfony\Component\HttpFoundation\Response;

/**
*
*/
class display
{
	public function __construct(\phpbb\request\request_interface $request, \phpbb\user $user, \phpbb\template\template $template, \phpbb\db\driver\driver $db, \phpbb\controller\helper $helper)
	{
		$this->request = $request;
		$this->user = $user;
		$this->template = $template;
		$this->db = $db;
		$this->helper = $helper;
	}

	/**
	* Foo controller to be accessed with the URL is /example/{test}
	* (where {test} is the placeholder for a value)
	*
	* @param string $test String taken from the URL
	* @return Symfony\Component\HttpFoundation\Response A Symfony Response object
	*/
	public function handle($page = '')
	{
		if (empty($page))
		{
			trigger_error('foo() method called, but no value was given for $test. A 404, "Not Found", response was sent.');
		}

		$this->template->assign_var('MESSAGE', 'Hi, ' . $this->user->data['username'] . '! The bar() method was called from the main example controller.');

		return $this->helper->render('page_body.html', 'Example extension bar() method');
	}
}
