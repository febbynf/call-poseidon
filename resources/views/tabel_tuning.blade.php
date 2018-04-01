@extends('layouts.design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Tabel Tuning</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Ziegler-nichols</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Parameter L</th>
                  <th>Parameter T</th>
                  <th>Kp</th> <!-- 1.2T/L -->
                  <th>Ti</th> <!-- 2L -->
                  <th>Td</th> <!-- 0.5L -->
                  
                </tr>
              </thead>
              <tbody>
                <tr class="odd gradeX">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td class="center"> 4</td>
                  <td class="center">X</td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
<div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Cohen-coon</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Selisih Kenaikan Debit</th> <!-- debt trtinggi-trrendah -->
                  <th>Selisih Kenaikan Sudut</th> <!-- sudut trtinggi-trrendah -->
                  <th>Gain K</th> <!-- slshdebt/slsh sudut -->
                  <th>Nilai 28% Debit</th> <!-- debtterendah+0.28*debt -->
                  <th>Nilai 63% Debit</th> <!-- debtterendah+0.63*debt -->
                  <th>Waktu 28% Debit</th> <!-- wkt28%-wkt start -->
                  <th>Waktu 63% Debit</th> <!-- wkt63%-wkt start -->
                  <th>Konstanta Waktu efektif (phi)</th> <!-- 1.5*(t63%-t28%) -->
                  <th>Deadtime (0)</th> <!-- t63%-phi -->
                  <th>Transfer Function G(s)</th> <!-- gain K * exp -->
                  <th>Kp</th> <!-- Kc -->
                  <th>Ti</th> <!-- Kc/phiI -->
                  <th>Td</th> <!-- Kc*phiD -->
                </tr>
              </thead>
              <tbody>
                
                  <td>1</td>
                  <td>nkj</td>
                  <td>nk</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
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