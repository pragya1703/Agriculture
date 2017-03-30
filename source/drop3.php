<html>
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
	<style type="text/css">
	
	.dear {
		align="center";

	      }
	.mytext {
    width: 300px;
    height:40px;
	font-size: 16px;
	
}
	.gear{
		color:#ffffff;
		margin-top:40px;
		}
	.mytext1{
		 background-color: #42444e; /* Green */
    border-radius:6px;
    color: #2db34a;
    padding: 9px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	height : 38px;
	font-weight:bold;
	}
   .mytext1:hover{
		color:#ff7b29;
		}
	.mytext2{
		width: 20px;
                height:10px;

		}
		.mytext3{
		 background-color: #4CAF50; /* Green */
    border-radius:6px;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	margin-left:40px;
		}
		.select{
			font-size:16px;
			position:relative;
			display:inline-block
		}
		a:hover{
		color:#ff7b29;

}
.span{
	color:white;
}
.hv:hover
  {
  color:#ff7b29;
  }
.hv
  {
  color:white;
  font-size:20px;
	margin-left:70px;
  }
	</style>
	</head>
<?php $material_query_run=$row[0]=$row[1]=$row[2]=$row[3]=""?>
<form action="drop3.php" method="post">
    <?php
	include_once 'dbconfig.php';
    $material_query = "SELECT distinct City FROM testing1";
	$material_query1 = "SELECT distinct Item FROM testing1";
	$material_query2 = "SELECT distinct Mandi_name FROM testing1";

    $material_query_run = mysql_query( $material_query );
	$material_query_run1 = mysql_query( $material_query1 );
	$material_query_run2 = mysql_query( $material_query2);
	
    echo "City  <select name='mySelect'  placeholder='City' >";
    while   ( $material_query_array = mysql_fetch_array( $material_query_run ) ) {
        echo "<option value='".$material_query_array['City']."' >".$material_query_array['City']."</option>";                        
    }
    echo "</select>";
	    ?>
    <button type="submit" name="submit" value="submit" class="mytext1">Submit</button>
	<span style="padding-left:300px;"></span>
	<?php
	echo "Item <select name='mySelect1'  placeholder='Item'  >";
    while   ( $material_query_array1 = mysql_fetch_array( $material_query_run1 ) ) {
        echo "<option value='".$material_query_array1['Item']."' >".$material_query_array1['Item']."</option>";                        
    }
    echo "</select>";
    ?>
    <button type="submit" name="submit1" value="submit1" class="mytext1">Submit</button>
	<span style="padding-left:200px;"></span>
	<?php
	echo "Mandi <select name='mySelect2'  placeholder='Mandi' >";
    while   ( $material_query_array2 = mysql_fetch_array( $material_query_run2 ) ) {
        echo "<option value='".$material_query_array2['Mandi_name']."' >".$material_query_array2['Mandi_name']."</option>";                        
    }
    echo "</select>";
    ?>
    <button type="submit" name="submit2" value="submit2" class="mytext1">Submit</button><br/>
	<span style="padding-left:1150px;"></span>
	<a class = "hv" href = "http://localhost/Agriculture(1)/source/new1.html"><b><u>go to main</u></b></a>
</form>

<table>
<tr><th>City</th><th>Item</th><th>Price</th><th>Mandi Name</th><th>Stock Bought</th><th>Stock Sold</th></tr>
<?php 

if ( isset( $_POST['submit'] ) ) {
    //is submitted
	
	include_once 'dbconfig.php';
    $variable = $_POST['mySelect'];
	$material_query = "SELECT * FROM testing1 where City='$variable'";
    $material_query_run = mysql_query( $material_query );
	 while($row=mysql_fetch_row($material_query_run ))
 {
  ?>
        <tr>
        <td><?php echo $row[0]; ?></td>
		
        <td><?php echo $row[1]; ?></td>
		
        <td><?php echo $row[2]; ?></td>
		
		<td><?php echo $row[3]; ?></td>

		<td><?php echo $row[4]; ?></td>
		
		<td><?php echo $row[5]; ?></td>
		<br> <!--<td><input type="submit" value="Edit" name="Edit" id="<?//php echo $row[0]; ?>" >  </td>-->
     </tr>
	 
        <?php
 }
 ?>
	 <?php
 }
 ?>
 
 <?php 
 

if ( isset( $_POST['submit1'] ) ) {
    //is submitted
	
	include_once 'dbconfig.php';
    $variable1 = $_POST['mySelect1'];
	$material_query1 = "SELECT * FROM testing1 where Item='$variable1'";
    $material_query_run1 = mysql_query( $material_query1 );
	 while($row1=mysql_fetch_row($material_query_run1 ))
 {
  ?>
        <tr>
        <td><?php echo $row1[0]; ?></td>
		
        <td><?php echo $row1[1]; ?></td>
		
        <td><?php echo $row1[2]; ?></td>
		
		<td><?php echo $row1[3]; ?></td>
		
		<td><?php echo $row1[4]; ?></td>

		<td><?php echo $row1[5]; ?></td>
		
		 <br> <!--<td><input type="submit" value="Edit" name="Edit" id="<?//php echo $row[0]; ?>" >  </td>-->
     </tr>
	 
        <?php
 }
 ?>
	 <?php
 }
 ?>
 <?php
 if ( isset( $_POST['submit2'] ) ) {
    //is submitted
	
	include_once 'dbconfig.php';
    $variable2 = $_POST['mySelect2'];
	$material_query2 = "SELECT * FROM testing1 where Mandi_name='$variable2'";
    $material_query_run2 = mysql_query( $material_query2 );
	 while($row2=mysql_fetch_row($material_query_run2 ))
 {
  ?>
        <tr>
        <td><?php echo $row2[0]; ?></td>
		
        <td><?php echo $row2[1]; ?></td>
		
        <td><?php echo $row2[2]; ?></td>
		
		<td><?php echo $row2[3]; ?></td>
		
		<td><?php echo $row2[4]; ?></td>

		<td><?php echo $row2[5]; ?></td>
		
		
		 <br> <!--<td><input type="submit" value="Edit" name="Edit" id="<?//php echo $row[0]; ?>" >  </td>-->
     </tr>
	 
        <?php
 }
 ?>
	 <?php
 }
 ?>

</table>

</html>