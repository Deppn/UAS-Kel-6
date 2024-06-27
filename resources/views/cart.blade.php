@extends('main')

@section('content')
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @foreach($cart as $item)
            @php
                $product = $item->product;
                $subtotal = $product->price * $item->quantity;
                $total += $subtotal;
            @endphp
            <tr rowId="{{ $item->product_id }}">
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs"><img src="{{ $product->image }}" class="card-img-top"/></div>
                        <div class="col-sm-9">
                            <h4 class="nomargin">{{ $product->title }}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="Price">${{ $product->price }}</td>
                <td data-th="Quantity">{{ $item->quantity }}</td>
                <td data-th="Subtotal" class="text-center">${{ $subtotal }}</td>
                <td class="actions">
                    <a class="btn btn-outline-danger btn-sm delete-item">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <button class="btn btn-danger">Checkout</button>
            </td>
        </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
<script type="text/javascript">

    $(".delete-item").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.item') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection
