@extends('center2')

@section('title','Tabel Stop')
@section('body')

@section('content')  
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Tabel Stop</h5>
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
                            <th>ID Halte</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                          <th>Kode Angkot</th>
                          <th>ID Halte</th>
                        </tr>
                    </tfoot>

                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col s4 ">
                  <a class="btn-flat waves-effect accent-2 white-text red lighten-1" href="{{URL('isi-data3')}}"></i>Create</a>
 @endsection
 @endsection