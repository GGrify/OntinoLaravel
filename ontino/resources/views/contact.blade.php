@extends('layouts.layout')

@section('css') {{ asset("css/contact.css") }} @endsection

@section('title') Ontino - Contact Us @endsection

@section('heading') Свяжитесь с нами @endsection

@section('text') Напишите на почту или в соц сеть @endsection

@section('content')
    <div class="contacts">
        <div class="links">
                <h2>Мы в соц сетях</h2>
                <a href="">Instagram</a><br>
                <a href="">Facebook</a><br>
                <a href="">Twitter</a>
                <h2 class="phoneHead">Телефон:</h2>
                <a href="">+1 (234) 567-89-00</a>
        </div>
        <div class="message">
            <form action="/action" class="form_contact" method="post">
                @csrf
                <label for="name">Имя</label>
                <input type="text" id="name" name="name">
                <label for="email">Почта</label>
                <input type="text" id="email" name="email">
                <label for="message_area">Сообщение</label>
                <textarea name="text" id="message_area"></textarea>
                <input type="submit" value="Подтвердить">
            </form>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.913707090484!2d30.52080831573105!3d50.44270797947432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce558f9f07dd%3A0x160f3ed98dfabba2!2z0J3QvtC20LggT250YXJpbyAo0J7QvdGC0LDRgNC40L4p!5e0!3m2!1sru!2sro!4v1616426533655!5m2!1sru!2sro" allowfullscreen="" loading="lazy"></iframe>
    </div>
@endsection

