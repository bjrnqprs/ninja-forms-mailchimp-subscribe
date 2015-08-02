<?php
/**
 * @var $api_key
 * @var $list_id
 * @var $email
 * @var $first_name
 * @var $last_name
 */
?>
<tr>
	<th scope="row"><label for="settings-api_key"><?php _e('Api key', 'ninja-forms-mailchimp-subscribe'); ?></label>
	</th>
	<td>
		<input name="settings[api_key]" type="text" id="settings-api_key" value="<?php echo $api_key; ?>">
		<span class="howto"><?php _e('Your api key can be found/created on your <a href="https://login.mailchimp.com/?referrer=%2Faccount%2Fapi%2F" target="_blank">API keys page at Mailchimp</a>.', 'ninja-forms-mailchimp-subscribe') ?></span>
	</td>
</tr>

<tr>
	<th scope="row"><label for="settings-list_id"><?php _e('List ID', 'ninja-forms-mailchimp-subscribe'); ?></label>
	</th>
	<td>
		<input name="settings[list_id]" type="text" id="settings-list_id" value="<?php echo $list_id; ?>">
		<span class="howto"><?php _e('Your list ID can be found when going to the \'Settings\' page of the Mailchimp list you want to collect subscribers.', 'ninja-forms-mailchimp-subscribe') ?></span>
	</td>
</tr>

<tr>
	<th scope="row"><label for="settings-email"><?php _e('E-mail', 'ninja-forms-mailchimp-subscribe'); ?></label>
	</th>
	<td>
		<input name="settings[email]" type="text" id="settings-email" value="<?php echo $email; ?>" placeholder="Specify the e-mail field of the form" class="nf-tokenize" data-token-limit="1" data-key="email" data-type="email">
	</td>
</tr>

<tr>
	<th scope="row"><label for="settings-first_name"><?php _e('First name', 'ninja-forms-mailchimp-subscribe'); ?></label>
	</th>
	<td>
		<input name="settings[first_name]" type="text" id="settings-first_name" value="<?php echo $first_name; ?>" placeholder="Optional: Specify the first-name field of the form" class="nf-tokenize" data-token-limit="1" data-key="first_name" data-type="all">
	</td>
</tr>

<tr>
	<th scope="row"><label for="settings-last_name"><?php _e('Last name', 'ninja-forms-mailchimp-subscribe'); ?></label>
	</th>
	<td>
		<input name="settings[last_name]" type="text" id="settings-last_name" value="<?php echo $last_name; ?>" placeholder="Optional: Specify the last-name field of the form" class="nf-tokenize" data-token-limit="1" data-key="last_name" data-type="all">
	</td>
</tr>