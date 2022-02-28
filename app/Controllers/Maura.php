<?php

namespace App\Controllers;

class Maura extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function first()
    {
        return view('first_question');
    }
}
