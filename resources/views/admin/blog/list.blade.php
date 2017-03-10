@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Image</th>
                                        <th>Tiêu đề</th>
                                        <th>Mô tả</th>
                                        <th>Nội dung</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                        <td>Sản phẩm 1</td>
                                        <td>Áo dài đẹp</td>
                                        <td>Rất đẹp đối với phái nữ</td>
                                        <td class="text-center" width="10%">
                                            <a href="#" class="font-20 text-success "><span class="fa fa-pencil-square-o"></span></a>&nbsp;&nbsp;
                                            <a href="#" class="font-20 text-danger"><span class="fa fa-times"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td></td>
                                        <td>Sản phẩm 1</td>
                                        <td>30$</td>
                                        <td>Rất đẹp đối với phái nữ</td>
                                        <td class="text-center" width="10%">
                                            <a href="#" class="font-20 text-success "><span class="fa fa-pencil-square-o"></span></a>&nbsp;&nbsp;
                                            <a href="#" class="font-20 text-danger"><span class="fa fa-times"></span></a>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>3</td>
                                        <td></td>
                                        <td>Sản phẩm 1</td>
                                        <td>30$</td>
                                        <td>Rất đẹp đối với phái nữ</td>
                                        <td class="text-center" width="10%">
                                            <a href="#" class="font-20 text-success "><span class="fa fa-pencil-square-o"></span></a>&nbsp;&nbsp;
                                            <a href="#" class="font-20 text-danger"><span class="fa fa-times"></span></a>
                                        </td>
                                    </tr>  
                                </tbody>

                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
</div>
@endsection
