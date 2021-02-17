<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/payment/payment.css">
    <title>thanh toán</title>
    <style>
        button{
            margin: 5px;
        }
    </style>
</head>
<body>
    <div>
        <h2>Chọn phương thức thanh toán</h2>
        <form action="{{ route('student.payment.store') }}" method="post">
            @csrf
            <ul>
                <li>
                <button class="btn btn-primary btn-lg activ" type="submit" value="Viettel Pay"name="paymethod">
                    Viettel Pay
                </button>
                <button class="btn btn-primary btn-lg activ" type="submit" value="Bank Plus" >
                    Bank Plus
                </button>
                <button class="btn btn-primary btn-lg activ" type="submit" value="Trả sau">
                    Trả sau
                </button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg activ" type="submit" value="QR code">
                        QR code
                    </button>
                    <button class="btn btn-primary btn-lg activ" type="submit" value=" Tài khoản của của TTKT" name="paymethod">
                        Tài khoản của TTKT
                    </button>
                    <button class="btn btn-primary btn-lg activ" type="submit" value="Nộp trực tiếp" name="paymethod">
                        Nộp trực tiếp
                    </button>
                </li>
            </ul>
{{--            <ul>--}}
{{--                <li value="Viettel Pay"> 1. Viettel Pay </li>--}}
{{--                <li value="Bank Plus"> 2. Bank Plus </li>--}}
{{--                <li value="Trả sau"> 3. Trả sau </li>--}}
{{--                <li value="QR code"> 4. QR code </li>--}}
{{--                <li value="Tài khoản của TTKT"> 5. Tài khoản của TTKT </li>--}}
{{--                <li value="Nộp trực tiếp"> 6. Nộp trực tiếp </li>--}}
{{--            </ul>--}}
        </form>
    </div>
</body>
</html>
