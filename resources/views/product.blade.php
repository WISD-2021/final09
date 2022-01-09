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

    <!-- style -->
    <link rel="stylesheet" type="text/css" href="style1.css">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
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
//                    if($_SESSION['name'] == null)
//                        echo "<li class='nav-item'><a class='nav-link' href='login.blade.php'>會員登入</a></li>";
//                    else
//                    {
//                        echo "
//                            <li class='nav-item dropdown'>
//                                <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
//                                    歡迎".$_SESSION['name']. "
//                                </a>
//                                <ul class='dropdown-menu'>
//                                    <li>
//                                        <a class='dropdown-item' href='accountadjust.blade.php'>我的帳戶</a>
//                                        <a class='dropdown-item' href='dindan.blade.php'>購買清單</a>
//                                        <a class='dropdown-item' href='layouts/destroy.blade.php'>登出</a>
//                                    </li>
//                                </ul>
//                            </li>
//                            ";
//                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

</header>

<main class="container">

    <aside>
        <section class="product-category">
            <div>
                <a href="category.blade.php?category=生活">生活</a>
            </div>
            <div>
                <a href="category.blade.php?category=服飾">服飾</a>
            </div>
            <div>
                <a href="category.blade.php?category=娛樂">娛樂</a>
            </div>
            <div>
                <a href="category.blade.php?category=3C">3C</a>
            </div>
            <div>
                <a href="category.blade.php?category=家電">家電</a>
            </div>
            <div>
                <a href="category.blade.php?category=其他">其他</a>
            </div>
            <div>
                <a href="category.blade.php?category=零食">零食</a>
            </div>
            <div>
                <a href="category.blade.php?category=書">書</a>
            </div>
        </section>
    </aside>
<input type="hidden" value="{{ $product=\Illuminate\Support\Facades\DB::table('products')->where('id',3)->get() }}">

    @foreach($product as $products)
    <article>
        <section class='product'>
            <div class='product-pic'>
                <img src='/images/{{$products->image}}'>
            </div>
            <div class='product-detail'>
                <h1>{{$products->name}}</h1>
                <div class='prise'>
                    <span>原價：${{$products->price *2}}</span>
                    <h2>${{$products->price}}</h2>
                </div>
                <form method='post'>
                    <table>
                        <tr>
                            <td>數量：</td>
                            <td>
                                <input type='number' name='ordernumber' min='0' max='{{$products->stock}}' required>
                            </td>
                        </tr>
                        <tr>
                            <td>剩餘數量：</td>
                            <td>{{$products->stock}}件</td>
                        </tr>
                    </table>
                    <div class='cart'>
                        <input type='submit' value='加入購物車' name='incart'>
                    </div>
                </form>
            </div>
        </section>

        <section>
            <p>商品描述：</p>
            <pre>{{$products->description}}</pre>
        </section>
    @endforeach
        <?php
//        include"test.php";
//
//        $ProductDetail=new test();
//        $ProductDetail->ProductDetail($_GET['p_id']);

        ?>

{{--        <section>--}}
{{--            <p>商品評價：</p>--}}
{{--            <!-- ##改良 -->--}}
{{--            <div class="container">--}}
{{--                <form method="POST">--}}
{{--                    <br>留言內容:<br>--}}
{{--                    <textarea name="comment" style='height:100px;width:400px;color:black'></textarea>--}}
{{--                    <br> 評價:--}}
{{--                    <input type="radio" name="star" value="1">1☆--}}
{{--                    <input type="radio" name="star" value='2'>2☆--}}
{{--                    <input type="radio" name="star" value="3">3☆--}}
{{--                    <input type="radio" name="star" value='4'>4☆--}}
{{--                    <input type="radio" name="star" value="5">5☆--}}
{{--                    <button type="submit">輸入</button>--}}
{{--                    <hr>--}}
{{--                </form>--}}

{{--            </div>--}}
{{--        </section>--}}

    </article>
        <?php
        //                $rate = new test();
        //                $rate->Rate($_POST['comment'], $_POST['star']);
        ?>
</main>


</body>

</html>
