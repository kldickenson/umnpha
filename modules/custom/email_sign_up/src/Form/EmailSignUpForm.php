<?php

namespace Drupal\email_sign_up\Form;

/**
 * @file
 * Contains \Drupal\email_sign_up\Form\EmailSignUpForm.
 */

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides an icon to search on the site.
 *
 * @Block(
 *   id = "email_sign_up_form",
 *   admin_label = @Translation("Email Sign Up"),
 * )
 */
class EmailSignUpForm extends ConfigFormBase {

  /**
   * Constructs a new EmailSignUpForm.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The factory for configuration objects.
   */
  public function __construct(ConfigFactoryInterface $config_factory) {
    parent::__construct($config_factory);
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'email_sign_up_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['email_sign_up.setup'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Load existing contact info.
    $email_sign_up = \Drupal::config('email_sign_up.setup');

    $form['link'] = array(
      '#type' => 'textfield',
      '#title' => t('Link URL'),
      '#default_value' => !empty($email_sign_up->get('link')) ? $email_sign_up->get('link') : '/',
    );

    $form['text'] = array(
      '#type' => 'textfield',
      '#title' => t('Link Text'),
      '#default_value' => !empty($email_sign_up->get('text')) ? $email_sign_up->get('text') : 'Email Sign Up',
    );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $user_input = $form_state->getValue(array('link'));
    if ((strpos($user_input, '/') !== 0) && (strpos($user_input, '#') !== 0) && (strpos($user_input, '?') !== 0)) {
      $form_state->setErrorByName('link', $this->t("The URL must begin with a '/'."));
    }
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('email_sign_up.setup');
    $config
      ->set(
        'link', $form_state->getValue(
        array(
          'link',
        )
      )
      )
      ->set(
        'text', $form_state->getValue(
        array(
          'text',
        )
      )
      );

    $config->save();
    parent::submitForm($form, $form_state);
  }

}
