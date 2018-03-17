<?php

namespace Drupal\my_module\Controller;

class MyModuleController {
	public function test() {
		$config = \Drupal::config('my_module.settings');
		return array(
			'#markup' => ('<h1>Hello, ' . $config->get('name') . '!</h1>'),
		);
	}
}