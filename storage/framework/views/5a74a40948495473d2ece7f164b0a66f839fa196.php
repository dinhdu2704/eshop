<?php $__env->startSection('chart'); ?>
    <?php echo Charts::assets(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thống kê</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           

            <div class="row">
                <center>
                    <?php echo $chartday->render(); ?>

                </center>
            </div>
            <!-- /.row -->

            <div class="row" style="margin-top: 50px;">
                <center>
                    <?php echo $chartmonth->render(); ?>

                </center>
            </div>
            <!-- /.row -->

            <div class="row"  style="margin-top: 50px;">
                <center>
                    <?php echo $chartyear->render(); ?>

                </center>
            </div>
            <!-- /.row -->
        </div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
 <!-- Flot Charts JavaScript -->
    <script src="admin_asset/vendor/flot/excanvas.min.js"></script>
    <script src="admin_asset/vendor/flot/jquery.flot.js"></script>
    <script src="admin_asset/vendor/flot/jquery.flot.pie.js"></script>
    <script src="admin_asset/vendor/flot/jquery.flot.resize.js"></script>
    <script src="admin_asset/vendor/flot/jquery.flot.time.js"></script>
    <script src="admin_asset/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="admin_asset/data/flot-data.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>