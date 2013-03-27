<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php">Phoenix Home Server</a>
          <div class="nav-collapse collapse">
            
            <ul class="nav">
              <li <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="active"'; ?>><a href="index.php">Control Panel</a></li>
              <li <?php if (strpos($_SERVER['PHP_SELF'], 'about.php')) echo 'class="active"'; ?>><a href="about.php">Help</a></li>


            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>