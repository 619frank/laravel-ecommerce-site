@extends('welcome')

@section('usercontent')
    
    Your Order(s)
    @if(isset($products))
    <table border="1|0" id="products" class="display"  class="cell-border" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Sku</th>
                <th>Price</th>
                <th>description</th>
                <th>quantity</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($products))
                @foreach($products as $product) 
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->sku}}</td>
                        <td>{{json_decode($product->options)->price}}</td>
                        <td>{{$product->description}}</th>
                        <td>{{$product->quantity}}</th>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    @endif
@endsection
