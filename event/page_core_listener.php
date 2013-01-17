<?php

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class phpbb_ext_primetime_page_event_page_core_listener implements EventSubscriberInterface
{
	public function __construct()
	{
		global $phpbb_container;

		// Let's get our table constants out of the way
		$table_prefix = $phpbb_container->getParameter('core.table_prefix');
		define('PAGES_TABLE', $table_prefix . 'pages');
		define('PAGES_VERSION_TABLE', $table_prefix . 'page_versions');
	}

	static public function getSubscribedEvents()
	{
		return array();
	}
}
