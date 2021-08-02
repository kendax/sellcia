<?php
    include_once('connection.php');

    $stmt1 = "SELECT * FROM phonesandtablets  where ProductID ='1' ORDER BY ProductID ASC;";
    $stmt2 = "SELECT * FROM phonesandtablets  where ProductID ='2' ORDER BY ProductID ASC;";
    $stmt3 = "SELECT * FROM phonesandtablets  where ProductID ='3' ORDER BY ProductID ASC;";
    $stmt4 = "SELECT * FROM phonesandtablets  where ProductID ='4' ORDER BY ProductID ASC;";
    $stmt5 = "SELECT * FROM phonesandtablets  where ProductID ='5' ORDER BY ProductID ASC;";
    $stmt6 = "SELECT * FROM phonesandtablets  where ProductID ='6' ORDER BY ProductID ASC;";
    $stmt7 = "SELECT * FROM phonesandtablets  where ProductID ='7' ORDER BY ProductID ASC;";
    $stmt8 = "SELECT * FROM phonesandtablets  where ProductID ='8' ORDER BY ProductID ASC;";
    $stmt9 = "SELECT * FROM phonesandtablets  where ProductID ='9' ORDER BY ProductID ASC;";
    $stmt10 = "SELECT * FROM phonesandtablets  where ProductID ='10' ORDER BY ProductID ASC;";
    $stmt11 = "SELECT * FROM phonesandtablets  where ProductID ='11' ORDER BY ProductID ASC;";
    $stmt12 = "SELECT * FROM phonesandtablets  where ProductID ='12' ORDER BY ProductID ASC;";
    $stmt13 = "SELECT * FROM phonesandtablets  where ProductID ='13' ORDER BY ProductID ASC;";
    $stmt14 = "SELECT * FROM phonesandtablets  where ProductID ='14' ORDER BY ProductID ASC;";
    $stmt15 = "SELECT * FROM phonesandtablets  where ProductID ='15' ORDER BY ProductID ASC;";
    $stmt16 = "SELECT * FROM phonesandtablets  where ProductID ='16' ORDER BY ProductID ASC;";


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
    <title>Electronics</title>
    <link rel="shortcut icon" href="images/velatitle.png" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="css/vela.css">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav class="nav1">
            <li><a><img src="images/sellcialogo.png" alt=""></a></li>
                <li class="accessories"><a>
                    <div class="login">Login
                        <div class="loginlinks">
                                <button type="button" class="buttonlogin"><a  href="loginform.php" >Login</a></button>
                                <button type="button"><a href="joinform.php">Join</a></button>
                        </div>
                    </div>
                </a></li>
            <li class="accessories1"><a>Cart</a></li>
            <li class="accessories1"><a>Help</a></li>
        </nav>
        <nav class="nav2">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="electronics.php" >Electronics</a></li>
                <li><a href="shoes.php">Shoes</a></li>
                <li><a href="phonesandtablets.php" class="active">Phones and Tablets</a></li>
                <li><a href="books.php">Books</a></li>              
            </ul>
        </nav>
    </header>
    <div class="searchbarcode">
            <link rel="stylesheet" href="css/searchbar.css">
            <link rel="stylesheet" href="https://img.icons8.com/pastel-glyph/64/000000/">
                <div class="container">
                    <input class="main"/><span class="searchicon"></span>
                        <div class="microphone">
                             <div class="mic-stand"></div>
                        </div>
                        <div class="icon-holder">
                            <div class="icon" id="parking">
                            <div class="tooltip">Electronics</div>
                        </div>
                        <div class="icon" id="">
                            <div class="" id="parking1"></div>
                            <div class="tooltip">Shoes</div>
                        </div>
                        <div class="icon" id="">
                            <div class="pho" id="parking2"></div>
                            <div class=""></div>
                            <div class="tooltip">Phones and Tablets</div>
                        </div>
                        <div class="icon" id="">
                            <div class="" id="parking3"></div>
                            <div class="tooltip">Books</div>
                        </div>
                        <div class="icon" id="misc">
                            <div class="dots"></div>
                            <div class="tooltip">More</div>
                        </div>
                </div>
        </div>
    </div>
    <section class="slider">
            <link rel="stylesheet" href="css/slider.css">
            <script src="js/slider.js"></script>
            <div class="container">
                <div class="carousel slide carousel-swipe" id="carousel" data-ride="carousel" data-interval="3000">
                    <ol class="carousel-indicators">
                    <li class="active" data-target="#carousel" data-slide-to="0"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                    <li data-target="#carousel" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                    <div class="item active"><img src="images/christian.jpg"/>
                        <div class="carousel-caption">VELA</div>
                    </div>
                    <div class="item"><img src="images/radek.jpg"/>
                        <div class="carousel-caption">VELA</div>
                    </div>
                    <div class="item"><img src="images/dmitry.jpg"/>
                        <div class="carousel-caption">VELA</div>
                    </div>
                    <div class="item"><img src="images/aaron.jpg"/>
                        <div class="carousel-caption">VELA</div>
                    </div>
                    </div><a class="left carousel-control" href="#carousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Prev</span></a><a class="right carousel-control" href="#carousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">next</span></a>
                </div>
            </div>
    </section>
    <div class="container-grid">
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
    <section class="footer">
        <footer>
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
        <link href="css/footer.css" rel="stylesheet"> 
<!-- Footer -->
		<footer class="pt-5 pb-4" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">ABOUT US</h5>
						<p class="mb-4">Etiam laoreet in ex quis efficitur.</p>
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-map-marker"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Address:</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="far fa-envelope"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Have any questions?</h6>
										<p><a href="#">Support@userthemes.com</a></p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-phone-volume"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Address:</h6>
										<p><a href="#">+XX (0) XX XX-XXXX-XXXX</a></p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">FRESH TWEETS</h5>
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
										<label>10 Mins Ago</label>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
										<label>10 Mins Ago</label>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
										<label>10 Mins Ago</label>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">LATEST UPDATES</h5>
						<ul class="recent-post">
							<li>
								<label class="mr-3">28 <br><span>APR</span></label>
								<span>Rendomised words which dont look eveable.</span>
							</li>
							<li>
								<label class="mr-3">29 <br><span>APR</span></label>
								<span>Rendomised words which dont look eveable.</span>
							</li>
							<li>
								<label class="mr-3">30 <br><span>APR</span></label>
								<span>Rendomised words which dont look eveable.</span>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">CONNECT WITH US</h5>
						<div class="input-group">
						  	<input type="text" class="form-control" placeholder="Your Email Address">
						  	<span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>
						</div>
						<ul class="social-pet mt-4">
							<li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- Copyright -->
		<section class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<div class="text-center text-white">
							&copy; 2018 Your Company. All Rights Reserved.
						</div>
					</div>
				</div>
			</div>
		</section>
        </footer>
    </section>
</body>
</html>
