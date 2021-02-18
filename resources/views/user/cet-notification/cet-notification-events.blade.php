@extends('dashboard')
@section('content')
<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
    <div class="page-wrapper">
        <div class="blog-top clearfix">
            <h4 class="pull-left" style="font-size: 30px;text-transform: uppercase;">Thông tin các sự kiện<a href="#"></a></h4>
        </div><!-- end blog-top -->

        <div class="blog-list clearfix">
            @foreach($events as $event)
            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="{{route('cet.notification.event.detail',$event->id)}}" title="">
                            <img src="{{asset('images/events/'.$event->imagetitle)}}" alt="" class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4 style="margin-bottom: 5px;"><a href="{{route('cet.notification.event.detail',$event->id)}}" title=""><?php echo "$event->title"; ?></a></h4>
                    <p><?php echo "$event->content"; ?></p>
                    <small class="firstsmall"><a class="bg-orange" href="" title="">Thông báo</a></small>
                    <small><a href="" title="">Thời gian:từ {{$event->timestart}} đến {{$event->timeend}}</a></small>
                </div>
            </div>

            <hr class="invis">
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-start">
                    {!! $events->links() !!}
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
@section('content_extend')
<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
    <div class="sidebar">
        <div class="widget">
            <h2 class="widget-title" style="text-transform: uppercase;font-size: 30px;">Sự kiện mới</h2>
            <br>
            <div class="trend-videos">
                @foreach($infomation_sukien as $infomation_sukien_value)
                <div class="blog-box">
                    <div class="post-media">
                        <a href="{{route('cet.notification.event.detail',$infomation_sukien_value->id)}}" title="">
                            <img src="{{asset('images/latest-1.jpg')}}" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span class="videohover"></span>
                            </div>
                        </a>
                    </div>
                    <div class="blog-meta">
                        <h4><a href="{{route('cet.notification.event.detail',$infomation_sukien_value->id)}}" title="">{{$infomation_sukien_value->title}}</a></h4>
                    </div>
                </div>

                <hr class="invis">
                @endforeach
            </div>
        </div>

        <br>

        <div class="widget">
            <h2 class="widget-title" style="text-transform: uppercase;font-size: 30px;">Các kỳ thi mới</h2>
            <br>
            <div class="blog-list-widget">
                <div class="list-group">
                    @foreach($infomation_kythi as $infomation_kythi_value)
                    <a href="{{ route('cet.notification.exam.detail', $infomation_kythi_value->MaKythi) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="{{asset('images/latest-1.jpg')}}" alt="" class="img-fluid float-left" style="margin-bottom: 5px;">
                            <h5 class="mb-1">{{$infomation_kythi_value->TenKythi}}</h5>
                            <small>Hạn đăng ký:{{$infomation_kythi_value->Handangky}}</small>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>

        <br>

        <div class="widget">
            <h2 class="widget-title" style="text-transform: uppercase;font-size: 30px;">Các trang liên quan</h2>
            <br>
            <div class="row text-center">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="http://facebook.com" class="social-button facebook-button">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="#" class="social-button twitter-button">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="#" class="social-button google-button">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="#" class="social-button youtube-button">
                        <i class="fa fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection