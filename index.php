<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plants</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/main.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container-fluid">
   <header>
       <nav class="navbar nav">
       <div class="wrapper">
  <div class="icon-search-container" data-ic-class="search-trigger">
    <span class="fa fa-search"></span>
    <input type="text" class="search-input" data-ic-class="search-input" placeholder="Search"/>
    <span class="fa fa-times-circle" data-ic-class="search-clear"></span>
  </div>
</div>
       <h3 class="nav-items m-auto">HOUSE <i>of</i> PLANTS</h3>
        </nav>
        <nav role='navigation'>
  <div id="menuToggle">
    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
    <input type="checkbox" />
    
    <!--
    Some spans to act as a hamburger.
    
    They are acting like a real hamburger,
    not that McDonalds stuff.
    -->
    <span></span>
    <span></span>
    <span></span>
    
    <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
    <ul id="menu">
      <a href="#"><li>Home</li></a>
      <a href="#"><li>About</li></a>
      <a href="#"><li>Info</li></a>
      <a href="#"><li>Contact</li></a>
      <a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>
    </ul>
  </div>
  
</nav>
<div class="img" >
    <a href="#"><img src="img/fl.png " width="70px" alt=""></a>
    </div>
    </header>
    <div class="container">
    
    <div class="row">
    <div class="col-md-6">
    <div class="come mt-5"> 
    <img src="img/plant.png"  width="500px"
     alt="">
    </div>

    </div>
    <div class="col-md-6 mt-5">
    <h5>PLNTOPEDIA</h5>
    <H1>Monstera <br>Deliciosa</H1>
    <h5>AKA SWISS CHEESE PLANT</h5>
    <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus doloribus natus ducimus atque ab quae ist
        e consequuntur. Distinctio quas est nihil dignissimos, fugiat, reiciendis cum sit quia, eos saepe rem.</P>
     <div class="button">
     <button class="btn-1" >MORE INFO</button>
     <button class="btn-2">A-Z INDEX</button>
     </div>
    </div>
    <div class="hart">
    <div class="long-arrow-right"></div>
   <div class="long-arrow-left"></div>
    

    </div>  
    </div>
    </div>
   
   </div>
   <section>
       <footer>
           <div class="footer-section">
               <button  class="foot">BRIGHT INDIRECT LIGHT</button>
               <button class="foot">AVERAGE WARMTH</button>
               <button class="foot">WATER WELL</button>
               <button class="foot btn btn-success">BUYING OPTION</button>
           </div>
       </footer>
   </section>
  
</body>
</html>