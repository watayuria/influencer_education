<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>時間割ページ</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/main.js"></script> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <header>
        <div class="HeaderMenu">
            <button><a href="#">時間割</a></button>
            <button><a href="#">授業進捗</a></button>
            <button class="Prof"><a href="#">プロフィール設定</a></button>
            <a class="LogOut" href="#">ログアウト</a>
        </div>
    </header>
    <main>
        <div class="MonthSwitchingArea">
            <a class="BackLink" href="#">←戻る</a>
            <div class="MonthSchedule">
                <button class="MonthBtn">◀</button><p>2023年7月スケジュール</p><button class="MonthBtn">▶</button>
            </div>
            <div class="ClassDisplay">
                <p>小学校一年生</p>
            </div>
        </div>
        <div class="Container">
            <div class="ClassesMenu">
                <div class="Classes">
                    @foreach($class_names as $key => $class_name)
                        @if($key % 3 == 0 && $key != 0)
                            </div><div class="Classes">
                        @endif
                        <button class="group-{{ floor($key / 3 ) + 1 }}"><a href="#">{{$class_name -> name}}</a></button>
                    @endforeach
                </div>
            </div>

            <div class="Curriculums">
                @foreach($curriculums->groupBy('id') as $curriculumGroup)
                <div class="CurriculumItems">
                    @foreach($curriculumGroup as $curriculum)
                    <div class="CurriculumThumbnail">
                        <img src="{{ asset('storage/Thumbnail/Thumbnail.jpg') }}" alt="Thumbnail Image">
                    </div>
                    <div class="CurriculumTitle">
                            <h1>{{$curriculum -> title}}</h1>
                    </div>
                    <div class="CurriculumDeliveryTimes">
                        @foreach($curriculum->deliveryTimes as $deliveryTime)
                        <div class="CurriculumDeliveryTimesdate">
                            <p>{{ \Carbon\Carbon::parse($deliveryTime->delivery_from)->format('n月j日') }}</p>
                        </div>
                        <div class="CurriculumDeliveryTimesfrom">
                            <p>{{ substr($deliveryTime->delivery_from, 11,5) }}<span>～</span></p>
                        </div>
                        <div class="CurriculumDeliveryTimesto">
                            <p>{{ substr($deliveryTime->delivery_to, 11,5) }}</p>
                        </div>
                        <br>
                        @endforeach
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </main>
</body>
</html>
