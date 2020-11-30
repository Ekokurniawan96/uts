@extends('admin.admin')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data artikel
					<a href="{{url('artikel/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Artikel</a>
				</div>
				<div class="card-body">
					<table class="table">
							<thead>
									<th>No</th>
									<th>Aksi</th>
									<th>judul Artikel</th>
									<th>Kategori</th>
									<th>Tag</th>
									<th>Tanggal</th>
									<th>Isi</th>

							</thead>
								<tbody>
									@foreach($list_artikel as $artikel)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>
											<div class="btn-group">
											<a href="{{url('artikel', $artikel->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('artikel', $artikel->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.utils.delete', ['url' => url('artikel', $artikel->id)])
											</div>
										</td>
										<td>{{$artikel->judul}}</td>
										<td>{{$artikel->kategori}}</td>
										<td>{{$artikel->tag}}</td>
										<td>{{$artikel->tanggal}}</td>
										<td>{{$artikel->isi}}</td>
									</tr>
									@endforeach
								</tbody>
								
					</table>
				</div>
			</div>	
		</div>	
	</div>	
</div>
@endsection