
<?php
include '../postPet/db_connect.php'; 
$id=$_GET['adopt'];



//auto save upon update
$sql="Select *from `pets` where id =$id";
$result=mysqli_query($conn,$sql);

// echo "hello",$result;
// exit;
$row=mysqli_fetch_assoc($result);
		

$ownername=$row["ownername"];
$ownermobileno=$row["ownermobileno"];
$petcategory=$row["petcategory"];
$petname=$row["petname"];
$petgender=$row["petgender"];
$petaddress=$row["petaddress"]; 

echo $ownername;
echo $ownermobileno;
echo $petcategory;
echo $petaddress;
echo $petgender;
echo $petname;

echo "-----------";

echo isset($_POST['submit']);
echo "-----------";

if(isset($_POST['submit'])){
    
    $id= $row["id"];

			$newowner=$_POST["newowner"]; 
			
            
            echo $ownername;
            echo $ownermobileno;
            echo $petcategory;
            echo $petaddress;
            echo $petgender;
            echo $petname;
            
            $sql = "UPDATE `pets` 
            set id='$id',ownername='$ownername',ownermobileno='$ownermobileno',petcategory='$petcategory',petname='$petname',petgender='$petgender',petaddress='$petaddress',newowner='$newowner'
            WHERE id=$id";
            $result=mysqli_query($conn,$sql);
            
            
            if($result){
            echo "updated";
            header('location:pets_list.php');
            }
            else{
            // die(mysqli_error($conn));
            echo "sorry";
            }



		}
?>


