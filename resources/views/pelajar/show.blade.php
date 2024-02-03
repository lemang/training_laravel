@extends('layouts.app')

@section('title', 'View Pelajar')

@section('content')
    <div>
        Nama : {{ $student->full_name  }}
    </div>
    <div>
        IC : {{ $student->identity  }}
    </div>

    <div>
        No. Matrik : {{ $student->levelStudent->matric_no  }}
    </div>
@endsection
