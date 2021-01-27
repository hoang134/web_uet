@extends('admin.layout')

@section('content')
    <div>

        <h3>Tạo yêu cầu</h3>
        <form>
            tên <input type="text">
            kểu dữ liệu<select>
                <option value="">text</option>
                <option value="">number</option>
                <option value="">date</option>
                <option value="">checkbox</option>
            </select>
            <button type="submit">tạo</button>
        </form>
    </div>
@endsection
