@extends('layout.layout')
@section('header')
<script src="{{asset('ckeditor_4/ckeditor.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
@endsection
@section('content')
	<div class="container">
	<div class="container-fluid">	
	<!-- <div class="row"> -->
		<center><h2>THÊM MỚI DỰ ÁN</h2></center>
		<form action="add" method="POST" enctype="multipart/form-data">
			<!-- @csrf -->
			<input type="hidden" name="_token" id="" value="{{csrf_token()}}">
			<div class="row">
		      	<div class="col-sm-6">
			      	<div class="form-group">
					    <label for="title">Tiêu đề</label>
					    <input type="text" value="{{ old('title')}}" name="title" class="form-control" id="title">
			  		</div>
			  		@if ($errors->has('title'))
			  		  	<div class="alert alert-danger">
					      {{ $errors->first('title') }}
					     </div>
					@endif
			  	</div>	
			  	<div class="col-sm-3">
			      	<div class="form-group">
					    <label for="price">Giá</label>
					    <input type="text" name="price" value="{{ old('price')}}" class="form-control" id="price">
			  		</div>
			  		@if ($errors->has('price'))
			  		  	<div class="alert alert-danger">
					      {{ $errors->first('price') }}
					     </div>
					@endif
		    	</div>
		    	<div class="col-sm-3">
			      	<div class="form-group">
					    <label for="acreage">Diện tích</label>
					    <input type="text" name="acreage" value="{{ old('acreage')}}" class="form-control" id="acreage">
			  		</div>
			  		@if ($errors->has('acreage'))
			  		  	<div class="alert alert-danger">
					      {{ $errors->first('acreage') }}
					     </div>
					@endif
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-sm-6">
		    		<div class="form-group">
					    <label for="location">Vị trí</label>
					    <input type="text" name="location" value="{{ old('location')}}" class="form-control" id="location">
			  		</div>
			  		@if ($errors->has('location'))
			  		  	<div class="alert alert-danger">
					      {{ $errors->first('location') }}
					     </div>
					@endif
			  		<div class="form-group">
					    <label for="image">Ảnh</label>
					    <input type="file" name="image" value="{{ old('image')}}" class="form-control" id="image">
					    <img class="add-img col-sm-12" id="blah" src="" alt="" />
			  		</div>
			  		@if ($errors->has('image'))
			  		  	<div class="alert alert-danger">
					      {{ $errors->first('image') }}
					     </div>
					@endif
		    	</div>
		    	<div class="col-sm-6">
		    		<div class="form-group">
					    <label for="map">Google Map <a href="https://developers.google.com/maps/documentation/embed/start?hl=vi">link</a></label>
					    <input type="text" name="map" value="{{ old('map')}}" class="form-control" id="map">
			  		</div>
			  		<div class="form-group col-sm-2">
					    <label for="sold">Đã bán</a></label>
					    <input type="checkbox" name="sold" class="form-control" value="on" 
        {{ old('sold') == 'on' ? 'checked' : '' }} id="sold">
					    
			  		</div>
			  	</div>	
		    </div>
		    <div class="row">
		    	<div class="col-sm-12">
				  <div class="form-group">
				  	<label for="email">Tổng quan</label>
					  	<textarea name="overview" id="editor" class="textarea">{{ old('overview')}}</textarea>
				  </div>
				  @if ($errors->has('overview'))
			  		  	<div class="alert alert-danger">
					      {{ $errors->first('overview') }}
					     </div>
					@endif
				</div>
				<div class="col-sm-12">
				  <div class="form-group">
				  	<label for="email">Nội dung</label>
					  	<textarea name="content" id="editor1" class="textarea">{{ old('content')}}</textarea>
				  </div>
				  @if ($errors->has('content'))
			  		  	<div class="alert alert-danger">
					      {{ $errors->first('content') }}
					     </div>
					@endif
				</div>
			</div>	  
		  <button name="submit" type="submit" class="btn btn-primary">Lưu</button>
		</form>
	</div>
</div>
@endsection
@section('footer')
	<script>
        CKEDITOR.replace( 'editor', {
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
    </script>
    <script>
        CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
    </script>
    <script type="text/javascript">
    	function readURL(input) {

		  if (input.files && input.files[0]) {
		    var reader = new FileReader();

		    reader.onload = function(e) {
		      $('#blah').attr('src', e.target.result);
		    }

		    reader.readAsDataURL(input.files[0]);
			  }
			}

			$("#image").change(function() {
			  readURL(this);
		});
    </script>

@endsection
