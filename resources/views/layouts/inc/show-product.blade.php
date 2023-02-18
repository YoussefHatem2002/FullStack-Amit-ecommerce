@extends("layouts.main")

@section("content")
    <div class="container m-5 text-center">
        <div class="row">
                <div class="col-6">
                    <img src="{{ asset('/build/assets/img/model1.jpg') }}" alt="{{ $products->name }}">
                </div>
                <div class="col-6">
                    <table>
                        <tr>
                            <td>Name:</td>
                            <td>{{ $products->name }}</td>
                        </tr>
                        <tr>
                            <td>price:</td>
                            <td>{{ $products->price }}</td>
                        </tr>
                    </table>
                </div>
        </div>
    </div>
@endsection
