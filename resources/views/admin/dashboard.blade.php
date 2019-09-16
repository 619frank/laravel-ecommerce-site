@extends('layouts.app')

@section('content')
<div class="container">
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--@if (session('status'))--}}
                {{--<div class="alert alert-success" role="alert">--}}
                    {{-- session('status') --}}
                {{--</div>--}}
            {{--@endif--}}                
        <div class="container">
			<header class="clearfix">
				<h1>Admin Dashboard</h1>
            </header>	
			<div class="main">
				<nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
					<div class="cbp-hsinner">
						<ul class="cbp-hsmenu">
							<li>
								<a href="{{route('admin_products')}}">Products</a>
							</li>
							<li>
								<a href="{{route('admin_orders')}}">Orders</a>
                            </li>
							<li>
								<a href="{{route('admin_customers')}}">Customers</a>
                            </li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
        {{--</div>--}}
    {{--</div>--}}
    @yield('admincontent')
</div>
@endsection
@section('scripts')
    <script src="{{asset('js/cbpHorizontalSlideOutMenu.min.js')}}"></script>
    <script>
        var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
    </script>
@endsection
