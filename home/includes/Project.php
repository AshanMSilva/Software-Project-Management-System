<?php
class Project{
	protected $client_id;
	protected $project_id;
	protected $employee_list;
	protected $title;
	protected $pro_status;
	protected $progress;
	protected $category;
	protected $keywords;
	protected $documents;
	protected $duedate;

	public function __construct($client_id, $zipfile, $title, $dueDate, $category){
		$this->client_id=$client_id;
		$this->documents=$zipfile;
		$this->title=$title;
		$this->dueDate=$dueDate;
		$this->category=$category;
		$this->employee_list=[];
	}
	public function get_id(){
		return $this->project_id;
	}
	public function add_employee($emp){
		$this->employee_list = array_push($employee_list, $emp);
	}
	public function add_files($zipFile){
		$this->documents = $File;
	}
	public function set_progress($progress){
		$this->progress = $progress;
	}
	public function set_pro_status($pro_status){
		$this->pro_status = $pro_status;
	}
	public function set_duedate($duedate){
		$this->duedate = $duedate;
	}
	public function get_employee_list(){
		return $this->employee_list;
	}
}

?>