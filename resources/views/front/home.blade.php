@extends('front.app')

@section('content')
{{-- <!-- Slider main container -->


<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev">prev</div>
    <div class="swiper-button-next">next</div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div> --}}
 {{-- //-----------------------------------------------bandau karusele  --}}
<div class="hero" style="background-image: url('../assets/img/slider4.jpg');">
    
    <div class="hero-text">
        <h3>Discount fruits at the store 20%</h3>
        <h1>100% natural from the farm</h1>
        <p>Reach for a healthier you with organic foods.</p>
        <form action="" method="post" class="">
            @csrf
            <button type="submit" class="btn btn-outline-success">Shop now</button>
        </form>
    </div>
</div>
@foreach ($products as $product)    
<div class="container">
            
            <div class=" single-product">
                <div class=" single-product-title">{{$product->title}}</div>

                @foreach ($product->getImages as $photo)
                     <img src="{{asset('images/products/'.$photo->image)}}" style="width: 250px; height: 250px;">
                @endforeach
                    <div class="form">
                        <input type="hidden" name="route" value="{{route('front.add-js')}}">

                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <div class="price">
                        <label for="">Price: </label>
                            <input type="hidden" name="price" value="{{$product->price}}">
                        </div>
                        <input type="hidden" name="price" value="{{$product->image}}">
                        <div class="product-action">
                            <a href=""><div class="search-svg">@include('front.search-svg')</div></a>
                            <a href="""><div class="search-svg">@include('front.cart-svg')</div></a>
                        </div>
                        <div>{{$product->price}}</div>
                        <div class="add-to-cart">
                            <button type="button" class="minus-button btn btn-outline-success">-</button>
                            <input type="number" name="count" value="0" id="product-price" readonly>
                            <button type="button" class="plus-button btn btn-outline-success">+</button>
                            <button type="button" class="add-button btn btn-outline-success">ADD TO CART</button>
                        </div>
                    </div>
            </div>
</div>
@endforeach
<form action="{{route('buy')}}" method="POST">
    @csrf
    Name:<input type="text" name="name" value="">
    Email:<input type="text" name="email" value="">
    Phone:<input type="text" name="phone" value="">
    <button class="add-button "type="submit">BUY ITEM</button>
</form>
@endsection