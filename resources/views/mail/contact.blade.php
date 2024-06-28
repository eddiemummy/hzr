<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gelen Mesaj</title>
</head>
<body>

<div>
    <h4>Yeni Bir Mailiniz Var!</h4>

    <p class="mb-4"><strong>{{ $data['name'] }}<{{ $data['email'] }}></strong></p>

    <p>
        {{ $data['message'] }}
    </p>


</div>


</body>
</html>
