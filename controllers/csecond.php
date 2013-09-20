<?php
class Csecond extends CI_Controller {
	function index()
	{	
	
	}
	function confirm()
	{	
        $this->load->model('Confirmmodel','',TRUE);
        $data['invoice'] = $this->Confirmmodel->user_pnr();
		$data['busdetails'] = $this->Confirmmodel->seat_pnr();
        //$this->load->view('pnrpdf', $data);
		$this->load->view('pdfticket', $data);
	}
}
?>