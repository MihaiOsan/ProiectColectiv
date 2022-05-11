<?php session_start();
include 'config.php';

error_reporting(0);

session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styleAll.css">
</head>
<body>
<?php include 'navbar.php' ?>
<div class="about-section">
  <h1 >Sports Event Planner</h1>
  <p>An easier way to bring people together.</p>
  <p>Fitness is not just a passion, it is a lifestyle.</p>
</div>

<h1 style="text-align:center;padding:20px">Some things that you can do on our app.</h1>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="meme1.jpeg" alt="Jane" style="width: 80%;padding:5px">
      <div class="container">
        <h2 style="padding-bottom:30px">Create an event</h2>
        <p class="title" style="padding-left:30px;padding-right:40px;padding-bottom:20px">By using our site you can create a sport event and invite your friends to attend. They have a specific number of days (set by you) in which they can confirm the places and not be taken by other site users. After those days, if there are some places available, anyone using the app can attend your event.</p>
        <p><a href="createEvent.php" class="button" style="color:white"><b>Try it yourself</b></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="meme2.jpeg" alt="Mike" style="width: 80%;padding:5px">
      <div class="container">
        <h2 style="padding-bottom:30px">Search for an event</h2>
        <p class="title"></p>
        <p class="title" style="padding-left:30px;padding-right:40px;padding-bottom:20px">If you do not have friends that play a sport that you like, you can simply search an event that suits you best. There are a series of fields that you can complete (day, sport type, location) in order to find the perfect event. </p>
        
        <p><a href="searchEvent.php" class="button" style="color:white"><b>Try it yourself</b></a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="meme3.jpeg" alt="John" style="width: 80%;padding:5px">
      <div class="container">
        <h2 style="padding-bottom:30px">Manage your next events</h2>
        <p class="title" style="padding-left:30px;padding-right:40px;padding-bottom:20px">In this site you can manage your events that you have joined. You can cancel your attendance in the case you do not want to participate anymore.</p>
        
        <p><a href="nextEvents.php" class="button" style="color:white"><b>Try it yourself</b></a></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>

