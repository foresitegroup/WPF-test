<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">
    
    <title>Wisconsin Policy Forum<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="inc/main.css?<?php echo filemtime('inc/main.css'); ?>" rel="stylesheet">
    
    <script type="text/javascript" src="inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http']").not("[href*='" + window.location.host + "']").prop('target','new');
        $("a[href$='.pdf']").prop('target', 'new');
      });
    </script>
  </head>
  <body>

    <header class="site-width">
      <a href="." id="logo"><img src="images/logo.png" alt="Wisconsin Policy Forum"></a>

      <div id="header-right">
        <a href="#" class="contact-button">Contact Us</a>
        <a href="#" class="join-button">Join</a>

        <form>
          <div>
            <input type="text" name="search">
            <button type="submit"><i class="fas fa-search"></i></button>
          </div>
        </form>
      </div>
    </header>

    <nav id="headnav">
      <ul class="site-width">
        <li>
          <a href="#">About Us</a>
          <ul>
            <li><a href="#">Our Mission</a></li>
            <li><a href="#">What We Do</a></li>
            <li><a href="#">Staff/Board</a></li>
          </ul>
        </li>
        <li><a href="#">Get Involved</a></li>
        <li>
          <a href="#">Research</a>
          <ul class="columns">
            <li><a href="#">Electronic Development</a></li>
            <li><a href="#">Workforce Development</a></li>
            <li><a href="#">Education Funding</a></li>
            <li><a href="#">Local Government Finance</a></li>
            <li><a href="#">Eco-Initiatives</a></li>
            <li><a href="#">Budget Briefs</a></li>
            <li><a href="#">Property Tax/Law</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
          </ul>
        </li>
        <li><a href="#">News/Blog/Media</a></li>
      </ul>
    </nav>
    
    <div class="site-width">
      <h1>Content (H1)</h1>
      
      Bacon ipsum dolor sit amet sausage bacon biltong, salami drumstick hamburger ham hock. Filet mignon ribeye meatball flank tri-tip tongue boudin, doner pig tenderloin. Beef cow turducken pork belly. Corned beef <a href="#">andouille</a> short loin spare ribs. Short ribs frankfurter pig beef ribs. Sausage salami kielbasa cow jowl. Pork ribeye sirloin sausage bacon ham swine turkey biltong tenderloin boudin beef ribs pig hamburger.<br>
      <br>
      
      Pig shankle andouille venison ham frankfurter strip steak ham hock, swine jerky ball tip flank hamburger. Leberkas cow short loin capicola ham hock bresaola. Pig beef ribs salami shankle, ham hock shank flank <a href="fake.pdf">kielbasa</a> sausage hamburger tenderloin. Salami shankle prosciutto sausage pork chop tri-tip. Short loin shankle tail capicola bresaola chuck drumstick pork belly t-bone shoulder hamburger salami corned beef leberkas meatloaf. Corned beef t-bone drumstick jowl shoulder brisket sirloin meatball turkey.<br>
      <br>
      
      Bacon sirloin jowl tail pork loin corned beef sausage ribeye rump. Pork chop spare ribs turkey andouille strip steak. <a href="http://foresitegrp.com">Venison</a> pig bresaola ground round. Leberkas frankfurter pastrami prosciutto bresaola jowl.
    </div>

    <footer>
      <div class="site-width">
        <div class="left">
          <img src="images/footer-logo.png" alt="Wisconsin Policy Forum">

          <a href="#" class="contact-button">Contact Us</a>
          <a href="#" class="join-button">Join WPF</a>
          
          <div class="social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>

        <nav id="footnav">
          <ul>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
            <li><a href="#">Linked Section</a></li>
          </ul>
        </nav>
      </div>
    </footer>

    <div id="copyright">&copy; <?php echo date("Y"); ?> Wisconsin Policy Forum</div>
    
  </body>
</html>