<?php
//session_start();
class Employee extends User{
	private $accNo;
	private $NumOfProjects;
	private $Rating;
	//private $system;

	public function __construct($firstname, $lastname, $email, $contact_no/*, $accNo, $NumOfProjects, $Rating, $project_types, $sys*/){
		parent :: __construct($firstname, $lastname, $email, $contact_no);
		//$this->accNo = $accNo;
		//$this->NumOfProjects = $NumOfProjects;
		//$this->Rating = $Rating;
		//$this->projectTypes = $project_types;
		//$this->system = $sys;
	}
	public function set_email($email,$employee_id,$connection){
		$this->email = $email;
		$query = "UPDATE employee SET email='{$email}' WHERE employee_id='{$employee_id}'";
		mysqli_query($connection, $query);
	}
	public function set_password($password,$employee_id,$connection){
		$query = "UPDATE employee SET password='{$password}' WHERE employee_id='{$employee_id}'";
		mysqli_query($connection, $query);
	}
	public function get_password($email, $connection){
		$queryemployee = "SELECT password FROM employee where email = '{$email}'";
			$resultemployee = mysqli_query($connection,$queryemployee);
			if(mysqli_num_rows($resultemployee)==1){
				$recordemployee = mysqli_fetch_assoc($resultemployee);
				$password = $recordemployee['password'];
				$_SESSION['password']= $password;
				}
	}
	public function set_firstname($firstname,$employee_id,$connection){
		$this->firstname = $firstname;
		$query = "UPDATE employee SET firstname='{$firstname}' WHERE employee_id='{$employee_id}'";
		mysqli_query($connection, $query);
		//echo $this->first_name;
	}
	public function set_lastname($lastname,$employee_id,$connection){
		$this->lastname = $lastname;
		$query = "UPDATE employee SET lastname='{$lastname}' WHERE employee_id='{$employee_id}'";
		mysqli_query($connection, $query);
	}
	public function set_contact_no($contact_no,$employee_id,$connection){
		$this->contact_no = $contact_no;
		$query = "UPDATE employee SET contact_no='{$contact_no}' WHERE employee_id='{$employee_id}'";
		mysqli_query($connection, $query);
	}
	public function accept_project($client){
		$msg = $this->firstname . " " . $this->lastname . " accepted your project";
		$this->sys->notify_user($client, $msg);
	}
	public function reject_project($client){
		$msg = $this->firstname . " " . $this->lastname . " rejected your project";
		$this->sys->notify_user($client, $msg);
	}
	public function calculate_rating($value){
		$this->Rating = (($this->Rating * $this->NumOfProjects)+$value)/(++$this->NumOfProjects);
	}
}