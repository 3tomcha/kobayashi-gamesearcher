<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/app.css" type="text/css" />
    </head>
    <body>
        <h1>アプリを登録</h1>
        <div class="container">
            <form method="POST" action="/admin" enctype="multipart/form-data">
                @csrf
                <dl>
                    <dt>アイコン</dt>
                    <dd><input type="file" name="icon"/></dd>
                </dl>
                <dl>
                    <dt>タイトル</dt>
                    <dd><input type="text" name="title"/></dd>
                </dl>
                <dl>
                    <dt>リリース日</dt>
                    <dd><input type="date" name="release_date"/></dd>
                </dl>
                <dl>
                    <dt>ジャンル</dt>
                    <dd>
                        <select type="select" name="genre"/>
                            <option value="1">スポーツ</option>
                            <option value="2">知的</option>
                        </select>
                    </dd>
                </dl>
                <dl>
                    <dt>App Store</dt>
                    <dd><input type="text" name="app_store_url"/></dd>
                </dl>
                <dl>
                    <dt>Google Play</dt>
                    <dd><input type="text" name="google_play_url"/></dd>
                </dl>
                <input type="submit" value="Submit"/>
            </form>
        </div>
    </body>
</html>