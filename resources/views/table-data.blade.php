@extends('center2')

@section('title','Tabel Angkot')
@section('body')

@section('content')  

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Tabel Angkot</h5>
                <ol class="breadcrumb"></ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
       @section('content2')

            <p class="caption">Tables are a nice way to organize a lot of data. We provide a few utility classes to help you style your table as easily as possible. In addition, to improve mobile experience, all tables on mobile-screen widths are centered automatically.</p>
            <div class="divider"></div>

            <!--DataTables example-->
            <div id="table-datatables">
                <div class="col s12 m8 l9">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Angkot</th>
                            <th>ID Awal</th>
                            <th>ID Akhir</th>

                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                          <th>Kode Angkot</th>
                          <th>ID Awal</th>
                          <th>ID Akhir</th>
                          <th>Aksi</th>
                        </tr>
                    </tfoot>

                    <tbody>
                      @foreach($angkots as $key => $value)
                      <tr>
                            <td>{{$value->kode_angkot}}</td>
                            <td>{{$value->id_awal}}</td>
                            <td>{{$value->id_akhir}}</td>
                            <td>
                              <a class="btn-flat" href="{{route('cobacontroller.edit',$value->kode_angkot)}}">Edit</a>
                              {!! Form::open(['method' => 'DELETE','route' =>['cobacontroller.destroy', $value->kode_angkot],'style'=>'display:inline'])!!}
                              {!! Form::submit('Delete', ['class'=>'btn-flat'])!!}
                              {!! Form::close()!!}
                            </td>


                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col s4 ">
                  <a class="btn-flat waves-effect accent-2 white-text red lighten-1" href="{{URL('isi-data')}}"></i>Create</a>
               
       
      <!-- END CONTENT -->
@endsection
@endsection