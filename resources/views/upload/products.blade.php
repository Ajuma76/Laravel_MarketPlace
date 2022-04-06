@extends("master")
@section("content")
    <div class="container">
        <div class="row">
            <div class="trending-item col-sm-6" >
                @foreach($products as $item)
                    <img style="width: 100%" class="detail-image" src="{{asset("uploads/".$item->gallery)}}" alt="">
            </div>
            <div class="trending-item col-sm-6" >
                <a href="/">Go Back</a>
                <h2>{{$item->name}}</h2>
                <h3>Price: {{$item->price}}</h3>
                <h3>Details:  {{$item->description}}</h3>
                <h4>Category: {{$item->category}}</h4>

                <br>
                <form action="/add_to_cart" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$item['id']}}">
                    <button class="btn btn-primary">Add to Cart</button>
                </form>
                <br>
                <br>
                <buttom class="btn btn-success">Buy Now</buttom>
                <br>
            </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection
