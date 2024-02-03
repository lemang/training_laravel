<?php

namespace App\Http\Controllers;

use App\Helpers\CustomHelper;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class PelajarController extends Controller
{
    public function index(Request $request)
    {
        $genders = CustomHelper::lookupGeneral('gender');

        $citizenTypes = CustomHelper::lookupGeneral('type_citizen');

        $students = Student::with('lookupCitizen', 'lookupGender', 'levelStudent')
            ->filter($request)
            ->paginate(20);


//        $students = Student::with('lookupCitizen', 'lookupGender')->limit(100)->get();

        return view('pelajar.index', compact('students', 'genders', 'citizenTypes'));
    }

    public function show($id)
    {

        $student = Student::find($id);

        return view('pelajar.show', ['student' => $student]);
    }

    public function create()
    {
        $genders = CustomHelper::lookupGeneral('gender');

        $citizenTypes = CustomHelper::lookupGeneral('type_citizen');

        return view('pelajar.create', compact('genders', 'citizenTypes'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'full_name' => 'required',
            'identity' => 'required',
            'citizen_type' => 'required',
            'gender' => 'required',
            'matrik_no' => 'required',
        ]);

        Student::create($request->all());

        return redirect(route('pelajar.index'));
    }
}
