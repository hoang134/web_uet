@extends('dashboard')
@section('content')
<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Thông tin chi tiết</h2>
                </div>
            </div>
        </div>
        
        <div class="row" style="background-color: white;">
            <div class="col-lg-12 col-md-12">
                @foreach($exam_detail as $detail)
                <div class="" style="margin:5px;padding: 5px;">
                    <div class="" style="margin:5px;padding: 5px;">
                    <div class="single-latest-blog col-lg-12" style="display: inline-block;">
                        <div class="col-lg-12 col-md-12">
                            <h4>Tên kỳ thi:{{$detail->TenKythi}}</h4>
                            <h4>Mã kỳ thi:{{$detail->MaKythi}}</h4>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <h4>Địa điểm thi:{{$detail->Madiadiem}}</h4>
                            <h4>Mã môn thi:{{$detail->MaMonthi}}</h4>
                        </div>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection