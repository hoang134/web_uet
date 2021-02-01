@extends('dashboard')
@section('content')

<section class="deal-of-week spad" style="background-color: white;">
    <div class="container">
        <div class="col-lg-12">
            <div class="section-title text-center">
                <h2>Diễn đàn trao đổi</h2>
            </div>
            <div>
                <h3>Đặt câu hỏi</h3>
                <form action="{{ route('student.question.create') }}" method="post">
                    @csrf
                    <input type="text" name="question">
                        <button type="submit">Gửi</button>
                    </input>
                </form>
            </div>
            <table class="table">
                <tr class="badge-light">
                    <th width="60%">Câu hỏi</th>
                    <th>Lượt tương tác</th>
                    <th>Thời gian</th>
                </tr>
                @foreach($questions as $question)
                <tr>
                    <td>
                        <div>
                            <a href="{{ route('question.detail', $question->id) }}" style="color: black">{{$question->content}}</a>
                        </div>
                        <div class="date">
                            Đăng bởi: {{\App\Models\User::find($question->user_id)->Hoten}}
                        </div>
                    </td>
                    <td>1234</td>
                    <td>{{$question->created_at}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection
