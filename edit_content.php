<?php

  $a=$_GET['id'];

  session_start();

	if(!$_SESSION['user'])
	{
  	header("Location: index.php");
	}
else
{
  include("includes.php");

   include("nav.php");

?>



<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

  

   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/bootstrap.min.js"></script>





<!--<script src="jquery.js"></script>-->

</head>

<script type="text/javascript">

var id = "<?php echo $a; ?>";   

  



function def()

{

  document.getElementById("textEditor").contentWindow.document.designMode="on";

  textEditor.document.open();

  textEditor.document.write('<head><style type="text/css">body{ font-family:arial; font-size:13px;}</style></head>');

  textEditor.document.close();

  document.getElementById("fonts").selectedIndex=0;

  document.getElementById("size").selectedIndex=1;

  document.getElementById("color").selectedIndex=0;

}

function fontEdit(x,y)

{

      document.getElementById("textEditor").contentWindow.document.execCommand(x,"",y);

       textEditor.focus();

}

  function Image()

{

  myimg = prompt('Enter Image URL:','');

  document.getElementById('textEditor').contentWindow.document.execCommand('InsertImage', false, myimg);

}



 function getFrameContents(){

   var iFrame =  document.getElementById('textEditor');

   var iFrameBody;

   if ( iFrame.contentDocument ) 

   { // FF

     iFrameBody = iFrame.contentDocument.getElementsByTagName('body')[0];

   }

   else if ( iFrame.contentWindow ) 

   { // IE

     iFrameBody = iFrame.contentWindow.document.getElementsByTagName('body')[0];

   }

   var id = "<?php echo $a; ?>";   

  

  var a=document.getElementById('pagen').value;

  var b=iFrameBody.innerHTML ;

  //alert(a.length);

  if(a.length<1 || b.length<1)

  {

     alert("Na chale bhai, Lakhvu to pade kaik!");

 

  }

// alert(b);

  else

  {

    //alert(b);

    $.post("store_cms2.php",{content:b,title:a,p:id}, function(data){

   

    window.location="dashboard.php";



 });

  }

}

 

</script>





<title>Administrator Panel - Create Page</title>



<body onLoad="def()"><center>







<div class="jumbotron">

    <center><h2>Welcome and Enjoy the Experience!<?php echo $_SESSION['user']; ?></h2></center>

  </div>

  

  <div class="row">

  <div class="col-md-2"></div>

  

<div class="col-md-8">

  



  <?php



  $a=$_GET['id'];



  include("includes.php");

 

    $query=mysql_query("select title from webpages where Id=".$a."") or die(mysql_error());

    $rw=mysql_fetch_array($query);

    echo "<textarea id=\"pagen\" style=\"width:800px;\"required>".$rw['title']."</textarea>";


  ?>

  <div style="width:1000px; text-align:center; margin-bottom:10px ">





<button type="button" id="bold" class="btn btn-default btn-sm" onClick="Image()" /><span class="glyphicon glyphicon-camera" type="button" style="font-size:18px;"></span></button>





<button type="button" id="bold" class="btn btn-default btn-sm" onClick="fontEdit('bold')" /><span class="glyphicon glyphicon-bold" type="button" style="font-size:18px;"></span></button>



<button type="button" id="italic" class="btn btn-default btn-sm" onClick="fontEdit('italic')" /><span class="glyphicon glyphicon-italic" type="button" style="font-size:18px;"></span></button>



<button type="button" id="underline" class="btn btn-default btn-sm" onClick="fontEdit('underline')" /><span class="glyphicon glyphicon-text-width" type="button" style="font-size:18px;"></span></button>



<button type="button" id="left" class="btn btn-default btn-sm" onClick="fontEdit('justifyleft')" /><span class="glyphicon glyphicon-align-left" type="button" style="font-size:18px;"></span></button>



<button type="button" id="center" class="btn btn-default btn-sm" onClick="fontEdit('justifycenter')" /><span class="glyphicon glyphicon-align-center" type="button" style="font-size:18px;"></span></button>



<button type="button" id="right" class="btn btn-default btn-sm" onClick="fontEdit('justifyright')" /><span class="glyphicon glyphicon-align-right" type="button" style="font-size:18px;"></span></button>



<button type="button" id="bold" class="btn btn-default btn-sm" onClick="fontEdit('delete')" /><span class="glyphicon glyphicon-remove" type="button" style="font-size:18px;"></span></button>

 





<select id="fonts" onChange="fontEdit('fontname',this[this.selectedIndex].value)">



<option value="Arial">Arial</option>



<option value="Comic Sans MS">Comic Sans MS</option>



<option value="Courier New">Courier New</option>



<option value="Monotype Corsiva">Monotype</option>



<option value="Tahoma">Tahoma</option>



<option value="Times">Times</option>



</select>





<select id="size" onChange="fontEdit('fontsize',this[this.selectedIndex].value)">



<option value="3">1</option>



<option value="4">2</option>



<option value="5">3</option>



<option value="6">4</option>



<option value="7">5</option>



</select>



<select id="color" onChange="fontEdit('ForeColor',this[this.selectedIndex].value)">



<option value="black">Black</option>



<option style="color:red;" value="red">Red</option>



<option style="color:blue;" value="blue">Blue</option>



<option style="color:green;" value="green">Green</option>



<option style="color:pink;" value="pinks">Pink</option>



</select> | 



<button type="button" id="bold" class="btn btn-default btn-sm" onClick="fontEdit('insertorderedlist')" /><span class="glyphicon glyphicon-list" type="button" style="font-size:18px;"></span></button>



<button type="button" id="bold" class="btn btn-default btn-sm" onClick="fontEdit('insertorderedlist')" /><span class="glyphicon glyphicon-list" type="button" style="font-size:18px;"></span></button>





<input type="button" style="height:21px; width:50px;"value="Hr" onClick="fontEdit('insertHorizontalRule')" title="Horizontal line">



<input type="button" style="height:21px; width:60px;"value="para" onClick="fontEdit('insertParagraph')" title="Para">



</div>

<div class="embed-responsive embed-responsive-16by9">

<?php 



$a=$_GET['id'];



echo "<iframe id=\"textEditor\"class=\"embed-responsive-item\" src=\"fetch_content.php?id=$a\" style=\"height:500px; width:800px;\"></iframe>";



?>

</div>

<br>

<button type="button" value="submit" class="btn btn-primary" onClick="getFrameContents()" />Submit</button>

<br>





</center>

</div>

<div class="col-md-2"></div>

</div>





</body>

</html>
<?php
} 
?>