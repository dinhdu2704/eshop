<!-- nạp file master.blade -->
@extends('layouts.master')
<!-- start section nội dung -->
@section('NoiDung')
{{-- if else trong laravel --}}

{{-- @if($learn!='')
	{!! $learn !!}
@else
	{!! "Không có khóa học" !!}
@endif --}}

{{-- for trong laravel --}}
{{-- nếu biến learn tồn tại thì in ra còn k thì in ra không có khóa học --}}
{{-- {!! $learn or "Không có khóa học" !!}

@for($i=1;$i<=10;$i++)
	{!! $i."	" !!}	

@endfor --}}

<?php $learn= array('PHP','Laravel','ASP','NodeJS'); ?>
{{-- @if (!empty($learn))
	@foreach ($learn as $rows)
		{!! $rows !!}
	@endforeach
@else
	{!! "Mảng rỗng" !!}
@endif
 --}}

@forelse($learn as $rows)
	@break($rows=='ASP')
	{!! $rows !!}
@empty
	{!! "Mảng rỗng" !!}
@endforelse



{{-- đây là comment --}}
<!-- end section nội dung -->
@endsection('NoiDung')