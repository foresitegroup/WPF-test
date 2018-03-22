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

    <input type="checkbox" id="toggle-menu" role="button">
    <label for="toggle-menu"></label>
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

    <div id="hero">
      <div class="box">
        <div class="site-width">
          <div class="box-text">
            <h1><span>Impartial Research</span> for Informed Debate</h1>

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus pulvinar posuere. Aliquam tincidunt mattis diam volutpat tempor. Nulla interdum libero risus, eget hendrerit purus lobortis suscipit. Donec eget libero in eros viverra iaculis. Mauris sed tincidunt felis. Fusce cursus, nibh eu venenatis venenatis, nibh mi vehicula ex, et gravida enim metus id lectus. Mauris quis magna semper, ultrices leo sed, semper tellus. Phasellus rutrum.<br>

            <a href="#" class="button">Request a Presentation</a>
          </div>
        </div>
      </div>
    </div>

    <div id="ep-header">
      <div class="site-width">
        <h1 class="left"><span>Upcoming</span> Events</h1>
        <h1 class="right"><span>Featured</span> Publication</h1>
      </div>
    </div>

    <div id="ep" class="site-width">
      <div id="events">
        <div id="pinned">
          <div class="event">
            <h2><div>May<div>30</div></div></h2>
            <h3>The Big Event: A Top-Pinned Event To Generate Buzz</h3>
            <h4>6:00 - 9:00 PM</h4>
            The Big Event Location<br>
            123 Main St., Madison, WI
          </div>
        </div>

        <div class="event">
          <h2><div>Mar<div>06</div></div></h2>
          <h3>2018 Wisconsin Policy Forum Annual Meeting</h3>
          <h4>5:00 - 7:00 PM</h4>
          The Wisconsin Club<br>
          900 W Wisconsin Ave., Milwaukee, WI
        </div>

        <div class="event">
          <h2><div>Mar<div>13</div></div></h2>
          <h3>Wisconsin Policy Forum Madison Kick-Off Event</h3>
          <h4>5:00 - 7:00 PM</h4>
          Brocach Irish Pub & Whiskey Den<br>
          7 W Main St., Madison, WI
        </div>

        <div class="event">
          <h2><div>Apr<div>30</div></div></h2>
          <h3>2018 Budget Meeting</h3>
          <h4>5:00 - 7:00 PM</h4>
          Brocach Irish Pub & Whiskey Den<br>
          7 W Main St., Madison, WI
        </div>

        <a href="#" class="button">View Event Calendar</a>
      </div>

      <div id="publication">
        <div id="publication-info">
          <img src="images/2017-03.jpg" alt="">
        
          <div>
            <h2>The Last Mile:</h2>
            <h3>Connecting Workers to Places of Employment</h3>
            <h4>March 2017</h4>
            <h5>Tags:</h5>

            <a href="#" class="tag">Sample Tag</a>
            <a href="#" class="tag">Sample Tag</a>
            <a href="#" class="tag">Sample Tag</a>
            <a href="#" class="tag">Longer Sample Tag</a>
          </div>
        </div>

        Our latest research suggests that flexible forms of transit service &mdash; and perhaps new strategies linked to partnerships with ride-hailing companies like Lyft and Uber &mdash; could help address the region's elusive "last mile" problem.<br>
        <br>

        <h2>Policy Recommendations</h2>
        <ul>
          <li>Build on recent efforts to improve transportation connections in the Milwaukee area through shared-ride taxi services.</li>
          <li>Build on recent efforts to improve transportation connections in the Milwaukee area through shared-ride taxi services.</li>
          <li>Build on recent efforts to improve transportation connections in the Milwaukee area through shared-ride taxi services.</li>
        </ul>

        <a href="#" class="button">View Publication</a>
      </div>
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