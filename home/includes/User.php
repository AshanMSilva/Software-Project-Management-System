<?php
include 'includes/Observer_Observable.php';
include_once('includes/connection.php');


class User implements Observable{
	protected $user_id;
	protected $firstname;
	protected $lastname;
	protected $email;
	protected $contact_no;
	protected $notifications;
	protected $system;
	protected $acc_no;

	public function __construct($firstname, $lastname, $email, $contact_no/*, $sys*/){
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->email = $email;
		$this->contact_no = $contact_no;
		//$this->system = $sys;
	}

	public function set_id($id){
		$this->user_id = $id;
	}
	public function get_id(){
		return $this->user_id;
	}
	public function set_acc_no($acc_no){
		$this->acc_no = $acc_no;
	}
	public function get_acc_no(){
		return $this->acc_no;
	}
	public function get_email(){
		return $this->email;
	}
	public function get_firstname(){
		return $this->firstname;
		//echo $this->first_name;
	}
	public function get_lastname(){
		return $this->lastname;
	}
	public function get_contact_no(){
		return $this->contact_no;
	}
	public function send_notification($user,$msg){
		$this->sys->notify_user($user, $msg);
	}
	public function receive_notification($msg){
		$this->notification_center->push($msg);
	}
}
?>