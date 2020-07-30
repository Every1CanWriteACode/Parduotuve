<?php
if($count > 0){
    ?>
    <span class="count">{{$count}}</span>
    <?php
}
?>
{{-- <span class="total">{{$total}}</span>
<span class="cur">EUR</span> --}}

<div class="mini-cart-list">
    <ul>
        @foreach ($cartProducts as $cartProduct)
        <?php
        // print_r($cartProduct->title);
        ?>
                    <li>
                        
                <form action="{{route('front.remove')}}" method="post">
                    <input type="hidden" name="product_id" value="{{$cartProduct->id}}">
                    @csrf
                    Product: {{$cartProduct->title}}<br> 
                    Quantity: {{$cart[$cartProduct->id]['count']}}
                    <button type="submit" class="btn btn-outline-success btn-xs button-right">-</button>
                </form>
            </li>
            @endforeach
            <?php
                // if($total > 0){
                    ?>
                
                    <p>Total: {{$total}} Eur</p>
                    @foreach ($cartProducts as $cartProduct)
                    <form action="{{route('front.cart')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <button type="submit">Pay</button>
                    </form>
                    @endforeach
                    <?php
                // }
            ?>
     </ul>
</div>