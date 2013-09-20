<?php
class Registermodel extends CI_Model {

	var $fbsid='';
	var $funame   ='';
	var $fuemail   ='';
	var $fumobile   ='';
	var $fuaddress   ='';
	var $fucountry   ='';
	var $fugender   ='';
	var $fubusdate   ='';
	var $furegdate   ='';
	var $fuseatids ='';
	var $fuseats   ='';
	var $fuprice   ='';
	var $fustatus   ='';
	var $fuid   ='';
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    

 function registered_entry()
    {
	$userid=rand(10000,60000);
	$this->load->helper('date');
    $this->funame   = $_POST['usernamey'];
	$this->fuemail   = $_POST['emaily'];
	$this->fumobile   = $_POST['mobile'];
	$this->fuaddress   = $_POST['address'];
	$this->fucountry   = $_POST['country'];
	$this->fugender   = $_POST['gender'];
	$this->fbsid   = $_POST['busid'];
	$this->fubusdate   = $_POST['daty'];
	$this->furegdate   = mdate("%Y-%m-%d", time());
	$this->fuseatids   = $_POST['seatno'];
	$this->fuseats   .= $_POST['quantity'];
	$this->fuprice   = $_POST['price'];
    $this->fustatus   = 0;
	$this->fuid   = $_POST['userid'];
   $this->db->insert('fbususertb', $this);
   
    }
	
 function get_entry()
    {
    $sql = "SELECT * FROM fbususertb WHERE fuemail = ? AND fuid = ?"; 
    $query = $this->db->query($sql, array($_POST['emaily'],$_POST['userid']));
    return $query->result();
    }

}
?>