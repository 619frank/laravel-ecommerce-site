@extends('welcome')

@section('usercontent')
   List of Products 
    <table border="1|0" id="products" class="display"  class="cell-border" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Sku</th>
                <th>Price</th>
                <th>description</th>
                <th>quantity</th>
                <th>image</th>
                <th>Add to cart</th>
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
                        <td><img src="{{ asset('storage/product_images/'.json_decode($product->options)->image) }}" alt="image" title="" style="width:500px;height:600px;" /></td>
                        <td>
                        <a class="btn btn-primary"  href="{{route('addtocart',[$product->id])}}">Add to cart </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
