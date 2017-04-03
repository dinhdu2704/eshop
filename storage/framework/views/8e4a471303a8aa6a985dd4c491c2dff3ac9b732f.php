<?php $__env->startSection('content'); ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Add Product</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    <div class="col-lg-12 table-responsive" style="padding-bottom:120px">

                        <?php if(count($errors) > 0 ): ?>
                            <div class="alert alert-danger">
                                
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo $loi; ?><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>

                        
                        <?php if(session('thongbao')): ?>
                            <div class="alert alert-success">
                                <?php echo session('thongbao'); ?>

                            </div>
                        <?php endif; ?>
                        <form action="<?php echo e(url('admin/product/add')); ?>" method="POST" enctype="multipart/form-data">
                            <table class="table table-striped">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" name="Category" id="Category">
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if(old('Category')==$cate->id): ?> <?php echo e("selected"); ?> <?php endif; ?> value="<?php echo $cate->id; ?>"><?php echo $cate->ten; ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Sub Category</label>
                                    <select class="form-control" name="Subcate" id="Subcate">
                                        <?php $__currentLoopData = $subcate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if(old('Subcate')==$sub->id): ?> <?php echo e("selected"); ?> <?php endif; ?> value="<?php echo $sub->id; ?>"><?php echo $sub->ten; ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Brand</label>
                                    <select class="form-control" name="Brand">
                                        <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if(old('Brand')==$bra->id): ?> <?php echo e("selected"); ?> <?php endif; ?> value="<?php echo $bra->id; ?>"><?php echo $bra->ten; ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Product</label>
                                    <input class="form-control" name="Ten" placeholder="Đừng bỏ trống" value="<?php echo old('Ten'); ?>" />
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="form-control" name="TomTat" placeholder="Đừng bỏ trống" value="<?php echo old('TomTat'); ?>"/>
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea id="demo" class="form-control ckeditor" rows="3" name="NoiDung"><?php echo old('NoiDung'); ?></textarea>
                                </div>
                               
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" min="0" class="form-control" name="Price" placeholder="Đừng bỏ trống" required value="<?php echo old('Price'); ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="number" min="0" class="form-control" name="Quantity" placeholder="Đừng bỏ trống" required value="<?php echo old('Quantity'); ?>"/>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="Image"/>
                                </div>
                                <div class="form-group">
                                    <label>Image 2</label>
                                    <input type="file" name="Image2"/>
                                </div>
                                <div class="form-group">
                                    <label>Image 3</label>
                                    <input type="file" name="Image3"/>
                                </div>
                                <div class="form-group">
                                    <label>Nổi Bật</label>
                                    <label class="radio-inline">
                                        <input <?php if(old('NoiBat')==1): ?> <?php echo "checked"; ?> <?php endif; ?> name="NoiBat" value="1"  type="radio">Có
                                    </label>
                                    <label class="radio-inline">
                                        <input <?php if(old('NoiBat')==0): ?> <?php echo "checked"; ?> <?php endif; ?> name="NoiBat" value="0" type="radio">Không
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success">Add Product</button>&nbsp;
                                <button type="reset" class="btn btn-warning">Reset</button>
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            </table>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#Category").change(function()
            {
                var idCate = $(this).val();
                $.get('admin/ajax/subcate/'+idCate,function(data){
                    $('#Subcate').html(data);
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>