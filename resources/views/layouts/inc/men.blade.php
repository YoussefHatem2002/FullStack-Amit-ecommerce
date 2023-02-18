@extends("layouts.main")

@section("content")
    <div class="container mt-3">
        <div class="row">
            @foreach ($categories->Products as $p)
                <div class="col-3 mb-3">
                    <a href="{{route('show', $p->id)}}" style="color: black; text-decoration:none;">
                        <img src="{{asset('/build/assets/img/men22.jpg')}}" width="300px" height="300px" alt="...">
                        <p>{{$p->name}}</p>
                        <p>{{$p->price}}</p>
                        <div class="links">
                            <a href="{{route('addcart', ['instance' => 'wishlist', 'product_id' => $p->id])}}"><i class="fas fa-heart"></i></a>
                            <a href="{{route('addcart', ['instance' => 'cart', 'product_id' => $p->id])}}"><i class="fas fa-cart-shopping"></i></a>
                            <a href="#"><i class="fas fa-share-nodes"></i></a>
                            @if(Auth::user()->role == '1')
                                <a href="{{route('product.edit', $p->id)}}">Edit</a>
                            @endif
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
