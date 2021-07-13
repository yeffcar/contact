<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TEST</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,800;0,900;1,300;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
      
    
    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
        <a class="navbar-brand" href="#">
        <img src="./img/logoldfinal.png" alt="">
        </a>
        <div class="w-100 text-right">
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#myNavbar7">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item">
                <a href="#" class="nav-link text-black">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-black">Contacto</a>
            </li>
        </ul>
    </div>
</nav>
    <body>
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase">DEMO LINEAD</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#">CONTACTO</a>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row text-center m-4">
                    <div class="col">
                        <p class="h1 text-black"> CONTACTO</p>
                    </div>
                </div>
                <div class="row w-100 justify-content-center">
                    
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                        @endif
                   
                        <form method="POST" action="{{ route('contact-form.store') }}">
                  
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <strong>Nombre:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <strong>Apellido:</strong>
                                        <input type="text" name="lastname" class="form-control" placeholder="Apellido" value="{{ old('lastname') }}">
                                        @if ($errors->has('lastname'))
                                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Mensaje:</strong>
                                        <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>
                   
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-submit">ENVIAR</button>
                            </div>
                        </form>
                </div>
            </div>
        </section>

        <footer class="bg-dark text-white text-center p-3">
           <div>Home | Contacto</div>
           <div>Copyright <?php echo date('Y'); ?> Linea D</div>
        </footer>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
