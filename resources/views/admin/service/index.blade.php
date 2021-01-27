@extends('admin.layout')
@section('content')
    <div>
        <h3>tạo dịch vụ</h3>
        <h3>danh sách dữ liệu</h3>
        @foreach($listServices as $service)
            <label>{{$service->id}}</label> <span style="margin-left: 40px">{{$service->name}}</span>
            <span style="margin-left:40px">{{$service->fee}}</span>
        @endforeach
    </div>
@endsection
