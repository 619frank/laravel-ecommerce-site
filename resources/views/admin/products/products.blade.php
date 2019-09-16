@extends('admin.dashboard')

@section('admincontent')
    <a href="{{route('get_add_product')}}" class="btn btn-info" role="button">Add Product</a>
    Here is teh admin product content
@endsection

