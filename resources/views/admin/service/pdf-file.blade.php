<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
    <title>Document</title>
</head>
<body>
<div>
    <div id="printJS-form">
        <h3>Xác nhận điểm thi</h3>
        <lable>Tên học sinh:</lable>{{ $student->Hoten }} <br>
        @foreach($service->fields as $field )
            @if($field->type == 'file')
                <a href="{{ route('admin.service.download.file',$field->resultsFeld->id) }}">Tải file đính kèm</a>
            @else
                <label>{{ $field->name . " : "}}</label> <span>{{ $field->resultsFeld->content }}</span><br>
            @endif
        @endforeach
    </div>
    <button type="button" onclick="printJS('printJS-form', 'html')">
        Xuất file
    </button>
</div>

</body>
</html>
