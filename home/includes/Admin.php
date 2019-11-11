<?php
//session_start();
class Admin extends User{
	private $accNo;
	//private $system;

	public function __construct($firstname, $lastname, $email, $contact_no/*, $accNo, $NumOfProjects, $Rating, $project_types, $sys*/){
		parent :: __construct($firstname, $lastname, $email, $contact_no);
		//$this->accNo = $accNo;
		//$this->NumOfProjects = $NumOfProjects;
		//$this->Rating = $Rating;
		//$this->projectTypes = $project_types;
		//$this->system = $sys;
	}
	public function set_email($email,$admin_id,$connection){
		$this->email = $email;
		$query = "UPDATE admin SET email='{$email}' WHERE admin_id='{$admin_id}'";
		mysqli_query($connection, $query);
	}
	public function set_password($password,$admin_id,$connection){
		$query = "UPDATE admin SET password='{$password}' WHERE admin_id='{$admin_id}'";
		mysqli_query($connection, $query);
	}
	public function get_password($email, $connection){
		$queryadmin = "SELECT password FROM admin where email = '{$email}'";
			$resultadmin = mysqli_query($connection,$queryadmin);
			if(mysqli_num_rows($resultadmin)==1){
				$recordadmin = mysqli_fetch_assoc($resultadmin);
				$password = $recordadmin['password'];
				$_SESSION['password']= $password;
				}
	}
	public function set_firstname($firstname,$admin_id,$connection){
		$this->firstname = $firstname;
		$query = "UPDATE admin SET firstname='{$firstname}' WHERE admin_id='{$admin_id}'";
		mysqli_query($connection, $query);
		//echo $this->first_name;
	}
	public function set_lastname($lastname,$admin_id,$connection){
		$this->lastname = $lastname;
		$query = "UPDATE admin SET lastname='{$lastname}' WHERE admin_id='{$admin_id}'";
		mysqli_query($connection, $query);
	}
	public function set_contact_no($contact_no,$eadminid,$connection){
		$this->contact_no = $contact_no;
		$query = "UPDATE admin SET contact_no='{$contact_no}' WHERE admin_id='{$admin_id}'";
		mysqli_query($connection, $query);
	}
	public function select_employee($project, $emp){
		$project->add_employee($emp);
	}
	
}