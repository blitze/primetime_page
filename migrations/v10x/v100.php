<?php/** * * @package primetime * @copyright (c) 2013 Daniel A. (blitze) * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 * */namespace primetime\pages\migrations\v10x;/** * @ignore */if (!defined('IN_PHPBB')){	exit;}/** * Initial data changes needed for Extension installation */class v100 extends \phpbb\db\migration\migration{	/**	 * @inheritdoc	 */	static public function depends_on()	{		return array('\primetime\primetime\migrations\v10x\v100');	}	/**	 * @inheritdoc	 */	public function update_schema()	{		return array(			'add_tables'	=> array(				$this->table_prefix . 'pages'	=> array(					'COLUMNS'        => array(						'page_id'			=> array('UINT', NULL, 'auto_increment'),						'page_slug'			=> array('VCHAR:255', ''),						'topic_id'			=> array('UINT', 0),						'parent_id'			=> array('UINT', 0),						'left_id'			=> array('UINT', 0),						'right_id'			=> array('UINT', 0),						'depth'				=> array('UINT', 0),					),					'PRIMARY_KEY'	=> 'page_id',					'KEYS'			=> array(						'page_id'			=> array('INDEX', 'page_id'),					),				),			),		);	}	public function revert_schema()	{		return array(			'drop_tables'	=> array(				$this->table_prefix . 'pages',			),		);	}	/**	 * @inheritdoc	 */	public function update_data()	{		return array(			array('custom', array(array($this, 'create_forum'))),			array('config.add', array('primetime_pages_forum_id', 0)),			array('module.add', array('acp', 'ACP_PRIMETIME_EXTENSIONS', array(					'module_basename'	=> '\primetime\pages\acp\pages_module',				),			)),		);	}	/**	 * @inheritdoc	 */	public function revert_data()	{		return array(		);	}		public function create_forum()	{		global $phpbb_container, $config;		$forum = $phpbb_container->get('primetime.forum.manager');		$forum_data = array(			'forum_name'	=> 'Primetime Pages',		);        $errors = $forum->create($forum_data);		if (!sizeof($errors))		{			$this->config->set('primetime_pages_forum_id', $forum_data['forum_id']);		}	}}