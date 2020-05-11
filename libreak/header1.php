<!--
this is second header file which is visible after login.
-->

<?php
include_once('link.php');
require_once('connection.php');
session_start();
$enrno = $_SESSION['enrno'];
//$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Libreak</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
    body{
        font-family: "Roboto", sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
		font-size: 14px;
		margin-bottom:5px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
        background-color: white;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body>
    

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#" class="navbar-brand"><img src="img/logo.png" height="30" width="100"></a>
		</div>
       
		<div class="dropdown navbar-right" id="right">
		<div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search books..."/>
        <div class="result"></div>
    </div>
    
  <button class="btn btn-primary dropdown-toggle" type="button" style="background-color:#450fb1; border:None" data-toggle="dropdown"><?php echo $enrno;?>
  <span class='caret'></span></button>
 
  <ul class="dropdown-menu">
  
  	<li><a href="index.php">Home</a></li>  
      <li><a href="home.php">Dashboard</a></li>
	 <li><a href="account.php">Account</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>

</div>
	</div>
</nav>
</body>
</html>