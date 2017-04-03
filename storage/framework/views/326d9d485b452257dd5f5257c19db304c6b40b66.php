<?php $__env->startSection('chart'); ?>
    <?php echo Charts::assets(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
    .red{color: red;}
</style>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thống kê</h1>
                </div>
                <div class="col-lg-12" style="margin-bottom: 30px;">
                    <div class="form-group">
                      <label for="sel1">Chọn ngày:</label>
                      <form>
                      <select class="form-control" id="day">
                        <?php for($i = 1; $i <= Carbon\Carbon::now()->day ; $i++): ?>
                            <option><?php echo e($i); ?></option>
                        <?php endfor; ?>
                      </select>
                      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                      </form>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            <div class="row">
                <div class="col-lg-12">
                    <?php if(session('thongbao')): ?>
                        <div class="alert-success" style="line-height: 50px;">
                            <p style="margin-left:30px;"><?php echo e(session('thongbao')); ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if(session('success')): ?>
                        <div class="alert-success" style="line-height: 50px;">
                            <p style="margin-left:30px;"><?php echo e(session('success')); ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if(session('error')): ?>
                        <div class="alert-danger" style="line-height: 50px;">
                            <p style="margin-left:30px;"><?php echo e(session('error')); ?></p>
                        </div>
                    <?php endif; ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Hôm nay
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr class="center">
                                        <th>STT</th>
                                        <th>Tên Sp</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                        <th>Tổng</th>
                                        <th>Thời Gian</th>
                                    </tr>
                                </thead>
                                <tbody >
                                <?php 
                                    $stt=1;
                                 ?>
                                <?php $__currentLoopData = $day; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ngay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                    <tr class="text-center">
                                        <td><?php echo e($stt++); ?></td>
                                        <td><?php echo e($ngay->product->ten); ?></td>
                                        <td><?php echo e($ngay->qty); ?></td>
                                        <td><?php echo e($ngay->price); ?> $</td>
                                        <td><?php echo e($ngay->total); ?> $</td>
                                        <td>
                                            <?php echo e(Carbon\Carbon::createFromTimestamp(strtotime($ngay->created_at))->diffForHumans()); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div class="text-center">
                            </div>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#day").change(function(){
                var day= $(this).val();
                var token= $("input[name='_token']").val();
                $.ajax({
                    url:'admin/chart/day.html',
                    method:'post',
                    data:{
                        "day":day,
                        "_token":token
                    },
                    success:function(data){
                        if(data=="ok")
                            alert("ok");
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>