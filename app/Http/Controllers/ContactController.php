<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{

	public function store()
	{
		$message = request()->validate([
			'name' => 'required',
			'email' => ['required','email'],
			'subject' => 'required',
			'content' => ['required','min:3']
		],
		[
			'name.required' => 'Necesitas escribir tu nombre'
		]

	);

		Mail::to('flameskazu@gmail.com')->queue(new MensajeRecibido($message));

		return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas.');
	}
    // public function store(Request $request)
    // {
    // 	return $request->get('email');
    // }
}
