<?php
if(!defined('ABSPATH')) die('Restricted Access');

class deactivation{

	static function jssupportticket_deactivate(){
		wp_clear_scheduled_hook('jssupporticket_updateticketstatus');
		jssupportticket::$_db->get_var("UPDATE `".jssupportticket::$_db->prefix."posts` SET post_status = 'draft' WHERE post_name = 'js-support-ticket-controlpanel'");
	}

}

?>