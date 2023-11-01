<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserCreated; // Remplacez NewUserCreated par le nom de votre classe de mailing
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'name' => 'required|string|max:15',
            'telephone' => 'required|string|max:10',
            'description' => 'required|string|min:8',
        ]);

        // Créer un nouvel utilisateur
        $user = User::create([
            'name' => $request->input('name'),
            'telephone' => $request->input('telephone'),
            'description' => $request->input('description'),
        ]);

        // Envoyer un e-mail
        Mail::to('jonathanchpro@gmail.com')->send(new NewUserCreated($user));

        // Rediriger vers une page de succès ou autre
        return redirect()->route('front.home')->with('success', 'Utilisateur créé avec succès');
    }
}
