<?php
	/**
	 * B2DB Table, vcs_integration -> VCSIntegrationFilesTable
	 *
	 * @author Philip Kent <kentphilip@gmail.com>
	 * @version 3.2
	 * @license http://www.opensource.org/licenses/mozilla1.1.php Mozilla Public License 1.1 (MPL 1.1)
	 * @package thebuggenie
	 * @subpackage vcs_integration
	 */

	/**
	 * B2DB Table, vcs_integration -> VCSIntegrationFilesTable
	 *
	 * @package thebuggenie
	 * @subpackage vcs_integration
	 */
	class TBGVCSIntegrationFilesTable extends TBGB2DBTable 
	{

		const B2DB_TABLE_VERSION = 1;
		const B2DBNAME = 'vcsintegration_files';
		const ID = 'vcsintegration_files.id';
		const SCOPE = 'vcsintegration_files.scope';
		const COMMIT_ID = 'vcsintegration_files.commit_id';
		const FILE_NAME = 'vcsintegration_files.file_name';
		const ACTION = 'vcsintegration_files.action';
					
		public function __construct()
		{
			parent::__construct(self::B2DBNAME, self::ID);
			parent::_addText(self::FILE_NAME, false);
			parent::_addVarchar(self::ACTION, 1);
			parent::_addForeignKeyColumn(self::SCOPE, TBGScopesTable::getTable(),  TBGScopesTable::ID);
			parent::_addForeignKeyColumn(self::COMMIT_ID, TBGVCSIntegrationCommitsTable::getTable(),  TBGVCSIntegrationCommitsTable::ID);
		}
		
		/**
		 * Return an instance of this table
		 *
		 * @return TBGVCSIntegrationFilesTable
		 */
		public static function getTable()
		{
			return B2DB::getTable('TBGVCSIntegrationFilesTable');
		}

	}

