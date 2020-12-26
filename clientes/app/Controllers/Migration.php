<?php namespace App\Controllers;
 
class Migration extends BaseController{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('migration');
	}
	
	public function index()
	{
			
		if ($this->migration->current() === FALSE)
		{
				show_error($this->migration->error_string());
		}
		
		echo "Done";
	}
}