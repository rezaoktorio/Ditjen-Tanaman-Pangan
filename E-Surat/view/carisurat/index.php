<!DOCTYPE html>
<html>

  <?php require_once('../../controller/header.php'); ?>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php require_once('../../controller/topbar.php'); ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php require_once('../../controller/leftsidebar.php'); ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <?php require_once('../../model/dashboard/fill.php'); ?>

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <?php require_once('../../controller/rightsidebar.php'); ?>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->

        <!-- javascript -->
        <?php require_once('../../controller/javascript.php'); ?>
        <!-- /javascript -->

    </body>
</html>
