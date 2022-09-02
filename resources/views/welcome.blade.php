@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <div class="profile-picture-box"><img src="{{ asset('images/Anthony.png') }}" alt="profile-picture"></div>
    <div class="introduction">
        <h1>Anthony Inocencio Ramos</h1>
        <p class="job">web developer</p>
        <hr>
        <p class="description">19 jaar oud, ik woon in rotterdam. Ik volg de opleiding software developer in het da vinci college dordrecht</p>
    </div>
    <div class="buttons">
        <button class="cv">download cv</button>
        <button class="werk">mijn werk</button>
    </div>
    <div class="footer">
        <a href="{{ url('contact') }}">contact</a>
    </div>        
    <div class="logo-picture-box"><img src="{{ asset('images/AIR_logo.png') }}" alt="Anthony Inocencio Ramos logo"></div>


@endsection
