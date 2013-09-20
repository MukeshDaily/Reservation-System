<?php
class Cfadmin extends CI_Controller {
	function index()
	{	
        $this->load->view('vfadmin/checklogin');
		$this->load->model('mfadmin/Bookmodel','',TRUE);

        $data['query'] = $this->Bookmodel->get_all();

        $this->load->view('vfadmin/vdisplay', $data);
	}
	function login()
	{	
        $this->load->view('vfadmin/login');
	}
	function processlogin()
	{	
	
        $this->load->model('mfadmin/Loginmodel','',TRUE);
        $this->Loginmodel->check_login();
        //$this->load->view('vfadmin/loginprocess', $data);
	}
	function logout()
	{	
        $this->load->view('vfadmin/logout');
	}
	function insertdb()
	{
	$this->load->view('vfadmin/checklogin');
	$this->load->model('mfadmin/Bookmodel','',TRUE);		
    $this->Bookmodel->insert_entry();
	}
	function updatedb()
	{
	$this->load->view('vfadmin/checklogin');
	$this->load->model('mfadmin/Bookmodel','',TRUE);		
    $this->Bookmodel->update_entry();
	}
	function deletedb()
	{
	$this->load->view('vfadmin/checklogin');
	$this->load->model('mfadmin/Bookmodel','',TRUE);		
    $this->Bookmodel->delete_entry();
	}
	function getdb()
	{	
	$this->load->view('vfadmin/checklogin');
        $this->load->model('mfadmin/Bookmodel','',TRUE);
        $data['query'] = $this->Bookmodel->custom_entry();
        $this->load->view('vfadmin/vdisplay', $data);
	}
	
	
	function editbus()
	{ 
	$this->load->view('vfadmin/checklogin');
	    $this->load->model('mfadmin/Bookmodel','',TRUE);
        $data['query'] = $this->Bookmodel->get_by_getmethod();
        $this->load->view('vfadmin/veditor', $data);
	}
	function dropbus()
	{
	$this->load->view('vfadmin/checklogin');
	$this->load->model('mfadmin/Bookmodel','',TRUE);		
    $this->Bookmodel->delete_by_getmethod();
	}
	function seeseatsdates()
	{	
	$this->load->view('vfadmin/checklogin');
        $this->load->model('mfadmin/Bookmodel','',TRUE);
        $data['query'] = $this->Bookmodel->get_seatsdates();
        $this->load->view('vfadmin/vseatsdates', $data);
	}
	
	function editseats()
	{ 
	$this->load->view('vfadmin/checklogin');
	    $this->load->model('mfadmin/Seatsdatesmodel','',TRUE);
        $data['query'] = $this->Seatsdatesmodel->get_by_getmethod();
        $this->load->view('vfadmin/vseateditor', $data);
	}
	function dropdate()
	{
	$this->load->view('vfadmin/checklogin');
	$this->load->model('mfadmin/Seatsdatesmodel','',TRUE);		
    $this->Seatsdatesmodel->delete_by_getmethod();
	}
	
	function updateseats()
	{
	$this->load->view('vfadmin/checklogin');
	$this->load->model('mfadmin/Seatsdatesmodel','',TRUE);		
    $this->Seatsdatesmodel->update_entry();
	}
	function insertdateandseats()
	{
	$this->load->view('vfadmin/checklogin');
	$this->load->model('mfadmin/Seatsdatesmodel','',TRUE);		
    $this->Seatsdatesmodel->insert_entry();
	}
	function user_list()
	{
	$this->load->view('vfadmin/checklogin');
	 $this->load->model('mfadmin/Usermodel','',TRUE);
      $data['query'] = $this->Usermodel->get_all();
      $this->load->view('vfadmin/vusers', $data);
	}
	function user_edit()
	{
	$this->load->view('vfadmin/checklogin');
	 $this->load->model('mfadmin/Usermodel','',TRUE);
      $data['query'] = $this->Usermodel->get_by_getmethod();
      $this->load->view('vfadmin/vusereditor', $data);
	}
	function user_delete()
	{
	$this->load->view('vfadmin/checklogin');
	 $this->load->model('mfadmin/Usermodel','',TRUE);
      $data['query'] = $this->Usermodel->delete_by_getmethod();
	}
	function user_update()
	{
	$this->load->view('vfadmin/checklogin');
	$this->load->model('mfadmin/Usermodel','',TRUE);		
    $this->Usermodel->update_entry();
	}
	function user_oneget()
	{
	$this->load->view('vfadmin/checklogin');
	 $this->load->model('mfadmin/Usermodel','',TRUE);
      $data['query'] = $this->Usermodel->custom_entry();
      $this->load->view('vfadmin/vusers', $data);
	}
	function user_insert()
	{
	$this->load->view('vfadmin/checklogin');
	 $this->load->model('mfadmin/Usermodel','',TRUE);
     $this->Usermodel->insert_entry();
	}
	function generate_ticket()
	{
	$this->load->view('vfadmin/checklogin');
	 $this->load->model('mfadmin/Usermodel','',TRUE);
     //$data['user'] = $this->Usermodel->insert_pnr();
	 $this->Usermodel->insert_pnr();
	 
     $this->load->model('mfadmin/Seatsdatesmodel','',TRUE);	 
     $data['query'] = $this->Seatsdatesmodel->insert_pnr();
//     $data['query'] = $this->Seatsdatesmodel->get_by_getmethod();
  //   $this->load->view('vfadmin/vseatpnrenter', $data);	
	}
	function sms_ticket()
	{
	$this->load->view('vfadmin/checklogin');
	  $this->load->model('mfadmin/Usermodel','',TRUE);
      $data['user'] = $this->Usermodel->get_by_getmethod();
	 
      $this->load->model('mfadmin/Bookmodel','',TRUE);
        $data['query'] = $this->Bookmodel->get_by_getmethod();
        $this->load->view('vfadmin/vsms', $data);
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