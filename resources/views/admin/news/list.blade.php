@extends('layout.layout')
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">	
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->
@section('header')  
	<link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/responsive.bootstrap4.min.css')}}" rel="stylesheet">
@endsection	
@section('content')
<div class="container-fluid">	
	
	<center><h2>DANH SÁCH DỰ ÁN</h2></center>
	@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
	@endif
	<div class="row">
		<div class="col-sm-12">
			<div class="col-sm-2 add-button"><a href="{{asset('admin/news/add')}}"><button type="button" class="btn btn-danger"><i class="far fa-calendar-plus"> THÊM MỚI</i></button></a></div>
			<table class="table" id="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Tiêu Đề</th>
			      <th scope="col">Ảnh</th>
			      <th scope="col">Mô Tả</th>
			      <th scope="col">Lượt xem</th>
			      <th scope="col">Tạo</th>
			      <th scope="col">Sửa</th>
			      <th scope="col">Thao Tác</th>
			    </tr>
			  </thead>
			  <tbody>
				@foreach($news as $news)
			    <tr>
			      <th scope="row">{{$loop->iteration}}</th>
			      <td>{!! str_limit($news->title,30, '...') !!}</td>
			      <td><img class="list-image" @if($news->image)src="{{asset(\Storage::url($news->image->path))}}" @endif alt=""></td>
			      <td>{!! str_limit($news->description,30, '...') !!}</td>
			      <td>{{$news->view}}</td>
			      <td>{{$news->created_at->diffForHumans()}}</td>
			      <td>{{$news->updated_at->diffForHumans()}}</td>
			      <td class="action">
			      	<button type="button" class="btn btn-info"><i class="fas fa-eye"></i></button>
			      	<button type="button" class="btn btn-warning"><a href="{{asset('admin/news/edit')}}/{{$news->id}}"><i class="fas fa-edit"></i></a></button>
			      	<button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
			      </td>
			    </tr>
				@endforeach
			  </tbody>
			</table>
		</div>		
	</div>
</div>
@endsection
@section('footer')
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('#table').on('click','.btn-danger' ,function(){
			swal({
				  title: "Chắc chắn chưa Tuấn",
				  text: "Nếu xóa đi là không lấy lại được đâu đấy!",
				  icon: "warning",
				  buttons: true,
				  dangerMode: true,
				})
				.then((willDelete) => {
				  if (willDelete) {
				    swal("Thế là đi luôn rồi!", {
				      icon: "success",
				    });
				    	 window.location.href = "{{asset('admin/news/delete')}}/{{$news->id}}";
				   
				  } else {
				    swal("May quá nó vẫn còn!");
				  }
				});
		})

	</script>
	<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('js/responsive.bootstrap4.min.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			    $('#table').DataTable({
			    	"scrollX": true
			    });

			});
	</script>
@endsection