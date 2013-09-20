<html>
<head>
</head>
<body>

<?php foreach ($query as $row):?>
   <?php foreach ($row as $item):?>
      <li><?php echo $item;?></li>
   <?php endforeach;?>
   <br>
<?php endforeach;?>

<br>
<h2>Get A Entry In Database</h2>
<form action=getdb method=POST>
<table>
<tr><td>BUSID: </td><td><input type=text name=busid></td></tr>
<tr><td></td><td><input type=submit value=Submit></td></tr>
</table>
</form>
</body>
</html>