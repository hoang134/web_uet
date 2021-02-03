@extends('dashboard')
@section('content')
<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Thông tin các sự kiện</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                @foreach($events as $event)
                    <div class="single-latest-blog col-lg-12" style="display: inline-block;">
                        <div class="col-lg-4 col-md-6 col-sm-6" style="float: left;">
                            <img src="images/thong-bao.png" alt="">
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="latest-text">
                                <a href="">
                                    <h4>{{$event->title}}</h4>
                                </a>
                                <div class="tag-list">
                                    <div class="tag-item">
                                        <i class="fa fa-calendar-o"></i>
                                        Thời gian bắt đầu:{{$event->timestart}}<br>
                                        Thời gian kết thúc:{{$event->timeend}}
                                    </div>
                                    <div>
                                        <p>{{$event->content}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div style="padding: 5px;margin:5px;">
        <center>{!! $events->links() !!}</center>
    </div>
</section>
@endsection
