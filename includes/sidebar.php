<div class="span3 hidden-phone hidden-tablet">
  <div class="well sidebar-nav">
    <ul class="nav nav-list">
      <li class="nav-header">Main Menu</li>
      <li <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="active"'; ?>><a href="index.php">Control Panel</a></li>
      <li <?php if (strpos($_SERVER['PHP_SELF'], 'about.php')) echo 'class="active"'; ?>><a href="about.php">User Guide</a></li>
      <li class="nav-header">Services</li>
      <li <?php if (strpos($_SERVER['PHP_SELF'], 'fileserver.php')) echo 'class="active"'; ?>><a href="fileserver.php">File Server</a></li>
      <li <?php if (strpos($_SERVER['PHP_SELF'], 'torrent.php')) echo 'class="active"'; ?>><a href="torrent.php">Bittorrent</a></li>
      <li <?php if (strpos($_SERVER['PHP_SELF'], 'squid.php')) echo 'class="active"'; ?>><a href="squid.php">Cacheing Server</a></li>
      <li <?php if (strpos($_SERVER['PHP_SELF'], 'ad.php')) echo 'class="active"'; ?>><a href="ad.php">Ad Blocker</a></li>
    </ul>
  </div>
  <!--/.well --> 
</div>
<!--/span-->