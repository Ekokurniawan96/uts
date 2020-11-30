@extends('admin.admin')

@section('content')
	<div class = "container">
		<div class = "row">
			<div class = "col-md-12 mt-5">
				<div class = "card">
					<div class ="card-header">
					Tambah Artikel
					</div>
					<div class="card-body">
					<form action="{{url('artikel')}}" method="post">
						@csrf
					
					<div class="form-group">
					<label for="" class ="control-label">Judul Artikel </label>
					<input type="text" class="form-control" name="judul">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
					<label for="" class ="control-label">Kategori</label>
					<input type="text" class="form-control" name="kategori">
					</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
					<label for="" class ="control-label">Tag</label>
					<input type="text" class="form-control" name="tag">
					</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
					<label for="" class ="control-label">Tanggal</label>
					<input type="date" class="form-control" name="tanggal">
					</div>
					</div>

					</div>
					
					<div class="form-group">
					<label for="" class ="control-label">isi Artikel</label>
					<textarea name="isi" class="form-control">
						
					</textarea>
					</div>
					<button class = "btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
					</form>
						<table>
							
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection 