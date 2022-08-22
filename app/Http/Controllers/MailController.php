<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Budget;
use App\Mail\Ombudsman;
use App\Mail\Franchise;

class MailController extends Controller
{
    public function budget(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email',
            'phone' => 'required',
            'state' => 'required',
            'city' => 'required',
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'state' => $request->state,
            'city' => $request->city,
            'message' => $request->message
        );

        Mail::to('contato@simpiscinas.com')->send(new Budget($data));

        return redirect()->back()->with('status', 'Orçamento solicitado com sucesso, aguarde.');
    }

    public function ombudsman(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email',
            'phone' => 'required',
            'state' => 'required',
            'city' => 'required',
            'contract' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'state' => $request->state,
            'city' => $request->city,
            'message' => $request->message,
            'contract' => $request->file('contract')
        );

        Mail::to('ouvidoria@simpiscinas.com')->send(new Ombudsman($data));

        return redirect()->back()->with('status', 'Mensagem enviada com sucesso, aguarde.');
    }

    public function franchise(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email',
            'phone' => 'required',
            'state' => 'required',
            'city' => 'required',
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'state' => $request->state,
            'city' => $request->city,
            'message' => $request->message
        );

        Mail::to('contato@simpiscinas.com')->send(new Franchise($data));

        return redirect()->back()->with('status', 'Solicitação de franquia feita com sucesso, aguarde.');
    }
}
