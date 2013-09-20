<?php
class Onlinebusreservation extends CI_Controller {
	function index()
	{	
        $this->load->model('Bookmodel','',TRUE);

        $data['query'] = $this->Bookmodel->get_last_ten_entries();

        $this->load->view('vonlinebusreservation', $data);
	}
	function getdb()
	{	
        $this->load->model('Bookmodel','',TRUE);
        $data['query'] = $this->Bookmodel->custom_entry();
        $this->load->view('vonlinebusreservation', $data);
	}
}
?>