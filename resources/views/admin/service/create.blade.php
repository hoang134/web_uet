@extends('admin.layout')
@section('content')
    <div>
        <h3>Tạo yêu cầu</h3>
        <form action="/admin/create/service" method="post">
            @csrf
           Tên yêu cầu <input type="text" name="name">
            giá <input type="number" name="fee">
            <button  type="submit">Tạo</button>
        </form>
    </div>
@endsection
