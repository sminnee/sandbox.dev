<?php
class Page extends SiteTree {
}

class Page_Controller extends ContentController {

	public function init() {
		parent::init();
		Requirements::themedCSS('reset');
		Requirements::themedCSS('layout');
		Requirements::themedCSS('typography');
		Requirements::themedCSS('form');
	}
}
