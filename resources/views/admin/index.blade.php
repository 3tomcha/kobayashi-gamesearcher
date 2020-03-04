<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/app.css" type="text/css" />
    </head>
    <body>
        <h1>アプリ一覧</h1>
        <div class="container">
            <table>
                <tr>
                    <th>id</th>
                    <th>アイコン</th>
                    <th>タイトル</th>
                    <th>リリース日</th>
                    <th>ジャンル</th>
                    <th>App Store</th>
                    <th>Google Play</th>
                </tr>
                @foreach($games as $game)
                    <tr>
                        <th>{{$game->id}}</th>
                        <th><img src='/storage/image/{{$game->icon}}'></th>
                        <th>{{$game->title}}</th>
                        <th>{{$game->release_date}}</th>
                        <th>{{$game->genre}}</th>
                        <th>{{$game->app_store_url}}</th>
                        <th>{{$game->google_play_url}}</th>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>