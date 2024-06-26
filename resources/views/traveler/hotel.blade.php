@extends('traveler/layouts/app')
@section('head')
	<!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $setting->title }}">
    <meta name="twitter:description" content="{!!$setting->description!!}">
    <meta name="twitter:image" content="{{asset('uploads/'.$setting->icon)}}">
    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="{{ $setting->title }}">
    <meta property="og:description" content="{!!$setting->description!!}">
    <meta property="og:image" content="{{asset('uploads/'.$setting->icon)}}">
    <meta property="og:image:secure_url" content="{{asset('uploads/'.$setting->icon)}}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <!-- Meta -->
    <meta content="" name="{{ $setting->keywords }}">
    <meta content="" name="{!!$setting->description!!}">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link href="{{asset('uploads/'.$setting->icon)}}" rel="icon">
    <title>{{ $setting->title }}</title>
@endsection
@section('content')
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <img src="{{ asset('add.gif') }}" width="100%" height="200px"/>
    </div>
</div>
<!-- Registration Start -->
<div class="container-fluid">
	<div class="container py-5">
		<div class="align-items-center">
			<div class="card border-0">
				<div class="card-header bg-primary text-center p-4">
					<h1 class="text-white m-0">Book Hotel</h1>
				</div>
				<div class="card-body rounded-bottom bg-white p-5">
					<form action="{{ url('hotel/insert/function') }}" method="post">
						@csrf
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Name</label>
									<input type="text" class="form-control p-4" name="name" placeholder="Sakib Hasan" required="required" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Email</label>
									<input type="email" class="form-control p-4" name="email" placeholder="example@mail.com" required="required" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Mobile</label>
									<input type="text" class="form-control p-4" name="mobile" placeholder="017" required="required" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Adult</label>
									<input type="number" class="form-control p-4" name="adult" placeholder="0" required="required" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Child</label>
									<input type="number" class="form-control p-4" name="child" placeholder="0" required="required" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Check In date</label>
									<input type="date" class="form-control p-4" name="check_in_date" required="required" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Check Out Date</label>
									<input type="date" class="form-control p-4" name="check_out_date" required="required" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Hotel Name</label>
									<input type="text" class="form-control p-4" name="hotel_name" placeholder="hotel name" required="required" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Hotel Address</label>
									<input type="text" class="form-control p-4" name="hotel_address" placeholder="hotel address" required="required" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Room</label>
									<input type="text" class="form-control p-4" name="room" placeholder="1" required="required" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="">Message</label>
									<textarea class="form-control p-4" name="message">Sir, </textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div>
									<button class="btn btn-primary btn-block py-3" type="submit" name="submit" value="insert">Buy Hotel Room</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Registration End -->


@include('traveler/inc/mobile')



@include('traveler/inc/gallery')
@endsection
    

