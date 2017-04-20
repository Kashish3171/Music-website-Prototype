


<?php
	// Check if session is not registered, redirect back to main page. 
	session_start();
	if(!isset($_SESSION['email'])) {

    header("location:main_page.php");
	}
?>



<html>
<head>

<link href='//fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href="https://file.myfontastic.com/8StguwYpG9DPUN2SSZCZnb/icons.css" rel="stylesheet">
<style>

html,body{

background-image:url("taylorswiftred.jpg");
    background-repeat: no-repeat;
    
    background-attachment: fixed;
    height: 100%;width: 100%;background-size: cover;overflow: hidden;
    }
ul { 
    list-style-type: none;
    float: none;text-align: center;


}
li{

display: inline-block;margin-right: 40px;text-align: center;


}
a{ }

li{font-size: 28px;
    font-family: sofia;
    }
a:link { color:white;
    text-decoration: none;
text-decoration:blue;
}
a:visited { color:white;
    text-decoration: none;
}
a:hover { color:green;
    text-decoration: none;
}
a:active { color:white;
    text-decoration: none;
}
h2{font-size:40; color:black; }

h1{ font-size:35; 
color:blue;}

h3{ font-size:35; 
color:#333366;}
#rcorner{border-radius:25px; }
}
.header{
    float: none;text-align: center;
}
form{
    
    margin-right: 70px;
    margin-top: 120px;padding:20px;border:1px solid #9E9E9E;
}
.formdiv{
position: static;float: right;
}
.form-grp{
    margin-bottom: 20px;width: 304px;
}
label{
    font-size: 20px;color: white;font-family: sofia;width: 100px;display: inline-block;
}
.form-control{
width: 200px;display: inline-block;
}
input{
        width: 200px;
    display: inline-block;
    height: 30px;
    border-radius: `0%;
    background-color: rgb(249, 249, 249);
    border-radius: 40px;font-size: 18px;color: black;
}

button{
    color: white;
    font-family: sofia;
      background-color: #607D8B;
    border: none;
    width: 130px;
    height: 25px;
    margin-left: 150px
}
.formfooter{
    float: none;text-align: center;font-family:serif;font-size: 22px;color: white;text-transform: lowercase;font-style: italic;
}
.icon-note{       color: rgba(0, 0, 0, 0.68);
    font-size: 44px;
    border: 4px solid rgba(0, 0, 0, 0.72);
    padding-top: 20px;
    border-radius: 100%;
    padding-right: 30px;
    padding-top: 30px;
    padding-bottom: 25px;
    padding-left: 25px;
    background-color: white;
    top: 32%;
    position: absolute;
    box-shadow: inset -1px 0px 20px 6px #d8d5d5;
    left: 8%;}
.icon-note-beamed{
        color: rgba(0, 0, 0, 0.68);
    font-size: 44px;
    border: 4px solid rgba(0, 0, 0, 0.72);
    padding-top: 20px;
    border-radius: 100%;
    padding-right: 30px;
    padding-top: 30px;
    padding-bottom: 25px;
    padding-left: 25px;
    background-color: white;
    top: 32%;
    position: absolute;
    box-shadow: inset -1px 0px 20px 6px #d8d5d5;
    left: 18%;
}
.icon-video{
        color: rgba(0, 0, 0, 0.68);
    font-size: 44px;
    border: 4px solid rgba(0, 0, 0, 0.72);
    padding-top: 20px;
    border-radius: 100%;
    padding-right: 30px;
    padding-top: 30px;
    padding-bottom: 25px;
    padding-left: 25px;
    background-color: white;
    top: 32%;
    position: absolute;
    box-shadow: inset -1px 0px 20px 6px #d8d5d5;
    left: 28%;
}
.maintext{
  float: none;text-align: center;font-family: sofia;font-size: 28px;color: white;
}
.maintext span{
  border-bottom: 2px solid slategrey;line-height: 2em;
}
</style>

</head>
<body>
<div class="header">
<ul >
 
<li ><b><a href="main_page.php"> Home</a></b></li>

<li ><b><a href="artist.html"> Artists</a></b></li>

  </b></li>
  <li><b><a href="contact_us.html">Contact Us</a></b></li>
<li ><b><a href="admin1.html">Admin Panel</a></b></li>
</ul>
</div>
<span class="icon-note"></span>

<span class="icon-note-beamed"></span>

<span class="icon-video"></span>

          <div class="maintext"><span>Login Successful</span>
	<br>
  <span>
	Welcome <?php echo $_SESSION['email']; ?></span>
	</br> 

<span>	<a href="logout.php">Click here to LOGOUT</a> </span>

</div>


<div style="position: absolute;bottom:0;float: none;text-align: center;width: 100%;padding-bottom: 20px;">

<hr>
<center><i><span style="color: #f5efef;font-family: sofia;font-size: 40px;float: none;text-align: center;"> Its all about the Music! </span></i></center>
<hr>
</div>
</body>
</html>


