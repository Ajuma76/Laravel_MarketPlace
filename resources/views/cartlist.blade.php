@extends('master')
@section("content")
<div class="custom-products">
    <div class="col-sm-6">
        <div class="trending-wrapper">
            <h4>Result For Products</h4>
            <a class="btn btn-success btn-2" href="ordernow">Order Now</a> <br>
            <br>
            @foreach($products as $item)
                <div class="row searched-item cartlist-divider">
                   <div class="col-sm-3">
                       <a href="detail/{{$item->id}}">
                           <img class="trending-image" src="{{$item->gallery}}" alt="">
                       </a>
                   </div>
                    <div class="col-sm-6">
                            <div class="">
                                <h2>{{$item->name}}</h2>
                                <h5>{{$item->description}}</h5>
                            </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                    </div>
                </div>
            @endforeach
            <a class="btn btn-success btn-2" href="ordernow">Order Now</a> <br>
            <br>
        </div>
    </div>
</div>
@endsection

