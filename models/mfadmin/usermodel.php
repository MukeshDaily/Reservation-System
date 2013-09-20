<?php
class Usermodel extends CI_Model {
    var $funame ='';
    var $fuemail ='';
	var $fumobile ='';
	var $fuaddress ='';
	var $fucountry ='';
	var $fugender ='';
	var $fbsid ='';
	var $fubusdate ='';
	var $furegdate ='';
	var $fuseats ='';
	var $fuseatids ='';
	var $fuprice ='';
	var $fustatus ='';
	var $fuid='';
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('fbususertb', 10);
        return $query->result();
    }
	function get_all()
    {   
	$sql = "SELECT * FROM fbususertb"; 
    $query = $this->db->query($sql);
    return $query->result();
    }
    function insert_entry()
    {
    $this->funame = $_POST['name'];
	$this->fuemail = $_POST['email'];
	$this->fumobile = $_POST['mobile'];
	$this->fuaddress = $_POST['address'];
	$this->fucountry = $_POST['country'];
	$this->fugender = $_POST['gender'];
	
	$this->fbsid = $_POST['busid'];
	$this->fubusdate = $_POST['busdate'];
	$this->furegdate = $_POST['regdate'];
	$this->fuseats = $_POST['seats'];
	$this->fuseatids = $_POST['seatids'];
	$this->fuprice = $_POST['price'];
	$this->fustatus = $_POST['status'];
	$this->fuid = $_POST['userid'];
        $this->db->insert('fbususertb', $this);
    }

    function update_entry()
    {
        
    $this->funame = $_POST['name'];
	$this->fuemail = $_POST['email'];
	$this->fumobile = $_POST['mobile'];
	$this->fuaddress = $_POST['address'];
	$this->fucountry = $_POST['country'];
	$this->fugender = $_POST['gender'];
	
	$this->fbsid = $_POST['busid'];
	$this->fubusdate = $_POST['busdate'];
	$this->furegdate = $_POST['regdate'];
	$this->fuseats = $_POST['seats'];
	$this->fuseatids = $_POST['seatids'];
	$this->fuprice = $_POST['price'];
	$this->fustatus = $_POST['status'];
    $this->fuid = $_POST['userid'];
   $this->db->update('fbususertb', $this, array('fuemail' => $_POST['email'],'fuid' => $_POST['userid']));
    }
    function delete_entry()
    {   
	$sql = "DELETE FROM fbususertb WHERE fbsid = ?"; 
    $this->db->query($sql, array($_POST['busid']));
    }
	function custom_entry()
    {   
	$sql = "SELECT * FROM fbususertb WHERE fuemail = ?"; 
    $query = $this->db->query($sql, array($_POST['email']));
    return $query->result();
    }
	function get_seatsdates()
    {   
	$sql = "SELECT * FROM seatplan WHERE busid = ?"; 
    $query = $this->db->query($sql, array($_GET['busid']));
    return $query->result();
    }
	function get_by_getmethod()
    {   
	$sql = "SELECT * FROM fbususertb WHERE fuemail = ? AND fuid = ?"; 
    $query = $this->db->query($sql, array($_GET['email'],$_GET['userid']));
    return $query->result();
    }
	function delete_by_getmethod()
    {   
	$sql = "DELETE FROM fbususertb WHERE fuemail = ? AND fuid = ?"; 
    $this->db->query($sql, array($_GET['email'],$_GET['userid']));
    }
	function insert_pnr()
    {   
$this->db->update('fbususertb', array('fustatus' => $_GET['status']), array('fuemail' => $_GET['email'],'fuid' => $_GET['userid']));
		
	//$sql = "SELECT * FROM fbususertb WHERE fuemail = ?"; 
    //$query = $this->db->query($sql, array($_GET['email']));
    //return $query->result();
	
	}
}
?>