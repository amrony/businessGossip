<!DOCTYPE html>
<html lang="env">
<head>
    <meta charset="UTF-8">
    <title>Color Game</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
</head>
<body>
<h1>THE GREAT <span class="displayColor">RGB(28, 152, 66)</span> COLOR GAME</h1>
<div id="stripe">
    <button id="reset">New Colors</button>
    <span id="message"></span>
    <button id="easy">Easy</button>
    <button id="hard">Hard</button>
</div>
<div id="container">
    <div class="square"></div>
    <div class="square"></div>
    <div class="square"></div>
    <div class="square"></div>
    <div class="square"></div>
    <div class="square"></div>
</div>






<script src="{{ asset('js/color.js') }}"></script>
</body>
</html>

