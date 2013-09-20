<?php
class Searchmodel extends CI_Model {
    var $fbsid='';
	var $fbus='';
	var $ffrom='';
	var $fto='';
	var $fdep='';
	var $farr='';
	var $ftype='';
	var $fseats='';
	var $ffare='';
	var $ffacilites='';
	var $frating='';
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    	function search_fromto()
    {   
	$dat = $_POST['element_1_3']."-".$_POST['element_1_1']."-".$_POST['element_1_2'];	
$sql ="SELECT detailtb.* FROM detailtb INNER JOIN seatplan ON detailtb.fbsid = seatplan.busid  WHERE detailtb.ffrom=? AND detailtb.fto=? AND seatplan.busdate=?";
		
$query = $this->db->query($sql,array($_POST['bfrom'],$_POST['bto'],$dat));
	//below query will select without checking date
	//$sql = "SELECT * FROM detailtb WHERE ffrom = ? AND fto = ?"; 
    //$query = $this->db->query($sql, array($_POST['bfrom'],$_POST['bto']));
    return $query->result();
    }
		function get_seats()
    {   
	$sql = "SELECT * FROM seatplan WHERE busid = ? AND busdate = ?"; 
    $query = $this->db->query($sql, array($_POST['bid'],$_POST['date']));
    return $query->result();
    }
	function get_abusdeatail()
    {   
	$sql = "SELECT * FROM detailtb WHERE fbsid = ?"; 
    $query = $this->db->query($sql, array($_POST['bid']));
    return $query->result();
    }
	function final_get_abusdeatail()
    {   
	$sql = "SELECT * FROM detailtb WHERE fbsid = ?"; 
    $query = $this->db->query($sql, array($_POST['busid']));
    return $query->result();
    }
    function get_last_ten_entries()
    {
        $query = $this->db->get('detailtb', 10);
        return $query->result();
    }

    function insert_entry()
    {
    $this->fbsid   = $_POST['busid'];
	$this->fbus   = $_POST['bname'];
	$this->ffrom   = $_POST['bfrom'];
	$this->fto   = $_POST['bto'];
	$this->fdep   = $_POST['bdep'];
	$this->farr   = $_POST['barr'];
	$this->ftype   = $_POST['btype'];
	$this->fseats   = $_POST['bseats'];
	$this->ffare   = $_POST['bfare'];
	$this->ffacilites   = $_POST['bfacilites'];
	$this->frating   = $_POST['brating'];

        $this->db->insert('detailtb', $this);
    }

    function update_entry()
    {
        $this->fbsid   = $_POST['busid'];
	$this->fbus   = $_POST['bname'];
	$this->ffrom   = $_POST['bfrom'];
	$this->fto   = $_POST['bto'];
	$this->fdep   = $_POST['bdep'];
	$this->farr   = $_POST['barr'];
	$this->ftype   = $_POST['btype'];
	$this->fseats   = $_POST['bseats'];
	$this->ffare   = $_POST['bfare'];
	$this->ffacilities   = $_POST['bfacilites'];
	$this->frating   = $_POST['brating'];
    
        $this->db->update('detailtb', $this, array('fbsid' => $_POST['busid']));
    }

	function custom_entry()
    {   
	$sql = "SELECT * FROM detailtb WHERE fbsid = ?"; 
    $query = $this->db->query($sql, array($_POST['busid']));
    return $query->result();
    }
	

}
?>