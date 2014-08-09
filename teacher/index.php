<?php
include 'header.php';
include 'footer.php';
?>

<html>
<head>
<title>School Administrative System </title>
<link href = "css/style.css" rel = "stylesheet" />
</head>
<body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
 
<style> 
#panel,#flip
{
padding:5px;
text-align:center;
background-color:#e5eecc;
border:solid 1px #c3c3c3;
}
#panel
{
padding:50px;
display:none;
}
</style>
</head>
<body>
 
<div id="flip">Click to slide the panel down or up</div>
<div id="panel">Hello world!</div>

/*more code*/
<div class="div1" style="padding-top:100px;">
    <h2>STAFF</h2>
    <table align="left" class = "index-table" >
    <tr>
    <td><a href = "login_form.php" />OFFICE OF THE VICE CHANCELLOR</a></td>
    </tr>    
    <tr>
    <td><a href = "login_form.php" />OFFICE OF THE REGISTRAR</a></td>
    </tr>   
    <tr>
    <td><a href = "login_form.php" />ACCOUNTS AND FINANCE</a></td>
    </tr>
    <tr>
    <td><a href = "login_form.php" />ADMINISTRATION</a></td>
    </tr>
    <tr>
    <td><a href = "login_form.php" />IT SYSTEMS OFFICE</a></td>
    </tr>
    
    </tr>
    </table>
</div>
</body>
</html>