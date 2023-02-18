
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Subtotal</th>
                <th>Options</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($content as $c) :?>
                <tr>
                    <td>
                        <p><strong><?php echo $c->product_name; ?></strong></p>
                        {{-- <p><--?php echo ($c->options->has('size') ? $c->options->size : ''); ?></p> --}}
                    </td>
                    <td><input type="text" value="<--?php echo $c->qty; ?>"></td>
                    <td>$<?php echo $c->product_price; ?></td>
                    <td>$total</td>
                    <td>
                        <button class="btn btn-warning m-2 p-2" onclick="">Edit</button>
                        <a class="btn btn-danger m-2 p-2" href="{{route('deleteCart', $c->cart_id)}}">Delete</a>
                    </td>
                </tr>

            <?php endforeach;?>

        </tbody>

        <tfoot>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td>Subtotal</td>
                <td><?php echo Cart::subtotal(); ?></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td>Tax</td>
                <td><?php echo Cart::tax(); ?></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td>Total</td>
                <td><?php echo Cart::total(); ?></td>
            </tr>
        </tfoot>
    </table>
