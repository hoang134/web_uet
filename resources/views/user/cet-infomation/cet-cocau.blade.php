@extends('dashboard')
@section('content')

<div class="blog-title-area text-center">
    <h3>Thông tin cơ cấu</h3>
</div>

<div class="blog-content">  
    @foreach($infomation_cocau as $infomation_cocau_value)
    <?php 
        echo "$infomation_cocau_value->content2";
    ?>
    @endforeach
</div>  
@endsection
@section('new_content')
<div class="widget">
    <h2 class="widget-title">Sự kiện mới</h2>
    <div class="trend-videos">
    	@foreach($infomation_sukien as $infomation_sukien_value)
        <div class="blog-box">
            <div class="post-media">
                <a href="tech-single.html" title="">
                    <img src="{{asset('images/banner-1.jpg')}}" alt="" class="img-fluid">
                    <div class="hovereffect">
                        <span class="videohover"></span>
                    </div><!-- end hover -->
                </a>
            </div><!-- end media -->
            <div class="blog-meta">
                <h4><a href="" title="">{{$infomation_sukien_value->title}}</a></h4>
            </div><!-- end meta -->
        </div><!-- end blog-box -->
        <hr class="invis">
        @endforeach
    </div><!-- end videos -->
</div><!-- end widget -->

<div class="widget">
    <h2 class="widget-title">Các kỳ thi mới</h2>
    <div class="blog-list-widget">
        <div class="list-group">
            @foreach($infomation_kythi as $infomation_kythi_value)
            <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="w-100 justify-content-between">
                    <img src="{{asset('images/thong-bao.png')}}" alt="" class="img-fluid float-left">
                    <h5 class="mb-1">{{$infomation_kythi_value->TenKythi}}</h5>
                    <small>{{$infomation_kythi_value->Tungay}}-{{$infomation_kythi_value->Toingay}}</small>
                </div>
            </a>
            @endforeach
        </div>
    </div><!-- end blog-list -->
</div><!-- end widget -->
@endsection