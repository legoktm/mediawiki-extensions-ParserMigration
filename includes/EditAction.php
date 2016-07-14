<?php

namespace MediaWiki\ParserMigration;

class EditAction extends \FormlessAction {
	public function getName() {
		return 'parsermigration-edit';
	}

	protected function getDescription() {
		return wfMessage( 'parsermigration-edit-subtitle' );
	}

	public function onView() {
		$article = new \Article( $this->getTitle() );
		$page = new MigrationEditPage( $this->getContext(), $this->getTitle() );
		$page->edit();
		return null;
	}
}