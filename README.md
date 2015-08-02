Mailchimp subscription action for Ninja Forms
=============================================
Save e-mail addresses (with first and last name) from your forms to Mailchimp.

Installation
------------
1. Click `Download ZIP` on the right, and unzip the file.
2. Strip `-master` from the end of the directory's name.
3. Upload or move the directory to `wp-contents/plugins/`.
4. Log in to Wordpress, go to `Plugins` and activate the plugin.
5. Add a notification to the intended form, and select `Mailchimp subscription` as its type.

Known issues
------------
- Once the action of this plugin is saved, the configured field names show up as field_[id]. But this does not interfere with the functionality.

Thanks to
---------
- [Dan Jones](https://github.com/goodevilgenius) for providing an example to create this plugin ([ninja-pushbullet-notify](https://github.com/goodevilgenius/ninja-pushbullet-notify)).
- [Drew McLellan](https://github.com/drewm) for providing the [Mailchimp API wrapper](https://github.com/drewm/mailchimp-api).

[![Flattr this](https://button.flattr.com/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=bjrn&url=https%3A%2F%2Fgithub.com%2Fbjrnqprs%2Fninja-forms-mailchimp-subscribe)