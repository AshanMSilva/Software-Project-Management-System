<?php
interface Observer{
	public function notify_user($user, $msg);	
}
?>

<?php
interface Observable{
	Public function send_notification($user, $msg);
	Public function receive_notification($msg);
}