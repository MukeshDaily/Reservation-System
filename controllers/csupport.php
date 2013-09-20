<?php
class Csupport extends CI_Controller {
	function index()
	{	
	$this->load->view('menu');  
	$this->load->view('ticketstatus');
	}
	function get_mticket()
	{	
	$this->load->view('menu');  
        $this->load->model('Supportmodel','',TRUE);
        $data['invoice'] = $this->Supportmodel->support_user_pdf();
		$data['busdetails'] = $this->Supportmodel->support_bus_pdf();
		$this->load->view('pdfticket', $data);
	}
	function cancel()
	{	
	$this->load->view('menu');  
	$this->load->view('cancelticket');
	}
	function cancel_process()
	{	
	$this->load->view('menu');  
        $this->load->model('Supportmodel','',TRUE);
		$this->Supportmodel->cancel_bus_ticket();
	$this->load->view('cancelled');
	
	}
}
?>