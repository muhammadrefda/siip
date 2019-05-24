@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Olah Target</div>

                <div class="card-body">
                    <form method="POST" >

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="target" class="col-md-4 col-form-label text-md-right">{{ __('Target') }}</label>

                            <div class="col-md-6">
                                <input id="target" type="text" class="form-control " name="target" value="" >

                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="jumlah" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah') }}</label>

                            <div class="col-md-6">
                                <input id="jumlah" type="text" class="form-control" name="jumlah" value="" required >

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

            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Target</th>
      <th scope="col">Jumlah</th>
    </tr>
  </thead>
  <tbody>
  @foreach($target as $ta)
    <tr>
      <th scope="row">{{$ta->id_target}}</th>
      <td>{{$ta->nama}}</td>
      <td>{{$ta->target}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

        </div>
    </div>
</div>
@endsection
