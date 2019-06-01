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
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control @error('name') is-invalid @enderror" name="id" value="{{$p->id_target}}" required autocomplete="name" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="target" class="col-md-4 col-form-label text-md-right">{{ __('Target') }}</label>

                            <div class="col-md-6">
                                <input id="target" type="text" class="form-control " name="nama" value="{{$p->nama}}" >

                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="jumlah" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah') }}</label>

                            <div class="col-md-6">
                                <input id="jumlah" type="text" class="form-control" name="target" value="{{$p->target}}" required >

                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" formaction="/target/update" class="btn btn-primary" value="SIMPAN">
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
