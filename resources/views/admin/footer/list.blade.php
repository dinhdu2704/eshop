@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Footer Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    @if (session('thongbao'))
                        <div class="alert-success" style="line-height: 50px;">
                            <p style="margin-left:30px;">{{ session('thongbao') }}</p>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert-danger" style="line-height: 50px;">
                            <p style="margin-left:30px;">{{ session('error') }}</p>
                        </div>
                    @endif
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Footer Cate
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên Thể Loại</th>
                                        <th>Tên Không Dấu</th>
                                        <th>Ngày tạo</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $stt=1;
                                @endphp
                                @foreach ($footer as $foo)
                                
                                    <tr>
                                        <td>{{ $stt++ }}</td>
                                        <td>{{ $foo->ten }}</td>
                                        <td>{{ $foo->tenkodau }}</td>
                                        <td>
                                            @if($foo->created_at)
                                                {{ $foo->created_at }}
                                            @endif
                                        </td>
                                        <td class="text-center" width="10%">
                                            <a href="admin/footer/edit/{{ $foo->id }}" class="font-20 text-success "><span class="fa fa-pencil-square-o"></span></a>&nbsp;&nbsp;
                                            <a onclick="return window.confirm('Bạn muốn xóa chứ?')" href="admin/footer/delete/{{ $foo->id }}" class="font-20 text-danger"><span class="fa fa-times"></span></a>
                                        </td>
                                    </tr>
                                @endforeach

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
           <div class="text-center">
               
               {{ $footer->render() }}
           </div>
</div>
@endsection
