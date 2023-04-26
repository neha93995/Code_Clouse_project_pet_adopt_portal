<?php

 include "db_connect.php";

if(isset($_POST['submit']) && isset($_FILES['image'])){
  
  echo "<pre>";
  print_r($_FILES['image']);
  echo "<pre>";


  $img_name = $_FILES['image']['name'];
  $img_size = $_FILES['image']['size'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $error = $_FILES['image']['error'];

  if($error === 0)
  {
    
    if($img_size > 425000)
    {
      $em = "sorry, your file is too large.";
      header("Location: postPet.php?error=$em");
    }
    else{
      $img_ex = pathinfo($img_name , PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("jpg","jpeg","png");

      if(in_array($img_ex_lc ,$allowed_exs))
      {
        $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
        $img_upload_path = 'uploadedimage/'.$new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);

           
        $sql = "INSERT INTO pets(`ownername`, `ownermobileno`, `petcategory`,`petname`,`petgender`,`petaddress`,`image`)
        VALUES('$_POST[ownername]', '$_POST[ownermobileno]','$_POST[petcategory]','$_POST[petname]','$_POST[petgender]','$_POST[petaddress]','$new_img_name')";
        
        if ($conn->query($sql) === TRUE) {
            $em = "New record created successfully";
            header("Location: postPet.php?error=$em");

          } else {
            echo "Error: " . $sql . "<br>" . $conn->error; 
          }
          
      }
      else{
        $em = "you can't upload files of this type";
        header("Location: postPet.php?error=$em");
        
      }
    }
    
  }else{
    
    $em = "unkown error occured";
    header("Location: postPet.php");
  
  }
}
else{
  header("location: postPet.php");
}


?>
  


