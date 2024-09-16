<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvitadoController extends Controller
{
    public function index(Request $request) {
        return view("/invitados/base");
    }
}
