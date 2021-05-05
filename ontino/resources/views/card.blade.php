@extends('layouts.layout')

@section('css') {{ asset("css/card.css") }} @endsection

@section('title') Ontino - Card @endsection

@section('heading') Корзина @endsection

@section('text') Заказывайте свежие блюда прямо на дом @endsection

@section('content')
    <div class="wrapper">
        <div class="lineOfTable">
            <div>Продукт</div>
            <div>Цена</div>
            <div>Количество</div>
            <div>Сума</div>
            <div>&nbsp;</div>
        </div>
        <div class="lineOfTable">
            <div>Яичница</div>
            <div>50₴</div>
            <div>1</div>
            <div>50₴</div>
            <div><a href="" class="close"></a></div>
        </div>
        <div class="lineOfTable">
            <div>Стейк</div>
            <div>500₴</div>
            <div>1</div>
            <div>500₴</div>
            <div><a href="" class="close"></a></div>
        </div>


        <div class="result">
            <p>Общая сумма: 550₴</p>
            <button><a href="">Подтвердить</a></button>
        </div>
    </div>
@endsection
