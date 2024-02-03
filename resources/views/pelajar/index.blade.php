@extends('layouts.app')

@section('title', 'Show Student')

@section('content')
    <div class="d-flex justify-content-end">
        <a href="{{ route('pelajar.create') }}" class="btn btn-primary">
            Create
        </a>
    </div>
    <br>

    <form class="form form-horizontal" action="{{ route('pelajar.index') }}" method="get">
        <div class="form-body">
            <div class="row">
                <div class="col-md-4">
                    <label for="first-name-horizontal">Select Citizen</label>
                </div>
                <div class="col-md-8 form-group">
                    <select name="citizen_type" class="form-control" >
                        <option value="">
                            Warganegara
                        </option>
                        @foreach($citizenTypes as $key => $item)
                            <option value="{{ $key }}">
                                {{ $item }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="first-name-horizontal">Select Gender</label>
                </div>
                <div class="col-md-8 form-group">
                    <select name="gender" class="form-control" >
                        <option value="">
                            Sila Pilih Jantina
                        </option>
                        @foreach($genders as $key => $item)
                            <option value="{{ $key }}">
                                {{ $item }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
{{--                <div class="col-md-4">--}}
{{--                    <label for="first-name-horizontal">Search keyword : </label>--}}
{{--                </div>--}}
{{--                <div class="col-md-8 form-group">--}}
{{--                    <input type="text" id="keyword-horizontal" class="form-control" name="keyword" placeholder="Searching">--}}
{{--                </div>--}}
                <div class="col-sm-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                </div>
            </div>
        </div>
    </form>

    <br>
    <table class="table">
        <tr>
            <th>
                Bil
            </th>
            <th>
                Nama
            </th>
            <th>
                IC
            </th>
            <th>
                Warganegara
            </th>
            <th>
                Jantina
            </th>
        </tr>
        @foreach($students as $key => $student)
            <tr>
                <td>
                    {{ $students->firstItem() + $key}}
                </td>
                <td>
                    <a href="{{ route('pelajar.show', [$student->id]) }}">
                        {{$student->full_name}}
                    </a>
                </td>
                <td>
                    {{$student->identity}}
                </td>
                <td>
                    {{$student->lookupCitizen->name}}
                </td>
                <td>
                    {{$student->lookupGender->name}}
                </td>
            </tr>
        @endforeach
    </table>


    {{ $students->appends(request()->except('page'))->links() }}

@endsection
