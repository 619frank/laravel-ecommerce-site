
@extends('admin.dashboard')

@section('admincontent')
    All Customers 
    @if(isset($customers))
    <table border="1|0" id="products" class="display"  class="cell-border" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($customers))
                @foreach($customers as $customer) 
                    <tr>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</th>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    @endif 
@endsection

