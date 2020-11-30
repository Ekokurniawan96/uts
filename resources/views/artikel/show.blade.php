@extends ('admin.admin')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Artikel
					</div>
						<div class="card-body">
							<h3>{{$artikel->judul}}</h3>
							<hr>
							<p>
								kategori : {{($artikel->kategori)}}
							</p>
							<p> Tag : {{($artikel->tag)}}</p>
							<p>
								Tanggal : {{($artikel->tanggal)}}
							</p>
							<p>
								{!! nl2br ($artikel->isi) !!}
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection