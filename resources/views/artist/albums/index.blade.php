@include('layouts.header')
<style>
	.spad {
    padding-top: 36px;
    padding-bottom: 19px;
    padding-left: 0px; 
}
</style>

<section class="breadcrumb-section spad set-bg" data-setbg="http://127.0.0.1:8000/assets/img/bg.jpg">
	<div class="container" style="padding-top: 65px; padding-bottom: 93px;">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-text">
					<h4>Add Wallet </h4>
					<div class="bt-option">
						<a href="./index.html"><i class="fa fa-home"></i> Album</a>
						<span>Artist</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<div class="container" style="padding: 75px;">
		<div class="row">
		@foreach($albums as $album)
			<div class="card mr-2" style="width: 18rem;">
			  <img class="card-img-top" src="/storage/album_covers/{{ $album->cover_image }}" alt="{{ $album->name }}">
			  <div class="card-body">
			    <p class="card-title text-center"><a href="/albums/{{ $album->id }}">{{ $album->name }}</a></p>
			  </div>
			</div>
		@endforeach
	</div>
</div>


@csrf
@include('layouts.footer')


