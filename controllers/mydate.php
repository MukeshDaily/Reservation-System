<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mydate extends CI_Controller {
	public function index()
	{
	$this->load->library('calendar');
	$this->load->helper('date');
	
   $datestring = "%Y-%m-%d";
   $time = time();
   echo mdate($datestring, $time)."<br>";
echo mdate("%Y-%m-%d", time())."<br>";
$datestring = "Year: %Y Month: %m Day: %d - %h:%i %a";
$time = time();
echo mdate($datestring, $time)."<br>";

   $format = 'DATE_RFC822';
$time = time();

echo standard_date($format, $time)."<br>"; 

$this->load->library('calendar');
echo $this->calendar->generate()."<br>";

echo $this->calendar->generate(2006, 6)."<br>";

$data = array(
               3  => 'http://01fes.com/news/article/2006/03/',
               7  => 'http://01fes.com/news/article/2006/07/',
               13 => 'http://01fes.com/news/article/2006/13/',
               26 => 'http://01fes.com/news/article/2006/26/'
             );

echo $this->calendar->generate(2006, 6, $data)."<br>";

$prefs = array (
               'show_next_prev'  => TRUE,
               'next_prev_url'   => 'http://example.com/index.php/calendar/show/'
             );

$this->load->library('calendar', $prefs);

echo $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4))."<br>";






$prefs['template'] = '

   {table_open}<table border="0" cellpadding="0" cellspacing="0">{/table_open}

   {heading_row_start}<tr>{/heading_row_start}

   {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
   {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
   {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

   {heading_row_end}</tr>{/heading_row_end}

   {week_row_start}<tr>{/week_row_start}
   {week_day_cell}<td>{week_day}</td>{/week_day_cell}
   {week_row_end}</tr>{/week_row_end}

   {cal_row_start}<tr>{/cal_row_start}
   {cal_cell_start}<td>{/cal_cell_start}

   {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
   {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

   {cal_cell_no_content}{day}{/cal_cell_no_content}
   {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

   {cal_cell_blank}&nbsp;{/cal_cell_blank}

   {cal_cell_end}</td>{/cal_cell_end}
   {cal_row_end}</tr>{/cal_row_end}

   {table_close}</table>{/table_close}
';

$this->load->library('calendar', $prefs);

echo $this->calendar->generate();



	}
}