<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>時間割ページ</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<header>
    <div class="HeaderMenu">
        <button><a href="#">時間割</a></button>
        <button><a href="#">授業進捗</a></button>
        <button class="Prof"><a href="#">プロフィール設定</a></button>
        <a class="LogOut" href="#">ログアウト</a>
    </div>
</header>
<ul class="slide-items">
    @foreach($banners as $banner)
    <li><img src="{{ asset($banner->image) }}" alt="Banner Image"></li>
    @endforeach
</ul>

<script>
$(".slide-items").slick({
    autoplay: true,
    arrows: true,
    dots: true,
});
</script>

