<?php
class Cfirst extends CI_Controller {
	function index()
	{	
	$this->load->view('menu');
        $this->load->view('speedticket');
		//$this->load->view('map');
	}
	function searchfromto()
	{	
    $this->load->helper('date');
    $this->load->view('menu');    
    $this->load->model('Searchmodel','',TRUE);
        $data['query'] = $this->Searchmodel->search_fromto();
		$data['busdate'] = $_POST['element_1_3']."-".$_POST['element_1_1']."-".$_POST['element_1_2'];	
        $this->load->view('selectdate', $data);
				
	$map = array(
               'from' => $_POST['bfrom'],
               'to' => $_POST['bto']
          );
$this->load->view('map-param', $map);
	}
	function booknow()
	{	
	$this->load->view('menu');
	$this->load->helper('date');
        $this->load->model('Booknowmodel','',TRUE);
        $data['query'] = $this->Booknowmodel->get_seats();
		$this->load->model('Searchmodel','',TRUE);
        $data['busdeatal'] = $this->Searchmodel->get_abusdeatail();
        $this->load->view('vseatselect', $data);
		//$this->load->view('vsecond', $data);
	}
	function signup()
	{	
	$this->load->view('menu');
	$this->load->helper('date');
    $this->load->view('vsignup');
	}
	function registered()
	{	
	$this->load->helper('date');
        $this->load->model('Registermodel','',TRUE);
        $this->Registermodel->registered_entry();
		$data['invoice'] = $this->Registermodel->get_entry();
		$this->load->model('Searchmodel','',TRUE);
        $data['busdeatal'] = $this->Searchmodel->final_get_abusdeatail();
        
        $this->load->view('vthird', $data);
	}
}
?>