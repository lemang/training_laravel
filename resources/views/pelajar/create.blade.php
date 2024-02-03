@extends('layouts.app')

@section('title', 'Create Pelajar')

@section('content')
    <form class="form form-horizontal" action="{{ route('pelajar.store') }}" method="post">
        @csrf
        <div class="form-body">
            <div class="row">

                {{--Full Name--}}
                <div class="col-md-4">
                    <label for="first-name-horizontal">Full Name</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="text" id="first-name-horizontal" class="form-control" name="full_name" placeholder="Full Name">
                    @error('full_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{--Matrik--}}
                <div class="col-md-4">
                    <label for="first-name-horizontal">Matrik</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="text" id="first-name-horizontal" class="form-control" name="matric_no" placeholder="Matrik">
                    @error('matric_no')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{--Identity--}}
                <div class="col-md-4">
                    <label for="email-horizontal">Identity</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="text" id="email-horizontal" class="form-control" name="identity" placeholder="IC">
                    @error('identity')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{--Citizen Type--}}
                <div class="col-md-4">
                    <label for="contact-info-horizontal">Citizen Type</label>
                </div>
                <div class="col-md-8 form-group">
                    <select name="citizen_type" class="form-control" >
                        <option value="">
                            Pilih Warganegara
                        </option>
                        @foreach($citizenTypes as $key => $item)
                            <option value="{{ $key }}" >
                                {{ $item }}
                            </option>
                        @endforeach
                    </select>

                    @error('citizen_type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="contact-info-horizontal">Gender</label>
                </div>
                <div class="col-md-8 form-group">
                    <select name="gender" class="form-control" >
                        <option value="">
                            Pilih Gender
                        </option>
                        @foreach($genders as $key => $item)
                            <option value="{{ $key }}" >
                                {{ $item }}
                            </option>
                        @endforeach
                    </select>
                    @error('gender')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-sm-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                </div>
            </div>
        </div>
    </form>

@endsection
