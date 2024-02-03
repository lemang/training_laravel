<?php

namespace App\Http\Controllers;

use App\Helpers\CustomHelper;
use App\Models\LevelStudent;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $validateData = $request->validate(
            [
            'full_name' => 'required',
            'identity' => 'required',
            'citizen_type' => 'required',
            'gender' => 'required',
            'matric_no' => 'required|min:8',
            ],
            [
                'full_name.required' => 'Nama mestilah diiisi',
                'citizen_type.required' => 'Wajib diisi'
            ]
        );

        DB::beginTransaction();

        try {

            $student = Student::create($validateData);

            if($student){
                $validateData['student_id'] = $student->id;
                LevelStudent::create($validateData);
            }

            DB::commit();

            return redirect(route('pelajar.index'))->withSuccess('Pelajar Created');

        } catch (\Throwable $th){

            DB::rollBack();

            return redirect()->back()->withErrors(['errors'])->withInput();
        }


    }
}
