<?php
class Page extends SiteTree {

	public function EnvDetails() {

		$phpExtensionList = new ArrayList();
		$extensions = get_loaded_extensions();
		natcasesort($extensions);
		foreach($extensions as $extension) {
			$phpExtensionList->push(new ArrayData([
				"Value" => $extension
			]));
		}

		$list = new ArrayList();
		foreach(array(
			'Hostname' => $_SERVER['HTTP_HOST'],
			'Web server' => $_SERVER['SERVER_SOFTWARE'],
			'PHP' => phpversion(),
			'OS' => php_uname(),
			'PHP extensions' => $phpExtensionList,
		) as $k => $v) {
			$list->push(new ArrayData(array(
				'Name' => $k,
				'Value' => $v
			)));
		}
		return $list;
	}
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
