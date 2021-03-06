<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Notes</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="kepstyle.css">
	<link rel="stylesheet" href="navstyle.css">
	<link rel="stylesheet" href="modastyle.css">
	<link rel="stylesheet" href="searchbar.css">
	<script src="calculate.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
	<!--<div class="heading">
		<h1><i class="fa fa-sticky-note" aria-hidden="true"></i>Notes

		<button id="mode">Dark-mode</button>
	</h1>
	</div>-->
	<nav>
	<div id="nav" class="navm">
	<h1><i class="fa fa-sticky-note" aria-hidden="true"></i>Notes</h1>
    </div>
    	<div class="search-box">
			<input type="text" id="search-txt" placeholder="Type to search" value="">
			<a class="search-btn" href="#">
				<i class="fas fa-search"></i>
			</a>

		</div>
    <ul class="links">
    	<li>
    		<a href="logout.php">Home</a>
    	</li>
    	
    	<li>
    		<a href="#" id="btncall">Calculator</a>
    	</li>
    	<li>
    		<a href="logout.php">Logout</a>
    	</li>
    	<li>
    		<!--<a href="#">Contacts</a>-->
    		<input type="checkbox" class="checkbox" id="chk" />
	        <label class="label" for="chk">
		<!--<i class="far fa-sun"></i>
		<i class="fas fa-moon"></i>-->
		<div class="ball"></div>
	    </label>
    	</li>
    </ul>
    <div class="burger">
    	<div class="line1"></div>
    	<div class="line2"></div>
    	<div class="line3"></div>
    </div> 
</nav>
	<div class="btn-div">
		<button class="learn-more" class="add" id="add">
		<span class="circle" aria-hidden="true">
		<span class="icon arrow"></span>
		</span>
		<span class="button-text">Add-Notes</span>
		</button>	
	</div>
	<div id="modal" class="model">
		<div class="content">
			<!--<div class="header">
				
				 <span class="close">&times;</span>
				 <h2>HEADER</h2>
			</div>
			<div class ="txtcontent">
				<h2 style="text-align:center">
					HEY!
				</h2>
				<p>WELCOME<br>
				How's Going </p>

			</div>
			<div class="footer">
				<h2>Tail</h2>

			</div>!-->
			<table>
		<tr>
			<td colspan="3"><input type="text" id="result"/></td>
			<td><input type="button" value="AC" onclick="clr()"/></td>
		</tr>
		<tr>
			<td><input type="button" value="1" onclick="dis('1')"/></td>
			<td><input type="button" value="2" onclick="dis('2')"/></td>
			<td><input type="button" value="3" onclick="dis('3')"/></td>
			<td><input type="button" value="+" onclick="dis('+')"/></td>
		</tr>
		<tr>
			<td><input type="button" value="4" onclick="dis('4')"/></td>
			<td><input type="button" value="5" onclick="dis('5')"/></td>
			<td><input type="button" value="6" onclick="dis('6')"/></td>
			<td><input type="button" value="-" onclick="dis('-')"/></td>
		</tr>
		<tr>
			<td><input type="button" value="7" onclick="dis('7')"/></td>
			<td><input type="button" value="8" onclick="dis('8')"/></td>
			<td><input type="button" value="9" onclick="dis('9')"/></td>
			<td><input type="button" value="/" onclick="dis('/')"/></td>
		</tr>
		<tr>
			<td><input type="button" value="0" onclick="dis('0')"/></td>
			<td><input type="button" value="." onclick="dis('.')"/></td>
			<td><input type="button" value="=" onclick="solve()"/></td>
			<td><input type="button" value="*" onclick="dis('*')"/></td>
		</tr>
	</table>
		</div>
	</div>
	<script type="text/javascript" src="kepcode.js"></script>
	<script src="navcode.js"></script>
	<script type="text/javascript" src="modecode.js"></script>
	<script type="text/javascript"src="modalcode.js"></script>
	
	</body>
	</html>