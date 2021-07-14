<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
	<title>POST</title>
</head>
<body>
    <div class="container">
        <h1>POSTS</h1>

        @foreach ($posts as $post)

            <div class="card">
                <div class="card-title">
                    {{ $post->title }}
                </div>
            </div>

        @endforeach

       

    </div>

	
</body>
</html>