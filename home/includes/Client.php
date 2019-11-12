<?php
//session_start();
class Client extends User{
	private $CreditCardNo;
	private $ActiveProjects;

	public function __construct($firstname, $lastname, $email, $contact_no){
		parent :: __construct($firstname, $lastname, $email, $contact_no);		
		//$this->CreditCardNo = $CCN;
	}
	public function set_email($email,$client_id,$connection){
		$this->email = $email;
		$query = "UPDATE client SET email='{$email}' WHERE client_id='{$client_id}'";
		mysqli_query($connection, $query);
	}
	public function get_password($email, $connection){
		$queryclient = "SELECT password FROM client where email = '{$email}'";
			$resultclient = mysqli_query($connection,$queryclient);
			if(mysqli_num_rows($resultclient)==1){
				$recordclient = mysqli_fetch_assoc($resultclient);
				$password = $recordclient['password'];
				$_SESSION['password']= $password;
			}
	}
	public function set_password($password,$client_id,$connection){
		$query = "UPDATE client SET password='{$password}' WHERE client_id='{$client_id}'";
		mysqli_query($connection, $query);
	}
	public function set_firstname($firstname,$client_id,$connection){
		$this->firstname = $firstname;
		$query = "UPDATE client SET firstname='{$firstname}' WHERE client_id='{$client_id}'";
		mysqli_query($connection, $query);
		//echo $this->first_name;
	}
	public function set_lastname($lastname,$client_id,$connection){
		$this->lastname = $lastname;
		$query = "UPDATE client SET lastname='{$lastname}' WHERE client_id='{$client_id}'";
		mysqli_query($connection, $query);
	}
	public function set_contact_no($contact_no,$client_id,$connection){
		$this->contact_no = $contact_no;
		$query = "UPDATE client SET contact_no='{$contact_no}' WHERE client_id='{$client_id}'";
		mysqli_query($connection, $query);
	}
	
	public function add_project($projectName, $projectType, $template, $dueDate, $emp){
		$msg = "New " . $projectType . " project request from: " . $this->firstname . " " . $this->lastname;
		$this->send_notification($emp, $msg);
	}
	public function submit_project($project){
		$project->set_state("Working");
	}
	public function withdraw_project($project){
		$project->set_state("Finished");
	}
	public function retrieve_project($project){
		$project->set_state("Finished");
	}
	public function rate_employee($emp, $value){
		$emp->calculate_rating($value);
	}
}
?>