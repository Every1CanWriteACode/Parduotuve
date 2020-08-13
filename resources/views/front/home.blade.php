@extends('front.app')
<script src="{{asset('main.js')}}"></script>
@section('content')
{{-- -------------------------- --}}
<!-- Slider main container -->
<div class="background-hero">
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        {{-- <div class="swiper-slide" style="background-image: url('../assets/img/slider4.jpg');">
            <div class="hero-text">
                <h3>Discount fruits at the store 20%</h3>
                <h1>100% natural from the farm</h1>
                <p>Reach for a healthier you with organic foods.</p>
                <form action="" method="post" class="">
                    @csrf
                    <button type="submit" class="btn btn-outline-success">Shop now</button>
                </form>
            </div> --}}
            {{-- <img src="{{url('assets/img/slider4.jpg')}}" alt="ANANASAS"> --}}
        {{-- </div>
        <div class="swiper-slide" style="background-image: url('../assets/img/slider8.jpg');">
            <div class="hero-text">
                <h3>Discount fruits at the store 20%</h3>
                <h1>100% natural from the farm</h1>
                <p>Reach for a healthier you with organic foods.</p>
                <form action="" method="post" class="">
                    @csrf
                    <button type="submit" class="btn btn-outline-success">Shop now</button>
                </form>
            </div> --}}
            {{-- <img src="{{url('assets/img/slider8.jpg')}}" alt="ANANASAS"> --}}
        {{-- </div>
        <div class="swiper-slide" style="background-image: url('../assets/img/slider9.jpg');">
            <div class="hero-text" >
                <h3>Discount fruits at the store 20%</h3>
                <h1>100% natural from the farm</h1>
                <p>Reach for a healthier you with organic foods.</p>
                <form action="" method="post" class="">
                    @csrf
                    <button type="submit" class="btn btn-outline-success">Shop now</button>
                </form> --}}
            {{-- </div> --}}
            {{-- <img src="{{url('assets/img/slider9.jpg')}}" alt="ANANASAS"> --}}
        {{-- </div> --}}
        
    </div>
    <!-- If we need pagination -->
    {{-- <div class="swiper-pagination"></div> --}}

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>
</div>
{{-- -------------------------- --}}
{{-- <div class="hero" style="background-image: url('../assets/img/slider4.jpg');"> --}}
    
    {{-- <div class="hero-text">
        <h3>Discount fruits at the store 20%</h3>
        <h1>100% natural from the farm</h1>
        <p>Reach for a healthier you with organic foods.</p>
        <form action="" method="post" class="">
            @csrf
            <button type="submit" class="btn btn-outline-success">Shop now</button>
        </form>
    </div> --}}
</div>
<div class="container">
    <div class="about-us">
        <div class="about-us-left">
        <img src="{{url('assets/img/banner5.png')}}" alt="ANANASAS">
        </div>
        <div class="about-us-right">
            <div class="circle">
                <span>01</span>
            </div>
            <h2>About us</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem vitae animi, iste nisi facere voluptatibus, omnis velit nesciunt repellendus saepe sunt iusto tempora officiis error! Vitae sequi odio quia quos!</p>
            <button class="dd-button btn btn-outline-success">READ MORE</button>
        </div>
    </div>
    <div class="testimonials">
        <div class="testimonials-left">
            <img src="{{url('assets/img/banner6.png')}}" alt="girl">
        </div>
        <div class="testimonials-right">
            <div class="circle-testimonials">
                <span>02</span>
            </div>
            <div class="testimonials-info">
            {{-- <h2>Testimonials</h2>
            <div class="testimonials-person">
                <div class="testimonials-img">
                    <img src="{{url('assets/img/testimonials3.jpg')}}" alt="profile-1">
                </div>
                <div class="span">
                    <span>Shetty Jamie</span>
                    <span>Designer</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam similique vero sit.</p>
            </div>
            
            <div class="testimonials-person bg-2">
                <div class="testimonials-img">
                    <img src="{{url('assets/img/testimonials2.jpg')}}" alt="profile-2">
                </div>
                <div class="span">
                    <span>Patnaik Darcy</span>
                    <span>Designer</span>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, esse rem! Voluptates.</p>
            </div>
            <div class="testimonials-person bg-3">
                <div class="testimonials-img">
                    <img src="{{url('assets/img/testimonials1.jpg')}}" alt="profile-3">
                </div>
                <div class="span">
                    <span>Michiel Huisman</span>
                    <span>Designer</span>
                
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos voluptatum perspiciatis repellat.</p>
            </div> --}}
        
        </div>
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