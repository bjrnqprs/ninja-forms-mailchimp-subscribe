<?php

require_once plugin_dir_path( __FILE__ ).'/vendor/autoload.php';

use \DrewM\MailChimp\MailChimp;

/**
 * Class for our Mailchimp subscription notification type.
 *
 * @copyright   Copyright (c) 2015, Björn Kuipers
 * @copyright   Copyright (c) 2015, Dan Jones
 * @license     MIT
 */
class NF_DJ_Notification_MailchimpSubscribe extends NF_Notification_Base_Type {
	function __construct() {
		$this->name = __('Mailchimp Subscribe', 'ninja-forms-mailchimp-subscribe');
	}

	/**
	 * Output our edit screen
	 *
	 * @access public
	 * @since  0.0.1
	 * @return void
	 */
	public function edit_screen($id = '') {
		$form_id = ($id) ? Ninja_Forms()->notification($id)->form_id : '' ;

		$api_key = $list_id = $email = $first_name = $last_name  = '';

		if ($id) {
			$api_key    = Ninja_Forms()->notification($id)->get_setting('api_key');
			$list_id    = Ninja_Forms()->notification($id)->get_setting('list_id');
			$email      = Ninja_Forms()->notification($id)->get_setting('email');
			$first_name = Ninja_Forms()->notification($id)->get_setting('first_name');
			$last_name  = Ninja_Forms()->notification($id)->get_setting('last_name');
		}

		require plugin_dir_path(__FILE__) . 'settings.tpl.php';

		//do_action( 'nf_dj_pushbullet_notification_after_settings', $id );
	}

	/**
	 * Process our Push notification
	 *
	 * @access public
	 * @since  0.0.1
	 * @return void
	 */
	public function process($id) {
		$form_id = ($id) ? Ninja_Forms()->notification($id)->form_id : '';

		$api_key = Ninja_Forms()->notification($id)->get_setting('api_key');
		$list_id = Ninja_Forms()->notification($id)->get_setting('list_id');
		$email   = $this->process_setting($id, 'email');

		if (empty($api_key) || empty($list_id) || empty($email)) {
			//file_put_contents('/tmp/notifications-pushbullet-class.log', "Empty access token\n", FILE_APPEND);
			return;
		}

		$first_name = $this->process_setting($id, 'first_name');
		$last_name  = $this->process_setting($id, 'last_name');

		$merge_fields = array();
		if($first_name) {
			$merge_fields['FNAME'] = $first_name;
		}

		if($last_name) {
			$merge_fields['LNAME'] = $last_name;
		}

		$mc = new MailChimp($api_key);

		$added = $mc->post("lists/{$list_id}/members", array(
			'email_address' => $email,
			'status'        => 'subscribed',
			'merge_fields'  => $merge_fields
		));

		if($added) {
			//
		} else {
			// Could be SSL-verify of cURL that fails...
		}
	}

	/**
	 * Explode our settings by ` and extract each value.
	 * Check to see if the setting is a field; if it is, assign the value.
	 * Run shortcodes and return the result.
	 *
	 * @access public
	 * @since  0.0.1
	 * @return array $setting
	 */
	public function process_setting($id, $setting, $html = 1) {
		return implode(' ', parent::process_setting($id, $setting, $html));
	}
}

return new NF_DJ_Notification_MailchimpSubscribe();