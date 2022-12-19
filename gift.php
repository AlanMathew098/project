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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> 
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
     <ul class="navbar-nav ms-auto ">
      <li class="nav-item active">
        <a class="nav-link " href="./store.php"><i class="bi bi-geo-alt-fill mx-2"></i>Find a Store</a>
      </li>
      <button type="button" class="btn btn-outline-dark  my-3 mx-2"><a href="./logins.php" class="text-dark">Log In</a></button>
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
<div class="container ">
  <h1 class="mx-4 my-5 " style="font-size:19px; font-weight: 600; " >Featured</h1>
  <div class="brand-carousel section-padding owl-carousel">
 
    <div class="single-logo my-1">
      <img src="./images/r6.png" alt="">
    </div>
  <div class="single-logo my-1">
      <img src="./images/r5.png" alt="">
    </div>
  <div class="single-logo my-1">
      <img src="./images/r1.png" alt="">
    </div>
  <div class="single-logo my-1">
      <img src="./images/r4.png" alt="">
      
    </div>
  <div class="single-logo">
      <img src="./images/r2.png" alt="">
    </div>
  <div class="single-logo my-1">
      <img src="./images/r3.png " alt="">
    </div>
    <div class="single-logo my-1">
      <img src="./images/r7.png " alt="">
    </div>
  </div>
  </div>
  <div class="container ">
    <h1 class="mx-4 my-5 " style="font-size:19px; font-weight: 600; " >#Halloween</h1>
    <div class="brand-carousel section-padding owl-carousel">
   
      <div class="single-logo my-1">
        <img src="./images/a1.png" alt="">
      </div>
   
    <div class="single-logo my-1">
        <img src="./images/a2.jpg" alt="">
      </div>
    <div class="single-logo my-1">
        <img src="./images/a3.jpg" alt="">
        
      </div>
    <div class="single-logo">
        <img src="./images/a4.jpg" alt="">
      </div>
    <div class="single-logo my-1">
        <img src="./images/a5.png " alt="">
      </div>
      <div class="single-logo my-1">
        <img src="./images/a6.png " alt="">
      </div>
      <div class="single-logo my-1">
        <img src="./images/a7.png " alt="">
      </div>
    </div>
    </div>
    <div class="container ">
      <h1 class="mx-4 my-5 " style="font-size:19px; font-weight: 600; " >#Diwali</h1>
      <div class="brand-carousel section-padding owl-carousel">
     
        <div class="single-logo my-1">
          <img src="./images/d1.png" alt="">
        </div>
     
      <div class="single-logo my-1">
          <img src="./images/d2.png" alt="">
     
      </div>
      <div class="single-logo my-1">
        <img src="./images/d3.png" alt="">
   
    </div>
    <div class="single-logo my-1">
      <img src="./images/d4.png" alt="">
 
  </div>
  <div class="single-logo my-1">
    <img src="./images/d5.png" alt="">

</div>
<div class="single-logo my-1">
  <img src="./images/d6.png" alt="">

</div>
      </div>
      </div>
      <div class="container ">
        <h1 class="mx-4 my-5 " style="font-size:19px; font-weight: 600; " >#Happy Birthday</h1>
        <div class="brand-carousel section-padding owl-carousel">
       
          <div class="single-logo my-1">
            <img src="./images/h1.png" alt="">
          </div>
       
        <div class="single-logo my-1">
            <img src="./images/h2.png" alt="">
       
        </div>
        <div class="single-logo ">
          <img src="./images/h4.png" alt="">
     
      </div>
      <div class="single-logo">
        <img src="./images/h5.png" alt="">
   
    </div>
    <div class="single-logo my-1">
      <img src="./images/h6.png" alt="">
  
  </div>
  <div class="single-logo my-1">
    <img src="./images/h3.png" alt="">
  
  </div>
        </div>
        </div>
        <div class="container ">
          <h1 class="mx-4 my-5 " style="font-size:19px; font-weight: 600; " >#Travel</h1>
          <div class="brand-carousel section-padding owl-carousel">
         
            <div class="single-logo my-1">
              <img src="./images/t1.png" alt="">
            </div>
         
          <div class="single-logo my-1">
              <img src="./images/t2.png" alt="">
         
          </div>
          <div class="single-logo ">
            <img src="./images/t3.png" alt="">
       
        </div>
        <div class="single-logo">
          <img src="./images/t41.png" alt="">
     
      </div>
      <div class="single-logo my-1">
        <img src="./images/t5.png" alt="">
    
    </div>
    <div class="single-logo my-1">
      <img src="./images/t6.png" alt="">
    
    </div>
          </div>
          </div>
          <div class="container ">
            <h1 class="mx-4 my-5 " style="font-size:19px; font-weight: 600; " >#Thank You</h1>
            <div class="brand-carousel section-padding owl-carousel">
           
              <div class="single-logo my-1">
                <img src="./images/u1.png" alt="">
              </div>
           
            <div class="single-logo my-1">
                <img src="./images/u2.png" alt="">
           
            </div>
            <div class="single-logo ">
              <img src="./images/u4.png" alt="">
         
          </div>
          <div class="single-logo">
            <img src="./images/u3.png" alt="">
       
        </div>
        <div class="single-logo my-1">
          <img src="./images/u5.png" alt="">
      
      </div>
      <div class="single-logo my-1">
        <img src="./images/u6.png" alt="">
      
      </div>
            </div>
            </div>
            <div class="container ">
              <h1 class="mx-4 my-5 " style="font-size:19px; font-weight: 600; " >#Encouragement</h1>
              <div class="brand-carousel section-padding owl-carousel">
             
                <div class="single-logo my-1">
                  <img src="./images/x1.png" alt="">
                </div>
             
              <div class="single-logo my-1">
                  <img src="./images/x2.png" alt="">
             
              </div>
              <div class="single-logo ">
                <img src="./images/x3.png" alt="">
           
            </div>
            <div class="single-logo">
              <img src="./images/x4.png" alt="">
         
          </div>
          <div class="single-logo my-1">
            <img src="./images/x5.png" alt="">
        
        </div>
        <div class="single-logo my-1">
          <img src="./images/x6.png" alt="">
        
        </div>
              </div>
              </div>
              <div class="container ">
                <h1 class="mx-4 my-5 " style="font-size:19px; font-weight: 600; " >#Season</h1>
                <div class="brand-carousel section-padding owl-carousel">
               
                  <div class="single-logo my-1">
                    <img src="./images/s11.png" alt="">
                  </div>
               
                <div class="single-logo my-1">
                    <img src="./images/s2.png" alt="">
               
                </div>
                <div class="single-logo ">
                  <img src="./images/s3.png" alt="">
             
              </div>
              <div class="single-logo">
                <img src="./images/s4.png" alt="">
           
            </div>
            <div class="single-logo my-1">
              <img src="./images/s5.png" alt="">
          
          </div>
          <div class="single-logo my-1">
            <img src="./images/s6.png" alt="">
          
          </div>
                </div>
                </div>
 <script>
   $('.brand-carousel').owlCarousel({
loop:true,
margin:10,
autoplay:true,
responsive:{
0:{
  items:1
},
600:{
  items:3
},
1000:{
  items:5
}
}
}) 

 </script>
 <div class="container- my-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <img src="./images/table.jpg" alt="" class="img-fluid" width="634px">
    </div>
    <div class="col-md-5 img-fluid">
      <h1 style="font-size: 27px; font-weight: 600;">Gift Cards in Bulk</h1>
     
      <p>There’s an easier way to buy Starbucks<br> Cards in bulk! Give a Starbucks<br> Card to gift, reward, incentivize, or show <br> appreciation towards your customers, <br>clients and team members.:

      </p>
      <button type="button" class="btn btn-outline-secondary img-fluid">Shop now</button>
     
   
    </div>
    
  </div>
</div>
<section>
  <div class="container-">
      <div class="farm">
          <img src="./images/story 1.jpg" class="fox"  width="" alt="Wild Landscape" />
      </div>
  </div>
</section>

  <hr class="col-md-11 mx-auto ">
    <footer class="bg-light text-center text-lg-start my-4 ">
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
        © 2020 Copyright:
        <a class="text-dark " href="">© 2022 ExpressO Coffee Company. All rights reserved.</a>
      </div>
      <!-- Copyright -->
    </footer>
</body>
</html>