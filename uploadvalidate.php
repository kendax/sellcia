<?php

require_once('connection.php');

if(isset($_POST['submit'])){

    $product = $_POST['product'];
    $product_id =$_POST['product_id'];
    $cost = $_POST['cost'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    $currentDir = "https://sellcia.herokuapp.com";
    $uploadDirectory = "/uploads/"; 

    $errors = [];

    $fileExtensions = ['jpeg','jpg','png'];

    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileType = $_FILES['image']['type'];

    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDir . $uploadDirectory . basename($fileName);

        if(!in_array($fileExtension,$fileExtensions)){
            $errors[] = "This file extension is not allowed";
        }
        if($fileSize > 64000){
            $errors[] = "This file is larger than 64Kib.Sorry,it has to be less than or equal to 64Kib.";
        }
        if(empty($errors)){
            $didUpload = move_uploaded_file($fileTmpName,$uploadPath);

            if($didUpload){
 
                  $stmt1 = "INSERT INTO electronics (Product, ProductID, Cost, Image, Description) VALUES('$product','$product_id','$cost','$fileName','$description')"; 
                  $stmt2 = "INSERT INTO shoes (Product, ProductID, Cost, Image, Description) VALUES('$product','$product_id','$cost','$fileName','$description')"; 
                   $stmt3 = "INSERT INTO phonesandtablets (Product, ProductID, Cost, Image, Description) VALUES('$product','$product_id','$cost','$fileName','$description')"; 
                   $stmt4 = "INSERT INTO books (Product, ProductID, Cost, Image, Description) VALUES('$product','$product_id','$cost','$fileName','$description')"; 
        $electronics = "Electronics";
        $shoes = "Shoes";
        $phonesandtablets ="Phones and tablets";

       if($category == $electronics){mysqli_query($conn,$stmt1);
}
       elseif($category == $shoes){mysqli_query($conn,$stmt2);
}
       elseif($category == $phonesandtablets){mysqli_query($conn,$stmt3);
}
       else{mysqli_query($conn,$stmt4);
}
                
                header('Location:indexadmin.php?product='.$product);
                exit();
           } }else{

            }
        }else{

        }



