<?php
/**
 * @file
 * From https://github.com/pantheon-systems/quicksilver-examples/blob/master/slack_notification/slack_notification.php.
 */

// Important constants :).
$pantheon_yellow = '#EFD01B';
// Default values for parameters.
$defaults = array(
  // Update this channel value.
  'slack_channel' => '#umnpha',
  'slack_username' => 'Pantheon-Git',
  'always_show_text' => TRUE,
);
// Load our hidden credentials.
// See the README.md for instructions on storing secrets.
$secrets = _get_secrets(array('slack_url'), $defaults);
// Customize the message based on the workflow type.  Note that slack_notification.php
// must appear in your pantheon.yml for each workflow type you wish to send notifications on.
switch ($_POST['wf_type']) {
  case 'deploy':
    // Find out what tag we are on and get the annotation.
    $deploy_tag = `git describe --tags`;
    $deploy_message = $_POST['deploy_message'];
    // Prepare the slack payload as per:
    // https://api.slack.com/incoming-webhooks
    $text = 'Deploy to the ' . $_ENV['PANTHEON_ENVIRONMENT'];
    $text .= ' environment of ' . $_ENV['PANTHEON_SITE_NAME'] . ' by ' . $_POST['user_email'] . ' complete!';
    $text .= ' <https://dashboard.pantheon.io/sites/' . PANTHEON_SITE . '#' . PANTHEON_ENVIRONMENT . '/deploys|View Dashboard>';
    $text .= "\n\n*DEPLOY MESSAGE*: $deploy_message";
    break;

  case 'sync_code':
    // Get the committer, hash, and message for the most recent commit.
    $committer = `git log -1 --pretty=%cn`;
    $email = `git log -1 --pretty=%ce`;
    $message = `git log -1 --pretty=%B`;
    $hash = `git log -1 --pretty=%h`;
    // Prepare the slack payload as per:
    // https://api.slack.com/incoming-webhooks
    $text = '[' . $_ENV['PANTHEON_SITE_NAME'] . '/' . $_ENV['PANTHEON_ENVIRONMENT'] . ']';
    $text .= ' New commit pushed by ' . rtrim($committer) . "\n";
    $text .= rtrim($hash) . ': ' . rtrim($message);
    break;

  default:
    $text = $_POST['qs_description'];
    break;
}

$attachment = array(
  'fallback' => $text,
  'pretext' => 'Deploying :rocket:',
  // Can either be one of 'good', 'warning', 'danger', or any hex color code.
  'color' => $pantheon_yellow,
);

_slack_notification($secrets['slack_url'], $secrets['slack_channel'], $secrets['slack_username'], $text, $attachment, $secrets['always_show_text']);

/**
 * Get secrets from secrets file.
 *
 * @param array $required_keys
 *   List of keys in secrets file that must exist.
 * @param array $defaults
 *   An array with our defaults.
 *
 * @return mixed
 *   Array or error message.
 */
function _get_secrets($required_keys, $defaults) {
  $secrets_file = $_SERVER['HOME'] . '/files/private/secrets.json';
  if (!file_exists($secrets_file)) {
    die('No secrets file found. Aborting!');
  }
  $secrets_contents = file_get_contents($secrets_file);
  $secrets = json_decode($secrets_contents, 1);
  if ($secrets == FALSE) {
    die('Could not parse json in secrets file. Aborting!');
  }
  $secrets += $defaults;
  $missing = array_diff($required_keys, array_keys($secrets));
  if (!empty($missing)) {
    die('Missing required keys in json secrets file: ' . implode(',', $missing) . '. Aborting!');
  }
  return $secrets;
}

/**
 * Send a notification to slack.
 *
 * @param string $slack_url
 *   The URL for our slack integration.
 * @param string $channel
 *   Our slack channel.
 * @param string $username
 *   Slack username.
 * @param string $text
 *   Our slack message.
 * @param string $attachment
 *   Anything we want to attach.
 * @param bool $always_show_text
 *   Whether to show any text.
 */
function _slack_notification($slack_url, $channel, $username, $text, $attachment, $always_show_text = FALSE) {
  $attachment['fallback'] = $text;
  $post = array(
    'username' => $username,
    'channel' => $channel,
    'icon_emoji' => ':lightning_cloud:',
    'attachments' => array($attachment)
  );
  if ($always_show_text) {
    $post['text'] = $text;
  }
  $payload = json_encode($post);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $slack_url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 5);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
  // Watch for messages with `terminus workflows watch --site=SITENAME`.
  print ("\n==== Posting to Slack ====\n");
  $result = curl_exec($ch);
  print ("RESULT: $result");
  print ("\n===== Post Complete! =====\n");
  curl_close($ch);
}
