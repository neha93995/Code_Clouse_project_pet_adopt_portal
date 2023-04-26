<?php

 include '../postPet/db_connect.php'; 
 $selectedpet = "";
 
 if(isset($_POST['submit'])){
     
     $selectedpet=$_POST["selectedpet"]; 		
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adopt a pet</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <!-- --------------font style--------- -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;500&display=swap" rel="stylesheet">


    <!-- -------------------icon ------------------- -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">



    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="adoptPet.css">
</head>
<body>

  <section class="pet-adopt-section">
      
      <div class="pet-adopt-header">
        
        <div> <a  class="return" href="../index.html"><i class="ri-arrow-left-double-line"></i></a></div>
        <div class="filters-container">
            <h4>Pet Type</h4> 
            <form action="./pets_list.php" method="post">
                <select name="selectedpet" class="pet-selection">
                    <option value="" default>options</option>
                    <option value="cat">Cats</option>
                    <option value="dog">Dogs</option>
                    <option value="rabbit">Rabbits</option>
                </select>
                <button type="submit" class="selection-btn" name="submit"><i class="ri-search-line"></i></button>
            </form>
        </div>
    </div>
    <div class="pets-container">



<?php

    include '../postPet/db_connect.php';

    $sql="SELECT * FROM `pets`"; //  table name  hoo gyaa
    $res=mysqli_query($conn, $sql);

    
    if($res){
        
        while($row=mysqli_fetch_array($res)){

        $id= $row["id"];
        $ownername=$row["ownername"];
        $ownermobileno=$row["ownermobileno"];
        $petcategory=$row["petcategory"];
        $petname=$row["petname"];
        $petgender=$row["petgender"];
        $petaddress=$row["petaddress"];
        $image=$row["image"];
        $newowner = $row["newowner"];

        if(!$newowner){
            
            if($petcategory==$selectedpet){
                
            //    echo $selectedpet,$petcategory;
               echo  ' <div class=container >
       
                           <img src=../postPet/uploadedimage/'.$image.' class=pet-image alt=sorry >
                           <div class=description >
                               <div>
                                   <h5> About Pet</h5>
                                   <div>
                                       <p>' .$petname.'</p>
                                       <p>'.$petgender.'</p>
                                       <p>'.$petcategory.'</p>
                                   
                                   </div>
                               </div> 
       
                               <div> 
                                   <h5>About owner</h5>
                                   <div>
                                       <p>'.$ownername.'</p>
                                       <p>Mo. no. '.$ownermobileno.'</p>
                                   </div>
                               </div> 
                           </div> 
                           <div class="pet-address">
                                   <p>Location :  '.$petaddress.'</p>
                                   <a href="./adoptPet.php ? adopt='.$id.'"" class="btn"> Adopt </a>
                           </div>
       
                       </div>  ';
            }
            if($selectedpet=="")
            {
                echo  ' <div class=container >
       
                           <img src=../postPet/uploadedimage/'.$image.' class=pet-image alt=sorry >
                           <div class=description >
                               <div>
                                   <h5> About Pet</h5>
                                   <div>
                                       <p>' .$petname.'</p>
                                       <p>'.$petgender.'</p>
                                       <p>'.$petcategory.'</p>
                                   
                                   </div>
                               </div> 
       
                               <div> 
                                   <h5>About owner</h5>
                                   <div>
                                       <p>'.$ownername.'</p>
                                       <p>Mo. no. '.$ownermobileno.'</p>
                                   </div>
                               </div> 
                           </div> 
                           <div class="pet-address">
                                   <p>Location :  '.$petaddress.'</p>
                                   <a href="./adoptPet.php ? adopt='.$id.'"" class="btn"> Adopt </a>
                           </div>
       
                       </div>  ';
            }
            

        }

     }
}
 
?>

    
    </div>

  </section>
    
</body>
</html>