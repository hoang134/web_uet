@extends('dashboard')
@section('content')

<section class="deal-of-week spad" style="background-color: white;">
    <div class="container">
        <div class="col-lg-12">
            <div class="section-title text-center">
                <h2>Diễn đàn trao đổi</h2>
            </div>
            <div>
                <a href="/student/question"><button>Thêm câu hỏi</button></a>
            </div>
            @foreach($questions as $question)
            <?php
            $idrand = Str::random(32);
            ?>
            <div class="mt-2">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-12" style="border-radius: 20px;background-color: #f0f0f0;">
                        <div class="d-flex flex-column comment-section" id="myGroup">
                            <div class="p-2">
                                <div class="d-flex flex-row user-info"><img class="rounded-circle" src="/images/1.png" width="40">
                                    <div class="d-flex flex-column justify-content-start ml-2">
                                        <span class="d-block font-weight-bold name">{{$question->id}}Manhj Hoangf</span>
                                        <span class="date text-black-50">{{$question->created_at}}</span>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <p class="comment-text" style="word-wrap: break-word;font-size: 20px;">{{$question->content}}</p>
                                </div>
                            </div>
                            <div class="p-2">
                                <div class="d-flex flex-row fs-12">
                                    <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-1" href="#collapse-{{$idrand}}">
                                        <i class="fa fa-comment"></i><span class="ml-1">Trả lời</span>
                                    </div>
                                    <div class="like p-2 cursor">
                                        <i class="fa fa-exclamation-triangle"></i><span class="ml-1">Báo lỗi</span>
                                    </div>
                                </div>
                            </div>
                            <div id="collapse-{{$idrand}}" class="collapse" data-parent="#myGroup">
                                <div class="d-flex flex-row align-items-start">
                                    <img class="rounded-circle" src="/images/1.png" width="40">
                                    <textarea class="form-control ml-1 shadow-none textarea"></textarea>
                                </div>
                                <div class="mt-2 text-right">
                                    <button class="btn btn-primary btn-sm shadow-none" type="submit">Trả lời</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            @endforeach   
        </div>
    </div>
</section>
@endsection