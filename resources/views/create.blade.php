@extends('layouts.design')
@section('content')

<!--main-container-part-->
<div id="content">

<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->


<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Data Volume Gelas</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Percobaan Gelas :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="First name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tinggi (Sensor) :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Last name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Volume :</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="Enter Password"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Company info :</label>
              
            </div>
            <div class="control-group">
              <label class="control-label">Description field:</label>
              
            </div>
            <div class="control-group">
              <label class="control-label">Message</label>
              
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>

        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Data Volume Galon</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">First Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="First name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Last Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Last name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password input</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="Enter Password"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Company info :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Company name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description field:</label>
              <div class="controls">
                <input type="text" class="span11" />
                <span class="help-block">Description field</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">Message</label>
              <div class="controls">
                <textarea class="span11" ></textarea>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
  </div>

@endsection






<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="store" method="post">
		<label for="name">Jenis gelas</label>
		<input type="text" name="name"><br/>
		<label for="volume">Volume</label>
		<input type="text" name="volume">

		<input type="hidden" name="_token" value="{{csrf_token()}}">
	<label for=""></label>
	<input type="submit" name="submit" value="Submit">


	</form>

</body>
</html> -->