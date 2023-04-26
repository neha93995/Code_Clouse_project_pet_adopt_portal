<?php include 'db_connect.php' ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post a pet</title>

    <!-- --------------font style--------- -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;500&display=swap" rel="stylesheet">


    <!-- -------------------icon ------------------- -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">




    <link rel="stylesheet" href="postpet.css">


</head>
<body>
    <div class="postPet"> 
        <div class="container">
            <a href="../index.html" class="post-pet-header-return"><i class="ri-arrow-left-double-line"></i></a>
            <h2>Post Pet </h2>


            <?php if(isset($_GET['error'])):  ?>
                <p class="post-pet-error"><?php echo $_GET['error']; ?></p>

            <?php endif ?>

        <form action="insert_data.php" method="post" class='post-form-container' enctype='multipart/form-data'>
            
            <div class="input-container">
                <p>Enter your name</p>
                <input type="text" placeholder="name" id="OwnerName" name="ownername"> 
            </div>
          
            <div class="input-container">
                <p>Enter your mobile number</p>
                <input type="tel" placeholder="mobile no" id="OwnerMobileNo" name="ownermobileno">
            </div>
            
            <div class="input-container">
                <p>Enter category of pet</p>
                <input type="text" placeholder="pet" id="PetCategory" name="petcategory">
            </div>
            
            <div class="input-container">
                <p>Enter name of pet</p>
                <input type="text" placeholder="name of pet" id="PetName" name="petname">
            </div>
            
            <div class="input-container">
                <p>Enter gender of pet</p>
                <select name="petgender" id="PetGender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            
            <div class="input-container">
                <p>Enter pet address</p>
                <input type="text" placeholder="Address of pet" id="PetAddress" name="petaddress">
            </div>

            <div class="input-container">
                <p>Add pet image</p>
                <input type="file" id="PetImage" name="image">
            </div>

            <div class="post-pet-btn-container">
                <button type='submit' name='submit'  class="submit-btn"> Submit</button>   
                <a href="../petAdopt/pets_list.php" class="submit-btn"> show Pets</a>
            </div>
            
        </form>
    </div>
</div>
</body>
</html>
