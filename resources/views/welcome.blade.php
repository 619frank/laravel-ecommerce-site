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
				<span>Blueprint <span class="bp-icon bp-icon-about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
				<h1>Horizontal Slide Out Menu</h1>
				<nav>
					<a href="#" class="bp-icon bp-icon-prev" data-info="previous Blueprint"><span>Previous Blueprint</span></a>
					<a href="#" class="bp-icon bp-icon-next" data-info="next Blueprint"><span>Next Blueprint</span></a>
					<a href="#" class="bp-icon bp-icon-drop" data-info="back to the Codrops article"><span>back to the Codrops article</span></a>
					<a href="#" class="bp-icon bp-icon-archive" data-info="Blueprints archive"><span>Go to the archive</span></a>
				</nav>
			</header>	
			<div class="main">
				<nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
					<div class="cbp-hsinner">
						<ul class="cbp-hsmenu">
							<li>
								<a href="#">Lovely Spirits</a>
								<ul class="cbp-hssubmenu">
									<li><a href="#"><img src="{{asset('images/1.png')}}" alt="img01"/><span>Delicate Wine</span></a></li>
									<li><a href="#"><img src="{{asset('images/2.png')}}" alt="img02"/><span>Fine Spirit</span></a></li>
									<li><a href="#"><img src="{{asset('images/3.png')}}" alt="img03"/><span>Heavenly Ale</span></a></li>
									<li><a href="#"><img src="{{asset('images/4.png')}}" alt="img04"/><span>Juicy Lemonade</span></a></li>
									<li><a href="#"><img src="{{asset('images/5.png')}}" alt="img05"/><span>Wise Whiskey</span></a></li>
									<li><a href="#"><img src="{{asset('images/6.png')}}" alt="img06"/><span>Sweet Rum</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">Delicious Beverages</a>
								<ul class="cbp-hssubmenu cbp-hssub-rows">
									<li><a href="#"><img src="{{asset('images/7.png')}}" alt="img07"/><span>Lovely Slurp</span></a></li>
									<li><a href="#"><img src="{{asset('images/8.png')}}" alt="img08"/><span>Lemony Grappa</span></a></li>
									<li><a href="#"><img src="{{asset('images/9.png')}}" alt="img09"/><span>Eggy Liquor</span></a></li>
									<li><a href="#"><img src="{{asset('images/10.png')}}" alt="img10"/><span>Fresh Juice</span></a></li>
									<li><a href="#"><img src="{{asset('images/1.png')}}" alt="img01"/><span>Delicate Wine</span></a></li>
									<li><a href="#"><img src="{{asset('images/2.png')}}" alt="img02"/><span>Fine Spirit</span></a></li>
									<li><a href="#"><img src="{{asset('images/3.png')}}" alt="img03"/><span>Heavenly Ale</span></a></li>
									<li><a href="#"><img src="{{asset('images/4.png')}}" alt="img04"/><span>Juicy Lemonade</span></a></li>
									<li><a href="#"><img src="{{asset('images/5.png')}}" alt="img05"/><span>Wise Whiskey</span></a></li>
									<li><a href="#"><img src="{{asset('images/6.png')}}" alt="img06"/><span>Sweet Rum</span></a></li>
									<li><a href="#"><img src="{{asset('images/1.png')}}" alt="img01"/><span>Delicate Wine</span></a></li>
									<li><a href="#"><img src="{{asset('images/2.png')}}" alt="img02"/><span>Fine Spirit</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">Fine Liquors</a>
								<ul class="cbp-hssubmenu">
									<li><a href="#"><img src="{{asset('images/10.png')}}" alt="img10"/><span>Fresh Juice</span></a></li>
									<li><a href="#"><img src="{{asset('images/6.png')}}" alt="img06"/><span>Sweet Rum</span></a></li>
									<li><a href="#"><img src="{{asset('images/9.png')}}" alt="img09"/><span>Eggy Liquor</span></a></li>
								</ul>
							</li>
							<li><a href="#">Our Mission</a></li>
							<li><a href="#">Contact</a></li>
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



