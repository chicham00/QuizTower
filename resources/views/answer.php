<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>QuizTower</title>

        <!-- Fonts -->
		<link
				href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap"
				rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">


	</head>
	<body>
		<a>正解!!</a>
		<div>
			<div class="flex-center position-ref full-height">
				<div class="links">
                    <a href="/">トップページへ戻る</a><br>
                    <a href="/question">もう一度やる</a>
				</div>
			</div>
		</div>
	</body>
</html>

