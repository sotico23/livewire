<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Chicas</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>

    @if ($errors->any())
        <div style="color: red;">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('chicas.login.submit') }}" method="POST">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required><br>

        <label>
            <input type="checkbox" name="remember"> Recordarme
        </label><br>

        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
