@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Olah Target</div>

                <div class="card-body">
                    <form method="POST" action="supplier/simpan" >
                    {{csrf_field()}}
                        <div class="form-group row">
                            <label for="ID" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control @error('name') is-invalid @enderror" name="id"  required autocomplete="name" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Supplier') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control " name="nama"  >

                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat ') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat"  required >

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="notlp" class="col-md-4 col-form-label text-md-right">{{ __('No. Tlp ') }}</label>

                            <div class="col-md-6">
                                <input id="notlp" type="text" class="form-control" name="notlp"  required >

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required >

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="pj" class="col-md-4 col-form-label text-md-right">{{ __('Penanggung Jawab ') }}</label>

                            <div class="col-md-6">
                                <input id="pj" type="text" class="form-control" name="pj" required >

                            </div>
                        </div>




                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


            <table style="margin-top:10px;" class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID Supplier</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No TLP</th>
      <th scope="col">Email</th>
      <th scope="col">Penanggung Jawab</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($supplier as $ta)
    <tr>
      <th scope="row">{{$ta->id_supplier}}</th>
      <td>{{$ta->nama_supplier}}</td>
      <td>{{$ta->alamat}}</td>
      <th scope="row">{{$ta->no_tlp}}</th>
      <td>{{$ta->email}}</td>
      <td>{{$ta->penanggung_jawab}}</td>

      <td>
        <a href="/supplier/edit/{{ $ta->id_supplier }}">Edit</a>
	
		<a href="/supplier/hapus/{{ $ta->id_supplier }}">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

    </div>
</div>
@endsection
