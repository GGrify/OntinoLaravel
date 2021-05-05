@extends('layouts.layout')

@section('css') {{ asset("css/shop.css") }} @endsection

@section('title') Ontino - Shop @endsection

@section('heading') Онлайн заказ @endsection

@section('text') Блюда ручной работы из лучших ингредиентов @endsection

@section('content')
    @php
        if(isset($_GET['type'])){
            $typeSelected = $_GET['type'];
        } else $typeSelected = 'all';
        if(isset($_GET['sortBy'])){
            $sortSelected = $_GET['sortBy'];
        } else $sortSelected = 'popularity';
    @endphp
    <div class="wrapper">
        <div class="list">
            <a @php echo ($typeSelected == 'all') ? 'class="active_list"' : '' @endphp href="{{request()->fullUrlWithQuery(['type' =>'all'])}}">Все блюда</a>
            <a @php echo ($typeSelected == 'first') ? 'class="active_list"' : '' @endphp href="{{request()->fullUrlWithQuery(['type' =>'first'])}}">Первое</a>
            <a @php echo ($typeSelected == 'second') ? 'class="active_list"' : '' @endphp href="{{request()->fullUrlWithQuery(['type' =>'second'])}}">Второе</a>
            <a @php echo ($typeSelected == 'dessert') ? 'class="active_list"' : '' @endphp href="{{request()->fullUrlWithQuery(['type' =>'dessert'])}}">Десерты</a>
            <a @php echo ($typeSelected == 'drink') ? 'class="active_list"' : '' @endphp href="{{request()->fullUrlWithQuery(['type' =>'drink'])}}">Напитки</a>
        </div>
        <select name="" id="sortBy" class="selector" onchange="location.href=document.getElementById('sortBy').options[document.getElementById('sortBy').selectedIndex].value;">
            <option @php echo ($sortSelected == 'popularity') ? 'selected="selected"' : '' @endphp value="{{request()->fullUrlWithQuery(['sortBy' =>'popularity'])}}">По популярности</option>
            <option @php echo ($sortSelected == 'cheap') ? 'selected="selected"' : '' @endphp value="{{request()->fullUrlWithQuery(['sortBy' =>'cheap'])}}">От дешевых</option>
            <option @php echo ($sortSelected == 'expensive') ? 'selected="selected"' : '' @endphp value="{{request()->fullUrlWithQuery(['sortBy' =>'expensive'])}}">От дорогих</option>
        </select>
        <div class="list_items">
            @foreach($products as $product)
                <div class="item"><a href="">
                        <img src="img/{{$product->imgName}}" alt="FoodFoto">
                        <h2>{{$product->name}}</h2>
                        <div class="line"></div>
                        <span>{{$product->price}}₴</span>
                    </a></div>
            @endforeach
        </div>
    </div>
    <script>
        function getListProducts() {
            $.ajax({
                type:'GET',
                url:'/shop',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data) {
                    $("#msg").html(data.msg);
                }
            });
        }
    </script>
@endsection
