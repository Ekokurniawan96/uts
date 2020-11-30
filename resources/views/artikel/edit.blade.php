@extends ('admin.admin')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Ubah artikel
					</div>
						<div class="card-body">
							<form action="{{url('artikel', $artikel->id)}}" method="post">
							@csrf
							@method("PUT")
							<div class="form-group">
								<label for="" class="control-label">Judul Artikel</label>
								<input type="text" class="form-control" name="judul" value="{{$artikel->judul}}">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<label for="" class="control-label">Kategori</label>
										<input type="text" class="form-control" name="kategori" value="{{$artikel->kategori}}">
									</div>	
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="" class="control-label">Tag</label>
										<input type="text" class="form-control" name="tag" value="{{$artikel->tag}}">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="" class="control-label">Tanggal</label>
										<input type="date" class="form-control" name="tanggal" value="{{$artikel->tanggal}}">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="control-label">Isi Artikel</label>
								<textarea name="isi" class="form-control">{{$artikel->isi}}
								</textarea>
								
							</div>
									<button class="btn btn-dark float-right"><i class="fa fa-save">	</i>Simpan</button>
									</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection