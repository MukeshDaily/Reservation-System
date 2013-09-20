<?php
class Cdisplay extends CI_Controller {
	function index()
	{	
        $this->load->model('Bookmodel','',TRUE);

        $data['query'] = $this->Bookmodel->get_last_ten_entries();

        $this->load->view('vdisplay', $data);
	}
	function insertdb()
	{
	$this->load->model('Bookmodel','',TRUE);		
    $this->Bookmodel->insert_entry();
	}
	function updatedb()
	{
	$this->load->model('Bookmodel','',TRUE);		
    $this->Bookmodel->update_entry();
	}
	function deletedb()
	{
	$this->load->model('Bookmodel','',TRUE);		
    $this->Bookmodel->delete_entry();
	}
	function getdb()
	{	
        $this->load->model('Bookmodel','',TRUE);
        $data['query'] = $this->Bookmodel->custom_entry();
        $this->load->view('vdisplay', $data);
	}
}
?>