<?php
  require_once "srv/_config.php";
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dorothy v0.15 (Dev)</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- OpenGraph -->
        <meta property="fb:app_id" content="306159282727976">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="DorothAI">
        <meta property="og:description" content="Dorothy cares about you. Iy'll help you along your way at BeCode.">
        <meta property="og:url" content="https://dorothycares.io/">
        <meta property="og:site_name" content="DorothAI">
        <meta property="og:image" content="https://dorothycares.io/img/printscreen.jpg">
        <meta property="og:image:secure_url" content="https://dorothycares.io/img/printscreen.jpg">
        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:description" content="Dorothy cares about you. It'll help you along your way at BeCode.">
        <meta name="twitter:title" content="DorothAI">
        <meta name="twitter:site" content="@becodeorg">
        <meta name="twitter:image" content="https://dorothycares.io/img/printscreen.jpg">

        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:200,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

  <!-- Add your site or application content here -->
  <div id="particles-js"></div>

  <header class="round">
    <div class="round-group">
      <div class="round-item round-bg">
        <div class="round-item round-top"></div>
        <div class="round-item round-top"></div>
      </div>
    </div>
  </header>
  <main class="terminal">
    <header class="terminal-header">
      <div class="terminal-header-item">Terminal session</div>
      <div class="terminal-header-item">
        <button class="terminal-header-btn minimize" disabled><i class="fa fa-window-minimize" aria-hidden="true"></i></button>
        <button class="terminal-header-btn maximize"><i class="fa fa-window-maximize" aria-hidden="true"></i></button>
        <button class="terminal-header-btn close"><i class="fa fa-times" aria-hidden="true"></i></button>

      </div>
    </header>
    <div class="terminal-content">
      <!--
            <div class="message">
              ********************************************<br>
              * I'm still learning from you.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>
              * So I'm constantly upgrading my skills.&nbsp;&nbsp;&nbsp;*<br>
              * All commands of last week are inactive.&nbsp;&nbsp;*<br>
              ********************************************<br>
              &nbsp;
            </div>
          -->
            <div class="instruction">
              <div class="user-request"><span class="user">dorothAI@becode</span><span class="symbol">:~$</span><span class="request">connexion -u dorothian</span></div>
              <div class="answer" style="display:none;">connexion established</div>
            </div>
            <div class="instruction" style="display:none;">
              <div class="user-request">
                <span class="user">dorothAI@becode</span><span class="symbol">:~$</span><span class="terminal-control"><div class="user-input"></div><span class="terminal-symbol">_</span></span>
              </div>
            </div>
          </div>
          <footer class="terminal-footer">Created by "The Nine" - <a href="http://www.becode.org" target="_blank">BeCode Project</a> - <a href="cookies-policy.html" target="_blank">Cookies policy</a> - <a href="privacy.html" target="_blank">Privacy</a></footer>
        </main>
        <nav class="os-bar">
          <div class="os-bar__menu-icon"><span><i class="fa fa-superpowers" aria-hidden="true"></i></span></div>
          <div class="os-bar__windows-list">
              <div class="os-bar__windows-item active"><i class="fa fa-terminal"></i> Terminal</div>
              <div class="os-bar__windows-item"><i class="fa fa-puzzle-piece"></i> Challenges</div>
          </div>
          <div class="os-bar__sound-language">
              <div class="os-bar__micro"><i class="fa fa-microphone-slash fa-lg"></i></div>
              <div class="os-bar__volume"><i class="fa fa-volume-off fa-lg"></i></div>
              <div class="os-bar__language">eng</div>
          </div>
          <div class="os-bar__date-time"></div>
        </nav>
        <div style="visibility: hidden;" class="slider-container">
          <div class="volume-icon"><i class="fa fa-volume-off fa-2x"></i></div>
          <input type="range" min="0" max="100" value="0" class="audioslider" id="audioRange">
          <div id="volume-level"></div>
        </div>
        <div style="visibility: hidden" class="languages-container">
            <div><span>eng</span><i class="fa fa-check-circle fa-lg"></i></div>
            <div><span>fr</span><i class="fa fa-circle fa-lg"></i></div>
            <div><span>nl</span><i class="fa fa-circle fa-lg"></i></div>
        </div>

  <!-- JS Insertion -->
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')
  </script>
  <script src="js/plugins.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/anchorme.min.js"></script>
  <script src="js/main.js"></script>

  <!--
    <?php
      var_dump($_SESSION);
    ?>
  -->
</body>

</html>
