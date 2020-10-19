<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
}

?>


<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href= "homepage.css">
        <link rel = "stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class = "container">
    <a class="float-right" href = "logout.php">Log out<a>
  <h1>  Welcome, <?php echo $_SESSION['username']; ?></h1>

  <div class= "parv">
  <div class = "channels">
  <h2>You can find all the channel lists here!</h2>
 
 <a  class="main" href = "https://en.wikipedia.org/wiki/List_of_Assamese-language_television_channels" target = _blank>List of Assamese</a><br>
  <a  class="main" href = "https://en.wikipedia.org/wiki/List_of_Bengali-language_television_channels_in_India" target = _blank>List of Bengali</a><br>
  <a  class="main" href = "https://en.wikipedia.org/wiki/List_of_Bhojpuri-language_television_channels" target = _blank>List of Bhojpuri</a><br>
  <a  class="main" href = "https://en.wikipedia.org/wiki/List_of_English-language_television_channels_in_India" target = _blank>List of English</a><br>
  <a  class="main" href = "https://en.wikipedia.org/wiki/List_of_Gujarati-language_television_channels" target = _blank>List of Gujarati</a><br>
 

</div>
  <div class = "cities">
  <h2>You can find all the metropolitan cities list here!</h2>
  <a  class="main" href = "https://en.wikipedia.org/wiki/Delhi" target = _blank>Delhi</a><br>
  <a  class="main" href = "https://en.wikipedia.org/wiki/Mumbai" target = _blank>Mumbai</a><br>
  <a class="main"  href = "https://en.wikipedia.org/wiki/Kolkata" target = _blank>Kolkata</a><br>
  <a  class="main" href = "https://en.wikipedia.org/wiki/Chennai" target = _blank>Chennai</a><br>



  </div>
</div>
</div>
<button type = "button" ><a href = "secondepage.html" id = "btn" >Next>></a></button>

<!-- <footer class = "footer">
    <h3>LAB EXERCISE 2020</h3>
</footer> -->
</body>

</html>


<!-- food -->
