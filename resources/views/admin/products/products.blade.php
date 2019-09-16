@extends('admin.dashboard')

@section('styles')
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css"/>
@endsection

@section('admincontent')
    <a href="{{route('get_add_product')}}" class="btn btn-info" role="button">Add Product</a>
    <table id="products" class="display"  class="cell-border" style="width:100%">
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
@endsection


@section('scripts')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script>
        $(document).on('load', function () {
            $('#products').DataTable();
        });
    </script>
@endsection
