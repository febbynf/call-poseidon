@extends('layouts.design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Charts &amp; graphs</a></div>
    <h1>Charts &amp; graphs</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Chartsss</h5>
          </div>
          <div class="widget-content">
            <div id="placeholder2"></div>
            <p>Time between updates:
              <input id="updateInterval" type="text" value="" style="text-align: right; width:5em">
              milliseconds</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Turning-series chart</h5>
          </div>
          <div class="widget-content">
            <div id="placeholder"></div>
            <p id="choices"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="widget-box widget-plain">
      <div class="center">
        <ul class="stat-boxes2">
          <li>
            <div class="left peity_bar_neutral"><span><span style="display: none;">2,4,9,7,12,10,12</span>
              <canvas width="50" height="24"></canvas>
              </span>+10%</div>
            <div class="right"> <strong>15598</strong> Visits </div>
          </li>
          <li>
            <div class="left peity_line_neutral"><span><span style="display: none;">10,15,8,14,13,10,10,15</span>
              <canvas width="50" height="24"></canvas>
              </span>10%</div>
            <div class="right"> <strong>150</strong> New Users </div>
          </li>
          <li>
            <div class="left peity_bar_bad"><span><span style="display: none;">3,5,6,16,8,10,6</span>
              <canvas width="50" height="24"></canvas>
              </span>-40%</div>
            <div class="right"> <strong>4560</strong> Orders</div>
          </li>
          <li>
            <div class="left peity_line_good"><span><span style="display: none;">12,6,9,23,14,10,17</span>
              <canvas width="50" height="24"></canvas>
              </span>+60%</div>
            <div class="right"> <strong>5672</strong> Active Users </div>
          </li>
          <li>
            <div class="left peity_bar_good"><span>12,6,9,23,14,10,13</span>+30%</div>
            <div class="right"> <strong>2560</strong> Register</div>
          </li>
        </ul>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Bar chart</h5>
          </div>
          <div class="widget-content">
            <div class="chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Pie chart</h5>
          </div>
          <div class="widget-content">
            <div class="pie"></div>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Line chart</h5>
          </div>
          <div class="widget-content">
            <div class="bars"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection