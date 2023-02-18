@extends("layouts.main")

@section("content")
    <div class="w-50 m-auto">
        @if(Session::has('success_message'))
        <div class="alert alert-success">
            <strong>Success!</strong> {{Session::get('success_message')}}
        </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                    <th>Options</th>
                </tr>
            </thead>

            <tbody>

                @foreach($cart->content() as $c)
                    <tr>
                        <td>
                            <p><strong>{{$c->name}}</strong></p>
                            {{-- <p><--?php echo ($c->options->has('size') ? $c->options->size : ''); ?></p> --}}
                        </td>
                        <td><input type="number" value="{{$c->qty}}" onchange="change('{{$c->rowId}}', this.value)"/></td>
                        <td>${{$c->price}}</td>
                        <td>${{$c->subtotal}}</td>
                        <td>
                            {{-- you can edit by incresing number of quantity and clicking in edit botton and deleting by clicking on button--}}
                            <a class="btn btn-warning m-2 p-2" id="{{$c->rowId}}" onclick=""><i class="fa-solid fa-pen"></i></a>
                            <a class="btn btn-danger m-2 p-2" href="{{route('deleteCart', $c->rowId)}}"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                @endforeach

            </tbody>

            <tfoot>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td>Subtotal</td>
                    <td>{{$cart->subtotal}}</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td>Tax</td>
                    <td>{{$cart->tax}}</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td>Total</td>
                    <td>{{$cart->total}}</td>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
