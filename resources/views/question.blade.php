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
		 <p>問題：
		 {{$quiz->question}}
		 </p>
		<form action ="/answer" method="post">
			@csrf
			<p><textarea name ="answer" cols="50" rows="1"></textarea></p>
			 <p><input type="submit" value="回答する"></p>
		</form>
	</body>
</html>

