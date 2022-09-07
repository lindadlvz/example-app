<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST">
    @csrf
    <label for="nombre">Nombre:</label> <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}"><br/>
    <label for="email">Email:</label> <input type="text" id="email" name="email" value="{{old('email')}}"><br/>
    <input type="checkbox" id="publicidad" name="publicidad" @checked(old('publicidad',true))><label for="publicidad">Recibir Publicidad</label>
    <label for="mensaje">Mensaje:</label> <br/>
    <textarea id="mensaje" name="mensaje"> {{old('mensaje')}}</textarea><br/>
    <input type="submit" value="Enviar"/>
    </form>

</body>
</html>