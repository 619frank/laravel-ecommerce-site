@extends('layouts.app')

@section('content')
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--@if (session('status'))--}}
                {{--<div class="alert alert-success" role="alert">--}}
                    {{-- session('status') --}}
                {{--</div>--}}
            {{--@endif--}}                
            {{--<div class="container">--}}
			<div class="main">
				<nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
					<div class="cbp-hsinner">
						<ul class="cbp-hsmenu">
							<li><a href="{{route('products')}}">Products</a></li>
							<li><a href="{{route('my_account')}}">My account</a></li>
							<li><a href="{{route('admin')}}">Admin Dashboard</a></li>
						</ul>
					</div>
				</nav>
			</div>
		{{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    
@yield('usercontent')
@endsection
@section('scripts')
    <script src="{{asset('js/cbpHorizontalSlideOutMenu.min.js')}}"></script>
    <script>
        var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
    </script>
@endsection



