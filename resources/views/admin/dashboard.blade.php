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
								<a href="#">Products</a>
							</li>
							<li>
								<a href="#">Orders</a>
                            </li>
							<li>
								<a href="#">Customers</a>
                            </li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
        {{--</div>--}}
    {{--</div>--}}
</div>
@endsection
@section('scripts')
    <script src="js/cbpHorizontalSlideOutMenu.min.js"></script>
    <script>
        var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
    </script>
@endsection
