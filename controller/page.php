<?php

// This is required for all controllers
use Symfony\Component\HttpFoundation\Response;

class phpbb_ext_primetime_page_controller_page
{
	/**
	* Constructor
	* NOTE: The parameters of this method must match in order and type with
	* the dependencies defined in the services.yml file for this service.
	*
	* @param phpbb_request $request Request object
	* @param phpbb_user $user User object
	* @param phpbb_template $template Template object
	* @param dbal $db phpbb_db_driver object
	* @param phpbb_controller_helper $helper Controller helper object
	*/
	public function __construct(phpbb_request $request, phpbb_user $user, phpbb_template $template, phpbb_db_driver $db, phpbb_controller_helper $helper)
	{
		$this->request = $request;
		$this->user = $user;
		$this->template = $template;
		$this->db = $db;
		$this->helper = $helper;
	}

	/**
	* Default controller method to be called if no other method is given.
	* In our case, it is accessed when the URL is /example
	*
	* @return Symfony\Component\HttpFoundation\Response A Symfony Response object
	*/
	public function handle()
	{
		$this->display();
	}

	/**
	* Foo controller to be accessed with the URL is /example/{test}
	* (where {test} is the placeholder for a value)
	*
	* @param string $test String taken from the URL
	* @return Symfony\Component\HttpFoundation\Response A Symfony Response object
	*/
	public function display($page = '')
	{
		if (empty($page))
		{
			trigger_error('foo() method called, but no value was given for $test. A 404, "Not Found", response was sent.');
		}

		$this->template->assign_var('MESSAGE', 'Hi, ' . $this->user->data['username'] . '! The bar() method was called from the main example controller.');

		return $this->helper->render('page_body.html', 'Example extension bar() method');
	}
}
