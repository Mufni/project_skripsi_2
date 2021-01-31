@extends('center')

@section('title','Isi Tabel Angkot')
@section('body')

@section('content')  
                  <div class="row">
                    <form class="col s12 offset-m3 m-2">

                      <div class="row">
                        <div class="input-field col s6">
                          <input placeholder="" id="kd_angkot" name="kode_angkot" type="text" class="validate">
                          <label for="kd_angkot">Kode Angkot</label>
                        </div>
                      </div>

                       <div class="row m-1">
                        <div class="input-field col s6">
                          <input placeholder="" id="id_awal" name="id_awal" type="text" class="validate">
                          <label for="id_awal">ID Awal</label>
                        </div>
                      </div>

                       <div class="row m-1">
                        <div class="input-field col s6">
                          <input placeholder="" id="id_akhir" name="id_akhir" type="text" class="validate">
                          <label for="id_akhir">ID Akhir</label>
                        </div>
                      </div>  

                      <div class="row">
                        <div class="col s4 m-3">
                          <a class="btn-flat waves-effect accent-2 white-text red lighten-1" href="{{URL('read')}}""></i>Tambah Data</a>
                        </div>
                      </div>

                    </form>
  </div>
              
@endsection
   
       



  