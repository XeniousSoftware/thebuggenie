<?php
	/**
	 * B2DB Table, vcs_integration -> VCSIntegrationIssueLinksTable
	 *
	 * @author Philip Kent <kentphilip@gmail.com>
	 * @version 3.2
	 * @license http://www.opensource.org/licenses/mozilla1.1.php Mozilla Public License 1.1 (MPL 1.1)
	 * @package thebuggenie
	 * @subpackage vcs_integration
	 */

	/**
	 * B2DB Table, vcs_integration -> VCSIntegrationIssueLinksTable
	 *
	 * @package thebuggenie
	 * @subpackage vcs_integration
	 */
	class TBGVCSIntegrationIssueLinksTable extends TBGB2DBTable 
	{

		const B2DB_TABLE_VERSION = 1;
		const B2DBNAME = 'vcsintegration_issuelinks';
		const ID = 'vcsintegration_issuelinks.id';
		const SCOPE = 'vcsintegration_issuelinks.scope';
		const ISSUE_NO = 'vcsintegration_issuelinks.issue_no';
		const COMMIT_ID = 'vcsintegration_issuelinks.commit_id';
					
		public function __construct()
		{
			parent::__construct(self::B2DBNAME, self::ID);
			parent::_addForeignKeyColumn(self::SCOPE, TBGScopesTable::getTable(), TBGScopesTable::ID);
			parent::_addForeignKeyColumn(self::ISSUE_NO, TBGIssuesTable::getTable(), TBGIssuesTable::ID);
			parent::_addForeignKeyColumn(self::COMMIT_ID, TBGVCSIntegrationCommitsTable::getTable(), TBGVCSIntegrationCommitsTable::ID);
		}
		
		/**
		 * Return an instance of this table
		 *
		 * @return TBGVCSIntegrationIssueLinksTable
		 */
		public static function getTable()
		{
			return B2DB::getTable('TBGVCSIntegrationIssueLinksTable');
		}

	}