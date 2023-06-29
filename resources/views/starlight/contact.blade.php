@extends('starlight/layouts/app')
@section('head')
	<!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
    <title>Starlight Responsive Bootstrap 4 Admin Template</title>
@endsection
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Contact</span>
      </nav>
		@include('starlight/inc/alert')
      <div class="sl-pagebody">
		<div class="sl-page-title">
          <h5>Form Layouts</h5>
          <p>Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Top Label Layout</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
			<form action="{{ url('dashboard/contact/update/function') }}" method="post" enctype="multipart/form-data">
			  @csrf
			  <div class="form-layout">
				<div class="row mg-b-25">
					<div class="col-lg-12">
						<div class="form-group">
						  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
						  <input class="form-control" type="text" name="name" value="{{ $contact->name }}">
						</div>
					</div><!-- col-12 -->
					<div class="col-lg-6">
						<div class="form-group">
						  <label class="form-control-label">First Title: <span class="tx-danger">*</span></label>
						  <input class="form-control" type="text" name="first_title" value="{{ $contact->first_title }}">
						</div>
					</div><!-- col-6 -->
					<div class="col-lg-6">
						<div class="form-group">
						  <label class="form-control-label">Last Title: <span class="tx-danger">*</span></label>
						  <input class="form-control" type="text" name="last_title" value="{{ $contact->last_title }}">
						</div>
					</div><!-- col-6 -->
					<div class="col-lg-7">
						<div class="form-group">
						  <label class="form-control-label">Main Img: <span class="tx-danger">*</span></label>
						  <input class="form-control" type="file" name="bg_img">
						  <small>1000px*1500px</small>
						</div>
					</div><!-- col-7 -->
					<div class="col-lg-5">
						<div class="form-group text-center">
						  <a href="{{ url('uploads/'.$contact->bg_img) }}" ><img src="{{ asset('uploads/'.$contact->bg_img) }}" style="width:80px;height:80px;" alt="{{ $contact->bg_img }}"/></a>
						</div>
					</div><!-- col-5 -->
					<div class="col-lg-12">
						<div class="form-group">
						  <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
						  <textarea id="editor" class="form-control" name="description">{{ $contact->description }}</textarea>
						</div>
					</div><!-- col-12 -->
					<div class="col-lg-12">
						<div class="form-group">
						  <label class="form-control-label">List: <span class="tx-danger">*</span></label>
						  <input class="form-control" type="text" name="list" value="{{ $contact->list }}">
						  <small>write your list, write your list</small>
						</div>
					</div><!-- col-12 -->
				<div class="form-layout-footer">
				  <button class="btn btn-info mg-r-5" type="submit" name="submit" value="update">Submit Form</button>
				</div><!-- form-layout-footer -->
			  </div><!-- form-layout -->
			</form>
		</div><!-- card -->
      </div><!-- sl-pagebody -->
      @include('starlight/inc/footer')
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
@section('script')
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script type="text/javascript">
function editor(id){
	CKEDITOR.replace(id, {
		filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
		filebrowserUploadMethod: 'form'
	});
}
editor('editor');
</script>
@endsection

