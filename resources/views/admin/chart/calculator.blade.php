@extends('admin.layouts.index')
@section('content')
<style type="text/css">
    .red{color: red;}
</style>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thống kê</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    @if (session('thongbao'))
                        <div class="alert-success" style="line-height: 50px;">
                            <p style="margin-left:30px;">{{ session('thongbao') }}</p>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert-success" style="line-height: 50px;">
                            <p style="margin-left:30px;">{{ session('success') }}</p>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert-danger" style="line-height: 50px;">
                            <p style="margin-left:30px;">{{ session('error') }}</p>
                        </div>
                    @endif
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
                                @php
                                    $stt=1;
                                @endphp
                                @foreach ($thongke as $tk)
                                
                                    <tr class="text-center">
                                        <td>{{ $stt++ }}</td>
                                        <td>{{ $tk->product->ten }}</td>
                                        <td>{{ $tk->qty }}</td>
                                        <td>{{ $tk->price }} $</td>
                                        <td>{{ $tk->total }} $</td>
                                        <td>
                                            {{ Carbon\Carbon::createFromTimestamp(strtotime($tk->created_at))->diffForHumans() }}
                                            {{ date_format(Carbon\Carbon::now(),'H:i') }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div class="col-md-12">
                                <p style="float: right;font-size: 18px; margin-top:7px;">Tổng ngày: <span class="red">1000$</span></p>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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

                    @if (session('success'))
                        <div class="alert-success" style="line-height: 50px;">
                            <p style="margin-left:30px;">{{ session('success') }}</p>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert-danger" style="line-height: 50px;">
                            <p style="margin-left:30px;">{{ session('error') }}</p>
                        </div>
                    @endif
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Tuần này
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr class="center">
                                        <th>STT</th>
                                        <th>Tên KH</th>
                                        <th>Sđt</th>
                                        <th>Địa chỉ</th>
                                        <th>Message</th>
                                        <th>Total</th>
                                        <th>Date</th>
                                        <th>Giao</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <tr class="text-center">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        </td>
                                        <td class="text-center" width="10%">
                                            <a href="admin/customer/detail/" class="font-20 text-success "><span class="fa fa-calendar"></span></a>&nbsp;&nbsp;
                                            <a onclick="return window.confirm('Bạn muốn xóa chứ?')" href="admin/customer/delete/" class="font-20 text-danger"><span class="fa fa-times"></span></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- /.table-responsive -->
                            <div class="col-md-12">
                                <p style="float: right;font-size: 18px; margin-top:7px;">Tổng: <span class="red">1000$</span></p>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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

                    @if (session('success'))
                        <div class="alert-success" style="line-height: 50px;">
                            <p style="margin-left:30px;">{{ session('success') }}</p>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert-danger" style="line-height: 50px;">
                            <p style="margin-left:30px;">{{ session('error') }}</p>
                        </div>
                    @endif
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Tháng này
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
                                @php
                                    $stt=1;
                                @endphp
                                @foreach ($thongke as $tk)
                                
                                    <tr class="text-center">
                                        <td>{{ $stt++ }}</td>
                                        <td>{{ $tk->product->ten }}</td>
                                        <td>{{ $tk->qty }}</td>
                                        <td>{{ $tk->price }} $</td>
                                        <td>{{ $tk->total }} $</td>
                                        <td>
                                            {{ Carbon\Carbon::createFromTimestamp(strtotime($tk->created_at))->diffForHumans() }}
                                            {{ date_format($tk->created_at,'d/m') }}

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div class="col-md-12">
                                <p style="float: right;font-size: 18px; margin-top:7px;">Tổng ngày: <span class="red">1000$</span></p>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
           <div class="text-center">
           </div>
</div>
@endsection
