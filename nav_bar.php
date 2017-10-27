<!--Universal nav-bar for all pages-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" id="search-form" action="results_form.php" method="post" role="search" enctype="multipart/form-data">
      <div class="form-group">
        <input class="form-control" name="searchInput" id="searchInput" placeholder="Search" type="text">
      </div>
      <button type="submit" class="btn btn-default" id="search-btn" name="search-btn">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <li <?php if ($currentPage === 'login') {echo 'class="active"';} ?>><a href="login_form.php">Login<?php if ($currentPage === 'login') { echo '<span class="sr-only">(current)</span>'; } ?></a></li>
      <li <?php if ($currentPage === 'register') {echo 'class="active"';} ?>><a href="register_form.php">Register<?php if ($currentPage === 'register') {echo '<span class="sr-only">(current)</span>'; } ?></a></li>
      </ul>
    </div>
  </div>
</nav>
