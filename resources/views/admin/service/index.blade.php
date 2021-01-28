@extends('admin.layout')
@section('content')
    <h3>Danh sách dịch vụ</h3>
    <a class="btn btn-success mt-3" href="/admin/create/service">Tạo dịch vụ</a>

    <table class="table table-striped mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Fee</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listServices as $service)
            <tr>
                <th scope="row">{{ $service->id }}</th>
                <td>{{ $service->name }}</td>
                <td>{{ $service->fee }}</td>
                <td>
                    <div>
                        <a href="{{ route('service.edit', $service->id) }}">
                            <i class="fa fa-edit"></i>
                        </a>
                        <i class="fa fa-trash text-danger"></i>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
