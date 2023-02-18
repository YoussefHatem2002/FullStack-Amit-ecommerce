@extends("layouts.main")

@section("content")
    <div class="container m-5 text-center">
        <div class="row">
                <div class="col-6">
                    <img src="{{ asset('/build/assets/img/model1.jpg') }}" alt="{{ $products->name }}">
                </div>
                <div class="col-6">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('product.update', $products->id) }}" method="POST">
                        @csrf
                        <table>
                            <tr>
                                <td>ID:</td>
                                <td><input type="text" name="id" value="{{$products->id}}" readonly/></td>
                            </tr>
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" name="name" value="{{$products->name}}"/></td>
                            </tr>
                            <tr>
                                <td>price:</td>
                                <td><input type="number" name="price" value="{{$products->price}}"/></td>
                            </tr>
                        </table>
                        <input type="submit" name="submit" value="Update"/>
                    </form>
                </div>
        </div>
    </div>
@endsection
