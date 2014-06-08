<?php
class Page extends SiteTree {

	public function Title() {
		return "Version 4";
	}

}
class Page_Controller extends ContentController {

	private static $allowed_actions = array ();

	public function init() {
		parent::init();
		Requirements::themedCSS('reset');
		Requirements::themedCSS('layout'); 
		Requirements::themedCSS('typography'); 
		Requirements::themedCSS('form'); 
	}
}
