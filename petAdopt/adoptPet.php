
<?php
include '../postPet/db_connect.php'; 
$id=$_GET['adopt'];



//auto save upon update

$sql="Select *from `pets` where id =$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
		
		
$ownername=$row["ownername"];
$ownermobileno=$row["ownermobileno"];
$petcategory=$row["petcategory"];
$petname=$row["petname"];
$petgender=$row["petgender"];
$petaddress=$row["petaddress"]; 

	if(isset($_POST['submit'])){
     
			$id= $row["id"];
            echo $id;
            // exit;
			$ownername=$_POST["ownername"]; 
			$ownermobileno=$_POST["ownermobileno"];
			$petcategory=$_POST["petcategory"];
			$petname=$_POST["petname"];
			$petgender=$_POST["petgender"];
			$petaddress=$_POST["petaddress"];

		$sql = "UPDATE `pets` 
		set id='$id',ownername='$ownername',ownermobileno='$ownermobileno',petcategory='$petcategory',petname='$petname',petgender='$petgender',petaddress='$petaddress'
		WHERE id=$id";
		$result=mysqli_query($conn,$sql);

		if($result){
		// echo "updated";
		header('location:destination_location.php');
		}
		else{
		die(mysqli_error($conn));
		}

		}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adoptPet.css">
</head>
<body>
    <div class="adopt-form-section">
        <div class="adopt-form-container">

        <div class="form-container" >
            <h2> Adopt A Pet</h2>
            <div>
                <form action=<?php echo './adopted.php?adopt='.$id.''?>  method="post" class="form">
                    <div class="form-input-container">
                        <h3>Name : </h3>
                        <input type="text" placeholder="Enter your name" name="newowner">
                    </div>
                    <p>It is good to know that you Adopt's a Pet rather then buy <h3> Thank you</h3></p>
                    <div class="form-submit"><button type="submit" name="submit" class="btn" >submit</button>
                      
                     </div>
                     
                </form>


            </div>


        </div>


        
        </div>
    </div>


</body>
</html>