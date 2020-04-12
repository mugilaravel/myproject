@extends('layout.master')
@section('content')

             @if (session('sukses'))
                <div class="alert alert-primary" role="alert">
                    {{session('sukses')}}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                <form action="/siswa/{{$siswa->id}}/update" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Depan</label>
                      <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$siswa->nama_depan}}>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Belakang</label>
                      <input type="text" name="nama_belakang" class="form-control" value={{$siswa->nama_belakang}}>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" value={{$siswa->jenis_kelamin}}>
                          <option value="">Jenis Kelamin</option>
                          <option value="L" @if ($siswa ->jenis_kelamin == 'L') selected @endif>Laki Laki</option>
                          <option value="P" @if ($siswa ->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                        </select>
                      </div>    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Agama</label>
                        <input type="text" name="agama" class="form-control" value={{$siswa->agama}}>
                    </div>  
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3">{{$siswa->alamat}} </textarea>
                    </div>
                        <button type="submit" class="btn btn-warning float-left">Update</button>
                </form>
            </div>
            </div>
            @endsection



