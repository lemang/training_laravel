@extends('layouts.app')

@section('title', 'Create Pelajar')

@section('content')
    <form class="form form-horizontal" action="{{ route('pelajar.store') }}" method="post">
        @csrf
        <div class="form-body">
            <div class="row">
                <div class="col-md-4">
                    <label for="first-name-horizontal">First Name</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="text" id="first-name-horizontal" class="form-control" name="fname" placeholder="First Name">
                </div>
                <div class="col-md-4">
                    <label for="email-horizontal">Email</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="email" id="email-horizontal" class="form-control" name="email-id" placeholder="Email">
                </div>
                <div class="col-md-4">
                    <label for="contact-info-horizontal">Mobile</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="number" id="contact-info-horizontal" class="form-control" name="contact" placeholder="Mobile">
                </div>
                <div class="col-md-4">
                    <label for="password-horizontal">Password</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="password" id="password-horizontal" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="col-12 col-md-8 offset-md-4 form-group">
                    <div class="form-check">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox1" class="form-check-input" checked="">
                            <label for="checkbox1">Remember Me</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                </div>
            </div>
        </div>
    </form>

@endsection
