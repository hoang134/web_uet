@extends('admin.layout')
@section('title','Câu hỏi chung')
@section('content')
    <div class="table-agile-info">
    <div class="panel-heading">
        @if(isset($question)) Sửa câu hỏi @else Thêm câu hỏi  @endif
    </div>
    <br>
    <form action="{{isset($question)? route("question.save",['id'=>$question->id]):route('question.save')}}" method="post">
        @csrf

        <div class="form-group row">
            <label for="code" class="col-sm-2 col-form-label">Câu hỏi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="question" name="question"
                       value="{{ old('question', isset($question) ? $question->content : '') }}">
                @if ($errors->has('question'))
                    <small class="form-text text-danger">{{ $errors->first('question') }}</small>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="quantity" class="col-sm-2 col-form-label">Trả lời</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="questionReply" name="questionReply"
                       value="{{ old('questionReply', isset($questionRely) ? $questionRely->content: '') }}">
                @if ($errors->has('questionReply'))
                    <small class="form-text text-danger">{{ $errors->first('questionReply') }}</small>
                @endif
            </div>
        </div>

        <div class="form-group row justify-content-end">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

    </div>
@endsection
