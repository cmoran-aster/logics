<!DOCTYPE html>     
<html lang="zxx">
<head>
    <title>Logics | Aster</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Login AGROSELVA">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" href="{{asset("assets/Login/css/style.css")}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset("assets/Login/css/font-awesome.min.css")}}" type="text/css" media="all">
    <link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">

<style>
    
    .required input{ 
    content:"*"; 
    }

    #contenedor_carga{
        background-color: rgba(0,0,0);
        height: 100%;
        width: 100%;
        position:fixed;
        -webkit-transition:all 1s ease;
        -o-transition:all 1s ease;
        transition: all 1s ease;
        z-index: 100000;
    }

    #carga{
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 180px;
        height: 180px;

        border:solid 6px transparent;
        border-top-color:#1c69b0;
        border-left-color:#1c69b0;
        border-radius: 50%;

        animation: loader 1s linear infinite;
    }

    #carga2{
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 120px;
        height: 120px;
        color:white;

        border:solid 6px transparent;
        border-top-color:#d62e23;
        border-left-color:#d62e23;
        border-radius: 50%;
        animation: loader2 1.2s linear infinite;
    }

    #carga3{
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 60px;
        height: 35px;
        color:white;

    }

    @keyframes loader {
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform:  rotate(360deg);
        }
    }
    @keyframes loader2 {
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform:  rotate(-360deg);
        }
    }
</style>
</head>
<!-- //Head -->
<!-- Body -->

<body>
<div id="contenedor_carga">
        <div id="carga"></div>
        <div id="carga2"></div>
        <div id="carga3">
            <h6>Cargando...</h6>
        </div>
    </div>
<section class="main">
    <div class="layer">
        
        <div class="bottom-grid1">
            <div class="links">

            </div>
            <div class="copyright">
                <p>
                    <a href="http://www.aster.com.gt">©Aster 2021</a>
                </p>
            </div>
        </div>
        <div class="content-w3ls">
            <div class="text-center icon">
                <img src="{{asset("assets/lte/dist/img/logo_logics_2021.JPG")}}" style="border-radius: 50%;" width="55%" >
            </div>
            <div class="content-bottom">
                @if ($errors->any())
                    Tiene los siguientes errores <br>
                    @foreach ($errors->all() as $error)
                        <span>{{$error}}</span>
                    @endforeach
                @endif
                <form action="{{route('login_post')}} " method="post" autocomplete="off">
                    @csrf
                    <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input name="usuario" id="usuario" type="text" placeholder="usuario" value="{{old('usuario')}}" required>
                        </div>
                    </div>
                    <div class="field-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input name="password" id="password" type="password" placeholder="Contraseña" required>
                        </div>
                    </div>
                    
                    
                    <div class="wthree-field">
                        <button type="submit" class="btn" style="background-color:#286ebe; border-color: rgb(0, 0, 0) !important;">Ingresar</button>
                    </div>
                    <ul class="list-login">
                        <li class="switch-agileits">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                Recordarme
                            </label>
                        </li>
                        <li>
                            <a href="#" class="text-right">Olvido su contraseña?</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
        
    </div>
</section>

</body>
<script>
    window.onload = function(){
        var contenedor = document.getElementById('contenedor_carga');
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
    }
</script>

</body>
</html>