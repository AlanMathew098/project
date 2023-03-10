
<?php
include("admin/dbx.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/buck.css">
  <link rel="stylesheet" type="text/css" href="css/stars.scss">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
   
<script>
$(document).ready(function() {
    $("#search-box").keyup(function() {
        $.ajax({
            type: "POST",
            url: "readCountry.php",
            data: 'keyword=' + $(this).val(),
            beforeSend: function() {
                $("#search-box").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
            },
            success: function(data) {
                $("#suggesstion-box").show();
                $("#suggesstion-box").html(data);
                $("#search-box").css("background", "#FFF");
            }
        });
    });
});
function selectCountry(val) {
    $("#search-box").val(val);
    $("#suggesstion-box").hide();
}
</script>

</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
    <a href="./stars.html"> <img src="./images/cfe.png" width="185px" alt="" class="d-inline-block align-middle mr-2"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ">
     
      <li class="nav-item">
        <a class="nav-link" href="#">Rewards</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./gift.php">Gift Cards</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./menus.php" style="color:brown ;">Menu</a>
      </li>
   
          
    </ul>
 <ul>
 <form class="my-2">
              <input class="form-control bg-transparent " type="text"  aria-label="Search"  id="search-box" placeholder="Product name" >
              <div id="suggesstion-box"></div>
            </form>
 </ul>
     <ul class="navbar-nav ms-auto ">
      <li class="nav-item active">
        <a class="nav-link " href="./store.php"><i class="bi bi-geo-alt-fill mx-2"></i>Find a Store</a>
      </li>
      <button type="button" class="btn btn-outline-dark  my-3 mx-2"><a href="./login.php" class="text-dark">Log In</a></button>
      <button type="button" class="btn btn-dark  my-3"><a href="./stars1.php" class="text-light">Join Now</a></button>
    </ul>
  </div>
</div>

</nav>
<hr class="col-md-10 mx-auto">
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="./images/message.png" class="#myBtn"  width="53px" alt="" /></button>

<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
 mybutton.style.display = "block";
} else {
 mybutton.style.display = "none";
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}
</script>
<section>
  <div class="container-">
    <div class="esp">
      <img src="./images/posters.jpg" alt="" class="esp">
    </div>
  </div>
</section>
<section>
    <div class="container-">
        <img class="img-fluid map" src="./images/mc.png"    alt="">
        <div class="alpha">
            <h2>Layers of baked Aroma Mix</h2>
            <p class=" col-md-7">Try the  Crisp Oatmilk Macchiato, now nondairy and with ExpressO?? Blonde cappuccino.<br>
          
            </p>
         
          
        </div>
        <div id="container">

 
  
            <div class="button" id="button-2">
              <div id="slide"></div>
              <a href="#" class="text-white">Explore</a>
            </div>
          
            
         
          
            <!-- End Container -->
          </div>
    </div>
   
</section>
<section class="gallery-block cards-gallery ">
  <div class="container-fluid ">
     
      <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
              <div class="card border-0 transform-on-hover">
                <a class="lightbox" href="./images/exp1 .jpg">
                  <img src="./images/exp1 .jpg" alt="Card Image" class="card-img-top">
                </a>
                
              </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card border-0 transform-on-hover">
              <a class="lightbox" href="./images/exp2.jpg">
                <img src="./images/exp2.jpg" alt="Card Image" class="card-img-top">
              </a>
              
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 transform-on-hover">
            <a class="lightbox" href="./images/exp 3.jpg">
              <img src="./images/exp 3.jpg" alt="Card Image" class="card-img-top">
            </a>
            
          </div>
      </div>
          </div>
          </div>
          </section>

<section>
    <div class="container-">
        <div class="rot " >
            <img class="img-fluid" src="./images/items.png"    alt="">
        </div>
    </div>
</section>

<div class="container-">
    <div class=" doc " >
       <h2>Hot Coffee</h2>
    </div>
</div>


<div class="container d-flex align-items-center justify-content-center flex-wrap-reverse">
  
    <div class="row ">
    
        <div class="col-sm-5">
           
    <div class="box img-fluid">
        <div class="body">
            <div class="imgContainer">
                <img src="./images/c1.jpg" alt="">
            </div>
            <div class="content d-flex flex-column align-items-center justify-content-center">
                <div>
                    <h6 class="text-white ">EspressO Roast Dark</h6>
                    
                    <p class="fs-6 text-white">The unmistakable full-flavour of EspreessO?? Espresso Aroma is what makes our signature...</p>
                    <a href=" fs-1" class="text-white">Visit now </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-5">
    <div class="box img-fluid">
        <div class="body">
            <div class="imgContainer">
                <img src="./images/c2.jpg" alt="">
            </div>
            <div class="content d-flex flex-column align-items-center justify-content-center">
                <div>
                    <h6 class="text-white ">EspressO cappuccino Mix</h6>
                    
                    <p class="fs-6 text-white">The unmistakable full-flavour of EspreessO?? cappuccino Roast-Mix is what makes our signature...</p>
                    <a href=" fs-1" class="text-white">Visit now </a>
                  </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-1 img-fluid">
    <div class="box">
        <div class="body">
            <div class="imgContainer">
                <img src="./images/c3.jpg" alt="">
            </div>
            <div class="content d-flex flex-column align-items-center justify-content-center">
                <div>
                    <h6 class="text-white ">EspressO Dark Mocha</h6>
                    
                    <p class="fs-6 text-white">The unmistakable full-flavour of EspreessO?? Mocha Roast is what makes our signature...</p>
                    <a href=" fs-1" class="text-white">Visit now </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-5 img-fluid">
    <div class="box">
        <div class="body">
            <div class="imgContainer">
                <img src="./images/f1.jpg" alt="">
            </div>
            <div class="content d-flex flex-column align-items-center justify-content-center">
                <div>
                    <h6 class="text-white ">King's Burger</h6>
                    
                    <p class="fs-6 text-white">The unmistakable full-flavour of EspreessO?? Burger is what makes our signature...</p>
                    <a href=" fs-1" class="text-white">Visit now </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-5 img-fluid">
    <div class="box">
        <div class="body">
            <div class="imgContainer">
                <img src="./images/f2.jpg" alt="">
            </div>
            <div class="content d-flex flex-column align-items-center justify-content-center">
                <div>
                    <h6 class="text-white ">Italian-Pizza</h6>
                    
                    <p class="fs-6 text-white">The unmistakable full-flavour of EspreessO?? Pizza is what makes our signature...</p>
                    <a href=" fs-1" class="text-white">Visit now </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-2 img-fluid">
    <div class="box">
        <div class="body">
            <div class="imgContainer">
                <img src="./images/f3.jpg" alt="">
            </div>
            <div class="content d-flex flex-column align-items-center justify-content-center">
                <div>
                    <h6 class="text-white ">French-Jollibee</h6>
                    
                    <p class="fs-6 text-white">The unmistakable full-flavour of EspreessO?? Broast is what makes our signature...</p>
                    <a href=" fs-1" class="text-white">Visit now </a>
                </div>
            </div>
        </div>
    </div>
</div>




</div>
</div>
<hr class="col-md-11 mx-auto" style="opacity: 21%;">
<div class="container-">
    <div class=" mos " >
       <h3>Food</h3>
    </div>
</div>
<section>
    <div class="container-">
        <div class="tea">
            <img src="./images/ads.jpg" class="teas"  width="" alt="Wild Landscape" />
        </div>
    </div>
  </section>
  <section>
    <div class="container-">
        <div class="msg">
            <img src="./images/home.png" class="tot"  width="" alt="Wild Landscape" />
        </div>
    </div>
  </section>
  <section class="gallery-block cards-gallery">
    <div class="container">
  
        <div class="row">
        <?php
						        $sql = "SELECT * FROM home";
						        $result =$mysqli->query($sql);
						        if ($result->num_rows > 0) {
						        // output data of each row
						        while($row = $result->fetch_assoc()) {
									$id= $row['id'];
						    ?>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 transform-on-hover">
                  <a class="lightbox" href="#">
                    <img src="./admin/alan/<?php echo $row["product_image"];?>" alt="Card Image" class="card-img-top">
                  </a>
                    <div class="card-body">
                        <h6><a href=""><?php echo $row["product_name"];?></a></h6>
                        
                      <p class="text-muted card-text"><?php echo $row["product_details"];?></p>
                      <button type="button" class="btn btn-outline-secondary"><a href="./menup.php?sa=<?php echo $row["id"];?>">View</a> </button>
                    </div>
                </div>
            </div>
            <?php
                                }
                                }
                            ?>
            <!-- <div class="col-md-6 col-lg-4">
                <div class="card border-0 transform-on-hover">
          <a class="lightbox" href="./images/pack2.png">
                    <img src="./images/pack2.png" alt="Card Image" class="card-img-top" >
                  </a>
                    <div class="card-body">
                        <h6><a href="#">EspreessO Aroma-Mix</a></h6>
                        <p class="text-muted ">The unmistakable full-flavour of ExpressO?? Blend Aroma is what makes our signature.. </p>
                        <button type="button" class="btn btn-outline-secondary">View </button>
                      </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 transform-on-hover">
                  <a class="lightbox" href="./images/pack3.png">
                    <img src="./images/pack3.png" alt="Card Image" class="card-img-top">
                  </a>
                    <div class="card-body">
                        <h6><a href="#">EspreessO Dark Roast</a></h6>
                        <p class="text-muted card-text"> The unmistakable full-flavour of ExpressO?? Dark is what makes our signature..</p>
                        <button type="button" class="btn btn-outline-secondary"><a href="./menup.php" >View </button>
                      </div>
                </div>
            </div> -->
           
          
       
         
        </div>
    </div>
    </section>

<hr class="col-md-11 mx-auto">
<footer class="bg-light text-center text-lg-start ">
  <!-- Grid container -->
  <div class="container-fluid  ">
    <!--Grid row-->
    <div class="row col-md-12 ms-auto">
      <!--Grid column-->
      <div class="col-lg-2 col-md-4  mb-md-0">
        <p class="text-uppercase" style="font-weight: 600;">About Us</p>

        <ul class="list-unstyled mb-0">
         
          <li>
            <a href="#!" class="text-dark">Our New  Coffees</a>
          </li>
        
         
          <br>
          <li>
            <a href="#!" class="text-dark">Stories and News
             
             </a>
          </li>
          <br>
          <li>
            <a href="#!" class="text-dark"> ExpressO Archive</a>

          </li>
          <br>
          <li>
            <a href="#!" class="text-dark">    Investor Relations</a>
            
          </li>
          <br>
          <li>
            <a href="#!" class="text-dark"> Customer Service   </a>
            
          </li>
          <br>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
        <p class="text-uppercase " style="font-weight:600 ;">Careers</p>
         
        <ul class="list-unstyled mb-0">
         
          <li>
            <a href="#!" class="text-dark">Careers & News</a>
          </li>
        
         
          <br>
          <li>
            <a href="#!" class="text-dark">
           
              Culture and Values
             
             </a>
          </li>
          <br>
          <li>
            <a href="#!" class="text-dark"> 
           
              Inclusion, Diversity,Equity</a>

          </li>
          <br>
          <li>
            <a href="#!" class="text-dark">   
             
              College Achievement Plan</a>
            
          </li>
          <br>
          <li>
            <a href="#!" class="text-dark"> Alumni Community
              </a>
            
          </li>
          <br>
          <li>
            <a href="#!" class="text-dark"> 
              International Career </a>
            
          </li>
          
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
        <p class="text-uppercase" style="font-weight: 600;">Social Impact</p>
        <ul class="list-unstyled mb-0">
         
          <li>
            <a href="#!" class="text-dark">People Community
             </a>
          </li>
        
         
          <br>
          <li>
            <a href="#!" class="text-dark"> Planet coffee
             
             </a>
          </li>
          <br>
          <li>
            <a href="#!" class="text-dark">
             
              Social Impact Reporting
          </li>
          <br>
          <li>
            <a href="#!" class="text-dark">Environmental Reporting
             </a>
          </li>
        
         
          <br>
          <li>
            <a href="#!" class="text-dark"> Services
             
             </a>
          </li>
        </ul>
     
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
        <p class="text-uppercase " style="font-weight: 600;" > Business Partners</p>
        <ul class="list-unstyled mb-0">
         
          <li>
            <a href="#!" class="text-dark">Landlord Support Center
             </a>
          </li>
        
         
        
         
          <br>
          <li>
            <a href="#!" class="text-dark">
             
              Suppliers
             
          </li>
          <br>
          <li>
            <a href="#!" class="text-dark">
             
              Corporate Gift Card Sales
            
             </a>
          </li>
          <br>
          <li>
            <a href="#!" class="text-dark">   Office and Coffee service 
             </a>
          </li>
         
          <br>
          <li>
            <a href="#!" class="text-dark">   Office and Food service 
             </a>
          </li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
        <p class="text-uppercase" style="font-weight:600 ;" >Order and Pickup</p>
        <ul class="list-unstyled mb-0">
         
          <li>
            <a href="#!" class="text-dark">Order on the App
             
          </li>
        
         
          <br>
          <li>
            <a href="#!" class="text-dark">  Order on the Web
             
             </a>
          </li>
          <br>
          <li>
            <a href="#!" class="text-dark">
              Delivery & Food
            
            
          </li>
          <br>
          <li>
            <a href="#!" class="text-dark">  Order and Pickup Options
          </li>
        
         
          <br>
          <li>
            <a href="#!" class="text-dark">  Explore and Find Coffee for Home
             
             </a>
          </li>
        </ul>

     
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <br>
  <br>
  <br>
  <div class= "col-md-7 my-3 ">
   <a href="" class="text-dark"> Privacy Policy
|
Terms of Use
|
CA Supply Chain Act
|
Cookie Preferences  </a>
  </div>
  <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2); position: absolute; width: 100%;">
    ?? 2020 Copyright:
    <a class="text-dark " href="">?? 2022 ExpressO Coffee Company. All rights reserved.</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>