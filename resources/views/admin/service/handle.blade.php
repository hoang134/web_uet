@extends('admin.layout')
@section('content')
    <div>
        <h3>Xác nhận điểm thi</h3>
        <lable>Tên học sinh:</lable>{{ $student->Hoten }} <br>
        @foreach($service->fields as $field )
            <label>{{ $field->name . " : "}}</label> <span>{{ $field->resultsFeld->content}}</span><br>
        @endforeach
    </div>
@endsection
