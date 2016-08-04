<!doctype html><!--宣告文件類型-->
<html>

    <head>
        <title>@yield('title')</title>
    </head>

    <body>
    @section('sidebar')
        這是父視圖側邊欄.
    @show

    <div class="container">
        @yield('content_1')
    </div>
    </body>

</html>