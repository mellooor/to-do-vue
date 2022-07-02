<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('name') }}</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
<div id="app">
    <to-do-item-list></to-do-item-list>
</div>
</body>
<script src="{{ mix('/js/app.js') }}"></script>
</html>
