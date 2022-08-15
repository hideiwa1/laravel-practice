<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1>本日の運勢</h1>
        <form method="post" action="">
            <div>
                <label>生年月日</label>
                <input type="date" name="date">
            </div>
            <div>
                <lavel>血液型</lavel>
                <input type="radio" name="blood" value="A">A型
                <input type="radio" name="blood" value="B">B型
                <input type="radio" name="blood" value="AB">AB型
                <input type="radio" name="blood" value="O">O型
            </div>
            <button type="submit">占う</button>
        </form>
        
        <h2>結果</h2>
    </body>
</html>
