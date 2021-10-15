<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio de Sesión</title>
</head>
<body>
    <div class="main-footer-area">
        <div class="container">
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label>ID Usuario:</label>
                        <input type="text" name="id" class= "form-control" placeholder="Ingresa el ID">
                        {!! $errors->first('id', '<small>:message</small><br>') !!}
                </div>

                <div class="form-group">
                    <label>Contraseña:</label>
                        <input type="password" name="contraseña" class= "form-control" placeholder="Escriba la contraseña"> 
                        {!! $errors->first('contraseña', '<small>:message</small><br>') !!}
                </div>
                @error('message')
                    <p>* Error</p>
                @enderror
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>