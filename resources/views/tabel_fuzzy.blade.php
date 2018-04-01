@extends('layouts.design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tabel Fuzzy</a> </div>
    <h1>Tabel Fuzzy Logic</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Variabel dan Himpunan Fuzzy</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Variabel</th>
                  <th colspan="3">Himpunan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
                  <td>1</td>
                  <td>Volume Gelas</td>
                  <td>Rendah</td>
                  <td>Sedang</td>
                  <td>Tinggi</td>
                  <td> <a href="{{ url('/create') }}" class="btn btn-primary">Edit</a>  <button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
        
                  <td>2</td>
                  <td>Volume Air Galon</td>
                   <td>Rendah</td>
                  <td>Sedang</td>
                  <td>Tinggi</td>
                  <td> <button type="submit" class="btn btn-primary">Edit</button>  <button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
               
                 
              </tbody>
            </table>
          </div>
        </div>
        </div>
      </div>
    </div>


    <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Hasil Prediksi Volume Optimal Air</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Pengujian ke </th>
                  <th>Volume Gelas</th>
                  <th>Volume Air Galon</th>
                  <th>Kecepatan Servo</th>
                  <th>Hasil Volume Optimal Air</th>
                  <th>Error</th>
                </tr>
              </thead>
              <tbody>
                
                  <td>1</td>
                  <td>Volume Gelas</td>
                  <td>Rendah</td>
                  <td>Sedang</td>
                  <td>Tinggi</td>
                  <td>haha</td>
                </tr>
        
                  <td>2</td>
                  <td>Volume Air Galon</td>
                   <td>Rendah</td>
                  <td>Sedang</td>
                  <td>Tinggi</td>
                  <td>hoho</td>
                </tr>
               
                 
              </tbody>
            </table>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection