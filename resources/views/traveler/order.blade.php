@extends('traveler/layouts/app')
@section('head')
	<!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="">
    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta property="og:image" content="">
    <meta property="og:image:secure_url" content="">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <!-- Meta -->
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link href="{{ asset('traveler/img/favicon.ico' ) }}" rel="icon">
    <title>Starlight Responsive Bootstrap 4 Admin Template</title>
@endsection
@section('content')
<!-- Registration Start -->
<div class="container-fluid py-5">
	<div class="container py-5">
		<div class="align-items-center">
			<div class="card border-0">
				<div class="card-header bg-primary text-center p-4">
					<h1 class="text-white m-0">complete Your Order</h1>
				</div>
				<div class="card-body rounded-bottom bg-white p-5">
					<form>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Name</label>
									<input type="text" class="form-control p-4" name="name" placeholder="Your name" required="required" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Email</label>
									<input type="email" class="form-control p-4" name="email" placeholder="Your email" required="required" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Mobile</label>
									<input type="text" class="form-control p-4" name="mobile" placeholder="Your mobile" required="required" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="">Title</label>
									<input type="text" class="form-control p-4" name="title" value="{{ $package->title }}" required="required" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Category</label>
									<input type="text" class="form-control p-4" name="category" value="{{App\Models\Category::find($package->category)->name}}" required="required" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Sub Category</label>
									<input type="text" class="form-control p-4" name="subcategory" value="{{App\Models\Subcategory::find($package->subcategory)->name}}" required="required" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Price</label>
									<input type="text" class="form-control p-4" value="{{ $package->price }}" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Discount</label>
									<input type="text" class="form-control p-4"  value="{{ $package->discount }}" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Total Price</label>
									<input type="text" class="form-control p-4" name="price" value="{{ $package->price - $package->discount }}" required="required" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="">Message</label>
									<textarea class="form-control p-4" name="message"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div>
									<button class="btn btn-primary btn-block py-3" type="submit">Payment</button>
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


@include('traveler\inc\gallery')
@endsection
    

