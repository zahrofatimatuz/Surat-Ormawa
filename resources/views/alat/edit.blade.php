@extends('layouts.app')

@section('content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Ruang</div>

                    <div class="panel-body">
                        <form role="form" method="POST" action="/alat/update/{{$alat->alat_ruang_id}}">
                            {!! csrf_field() !!}

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}<br/>
                                    @endforeach
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="ruang">Nama Alat</label>
                                <input type="text" class="form-control" id="ruang" name="nama" value="{{$alat->nama_barang}}">
                            </div>

                            <div class="form-group">
                                <label for="ruang">Jumlah</label>
                                <input type="text" class="form-control" id="ruang" name="jumlah" value="{{$alat->jumlah}}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection