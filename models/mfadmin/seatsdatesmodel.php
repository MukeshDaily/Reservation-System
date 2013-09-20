<?php
class Seatsdatesmodel extends CI_Model {
    var $busdate ='';
	var $busid ='';
	var $s1 ='';
	var $s2 ='';
	var $s3 ='';
	var $s4 ='';
	var $s5 ='';
	var $s6 ='';
	var $s7 ='';
	var $s8 ='';
	var $s9 ='';
	var $s10 ='';
	var $s11 ='';
	var $s12 ='';
	var $s13 ='';
	var $s14 ='';
	var $s15 ='';
	var $s16 ='';
	var $s17 ='';
	var $s18 ='';
	var $s19 ='';
	var $s20 ='';
	var $s21 ='';
	var $s22 ='';
	var $s23 ='';
	var $s24 ='';
	var $s25 ='';
	var $s26 ='';
	var $s27 ='';
	var $s28 ='';
	var $s29 ='';
	var $s30 ='';
	var $s31 ='';
	var $s32 ='';
	var $s33 ='';
	var $s34 ='';
	var $s35 ='';
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('seatplan', 10);
        return $query->result();
    }
    function insert_entry()
    {
    $this->busdate = $_POST['busdate'];
	$this->busid   = $_POST['busid'];
	$this->s1   = $_POST['s1'];
	$this->s2   = $_POST['s2'];
	$this->s3   = $_POST['s3'];
	$this->s4   = $_POST['s4'];
	$this->s5   = $_POST['s5'];
	$this->s6   = $_POST['s6'];
	$this->s7   = $_POST['s7'];
	$this->s8   = $_POST['s8'];
	$this->s9   = $_POST['s9'];
	$this->s10   = $_POST['s10'];
	$this->s11   = $_POST['s11'];
	$this->s12   = $_POST['s12'];
	$this->s13   = $_POST['s13'];
	$this->s14   = $_POST['s14'];
	$this->s15   = $_POST['s15'];
	$this->s16   = $_POST['s16'];
	$this->s17   = $_POST['s17'];
	$this->s18   = $_POST['s18'];
	$this->s19   = $_POST['s19'];
	$this->s20   = $_POST['s20'];
	$this->s21   = $_POST['s21'];
	$this->s22   = $_POST['s22'];
	$this->s23   = $_POST['s23'];
	$this->s24   = $_POST['s24'];
	$this->s25   = $_POST['s25'];
	$this->s26   = $_POST['s26'];
	$this->s27   = $_POST['s27'];
	$this->s28   = $_POST['s28'];	
	$this->s29   = $_POST['s29'];
	$this->s30   = $_POST['s30'];
	$this->s31   = $_POST['s31'];
	$this->s32   = $_POST['s32'];
	$this->s33   = $_POST['s33'];
	$this->s34   = $_POST['s34'];
	$this->s35   = $_POST['s35'];
	
        $this->db->insert('seatplan', $this);
    }

    function update_entry()
    {
    $this->busdate = $_POST['busdate'];
	$this->busid   = $_POST['busid'];
	$this->s1   = $_POST['s1'];
	$this->s2   = $_POST['s2'];
	$this->s3   = $_POST['s3'];
	$this->s4   = $_POST['s4'];
	$this->s5   = $_POST['s5'];
	$this->s6   = $_POST['s6'];
	$this->s7   = $_POST['s7'];
	$this->s8   = $_POST['s8'];
	$this->s9   = $_POST['s9'];
	$this->s10   = $_POST['s10'];
	$this->s11   = $_POST['s11'];
	$this->s12   = $_POST['s12'];
	$this->s13   = $_POST['s13'];
	$this->s14   = $_POST['s14'];
	$this->s15   = $_POST['s15'];
	$this->s16   = $_POST['s16'];
	$this->s17   = $_POST['s17'];
	$this->s18   = $_POST['s18'];
	$this->s19   = $_POST['s19'];
	$this->s20   = $_POST['s20'];
	$this->s21   = $_POST['s21'];
	$this->s22   = $_POST['s22'];
	$this->s23   = $_POST['s23'];
	$this->s24   = $_POST['s24'];
	$this->s25   = $_POST['s25'];
	$this->s26   = $_POST['s26'];
	$this->s27   = $_POST['s27'];
	$this->s28   = $_POST['s28'];
	$this->s29   = $_POST['s29'];
	$this->s30   = $_POST['s30'];
	$this->s31   = $_POST['s31'];
	$this->s32   = $_POST['s32'];
	$this->s33   = $_POST['s33'];
	$this->s34   = $_POST['s34'];
	$this->s35   = $_POST['s35'];
	
$this->db->update('seatplan', $this, array('busdate' => $_POST['busdate'],'busid' => $_POST['busid']));
    }
	function get_seatsdates()
    {   
	$sql = "SELECT * FROM seatplan WHERE busid = ?"; 
    $query = $this->db->query($sql, array($_GET['busid']));
    return $query->result();
    }
	function get_by_getmethod()
    {   
	$sql = "SELECT * FROM seatplan WHERE busid = ? AND busdate= ?"; 
    $query = $this->db->query($sql, array($_GET['busid'], $_GET['busdate']));
    return $query->result();
    }
	function delete_by_getmethod()
    {   
	$sql = "DELETE FROM seatplan WHERE busid = ? AND busdate= ?"; 
    $this->db->query($sql, array($_GET['busid'],$_GET['busdate']));
    }
	function insert_pnr()
    {
	$b=explode(',',$_GET['seatids']);
	foreach ($b as $seat):
	 $c[$seat]=$_GET['status'];
	endforeach;

$this->db->update('seatplan', $c, array('busid' => $_GET['busid'],'busdate' => $_GET['busdate']));
	
	}
	
}
?>