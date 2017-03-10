<!-- khai báo file master.blade để nạp vào đây -->
@extends('layouts.master')

<!-- khai báo nội dung bên yield sẽ nhận -->
@section('NoiDung')

<h2>Laravel 1</h2>
{{ $learn }}
<!-- đóng section -->
@endsection