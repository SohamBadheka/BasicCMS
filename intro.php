<?php
session_start();

if(isset($_SESSION['user']) && !is_null($_SESSION['user'])){
include("nav.php");

?>
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  <div class="jumbotron">
  <center><h1>Welcome, 
  <?php
  echo $_SESSION['user']; 
  ?>!!!</h1>
  <div class="col-md-2"></div>
  <div class="col-md-8">
  <p style="font-size:18px; font-family:Roboto;">Greetings from the <b>"BasicCMS"</b>. I am working day and night to make the user experience more and more flexible. This is an open source project and I have tried to add as many features as I could. Moreover, the project is available on<a style="font-weight:bold;" href="https://github.com/soham008/BasicCMS">GitHub</a>! 
  </p>
  
</div>
  <div class="col-md-2"></div><br>
  <!--<p>It gives us an immense pleasure to share that our community has been funded by many open source communities and developers so that we can give you the best of our services!</p></center>-->
  <br/></center>
</div>


<center><h1 style="background-color:#eee; font-weight:strong; color:black;">Why Custom CMS !</h1></center><br><br><br><br>
<div class="row">
  <div class="col-md-1"></div>
   <div class="col-md-3">

      <center><span class="glyphicon glyphicon-user" style="font-size:70px;"></span></center>
     
      <div class="caption">
       <center> <h2>User Friendly </h2>
        <p style="font-size:16px; font-family:https://www.google.com/fonts#QuickUsePlace:quickUse/Family:Lora:400italic;">Custom CMS provides you an easy interface that let you interact with the environment ! Everything is easy to manage.</p>
         
        </center>
  
    
      </div>
     </div>
     
    <div class="col-md-4">
   
        <center><span class="glyphicon glyphicon-flash" style="font-size:70px;"></span></center>
      <div class="caption">
       <center> <h2>Robust</h2>
        <p style="font-size:16px;">The environment is a beta version. It needs some testing to be remaining. But, I have tried to make it as robust as possible !</p>
        
        </center>
      
      </div>
     </div>
   
    <div class="col-md-3">
    
        <center><span class="glyphicon glyphicon-phone" style="font-size:70px;"></span></center>

      <div class="caption">
       <center> <h2>Responsive</h2>
        <p style="font-size:16px;">Custom CMS supports mobile devices as well. It can be manageable from various devices and tried to integrate responsiveness.</p>
        
        </center>
    
      </div>
     </div>
       <div class="col-md-1"></div>
     </div>

    <br>
    <br>
    <br>
    <br>
    <br>

<hr>

<div class="row featurette">
<div class="col-md-1"></div>

<div class="col-md-5">
<h1 style="font-size:72px;">Easy to use</h1><br>
<p style="font-size:25px;">I have tried to make the environment as easy as possible. It contains some features like exporting the page in PDF through which you can have a pdf if at all you want your page to be saved on your machine !</p>
</div>
<div class="col-md-1"></div>
<div class="col-md-5">
  <img src="img/easy.png">
</div>

</div>
<hr>

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-5">
<img src="img/Lang.png">
</div>

<div class="col-md-5">
<br>
<h1 style="font-size:72px;">Language Integration!</h1>

<p style="font-size:25px;">I have integrated some of the Indian languages like Gujarati and Hindi. These integration is provided with the edit facility. I have used Google API to integrate that and I have made it open source.</p>

</div>
<div class="col-md-1"></div>
</div>
<hr>


<div class="row">
<div class="col-md-1"></div>

<div class="col-md-5">
<h1 style="font-size:72px;">One Page Portfolio</h1><br>
<p style="font-size:25px;">This will provide you the facility to create your own one page template. This can be used for your portfolio portal. You just need to use the environment and fill up the personal information and you are done !</p>
</div>
<div class="col-md-1"></div>
<div class="col-md-5">
  <img src="img/one_page.png">
</div>
</div>
<hr>
  </body>
</html>

<?php 
}
else
{
  header("index.php");
}
?>

