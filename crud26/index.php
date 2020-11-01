<!DOCTYPE>
<html>
<head>
<title>Student Details</title>
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<style>
  
@import url(http://fonts.googleapis.com/css?family=Raleway);

#main{
	background-color: black;
	color: cyan;
width:960px;
margin:50px auto;
font-family: 'Raleway', sans-serif;
}

h2{
background-color: white;
color: black;
text-align:center;
border-radius: 10px 10px 0 0;
margin: -5px -40px;
padding: 10px;
}

hr{
border:0;
border-bottom:1px solid #ccc;
margin: 10px -40px;
margin-bottom: 30px;
}

#login{
width:300px;
background-color: white;
color: black;
float: left;
border-radius: 10px;
font-family:raleway;
border: 2px solid #ccc;
padding: 10px 40px 25px;
margin-top: 70px;
}

input[type=text],input[type=email]{
width:99.5%;
color: black;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 16px;
font-family:raleway;
}

input[type=text],input[type=password]{
width:99.5%;
color: black;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 16px;
font-family:raleway;
margin-bottom:15px;
}

input[type=submit]{
width: 100%;
background-color:black;
color: white;
border: 2px solid #FFCB00;
padding: 10px;
font-size:20px;
cursor:pointer;
border-radius: 5px;
margin-bottom: -12px;
}

#formget{
float:right;
}
h1 {
margin-left: 230px;
}

table{
	padding:150px;
}

th, td {
  border: 1px solid black;
  padding: 10px;
  border-spacing: 2px;
  font-family: 'Raleway', sans-serif;
}

#img{
	position: relative;
	top: 140px;
	height: 500px;
	width:500px;
}
</style>
</head>
<body>

<div id="main">
<h1>Participants Register Yourself Here</h1>
<div id="login">
<h2>Registration Form</h2>
<hr/>
<form name = "form1" action="listing.php" method = "post" enctype = "multipart/form-data" >    
            <div class = "container"> 
            <div class = "form_group">    
                    <label>Id:</label>    
                    <input type = "text" name = "id" value = "" required/>    
                </div>      
                <div class = "form_group">    
                    <label>First Name:</label>    
                    <input type = "text" name = "fname" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Middle Name:</label>    
                    <input type = "text" name = "mname" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Last Name:</label>    
                    <input type = "text" name = "lname" value = "" required/>    
                </div>    
                 <div class = "form_group">    
                    <label>Email:</label>    
                    <input type = "email" name = "email" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Password:</label>    
                    <input type = "password" name = "pwd" value = "" required/>    
                </div>    
                <input type="submit" name="save" value="Submit">


            </div>    
        </form>    
</div>
<!-- Right side div -->
<div id="formget">
<a href=# ><img src="openmic.jpg" id="img" alt="MITAOE"/></a>
</div>

</div>