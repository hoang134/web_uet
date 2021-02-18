<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Trang khảo thí</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/libs3/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/libs3/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/libs3/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/libs3/owl.carousel.min.css')}}" type="text/css">
     
    <link href="{{asset('css/libs3/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs3/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs3/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs3/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs3/colors.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs3/version/tech.css')}}" rel="stylesheet">


</head>
<body style="background-color: #fff;" id="bodyid">
    <div id="wrapper">
        <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        trungtamkhaothi@vnu.edu.vn
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        (+84) – 24.66759258  /  (+84) – 24.62532740
                    </div>
                </div>
                
                <div class="ht-right">
                    @if(Auth::check())
                    <li class="nav-item dropdown no-arrow" style="background-color: #fff;">
                      <a class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="{{ asset('images/1.png') }}" style="max-width: 60px">
                        <span class="ml-2 d-lg-inline" style="color: #007f49;">{{Auth::user()->Hoten}}</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{route('change.infomation')}}">
                          <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          Thông tin tài khoản
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('logout')}}" onclick="return confirm('Bạn chắc chắn muốn đăng xuất?')">
                          <i class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i>
                          Đăng xuất
                        </a>
                      </div>
                    </li>
                    @else
                    <a href="{{route('login')}}" class="login-panel"><i class="fa fa-user"></i>Đăng nhập  </a>
                    <a href="{{route('register')}}" class="login-panel" style="margin-right:10px;"><i class="fa fa-user"></i>Đăng ký </a>
                    @endif
                </div>
            </div>
        </div>
        @if(Auth::check())
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <a href="{{route('cet.home')}}">
                        	@foreach(\Illuminate\Support\Facades\DB::table('cet_logo')->get() as $logo)
                            <img src="{{asset('images/logo/'.$logo->imagelogo)}}" alt="" width="100%" height="100%" style="max-height:109px;max-width:259px;">
                            @endforeach
                        </a>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <div class="input-group">
                                <input type="text" placeholder="Từ khóa cần tìm" style="border:1px solid #f2f2f2;border-radius: 10px;">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i> Lịch sử 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @else
	<div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <a href="{{route('cet.home')}}">
                            <img src="{{asset('images/logo1.png')}}" alt="" width="100%" height="100%" style="max-height:109px;max-width:259px;">
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="advanced-search">
                            <div class="input-group">
                                <input type="text" placeholder="Từ khóa cần tìm" style="border:1px solid #f2f2f2;border-radius: 10px;">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="nav-item">
            <div class="container">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class=""><a href="{{route('cet.home')}}">Trang chủ</a>
                            <ul class="dropdown">
                                <li><a href="{{route('cet.cocau')}}">Cơ cấu tổ chức</a></li>
                                <li><a href="{{route('cet.chucnang')}}">Chức năng và nhiệm vụ</a></li>
                            </ul>
                        </li>
                        <li><a>Tin tức</a>
                            <ul class="dropdown">
                                <li><a href="{{route('cet.notification.event')}}">Các sự kiện</a></li>
                                <li><a href="{{route('cet.notification.exam')}}">Các kỳ thi</a></li>
                            </ul>
                        </li>
                        @if(Auth::check())
                        <li><a>Đăng ký thi</a>
                            <ul class="dropdown">
                                <li><a href="" target="_blank">Thi thử</a></li>
                                    @if(Checkuser::checkProfile())
                                        <li><a href="/Khaothi/cet_CapnhatHS.php" target="_blank">Cập nhật hồ sơ</a></li>
										@if(Checkuser::checkExam())
											<li><a href="/Khaothi/cet_Dangkythi.php" target="_blank">Đăng ký thi</a></li>
                                        	<li><a href="/Khaothi/cet_SuaDangkythi.php" target="_blank">Sửa đăng ký thi</a></li>
                                    	@else
                                        	<li><a href="/Khaothi/cet_Dangkythi.php" target="_blank">Đăng ký thi</a></li>
                                    	@endif
                                    @else
                                        <li><a href="/Khaothi/cet_DangkyHS.php" target="_blank">Nhập hồ sơ</a></li>
                                    @endif
                            </ul>
                        </li>
                        <li><a>Diễn đàn trao đổi</a>
                             <ul class="dropdown">
                                <li><a href="{{route('home.question')}}">Trao đổi chung</a></li>
                                <li><a href="{{route('student.my.question')}}">Trao đổi riêng</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('student.service')}}">Dịch vụ</a>
                          
                        </li>
	                    <li><a href="">Thu phí</a></li>
                        @endif
                        @if(!Auth::check())
                        <li><a href="{{route('home.question')}}">Diễn đàn trao đổi chung</a></li>
                        @endif
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>

    @yield('banner')

    <br>
    <section class="section">
        <div class="container">
            <div class="row">
                @yield('content')
                @yield('content_extend')
            </div>
        </div>
    </section>

    <br>

    <div class="partner-logo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 style="color: white;">Các đối tác</h2>
                    </div>
                </div>
            </div>
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{asset('/images/doitac/uet_logo.png')}}" alt="" />
                    </div>
                </div>

                <div class="logo-item">
                    <div class="tablecell-inner">
                         <img src="{{asset('/images/doitac/DHKHTN_logo.png')}}" alt="" />
                    </div>
                </div>

                <div class="logo-item">
                    <div class="tablecell-inner">
                         <img src="{{asset('/images/doitac/ussh_logo.png')}}" alt="" />
                    </div>
                </div>

                <div class="logo-item">
                    <div class="tablecell-inner">
                         <img src="{{asset('/images/doitac/ulis.png')}}" alt="" />
                    </div>
                </div>

                <div class="logo-item">
                    <div class="tablecell-inner">
                         <img src="{{asset('/images/doitac/dhkt.jpg')}}" alt="" />
                    </div>
                </div>

                <div class="logo-item">
                    <div class="tablecell-inner">
                         <img src="{{asset('/images/doitac/khoa_luat.jpg')}}" alt="" />
                    </div>
                </div>

                <div class="logo-item">
                    <div class="tablecell-inner">
                         <img src="{{asset('/images/doitac/dhtnmt.png')}}" alt="" />
                    </div>
                </div>

                <div class="logo-item">
                    <div class="tablecell-inner">
                         <img src="{{asset('/images/doitac/dhvinh.jpg')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer-section" id="footerid">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"></a>
                        </div>
                        <ul>
                            <li>Địa chỉ:Tầng 8, Tòa nhà C1T, 144 Xuân Thủy, Cầu Giấy, Hà Nội.</li><br>
                            <li>Số điện thoại:(+84)-24.66759.258 / (+84)-24.62532.740</li><br>
                            <li>Email:trungtamkhaothi@vnu.edu.vn</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Chính sách</h5>
                        <ul>
                            <li><a href="#">Chính sách 1</a></li>
                            <li><a href="#">Chính sách 2</a></li>
                            <li><a href="#">Chính sách 3</a></li>
                            <li><a href="#">Chính sách 4</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Cần tư vấn</h5>
                        <p>Hãy để lại địa chỉ email của bạn</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Nhập email của bạn.">
                            <button type="button">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright
                        </div>
                        <div class="payment-pic">
                            <img src="{{asset('images/payment-method.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@if(Auth::check())
<div class="chat-screen-messenger">
    <div class="chat-header">
        <div class="chat-header-title">
            Nhắn tin với trung tâm
        </div>
    </div>
    <iframe src="{{route('student.messengers')}}" width="100%;" height="300px;"></iframe>
</div>
</div>
    <div class="chat-bot-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square animate"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x "><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </div>
@endif
    
</div>

    @yield('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/libs3/tether.min.js')}}"></script>
    <script src="{{asset('js/libs3/bootstrap.min.js')}}"></script>

    <script src="{{asset('js/libs3/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/libs3/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/libs3/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    @if(Session::has('success'))
        <script type="text/javascript">
            toastr.success("{!!Session::get('success')!!}");
        </script>
    @endif

    <script>
    $(document).ready(function () {
        
        $(".chat-bot-icon").click(function (e) {
            $(this).children('img').toggleClass('hide');
            $(this).children('svg').toggleClass('animate');
            $('.chat-screen-messenger').toggleClass('show-chat');
            $('.chat-body-messenger').removeClass('hide');
            $('.chat-input').removeClass('hide');
            $('.chat-header-option').removeClass('hide');
        });
        $('.end-chat').click(function () {
            $('.chat-body-messenger').addClass('hide');
            $('.chat-input').addClass('hide');
            $('.chat-header-option').addClass('hide');
        });
    });
</script>
<script>
function abc() {
alert("123");
}
</script>

</body>
</html>