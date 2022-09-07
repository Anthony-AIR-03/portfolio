@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="contact-info">
    <h1>contact information</h1>
    <hr>
    <p class="description">Laat  hier een bericht achter
        of neem contact op via een 
        van de andere platformen.
    </p>
</div>
<div class="contact-form-box">
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
        <div class="input-box">
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
    <p>06-36470448</p>
    <p>Anthonyair03@gmail.com</p>
    <p>van de woestijnestraat 84, 3076ev Rotterdam</p>
</div>

@endsection