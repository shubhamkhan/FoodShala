<nav id="sidebar" class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark col-md-3 col-lg-2 d-md-block sidebar collapse" >
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">Administrator</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="index.php?page=home" class="nav-link text-white" aria-current="page"><i class="fa fa-home"></i> Home</a>
      </li>
      <li>
        <a href="index.php?page=orders" class="nav-link text-white"><i class="fa fa-utensils"></i></span> Orders</a>
      </li>
      <li>
        <a href="index.php?page=categories" class="nav-link text-white"><i class="fa fa-list"></i> Categories</a>
      </li>
      <li>
        <a href="index.php?page=users" class="nav-link text-white"><i class="fa fa-users"></i> Users</a>
      </li>
    </ul>
    <hr>
</nav>

<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>