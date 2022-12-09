<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOP</title>
</head>

<body>
    <h2>Summonner情報取得</h2>
    <p>Summoner名を入力してください</p>
    <form action="/top" method="post">
        @csrf
        <input type="hidden" name="api-key" value="RGAPI-5de8b879-b87c-4d53-bbe2-b3a266602972">
        <input type="text" name="summoner-name">
        <input type="submit" value="送信">
    </form>

</body>

</html>