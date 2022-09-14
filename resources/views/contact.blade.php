@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
@section('js')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endsection

@section('content')
<div class="logo-picture-box">
    <img src="{{ asset('images/AIR_logo.png') }}" alt="Anthony Inocencio Ramos logo">
</div>
<div class="contact-info">
    <h1>contact information</h1>
    <hr>
    <p class="description">Laat  hier een bericht achter
        of neem contact op via een 
        van de andere platformen.
    </p>
</div>
<div class="contact-form-box">
    <div class="contact-form-title-box">
        <h1>Stuur een mail</h1>
    </div>
    <form action="#" method="post" class="contact-form">
        <div class="input-box">
            <input type="text" name="name" required>
            <label for="name">naam*</label>
        </div>
        <div class="input-box">
            <input type="text" name="businessname">
            <label for="businessname">bedrijfsnaam</label>
        </div>
        <div class="input-box input-email-box">
            <input type="email" name="mail" required>
            <label for="mail">email*</label>
        </div>
        <div class="input-box input-subject-box">
            <select name="subject">
                <option value="compliment">compliment</option>
                <option value="work">werk</option>
                <option value="question">klacht</option>
                <option value="question">vraag</option>
            </select>
            <label for="subject">onderwerp*</label>
        </div>
        <div class="input-box input-message-box">
            <textarea type="text" name="message"></textarea>
            <label for="message">bericht*</label>
        </div>
        <input type="submit" value="stuur bericht">
    </form>
</div>
<div class="contact-options">
    <p id="tel-nummer"><i class="fa-solid fa-square-phone"></i>06-36470448</p>
    <p><i class="fa-solid fa-envelope"></i>Anthonyair03@gmail.com</p>
    <p><i class="fa-solid fa-location-dot"></i>van de woestijnestraat 84, 3076ev Rotterdam</p>
</div>

@endsection