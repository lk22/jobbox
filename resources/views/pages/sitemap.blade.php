@extends('layout')
@section('page')

<div class="jumbotron" id="sitemap">
	<div class="container">
		<div class="row">
		<h2>Sitemap</h2>
			<ul class="sites">
				{{-- <li class="site-item">
					<h3>
						<a href="/blog">Blog</a>
					</h3>
				</li> --}}
				<li class="site-item">
					<h3>
						<a href="/signin">Login</a>
					</h3>
				</li>
				<li class="site-item">
					<h3>
						<a href="/join">Tilmeld</a>
					</h3>
				</li>
				<li class="site-item">
					<h3>
						<a href="/contact">Kontakt</a>
					</h3>
				</li>
				{{-- <li class="site-item">
					<h3>
						<a href="/product">Produkt</a>
					</h3>
				</li> --}}
			</ul>
		</div>
	</div>
</div>

@stop