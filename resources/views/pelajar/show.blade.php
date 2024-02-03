@extends('layouts.app')

@section('title', 'Senarai Pelajar')

@section('content')
    <div>
        Nama : {{ $student->full_name  }}
    </div>
    <div>
        IC : {{ $student->identity  }}
    </div>
@endsection
