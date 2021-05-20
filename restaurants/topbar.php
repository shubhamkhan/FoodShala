<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><?php echo $_SESSION['setting_name']; ?></a>
  <ul class="navbar-nav px-3">
    <div class="btn-group">
      <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
      <?php echo $_SESSION['rlogin_name'] ?>
      </button>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
        <li><a class="dropdown-item" href="../admin/ajax.php?action=logout3">Logout</a></li>
      </ul>
    </div>
  </ul>
</header>
<style>
.navbar-nav .dropdown-menu{
  position: absolute;
}
</style>