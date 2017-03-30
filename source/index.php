<html>
<head>
<style type="text/css">
	body {
	background:none repeat scroll 0 0 #d3d3d3;
	
	background-image:url(contact-bg.jpg);
	
	font-size:100%;
  font-family:"Open Sans",Arial,sans-serif;
  color:#D59429;
  }
	.dear {
		align="center";

	      }
	.mytext {
    width: 300px;
    height:40px;
	font-size: 16px;
	
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
	.gear{
		color:#ffffff;
		margin-top:40px;
		}
	.mytext1{
		 background-color: #4CAF50; /* Green */
    border-radius:6px;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
   
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
		}	a:hover{
		color:#ff7b29;

}
	</style>
	</head>
<?php
  /*if(isset($_POST['submit'])){
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){      
            $location = 'uploads/';     
 //$location = '../uploads/';    			
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully';
            }
        }       
    }  else {
        echo 'You should select a file to upload !!';
    }
}*/

if(isset($_POST['Show'])){
/*$dir = "uploads/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
		if(strlen($file)>0){
		echo "filename:" . $file . "<br>";}
			}
    closedir($dh);
		}
	}*/
	header('location: show.php');
}


 
include_once 'dbconfig.php';
if(isset($_POST['Insert']))
{
 $City = $_POST['City'];
 $Item = $_POST['Item'];
 $Price = $_POST['Price'];
 $Mandi_name = $_POST['Mandi_name'];
 $stock_bought=$_POST['stock_bought'];
 $stock_sold=$_POST['stock_sold'];

  echo      $sql_query = "INSERT INTO `testing1`( `City`, `Item`,`Price`, `Mandi_name`,`stock_bought`,`stock_sold`) VALUES ('$City','$Item','$Price','$Mandi_name','$stock_bought','$stock_sold')";
 mysql_query($sql_query);
     
}
 
 
/* include_once 'dbconfig.php';
if(isset($_POST['Edit']))
{
 $ID = $_POST['Name'];  
  
        $sql_query = "Delete from `testing` where ID='$Name'";
 mysql_query($sql_query);
     
}
 */

?>
<form action="index.php" method="post" enctype="multipart/form-data">



<input type="text" name="City" id="City" placeholder="City" class="mytext"><br/><br/>
<input type="text" name="Item" id="Item" placeholder="Item" class="mytext" ><br/><br/>
<input type="text" name="Price" id="Price" placeholder="Price" class="mytext" ><br/><br/>
<input type="text" name="Mandi_name" id="Mandi_name" placeholder="Mandi_name" class="mytext" ><br/><br/>
<input type="text" name="stock_bought" id="stock_bought" placeholder="stock_bought" class="mytext" ><br/><br/>
<input type="text" name="stock_sold" id="stock_sold" placeholder="stock_sold" class="mytext" ><br/><br/>
<input type="submit" value="Insert" name="Insert" class="mytext1"><br/><br/>
<input type="submit" value="Show" name="Show" class="mytext1"><br><br><br><br>
<a class = "hv" href = "http://localhost/Agriculture(1)/source/new1.html"><b><u>go to main</u></b></a>
 <br/>
 <br/>
 <table style="border: 1px solid #fff;>
    

  
 </table>
</form>

</html>