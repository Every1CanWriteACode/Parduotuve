@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New product</div>

                <div class="card-body">
                    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">

                        <label>Title:</label>
                        <input type="text" name="product_title"><br>
                        <label>Price:</label>
                        <input type="text" name="product_price">
                        <br><br>
                        
                        <div id="product-photo-inputs-area">
                            <input type="file" name="photo[]">
                            {{-- <button id="delete-product-photo-button" type="button" class="btn btn-outline-primary btn-sm">x</button> --}}
                            <br><br>
                            
                        </div>


                        
                        <button id="add-product-photo-button" type="button" class="btn btn-outline-primary btn-sm">add photo</button>
                        
                        <button type="submit" class="btn btn-outline-primary btn-sm">SAVE</button>
                        @csrf

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
