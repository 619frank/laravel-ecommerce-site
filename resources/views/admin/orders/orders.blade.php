
@extends('admin.dashboard')

@section('admincontent')
    All Orders
     @if(isset($products))
    <table border="1|0" id="products" class="display"  class="cell-border" style="width:100%">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Customer Id</th>
                <th>Product Name</th>
                <th>Sku</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($products))
                @foreach($products as $product) 
                    <tr>
                        <td>{{$product->username}}</td>
                        <td>{{$product->userid}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->sku}}</td>
                        <td>{{json_decode($product->options)->price}}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    @endif 
@endsection

