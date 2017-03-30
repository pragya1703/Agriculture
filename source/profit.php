<html lang="en">
<head>
<style type="text/css">
body {
	background:none repeat scroll 0 0 #d3d3d3;
	
	background-image:url(contact-bg.jpg);
	
	font-size:100%;
  font-family:"Open Sans",Arial,sans-serif;
  color:#9B6A20;
  }

	table {
  border-collapse: separate;
  border-spacing: 0;
  width: 100%;
}
th,
td {
  padding: 8px 15px;
}
th {
  background: #42444e;
  color: #fff;
  text-align: left;
   padding: 10px 20px;
   font-size:20px
}
tr:first-child th:first-child {
  border-top-left-radius: 6px;
}
tr:first-child th:last-child {
  border-top-right-radius: 6px;
}
td {
  border-right: 1px solid #c6c9cc;
  border-bottom: 1px solid #c6c9cc;
}
td:first-child {
  border-left: 1px solid #c6c9cc;
}
tr:nth-child(even) td {
  background: #E4E4DE;
}
tr:nth-child(odd) td {
  background: #FEFEFC;
}
tr:last-child td:first-child {
  border-bottom-left-radius: 6px;
}
tr:last-child td:last-child {
  border-bottom-right-radius: 6px;
}
footer {
  background: #2db34a;
  bottom: 0;
  left: 0;
  padding: 20px 0;
  position: fixed;
  right: 0;
  text-align: center;
}
	</style>
</head>
<center><b>Order of Mandi by their Profit</b></center>
<table style="border: 1px solid #fff;">

 <tr><th>City </th><th>Item</th><th>Price</th><th>Mandi Name</th><th>Stock Bought</th><th>Stock Sold</th></tr>
 <?php
include_once 'dbconfig.php';
 $sql_query="SELECT * FROM testing1 Order by (stock_bought-stock_sold) desc";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
		<td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		  <!--<td><input type="submit" value="Edit" name="Edit" id="<?//php echo $row[0]; ?>" >  </td>-->
     </tr>
        <?php
 }
 ?>
 </table>
 </html>