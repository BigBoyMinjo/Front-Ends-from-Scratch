<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>OneChef</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- For the responsive website -->
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS page reset code -->
    <link rel="stylesheet" href="css/review.css">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" /> <!-- Tab logo -->
  </head>
  <body>
    <div id="galvene"><div id="logo-box"><a href="index.php"><img src="img/white_logo.png" alt="OneChef logo" id="logo"></div></a></div>



    <form action="backend/review.inc.php" method="post">
      <textarea id="rev_form" name="review" rows="8" cols="60" maxlength="500" placeholder="Here you can leave a review of the webpage or/and all the avalaible functions. We will appreaciate all of them! We also are listening to suggestions what to upgrade. :)"></textarea>
      <input type="submit" name="submit" value="Submit" id="submit">   <!-- USE A BRAKE BETWEEN TO MAKE THE INPUTS IN DIFFERENT LINES -->
    </form>













    <div class="footer">
      <ul class="uli">
        <li><a id="who" href="become-reg.php"><span style="color: rgba(255, 255, 0, 1);">Become a chef/bartender</span></a></li>
        <li><a id="who" href="who.php" title="Find out">Who are we?</a></li>
      </ul>
      <div class="made-by"><h2 id="made-by" title="Did you know that Latvia won the 2002 Eurovision song contest!">Made by OneChef from Latvia</h2></div>
    </div>
  </body>
</html>
