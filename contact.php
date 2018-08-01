<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<meta name="description" content="Fan Hub is a free app for sports fans that saves them money on travel and rewards them for their loyalty. Users can track how many miles they've travelled and see where they feature in a leaderboard compared to other fans."><!-- <<<<   Add a brief decription of your app -->

<title>FanHub - Fan Loyalty Rewarded</title>

<!----  User-Scalable = NO  ---->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

<!----  CSS  ---->
<link href="site/css/styles.css" rel="stylesheet" type="text/css" />

<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

</head>

<body>

<div class="inner_page">

<div class="header">

  <ul class="menu">
    <li><a href="/">Home</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="clubs.php">Clubs</a></li>
    <li><a target="_blank" href="https://medium.com/fan-hub">Blog</a></li>
    <!-- <li><a href="/trains">Trains</a></li> -->
  </ul>

  <div class="contact">

<?php if (isset($_GET['thanks'])): ?>

<h1 class="center">Thanks!</h1>
<p class="center">We'll be in touch soon. </p>

<?php else: ?>

<h1>Contact FanHub</h1>
    <form action="https://api.formbucket.com/f/buk_3eOpGkRFzIhbx6yElgvs1H45" method="post" target="_blank">
      <label for="name">Your Name</label>
      <input type="text" name="name" placeholder="John Doe"/>

      <label for="email">Your Email</label>
      <input type="email" name="email" placeholder="john@doe.com"/>

      <label for="reason">Reason for Contacting</label>
      <select name="reason" id="reason">
        <option value="user">User Support or Feedback</option>
        <option value="club">A Club Seeking To Engage and Reward Fans</option>
        <option value="brand">A Brand Seeking To Engage and Reward Fans</option>
      </select>

      <label for="message">Message</label>
      <textarea name="message" id="message" cols="30" rows="10"></textarea>

      <input type="submit" value="Send" />

    </form>

<?php endif ?>

  </div>

</div>



<!-- Footer -->


<div class="footer">
  <div class="inner_wrapper">
    <div class="footer_social_icons">
      <a href="https://twitter.com/Fan_Hub2018" class="twitter_icon"></a>
      <a href="https://www.facebook.com/fan.hub.351" class="fb_icon"></a>
      <a href="https://www.instagram.com/fanhub2018/" class="ig_icon"></a>
      <a href="#" class="appstore_icon"></a>
    </div>
     
    <p>FanHub</p>
    <p class="copyright">© 2018</p>
  </div>

</div>

</div>
<!----  Scripts ---->
<script src="site/js/jquery-1.9.1.min.js"></script>
<script src="site/js/site.js"></script>


<!----  Preload Images  ---->
<script>
function MM_preloadImages() { //v3.0
var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>


</body>
</html>