@extends('dashboard')
@section('content')

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-list clearfix">
                        @foreach($events as $event)
                        <div class="blog-box row">
                            <div class="col-md-6 col-lg-6">
                                <div class="post-media">
                                    <a href="" title="">
                                        <img src="images/thong-bao.png" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-6 col-lg-6">
                                <h4><a href="" title="">{{$event->title}}</a></h4>
                                <p>{{$event->content}}</p>
                                <small class="firstsmall">{{$event->timestart}}-{{$event->timeend}}</small>
                                
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div style="padding: 5px;margin:5px;">
        <center>{!! $events->links() !!}</center>
    </div>
</section>

@endsection
