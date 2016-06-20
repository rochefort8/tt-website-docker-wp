<?php
function my_mwform_before_send_admin_mail( $Mail_admin, $Data ) {
	 openlog("mw-wp0", LOG_PID | LOG_PERROR, LOG_LOCAL0);
	 syslog(LOG_WARNING, $Data->get_raw('title'));
	 closelog();
}

add_action( 'mwform_before_send_admin_mail_mw-wp-form-795', 'my_mwform_before_send_admin_mail', 10, 2 );



?>



