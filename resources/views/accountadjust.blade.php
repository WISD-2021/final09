<!DOCTYPE html>
<html lang="en">
<head>
    <title>小藍網購</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

    <!-- style -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>

<header>
    <!-- 導覽 -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container narbar-default narbar-fixed">
            <a class="navbar-brand" href="index.blade.php">小藍網購</a>
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
                           <li class='nav-item dropdown'>
                               <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown'>
                                   歡迎{{$auth->name}}
                                   </a>
                               <ul class='dropdown-menu' >
                                   <li>
                                       <a class='dropdown-item'  href='accountadjust.blade.php' >我的帳戶</a>
                                       <a class='dropdown-item' href='dindan.blade.php'>購買清單</a>
                                       <a class='dropdown-item' href='layouts/destroy.blade.php'>登出</a>
                                   </li>
                               </ul>

               </li></ul>


            </div>
        </div>
    </nav>
</header>

{{--            <div class='w3-sidebar w3-gray w3-bar-block' style='margin-top:40px; width:18%'>--}}
{{--                <h3 class='w3-bar-item'>-我的帳戶-</h3>--}}
{{--                <a href='accountadjust.blade.php?page=1' class='w3-bar-item w3-button'><font size='5px'>查看/編輯基本資料</font></a>--}}
{{--                <a href='accountadjust.blade.php?page=2' class='w3-bar-item w3-button'><font size='5px'>申請賣家權限</font></a>--}}
{{--            </div>--}}

            <div class='w3-sidebar w3-gray w3-bar-block' style='margin-top:40px;width:18%'>
                <h3 class='w3-bar-item'>-我的帳戶-</h3>
                <a href='{{route('accountadjust' ,'1')}}' class='w3-bar-item w3-button'><font size='5px'>查看/編輯基本資料</font></a>
                <a href='{{route('accountadjust' ,'2')}}' class='w3-bar-item w3-button'><font size='5px'>申請賣家權限</font></a>

            </div>
<main>
@if($page->accountadjust === '1')
<section class='wrap'><form class='item_form' method='post' >

    <!-- 編輯帳戶 -->   <p>編輯/查看基本資料</p>
            <div class='item'>
                <span>信箱</span>
                <input type='text' name='email' value="123">
            </div>
            <div class='item'>
                <span>密碼</span>
                <input type='password' name='pwd' value="123">
            </div>
            <div class='item item_button'>
                <button type='submit'>更改/新增</button>
            </div></form></section>
@elseif($page->accountadjust === '2')
            <section class='wrap'><form class='item_form' method='post' >

    <!-- 登入 -->   <p>驗證賣家基本資料：</p>
            <div class='item'>
                <span>賣家名稱</span>
                <input type='text' name='sellername'>
            </div>
            <div class='item'>
                <span>賣家地址</span>
                <input type='text' name='selleraddress'>
            </div>
            <div class='item item_button'>
                <button type='submit'>申請</button>
            </div> </form></section>
@endif

 </form></section></main>







</body>

</html>

