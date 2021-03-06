@extends('layouts.admin-page')

@section('content')
<div class="container">
	<div class="row">		
		<div class="col-md-12">
			<a href="{{ route('profil-npwp.index') }}" class="btn btn-sm btn-primary">Back</a>
			<br>
			<br>
			<div class="panel panel-default">
				<div class="panel-heading">					
					Add Profil Npwp
					<div>
					@if ($errors->any())
					    					        
			            @foreach ($errors->all() as $error)
			                <div class="alert alert-danger">{{ $error }}</div>
			            @endforeach					        
					    
					@endif
					@if(session()->has('message'))
					    <div class="alert alert-success">					        
					    	{{ session()->get('message') }}
					    </div>
					@endif
					</div> 
				</div>

				<div class="panel-body">
					{!! Form::open(['route' => 'profil-npwp.store','method' => 'post']) !!}
						<div class="form-group">
							<label for="">User</label>
							<select name="user_id" class="form-control input-sm">
								<option value="">-User-</option>
								@foreach($users as $user)
									<option value="{{ $user->id }}">{{ $user->name }}</option>
								@endforeach
							</select>							
						</div>
						<div class="form-group">
							<label for="">Nomor Npwp</label>
							<input value="{{ old('no_npwp') }}" type="text" name="no_npwp" class="form-control input-sm" placeholder="Nomor Npwp">
						</div>
						<div class="form-group">
							<label for="">Nama Terdafatar</label>
							<input value="{{ old('nama_terdaftar') }}" type="text" name="nama_terdaftar" class="form-control input-sm" placeholder="Nama Terdaftar">
						</div>						
						<div class="form-group">
							<label for="">Tanggal Daftar</label>
							<input value="{{ old('tgl_daftar') }}" type="text" name="tgl_daftar" class="form-control input-sm" placeholder="Tanggal Daftar">
						</div>			
						<div class="form-group">
							<label for="">Alamat Terdaftar</label>
							<textarea name="alamat_terdaftar" placeholder="Alamat Terdaftar" class="form-control" rows="3">{{ old('alamat_terdaftar') }}</textarea>
						</div>
						<div class="form-group">
							<label for="">Status</label>
							<input value="{{ old('status') }}" type="text" name="status" class="form-control input-sm" placeholder="Status">
						</div>						
						<button type="submit" class="btn btn-sm btn-default">Submit</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection