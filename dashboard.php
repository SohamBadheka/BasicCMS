<?php

  session_start();
 if(!isset($_SESSION['user']))
 {
  
  header("Location:index.php");

 }
 else
 {

    include("includes.php");
    include("nav.php");

?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>
 <div class="jumbotron">
  <center>
  <div class="col-md-2"></div>
  <div class="col-md-8">
  <p style="font-size:20px;">This is your Dashboard, your area. You will find all your work overhere!</p>
  <a class="btn btn-lg btn-success" href="create_cms.php" type="button">Create</a>
<br>

</div>
  <div class="col-md-2"></div>

  </center></div>
  <br>
<?php 

  $rs=mysql_query("select * FROM webpages where Iden='".$_SESSION['user']."'");
    echo "<div class=\"col-md-2\"></div>";

  echo "<div class=\"col-md-8\">";
  echo "<div class=\"panel panel-default\">";

  echo  "<div class=\"panel-heading\">Webpages You Created!</div>";
  
  echo "<table class=\"table\" border=\"2\" align=\"left\">";
  $i=1;
  echo"<thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Activity</th>
          </tr>
      </thead>";
  while($row=mysql_fetch_array($rs))
  {
    
    
  echo "<tbody>
          <tr>
            <td>".$i."</td>";
           
    echo "<td><a href=\"display_cms.php?id=$row[Id]\">".$row['title']."</a></td>";
    echo "<td><a href=\"edit_content.php?id=$row[Id]\"> Edit    </a><a href=\"delete_content.php?id=$row[Id]\">    Delete</a></td></tr></tbody>";
        
  

$i++;
  }
  echo "</table></div></div>";
}
?>
