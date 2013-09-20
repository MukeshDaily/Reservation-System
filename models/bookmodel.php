<?php
class Bookmodel extends CI_Model {
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
    function delete_entry()
    {   
	$sql = "DELETE FROM detailtb WHERE title = ?"; 
    $this->db->query($sql, array($_POST['title']));
    }
	function custom_entry()
    {   
	$sql = "SELECT * FROM detailtb WHERE fbsid = ?"; 
    $query = $this->db->query($sql, array($_POST['busid']));
    return $query->result();
    }
}
?>