<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class PelajarController extends Controller
{
    public function index(Request $request)
    {
        $students = Student::with('lookupCitizen', 'lookupGender', 'levelStudent')->paginate(20);

//        $students = Student::with('lookupCitizen', 'lookupGender')->limit(100)->get();

        return view('pelajar.index', compact('students'));
    }

    public function show($id)
    {

        $student = Student::find($id);

        return view('pelajar.show', ['student' => $student]);
    }

    public function create()
    {
        return view('pelajar.create');
    }

    public function store(Request $request)
    {

        dd($request);

        return redirect(route('pelajar.index'));
    }
}
