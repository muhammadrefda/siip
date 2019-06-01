@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Olah Target</div>

                <div class="card-body">
                    <form method="POST" action="target/nyimpen" >

                    {{csrf_field()}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control @error('name') is-invalid @enderror" name="id" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="target" class="col-md-4 col-form-label text-md-right">{{ __('Target') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control " name="nama" value="" >

                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="jumlah" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah') }}</label>

                            <div class="col-md-6">
                                <input id="target" type="text" class="form-control" name="target" value="" required >

                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" class="btn btn-primary" value="SIMPAN">
                                </input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Target</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($target as $ta)
    <tr>
      <th scope="row">{{$ta->id_target}}</th>
      <td>{{$ta->nama}}</td>
      <td>{{$ta->target}}</td>
      
      <td>
        <a href="/target/edit/{{ $ta->id_target }}">Edit</a>
	
		<a href="/target/hapus/{{ $ta->id_target }}">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

        </div>
    </div>
</div>
@endsection
