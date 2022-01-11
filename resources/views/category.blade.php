<!DOCTYPE html>
<html lang="en">
<head>
    <title>小藍網購</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!-- bootstrap js -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
    <style>
        footer{
            margin-top: 50px;
        }

        .carousel-item{
            height: 300px;
        }
        .carousel-item > img {
            height: 100%;
            margin: auto;
        }

        #btn{
            margin-top: 50px;
        }
        #btn > img{
            height: 50px;
            max-width: 100%;
            margin: auto;
        }
        #btn > p{
            margin-top: 5px;
            text-align: center;
            /*font-family: 微軟正黑體;*/
            font-size: large;
        }
        #category{
            text-align: center;
        }
        body{
            background: #F5F5F5;
        }

    </style>

</head>
<body>
<header>
    <!-- 導覽 -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}">小藍網購</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">通知</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="store.blade.php">賣場</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sellercenter.blade.php">賣家中心</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.blade.php">購物車</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class='nav-item'>
                        <form method='POST'>
                            <div class='input-group'>
                                <input type='text' class='form-control' placeholder='搜尋' name='search'>
                                <button class='btn btn-dark' type='submit'>Go</button>
                            </div>
                        </form>
                    </li>

                </ul>
                <ul class="navbar-nav">

                </ul>
            </div>
        </div>
    </nav>

</header>
<main class="container">
            <aside>
                <section class="product-category">
                    <div>
                        <a href="{{route('category','生活')}}">生活</a>
                    </div>
                    <div>
                        <a href="{{route('category','服飾')}}">服飾</a>
                    </div>
                    <div>
                        <a href="{{route('category','娛樂')}}">娛樂</a>
                    </div>
                    <div>
                        <a href="{{route('category','3C')}}">3C</a>
                    </div>
                    <div>
                        <a href="{{route('category','遊戲')}}">遊戲</a>
                    </div>
                    <div>
                        <a href="{{route('category','書')}}">書</a>
                    </div>
                    <div>
                        <a href="{{route('category','零食')}}">零食</a>
                    </div>
                </section>
            </aside>
    <input type="hidden" value="{{ $product=\Illuminate\Support\Facades\DB::table('products')->where('category',$page->category)->get() }}">
        <article>
            <section class="row">
            @foreach($product as $products)
                <div class='col-lg-2 col-sm-6'>
                    <div class='card'>
                        <div class='card-img'>
                            <img class='card-img-top' src='/images/{{$products->image}}' alt='{{$products->image}}' style="object-fit: contain;">
                        </div>
                        <div class='card-body'>
                            <p class='card-text'>{{$products->name}}</p>
                            <span>NT$ {{$products->price}}</span>
                            <a href='{{route('product' , $products->id )}}' class='stretched-link'></a>
                        </div>
                    </div>
                </div>
            @endforeach
            </section>
        </article>

</main>


<footer class="fixed-bottom py-5 bg-dark">
    <div class="container">
    </div>
</footer>

</body>



