<?php

namespace Drupal\my_module\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class MyModuleForm extends ConfigFormBase {
	public function getFormId() {
		return 'my_module_form';
	}
	public function getEditableConfigNames() {
	}
	public function buildForm(array $form, FormStateInterface $form_state) {
		$config = \Drupal::config('my_module.settings');
		$form['my_module_text'] = array(
			'#type' => 'textfield',
			'#title' => $this->t('Your Name:'),
			'#default_value' => $config->get('name'),
			'#size' => 10,
		);
		return parent::buildForm($form,$form_state);
	}
	public function submitForm(array &$form, FormStateInterface $form_state) {
		\Drupal::configFactory()->getEditable('my_module.settings')->set('name', $form_state->getValue('my_module_text'))->save();
		/*$config = Drupal::getContainer()->get('config.factory')->getEditable('my_module.settings');
		$config->set('text', $form_state->getValue('my_module_text'))->save();
		/*$config = \Drupal::config('my_module.settings');
    $config->set('text', $form_state->getValue('my_module_text'))
          ->save();*/
	}
}