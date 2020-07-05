<?php 
include_once "templates/base.php";
include_once "authentification.php";
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EasyShot</title>
    <link rel="stylesheet" type="text/css" href="css/easyshot.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/easyshot.js"></script>
  </head>

<body>

<header>

  <section>
    <span class="logo-span">EasyShot</span>
    <!-- Divs for loggin to Google Drive - if not logged: the screenshots will not be saved! -->
    <?php if (isset($authUrl)): ?>
      <div class="right-side">
        <a class='login' href='<?= $authUrl ?>'>Click here to login for GDrive upload.</a>
      </div>
    <?php else: ?>
      <div class="right-side connected">
        <span>You are connected on GDrive for the upload.</a>
      </div>
    <?php endif ?>
  </section>

</header>

<main>

  <section id="main-content">
    <!-- Main content  -->
    <div class="content-top">
      <!-- Picture from API Website, love it! -->
      <img class="apiimg" src="css/img/api_enginelogo.png" alt="Engine API Logo">
      <h1 class="top-title">Bring your web to screen. Quickly.</h1>
      <p class="top-comment">With the help of an online API, click on one of the five button to capture instantly the website targeted. Here we have set 5 static websites for the purpose of this app. Your screenshot(s) will be saved on Google Drive only if you got logged in on your account. Please proceed by clicking on the top-left<span class="enjoy-txt">Enjoy!</span></p>
    </div>

    <div class="content-middle">
      <h2 class="middle-title">Websites Screenshots</h2>

      <div class="button-list">
        <button data-name="ifunded" data-site="https://ifunded.de/en/" class="site-btn">iFunded</button>
        <button data-name="propertypartner" data-site="https://www.propertypartner.co" class="site-btn">Property Partner</button>
        <button data-name="propertymoose" data-site="https://propertymoose.co.uk" class="site-btn">Property Moose</button>
        <button data-name="homegrown" data-site="https://www.homegrown.co.uk" class="site-btn">Homegrown</button>
        <button data-name="realtymogul" data-site="https://www.realtymogul.com" class="site-btn">Realty Mogul</button>
      </div>
      <!-- For info regarding the process of the screenshot  -->
      <div class="data-callback">
        <p class="generating">
          Generating screenshot file<span>.</span><span>.</span><span>.</span>
        </p>
      </div>
      
    </div>
  </section>

</main>

</body>
</html>