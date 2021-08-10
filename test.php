<?php
    include_once('connection.php');

    $stmt1 = "SELECT * FROM electronics  where ProductID ='1' ORDER BY ProductID ASC;";
    $stmt2 = "SELECT * FROM electronics  where ProductID ='2' ORDER BY ProductID ASC;";
    $stmt3 = "SELECT * FROM electronics  where ProductID ='3' ORDER BY ProductID ASC;";
    $stmt4 = "SELECT * FROM electronics  where ProductID ='4' ORDER BY ProductID ASC;";
    $stmt5 = "SELECT * FROM shoes  where ProductID ='1' ORDER BY ProductID ASC;";
    $stmt6 = "SELECT * FROM shoes  where ProductID ='2' ORDER BY ProductID ASC;";
    $stmt7 = "SELECT * FROM shoes  where ProductID ='3' ORDER BY ProductID ASC;";
    $stmt8 = "SELECT * FROM shoes  where ProductID ='4' ORDER BY ProductID ASC;";
    $stmt9 = "SELECT * FROM phonesandtablets  where ProductID ='1' ORDER BY ProductID ASC;";
    $stmt10 = "SELECT * FROM phonesandtablets  where ProductID ='2' ORDER BY ProductID ASC;";
    $stmt11 = "SELECT * FROM phonesandtablets  where ProductID ='3' ORDER BY ProductID ASC;";
    $stmt12 = "SELECT * FROM phonesandtablets  where ProductID ='4' ORDER BY ProductID ASC;";
    $stmt13 = "SELECT * FROM books  where ProductID ='1' ORDER BY ProductID ASC;";
    $stmt14 = "SELECT * FROM books  where ProductID ='2' ORDER BY ProductID ASC;";
    $stmt15 = "SELECT * FROM books  where ProductID ='3' ORDER BY ProductID ASC;";
    $stmt16 = "SELECT * FROM books  where ProductID ='4' ORDER BY ProductID ASC;";

    $result1 = mysqli_query($conn, $stmt1);
    $result2 = mysqli_query($conn, $stmt2);
    $result3 = mysqli_query($conn, $stmt3);
    $result4 = mysqli_query($conn, $stmt4);
    $result5 = mysqli_query($conn, $stmt5);
    $result6 = mysqli_query($conn, $stmt6);
    $result7 = mysqli_query($conn, $stmt7);
    $result8 = mysqli_query($conn, $stmt8);
    $result9 = mysqli_query($conn, $stmt9);
    $result10 = mysqli_query($conn, $stmt10);
    $result11 = mysqli_query($conn, $stmt11);
    $result12 = mysqli_query($conn, $stmt12);
    $result13 = mysqli_query($conn, $stmt13);
    $result14 = mysqli_query($conn, $stmt14);
    $result15 = mysqli_query($conn, $stmt15);
    $result16 = mysqli_query($conn, $stmt16);
    

    $rows1 = mysqli_fetch_assoc ($result1);
    $rows2 = mysqli_fetch_assoc ($result2);
    $rows3 = mysqli_fetch_assoc ($result3);
    $rows4 = mysqli_fetch_assoc ($result4);
    $rows5 = mysqli_fetch_assoc ($result5);
    $rows6 = mysqli_fetch_assoc ($result6);
    $rows7 = mysqli_fetch_assoc ($result7);
    $rows8 = mysqli_fetch_assoc ($result8);
    $rows9 = mysqli_fetch_assoc ($result9);
    $rows10 = mysqli_fetch_assoc ($result10);
    $rows11 = mysqli_fetch_assoc ($result11);
    $rows12 = mysqli_fetch_assoc ($result12);
    $rows13 = mysqli_fetch_assoc ($result13);
    $rows14 = mysqli_fetch_assoc ($result14);
    $rows15 = mysqli_fetch_assoc ($result15);
    $rows16 = mysqli_fetch_assoc ($result16);
    
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="shortcut icon" href="images/sellcialogo3.png" type="image/x-icon" style="min-height:500px;">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/vela.css">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link href="https://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" rel="stylesheet" type="text/css"/>
</head>
<body class="body">
<header>

<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="css/vela.css">
<script src="js/main.js"></script>

<div id="container">
		<div id="nav">
<nav class="upper-nav">
	<ul class="menu" id="menu">
		<li><div class="user-mobile" style="margin-left:-80px;">
         <p>Hi,Welcome</p>
         </div></li>
         <link rel="stylesheet" href="css/searchbar.css">
         <link rel="stylesheet" href="https://img.icons8.com/pastel-glyph/64/000000/">
         <link rel="stylesheet" href="css/vela.css">
         
            <li><a href="index.php" class="active"><img src="https://img.icons8.com/material-outlined/48/000000/home--v2.png" style="max-height:30px; transform:translateY(-19%);"/><span>    </span>Home</a></li>
            <li><a href="electronics.php"><img src="https://img.icons8.com/ios/50/000000/tv-on.png" style="max-height:30px; transform:translateY(-19%);"/><span>    </span>Electronics</a></li>
            <li><a href="shoes.php"><img src="https://img.icons8.com/ios/50/000000/sneakers.png" style="max-height:30px; transform:translateY(-19%);"/><span>    </span>Shoes</a></li>
            <li><a href="phonesandtablets.php"><img src="https://img.icons8.com/dotty/80/000000/multiple-smartphones.png" style="max-height:30px; transform:translateY(-19%);"/><span>    </span>Phones and Tablets</a></li>
            <li><a href="books.php"><img src="https://img.icons8.com/carbon-copy/100/000000/books.png" style="max-height:30px; transform:translateY(-19%);"/><span>    </span>Books</a></li>
            <li><div class="prev-nav1">
            <link rel="stylesheet" href="vela.css">
            <li><div class="login1" style="margin-top:-30px;">
            <button type="button" style="font-size:18px; margin-left:15px;" class="buttonlogin1"><a  href="loginform.php">Login</a></button>
            <button type="button" style="font-size:18px; margin-left:15px;" class="buttonlogin1"><a href="joinform.php">Join</a></button>
                </div></a>
</li>
            </div></li>
	</ul>
	<div class="burger">
		<div class="line1"></div>
		<div class="line2"></div>
		<div class="line3"></div>
	</div>

</nav>
</div>
</header>


   <div class="container-grid">
        <link rel="stylesheet" href="css/vela.css">
        <div id="grid">
            <div class="slot1">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows1['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows1['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows1['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
            <div class="slot2">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows2['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows2['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows2['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
            <div class="slot3">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows3['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows3['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows3['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
            <div class="slot4">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows4['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows4['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows4['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
            <div class="slot5">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows5['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows5['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows5['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
            <div class="slot6">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows6['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows6['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows6['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
            <div class="slot7">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows7['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows7['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows7['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
            <div class="slot8">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows8['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows8['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows8['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
            <div class="slot9">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows9['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows9['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows9['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
            <div class="slot10">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows10['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows10['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows10['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
            <div class="slot11">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows11['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows11['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows11['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
            <div class="slot12">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows12['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows12['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows12['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
            <div class="slot13">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows13['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows13['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows13['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
            <div class="slot14">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows14['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows14['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows14['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
            <div class="slot15">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows15['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows15['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows15['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
            <div class="slot16">
                <a href="../products1admin/slot1.php" style="color:black;">
                    <div class="img"><img src="https://firebasestorage.googleapis.com/v0/b/sellcia.appspot.com/o/uploads%2F<?php echo $rows16['Image'];?>?alt=media" alt="" style="max-height:150px; display:block; margin:auto;"></div>
                    <div class="product" style="text-align:center;"><?php echo $rows16['Product'];?></div>                 
                    <div class="price" style="text-align:center; font-weight:bold;">KSh <?php echo number_format($rows16['Cost']);?></div> 
                    <input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; border-radius:5px; display:block; margin:auto;" border="0" name="submit" alt="">
                </a>
            </div>
                        
        </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> 
    <script src="js/slider.js"></script>
    <script src="js/fonts.js"></script>
    <script src="carouFredsel.js"></script>
    <script src="js/main.js"></script>
    <script src="js/man.js"></script>
    <script src="https://kit.fontawesome.com/d8eb151765.js" crossorigin="anonymous"></script>
</body>
</html>
