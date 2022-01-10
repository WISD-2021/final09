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

                </ul>
                <ul class="navbar-nav">
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown'>
                            歡迎{{$auth->name}}
                        </a>
                        <ul class='dropdown-menu' >
                            <li>
                                <a class='dropdown-item'  href='{{route('accountadjust','0')}}' >我的帳戶</a>
                                <a class='dropdown-item' href='{{route('dindan','0')}}'>購買清單</a>
                                <a class='dropdown-item' href='{{route('logout')}}' onclick="event.preventDefault(); document.getElementById('logout-form').submit();">登出</a>
                                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">@csrf</form>
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
                    @if(auth()->user()->auth < 2)
                <a href='{{route('accountadjust' ,'2')}}' class='w3-bar-item w3-button'><font size='5px'>申請賣家權限</font></a>
                @endif
                    @if(auth()->user()->auth === 3)
                    <a href='{{route('accountadjust' ,'3')}}' class='w3-bar-item w3-button'><font size='5px'>審核賣家權限</font></a>
                @endif
                @if(auth()->user()->auth >= 2)
                    <a href='{{route('accountadjust' ,'4')}}' class='w3-bar-item w3-button'><font size='5px'>商品上架</font></a>
                @endif
            </div>
<main>

        @if($page->accountadjust === '1')
<section class='wrap'><form class='item_form' method='post' action="/user/store">
    @method('POST')
    @csrf
    <!-- 編輯帳戶 -->   <p>編輯/查看基本資料</p>
            <div class='item'>
                <span>信箱</span>
                <input type='text' name='email' value="{{auth()->user()->email}}">
            </div>
            <div class='item'>
                <span>密碼</span>
                <input type='password' name='password' value="">
            </div>
            <div class='item item_button'>
                <button type='submit' name="edit" value="1">更改/新增</button>
            </div></form></section>
        @elseif($page->accountadjust === '2')
            @if(auth()->user()->auth===0)
            <section class='wrap'><form class='item_form' method='post' action="/user/store">
                @method('POST')
                @csrf
    <!-- 登入 -->   <p>驗證賣家基本資料：</p>
            <div class='item'>
                <span>賣家名稱</span>
                {{auth()->user()->name}}<input type='hidden' name='sellername' value="{{auth()->user()->name}}">
            </div>
            <div class='item'>
                <span>賣家地址</span>
                <input type='text' name='address'>
            </div>
            <div class='item item_button'>
                <button type='submit' name="edit" value="2">申請</button>
            </div> </form></section>
            @endif
            @if(auth()->user()->auth===1)
                    <section class='wrap'>
                        <p>申請中</p>
                    </section>
                @endif
    @elseif($page->accountadjust === '3')
            {{ $seller=\Illuminate\Support\Facades\DB::table('users')->where('auth',1)->get() }}

        <section class='wrap'>
            @foreach($seller as $sellers)
            <form class='item_form' method='post' action="/user/store">
            @method('POST')
            @csrf
                <!-- 登入 -->   <p>審核賣家權限：</p>
                <div class='item'>
                    <span>申請名稱</span>
                    {{$sellers->name}}<input type='hidden' name='sellername'value="{{$sellers->name}}">
                </div>
                <div class='item'>
                    <span>賣家地址</span>
                    {{$sellers->address}}<input type='hidden' name='address' value="{{$sellers->address}}">
                </div>
                <div class='item item_button'>
                    <button type='submit' name="edit" value="3">同意</button>
                </div> </form>
            @endforeach
        </section>
        @elseif($page->accountadjust === '4')
        <section class='wrap'><form class='item_form' method='post' action="/user/store">
            @method('POST')
            @csrf
            <!-- 編輯帳戶 -->   <p>商品上架</p>
                <div class='item'>
                    <span>商品名稱</span>
                    <input type='text' name='name' required>
                </div>
                <div class="flex">
                <div class='item'>商品類型:
                    <select name="category">
                        <option value="生活">生活</option>
                        <option value="服飾">服飾</option>
                        <option value="娛樂">娛樂</option>
                        <option value="3C">3C</option>
                        <option value="家電">家電</option>
                        <option value="其他">其他</option>
                        <option value="零食">零食</option>
                        <option value="書">書</option>
                    </select>
                </div>
                </div>
                <div class="flex">
                    <div class="item" >
                        庫存量:
                        <input type="text" name="quantity" required>
                    </div>
                </div>
                <div class="flex">
                    <div class="item" >
                        價格:
                        <input type="text" name="price" required>
                    </div>
                </div>
                <div class="item">
                    <input type="file" name="image" accept="image/gif, image/jpeg, image/png">
                </div>
                <div class="item">
                    商品描述:
                    <textarea style="resize:none;width:600px;height:200px;color:black" name="description" required></textarea>
                </div>

                <div class='item item_button'>
                    <button type='submit' name="edit" value="4">上架</button>
                </div></form></section>
    @endif
 </form></section></main>







</body>

</html>

