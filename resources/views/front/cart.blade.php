

@foreach ($cartProducts as $cartProduct)

             <li>
                 
         <form action="{{route('front.remove')}}" method="post">
             <input type="hidden" name="product_id" value="{{$cartProduct->id}}">
             @csrf
             Product: {{$cartProduct->title}}<br> 
             {{$cartProduct}}<br>
             Quantity: {{$cart[$cartProduct->id]['count']}}
             <button type="submit" class="btn btn-outline-success btn-xs button-right">-</button>
         </form>
     </li>
@endforeach

<form action="" method="POST">
    @csrf
    Name:<input type="text" name="name" value="">
    Email:<input type="text" name="email" value="">
    Phone:<input type="text" name="phone" value="">
    <button class="add-button "type="submit">SEND ME GOODIES</button>
</form>
{{-- <h1>aaaaaaaaaaaaaaaaaa</h1> --}}

{{-- @foreach($request->file('photo') as $image)
    $name = $image->getClientOriginalName();
    $destinationPath = public_path('/images/products');
    $image->move($destinationPath, $name);

    $photo = new Image;
    $photo->image = $name;
    $photo->product_id = $product->id;
    $photo->save();

@endforeach --}}