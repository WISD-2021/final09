<!DOCTYPE html>
<html lang="en">
<head>
    <title>小藍網購</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!-- bootstrap js -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- style -->
    <link rel="stylesheet" type="text/css" href="style3.css">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/style3.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


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
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="javascript:void(0)">通知</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="store.blade.php">賣場</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="sellercenter.blade.php">賣家中心</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cart')}}">購物車</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class='nav-item'>
                        <form method='POST'>
{{--                            <div class='input-group'>--}}
{{--                                <input type='text' class='form-control' placeholder='搜尋' name='search'>--}}
{{--                                <button class='btn btn-dark' type='submit'>Go</button>--}}
{{--                            </div>--}}
                        </form>
                    </li>
                    <?php
                    //跳轉搜尋
//                    if($_POST['search'] != null)
//                        header("Location: search.blade.php?search=".$_POST['search']);
                    ?>
                </ul>

                <ul class="navbar-nav">
                    <?php
                    //顯示會員
//                    session_start();
//                    echo "
//                    <li class='nav-item'>
//
//                        <a class='nav-link' href='login.blade.php'>
//                           <li class='nav-item dropdown'>
//                                <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown'>
//                                    歡迎" .$_SESSION['name']. "
//                                </a>
//                                <ul class='dropdown-menu' >
//                                     <li>
//                                         <a class='dropdown-item'  href='accountadjust.blade.php' >我的帳戶</a>
//                                         <a class='dropdown-item' href='dindan.blade.php'>購買清單</a>
//                                         <a class='dropdown-item' href='layouts/destroy.blade.php'>登出</a>
//                                      </li>
//                                </ul>
//                           </li>
//                        </a>
//                    </li>
//
//                </ul>";
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container">
    <article>
        <!-- 常用連結 -->
        <section id="category">
            <div id="category-item">
                <div class="icon">
                    <ion-icon name="storefront-outline"></ion-icon>
                </div>
                <p>已完成訂單</p>
                <a href="{{route('dindan','1')}}" class="stretched-link"></a>
            </div>
            <div id="category-item">
                <div class="icon">
                    <ion-icon name="shirt-outline"></ion-icon>
                </div>
                <p>待出貨</p>
                <a href="{{route('dindan','2')}}" class="stretched-link"></a>
            </div>
            <div id="category-item">
                <div class="icon">
                    <ion-icon name="dice-outline"></ion-icon>
                </div>
                <p>待取貨(暫無功能)</p>
                <a href="{{route('dindan','3')}}" class="stretched-link"></a>
            </div>
            <div id="category-item">
                <div class="icon">
                    <ion-icon name="tv-outline"></ion-icon>
                </div>
                <p>退貨(暫無功能)</p>
                <a href="{{route('dindan','4')}}" class="stretched-link"></a>
            </div>
            <div id="category-item">
                <div class="icon">
                    <ion-icon name="game-controller-outline"></ion-icon>
                </div>
                <p>取消訂單(暫無功能)</p>
                <a href="{{route('dindan','5')}}" class="stretched-link"></a>
            </div>
            <div id="category-item">
                <div class="icon">
                    <ion-icon name="book-outline"></ion-icon>
                </div>
                <p>優惠券(暫無功能)</p>
                <a href="{{route('dindan','6')}}" class="stretched-link"></a>
            </div>
            <!--                <ion-icon name="cart-outline"></ion-icon>-->
        </section>

    </article>
    <div class="cart">
        <div class="item-first">
            {{--                <div class="item-first--select">--}}
            {{--                    <label for="select-all">全選</label>--}}
            {{--                    <input type="checkbox" name="select" onclick="check_all(this,'select[]')" id="select-all">--}}
            {{--                </div>--}}
            <div class="item-first--pic">
                <p>圖片</p>
            </div>
            <div class="item-first--content">
                <div class="item-first--content__name">
                    <p>商品名稱</p>
                </div>
                <div class="item-first--content__quantity">
                    <p>數量</p>
                </div>
                <div class="item-first--content__price">
                    <p>價格</p>
                </div>
            </div>
            @if($page->dindan == 1)
            <div class="item-first--delete">
                <p>操作</p>
            </div>
                @elseif($page->dindan == 2)
                <div class="item-first--delete">
                    <p>狀態</p>
                </div>
            @endif
        </div>
        @if($page->dindan == 1)
        <input type="hidden" value="{{$order=\Illuminate\Support\Facades\DB::table('orders')->where('member_id' ,auth()->user()->id)->where('status',1)->get()}}">
        @endif
        @if($page->dindan == 2)
            <input type="hidden" value="{{$order=\Illuminate\Support\Facades\DB::table('orders')->where('member_id' ,auth()->user()->id)->where('status',0)->get()}}">
{{--            {{$order=\Illuminate\Support\Facades\DB::table('orders')->where('member_id' ,auth()->user()->id)->where('status',0)->get()}}--}}
        @endif
            {{--            {{$cart=\Illuminate\Support\Facades\DB::table('cart_items')->where('member_id' ,auth()->user()->id)->get()}}--}}
        <input type="hidden" value="{{$total=0}}">
        @if($page->dindan == 1||$page->dindan == 2)
        @foreach($order as $orders)
            <input type="hidden" value="{{$order_detail=\Illuminate\Support\Facades\DB::table('order_details')->where('order_id' ,$orders->id)->get()}}">
{{--                {{$order_detail=\Illuminate\Support\Facades\DB::table('order_details')->where('order_id' ,$orders->id)->get()}}--}}
                @if(isset($order_detail[0]->product_id))
                <input type="hidden" value="{{$product=\Illuminate\Support\Facades\DB::table('products')->where('id' ,$order_detail[0]->product_id)->get()}}">
            @endif
                    {{--            {{$cartt=\Illuminate\Support\Facades\DB::table('products')->where('id' ,$carts->product_id)->get()}}--}}

            <div class='item'>
                {{--                    <div class='item--select'>--}}
                {{--                    </div>--}}
                <div class='item--pic'>
                    <img src='/images/{{$product[0]->image}}' alt='{{$product[0]->image}}'>
                </div>
                <div class='item--content'>
                    <div class='wrap-top'>
                        <div class='wrap-top--name'>
                            <p>{{$product[0]->name}}</p>
                        </div>
                        <div class='wrap-top--quantity'>
{{--                            @if(isset($order_detail[0]->quantity))--}}
                            <p>{{$order_detail[0]->quantity}}</p>
{{--                                @endif--}}
                        </div>
                        <div class='wrap-top--price'>
                            <p>{{$product[0]->price}}</p>
                        </div>
                    </div>
                    <div class='wrap-button'>
                        <p>小計： {{$order_detail[0]->quantity * $product[0]->price}}</p>
                    </div>
                </div>
                @if($page->dindan == 1)
                <div class='item--delete'>
{{--                    <a href="{{route('cartitem.destroy',$[0]->id)}}" value='delete'>刪除</a>--}}
                    <p>已完成</p>
                </div>
                    @elseif($page->dindan == 2)
                    <div class='item--delete'>
                        {{-- <a href="{{route('cartitem.destroy',$[0]->id)}}" value='delete'>刪除</a>--}}
                        <p>處理中</p>
                    </div>
                    @endif
            </div>
        @endforeach
        @endif
    </div>
</main>

</body>

</html>

