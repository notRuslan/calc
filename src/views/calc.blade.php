<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('calc') }}" method="post">
    @csrf
    <input type="text" name="v1">
    <select name="op" id="">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
    </select>
    <input type="text" name="v2">
    <button type="submit">Calc it!</button>
</form>
</body>
</html>