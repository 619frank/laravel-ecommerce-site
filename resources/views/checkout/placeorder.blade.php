@extends('welcome')

@section('usercontent')
    Place Order
    <table border="1|0" id="products" class="display"  class="cell-border" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Sku</th>
                <th>Price</th>
                <th>description</th>
                <th>quantity</th>
                <th>image</th>
                <th>Place Order</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($product))
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->sku}}</td>
                        <td>{{json_decode($product->options)->price}}</td>
                        <td>{{$product->description}}</th>
                        <td>{{$product->quantity}}</th>
                        <td><img src="{{ asset('storage/product_images/'.json_decode($product->options)->image) }}" alt="image" title="" style="width:500px;height:600px;" /></td>
                        <td>
                            <form action="{{route('placeorder')}}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="product_id" value="{{$product->id}}"/> 
                                <button type="submit" value="Submit">place order</button> 
                            </form>
                        </td>
                    </tr>
            @endif
        </tbody>
    </table>
@endsection
