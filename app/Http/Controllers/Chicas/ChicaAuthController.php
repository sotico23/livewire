<?php


namespace App\Http\Controllers\Chicas;

use App\Http\Controllers\Controller;
use App\Models\Chica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChicaAuthController extends Controller
{
    // Muestra el formulario de login solo si el usuario no está autenticado
    public function showLoginForm()
    {
        // Si ya está autenticado, redirige al dashboard
        if (Auth::guard('chica')->check()) {
            return redirect()->route('chicas.dashboard');
        }

        return view('chicas.auth.login');
    }

    // Proceso de login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('chica')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/chicas/dashboard');
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden.',
        ])->onlyInput('email');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::guard('chica')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/chicas/login');
    }

    // Dashboard
    public function dashboard()
    {
        // Obtiene la chica autenticada
        $chica = Auth::guard('chica')->user();

        // Pasar la chica autenticada a la vista del dashboard
        return view('chicas.dashboard', compact('chica'));
    }
}
