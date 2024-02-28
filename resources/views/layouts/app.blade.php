<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- 부트스트랩 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>

    <!-- 부트스트랩 JS 및 기타 스크립트 -->    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Style CSS -->
    <link href="{{ mix('/css/styles.css') }}" rel="stylesheet">

    <!-- Scripts -->    
    <script type="text/javascript" src="{{mix('/js/app.js')}}"></script>
</head>
<body>

@include('partials.header')

<main role="main">
    <!-- 사이드바와 콘텐츠 영역 -->
    <article class="d-flex">
        <!-- 사이드바 -->
        <aside>
            <!-- 여기에 사이드바 메뉴를 생성하는 Blade 코드를 추가할 수 있습니다. -->
            @include('partials.sidebar')
        </aside>
        
        <!-- 콘텐츠 영역 -->
        <article class="content container-fluid">
            <!-- 여기에 콘텐츠를 추가할 수 있습니다. -->
            @yield('content')
        </article>
    </article>
</main>

<script>

$(function () {
    // 사이드바 토글 버튼 이벤트 처리
    var sidebar = $('.sidebar');
    sidebar.userSet = false;
    $('.sidebar-toggle').on('click', function () {
        sidebar.toggleClass('hidden');
        sidebar.userSet = true;
    });
    
    $(window).on('resize', function () {
        if (!sidebar.userSet) {
            if (document.body.clientWidth >= 768) {
                sidebar.removeClass('hidden');
            } else {
                sidebar.addClass('hidden');
            }
        }
    });
});

</script>

</body>
</html>
