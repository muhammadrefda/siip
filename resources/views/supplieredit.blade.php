@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Olah Target</div>

                <div class="card-body">
                    <form method="POST"  >
@foreach($data as $p)
                    {{csrf_field()}}
                    
                        <div class="form-group row">
                            <label for="ID" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control @error('name') is-invalid @enderror" name="id" value="{{$p->id_supplier}}" required autocomplete="name" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Supplier') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control " name="nama" value="{{$p->nama_supplier}}" >

                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat ') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{$p->alamat}}" required >

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="notlp" class="col-md-4 col-form-label text-md-right">{{ __('No. Tlp ') }}</label>

                            <div class="col-md-6">
                                <input id="notlp" type="text" class="form-control" name="notlp" value="{{$p->no_tlp}}" required >

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{$p->email}}" required >

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="pj" class="col-md-4 col-form-label text-md-right">{{ __('Penanggung Jawab ') }}</label>

                            <div class="col-md-6">
                                <input id="pj" type="text" class="form-control" name="pj" value="{{$p->penanggung_jawab}}" required >

                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" formaction="/supplier/update" class="btn btn-primary" value="SIMPAN">
                                </input>
                            </div>
                        </div>
@endforeach
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
