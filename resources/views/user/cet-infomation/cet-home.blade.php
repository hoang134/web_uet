@extends('dashboard')
@section('content')
<!-- Women Banner Section Begin -->
    <section class="women-banner spad" style="background-color: white;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Các sự kiện nổi bật</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="images/products/women-1.jpg" alt="">
                                <div class="sale">New</div>
                            </div>
                            <div class="pi-text">
                                <a href="#">
                                    <h5>Tiêu đề 1</h5>
                                </a>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="images/products/women-2.jpg" alt="">
                                <div class="sale">New</div>
                            </div>
                            <div class="pi-text">
                                <a href="#">
                                    <h5>Tiêu đề 2</h5>
                                </a>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="images/products/women-3.jpg" alt="">
                                <div class="sale">New</div>
                            </div>
                            <div class="pi-text">
                                <a href="#">
                                    <h5>Tiêu đề 3</h5>
                                </a>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="images/products/women-4.jpg" alt="">
                                <div class="sale">New</div>
                            </div>
                            <div class="pi-text">
                                <a href="#">
                                    <h5>Tiêu đề 4</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week spad" style="background-color: white;">
        <div class="container">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>Thông tin trung tâm</h2>
                </div>
                
                <div>
                    
                        <!--  -->
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Tin tức nổi bật</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($home_infomation as $home_infomation_value)
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="images/latest-1.jpg" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    Hạn đăng ký:{{$home_infomation_value->Handangky}}
                                </div>
                            </div>
                            <a href="#">
                                <h4>{{$home_infomation_value->TenKythi}}</h4>
                            </a>
                            <p style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">{{$home_infomation_value->Mota}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
@endsection