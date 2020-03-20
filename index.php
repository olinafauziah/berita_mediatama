<!DOCTYPE html>
<html lang="en">

<head>
  <title>Berita Mediatama</title>
  <?php include 'partials/head.php' ?>

</head>

<body id="page-top">
  <?php include 'partials/top-bar.php' ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'partials/sidebar.php' ?>

    <div id="content-wrapper">

      <!-- home.php -->
      <?php include 'home.php' ?>

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php include 'partials/footer.php' ?>
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>


  <!-- source js -->
  <?php include 'partials/js.php' ?>
</body>

</html>