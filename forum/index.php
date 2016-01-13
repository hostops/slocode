<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="theme-color" content="#2E7D32">
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
            <title>SloCode FORUM</title>
            <!--jquery Import-->
            <script src="../scripts/jquery/jquery/external/jquery/jquery-2.1.4.js"></script>
            <script src="../scripts/jquery/jquery/jquery-ui.js"></script>
            <link href="../scripts/jquery/jquery/jquery-ui.css" rel="stylesheet">
            <!-- jquery hashchange import-->
            <script src="../scripts/jquery/jquery-hashchange/jquery.ba-hashchange.js"></script>
            <!--main scripts import-->
            <script src="../scripts/site.php"></script>
            <!--login script import -->
            <script src="../scripts/login.js"></script>
            <!--main styles import-->
            <link rel="stylesheet" href="../styles/forum/banner.css">
            <link rel="stylesheet" href="../styles/forum/banner-small.css">
            <link rel="stylesheet" href="../styles/forum/home.css">
            <link rel="stylesheet" href="../styles/forum/home-mobile.css">
            <link rel="stylesheet" href="../styles/forum/vprasaj.css">
            <link rel="stylesheet" href="../styles/forum/vprasaj-small.css">
            <link rel="stylesheet" href="../styles/forum/forum.css">
            <link rel="stylesheet" href="../styles/forum/forum-small.css">
            <link rel="stylesheet" href="../styles/forum/thread.css">
            <link rel="stylesheet" href="../styles/forum/thread-mobile.css">

          </head>
        	<body>
                  <!--header-->
                  <header>
                    <div id="logInOuter">
                      <form id="logIn"  class="log in" action='#' method='post'>

                          <div class="dialog">
                              <div class="title">
                                  Prijava
                              </div>

                              <span id="loginFailed">Napačno uporabniško ime ali geslo</span>
                              <input type="text" id="loginUserName" name="username" placeholder="Uporabniško ime">
                              <input type="password" id="loginPassword" name="password" placeholder="Geslo">
                              <button href="#" id="loginButton" class="login button">
                                  PRIJAVA
                              </button>
                          </div>
                      </form>
                    </div>
                      <div class="toolbar">
                          <div class="title">
                              SloCode FORUM
                          </div>
                          <div id="sticky">
                              <br>
                              <ul>
                                  <li><a href="force|/">SLOCODE</a>
                                  </li>
                                  <li><a href="sites/default.php">DOMOV</a>
                                  </li>
                                  <li><a href="sites/forum.php">FORUM</a>
                                  </li>
                                  <li><a href="sites/vprasaj.php">VPRAŠAJ</a>
                                  </li>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </header>
                  <!--content-->
                  <div id="body">
                      <!--sites content-->
                  </div>
              </div>
          </div>
      </body>
</html>
