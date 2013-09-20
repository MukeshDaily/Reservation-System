<?php
foreach ($busdetails as $row):
 $cnt=0;
  foreach ($row as $item):
   echo $item; 
   $b[$cnt]=$item;
   $cnt++;
  endforeach;
endforeach;
foreach ($invoice as $row):
 $cnt=0;
  foreach ($row as $item):
   echo $item; 
   $u[$cnt]=$item;
   $cnt++;
  endforeach;
endforeach;


$mypdf = PDF_new();
PDF_open_file($mypdf, "");

PDF_set_info($mypdf, "Creator", "Online Bus Service");
PDF_set_info($mypdf, "Author", "Mukesh Kumar");
PDF_set_info($mypdf, "Title", "Speedticket");
PDF_set_info($mypdf, "Subject", "Ticket");
PDF_set_info($mypdf, "Keywords", "Bus Ticket");
PDF_begin_page($mypdf, 595, 842);
$myfont = PDF_findfont($mypdf, "Times-Roman", "host", 0);
PDF_setfont($mypdf, $myfont, 12);

PDF_setcolor($mypdf, "stroke", "rgb", 0.50, 0.50, 0.50,1);
PDF_moveto($mypdf, 50, 810);
PDF_lineto($mypdf, 500, 810);
PDF_stroke($mypdf);
PDF_moveto($mypdf, 50, 100);
PDF_lineto($mypdf, 500, 100);
PDF_stroke($mypdf);

PDF_show_xy($mypdf, "Online Bus Ticket", 200, 800);
PDF_show_xy($mypdf, "Your Ticket Details", 70, 700);
PDF_continue_text($mypdf, "Bus Details");
PDF_continue_text($mypdf, "Bus ID: ".$b[0]." Bus Name:".$b[1]." From: ".$b[2]." To: ".$b[3]);
PDF_continue_text($mypdf, "Departure: ".$b[4]." Arrival:".$b[5]." Type: ".$b[6]."Seats:".$b[7]);
PDF_continue_text($mypdf, " Fare: ".$b[8]." Facilities: ".$b[9]." Stars: ".$b[10]);
PDF_continue_text($mypdf, "===================================================================");
PDF_continue_text($mypdf, "Your Details");
PDF_continue_text($mypdf, "Your Name: ".$u[0]." Email: ".$u[1]." Mobile: ".$u[2]." Address: ".$u[3]);
PDF_continue_text($mypdf, "Country: ".$u[4]." Gender: ".$u[5]." BusID: ".$u[6]." Bus Date: ".$u[7]);
PDF_continue_text($mypdf, "Registration Date: ".$u[8]." Your Seats: ".$u[9]." Seats: ".$u[10]);
PDF_continue_text($mypdf, "Price: ".$u[11]. " PNR: ".$u[12]);
PDF_continue_text($mypdf, "===================================================================");
PDF_continue_text($mypdf, "IMPORTANT INFORMATION");
PDF_continue_text($mypdf, "No. of Seats: ".$u[9]);
PDF_continue_text($mypdf, " Seats: ".$u[10]);
PDF_continue_text($mypdf, "PNR: ".$u[12]);
PDF_continue_text($mypdf, "===================================================================");

PDF_continue_text($mypdf, "Contact us : 9957809805");
PDF_continue_text($mypdf, "Terms and Conditions Apply");
PDF_continue_text($mypdf, "Visit www.01fes.com");
PDF_show_xy($mypdf, "HAPPY JOURNEY", 200, 400);

PDF_end_page($mypdf);
PDF_close($mypdf);
$mybuf = PDF_get_buffer($mypdf);
$mylen = strlen($mybuf);
header("Content-type: application/pdf");
header("Content-Length: $mylen");
header("Content-Disposition: inline; filename=busticket4.pdf");
print $mybuf;
PDF_delete($mypdf);
?>