<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSubjectRequest;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () 
    {
        $subjects = Subject::all();

        return view('subject', compact('subjects'));
    }

    public function store(StoreSubjectRequest $request)
    {
        Subject::create([
            'name' => $request->name
        ]);

        return redirect()->route('subjects')->with('sucess', 'Máteria adicionada com sucesso!');
    }
}
