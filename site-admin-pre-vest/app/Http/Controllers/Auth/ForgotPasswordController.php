<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
        $this->middleware('guest:professor');
        $this->middleware('guest:aluno');
    }

    protected function brokerAdm(){
        return Password::broker('administradors');
    }

    protected function brokerPro(){
        return Password::broker('professors');
    }

    protected function brokerAlu(){
        return Password::broker('alunos');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        if ($request['tipo_conta'] == "admin"){
            $response = $this->brokerAdm()->sendResetLink(
                $request->only('email')
            );
        }
        if ($request['tipo_conta'] == "professor"){
            $response = $this->brokerPro()->sendResetLink(
                $request->only('email')
            );
        }
        if ($request['tipo_conta'] == "aluno"){
            $response = $this->brokerAlu()->sendResetLink(
                $request->only('email')
            );
        }

        return $response == Password::RESET_LINK_SENT
            ? $this->sendResetLinkResponse($request, $response)
            : $this->sendResetLinkFailedResponse($request, $response);
    }

    use SendsPasswordResetEmails;
}
