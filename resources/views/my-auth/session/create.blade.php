@extends('layouts.main2')

@section('content')

    <h2>my Auth Create</h2>


    @if (Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{{ Session::get('success') }}</li>
            </ul>
        </div>
    @endif

    @if (Session::has('alert'))
        <div class="alert alert-danger">
            <ul>
                <li>{{ Session::get('alert') }}</li>
            </ul>
        </div>
    @endif

    <x-form action="{{ route('my-auth.sessions.store') }}">
        <x-form-input name="email" label="email"/>
        <x-form-input name="password" label="password" type="password" />
        <x-form-checkbox name="remember" label="remember me"/>

        <button class="btn btn-success">Enter</button>
    </x-form>


    <div class="my-nav mt-3">

    </div>

@endsection
