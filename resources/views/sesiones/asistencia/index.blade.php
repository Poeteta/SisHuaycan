@extends('layouts.app') @section('htmlheader_title') Home @endsection @section('main-content')
<style type="text/css">
    .table-header-rotated th.row-header{
  width: auto;
}

.table-header-rotated td{
  width: 40px;
  border-top: 1px solid #dddddd;
  border-left: 1px solid #dddddd;
  border-right: 1px solid #dddddd;
  vertical-align: middle;
  text-align: center;
}

.table-header-rotated th.rotate-45{
  height: 80px;
  width: 40px;
  min-width: 40px;
  max-width: 40px;
  position: relative;
  vertical-align: bottom;
  padding: 0;
  font-size: 12px;
  line-height: 0.8;
}

.table-header-rotated th.rotate-45 > div{
  position: relative;
  top: 0px;
  left: 40px; /* 80 * tan(45) / 2 = 40 where 80 is the height on the cell and 45 is the transform angle*/
  height: 100%;
  -ms-transform:skew(-45deg,0deg);
  -moz-transform:skew(-45deg,0deg);
  -webkit-transform:skew(-45deg,0deg);
  -o-transform:skew(-45deg,0deg);
  transform:skew(-45deg,0deg);
  overflow: hidden;
  border-left: 1px solid #dddddd;
  border-right: 1px solid #dddddd;
  border-top: 1px solid #dddddd;
}

.table-header-rotated th.rotate-45 span {
  -ms-transform:skew(45deg,0deg) rotate(315deg);
  -moz-transform:skew(45deg,0deg) rotate(315deg);
  -webkit-transform:skew(45deg,0deg) rotate(315deg);
  -o-transform:skew(45deg,0deg) rotate(315deg);
  transform:skew(45deg,0deg) rotate(315deg);
  position: absolute;
  bottom: 30px; /* 40 cos(45) = 28 with an additional 2px margin*/
  left: -25px; /*Because it looked good, but there is probably a mathematical link here as well*/
  display: inline-block;
  // width: 100%;
  width: 85px; /* 80 / cos(45) - 40 cos (45) = 85 where 80 is the height of the cell, 40 the width of the cell and 45 the transform angle*/
  text-align: left;
  // white-space: nowrap; /*whether to display in one line or not*/
}
</style>

<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="#pablo">Calendar</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <form>
                    <div class="input-group no-border">
                        <input type="text" value="" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                <i class="now-ui-icons ui-1_zoom-bold"></i>
              </span>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
            <i class="now-ui-icons media-2_sound-wave"></i>
            <p>
              <span class="d-lg-none d-md-block">Stats</span>
            </p>
          </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="now-ui-icons location_world"></i>
            <p>
              <span class="d-lg-none d-md-block">Some Actions</span>
            </p>
          </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
            <i class="now-ui-icons users_single-02"></i>
            <p>
              <span class="d-lg-none d-md-block">Account</span>
            </p>
          </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="panel-header">
        <div class="header text-center">
            <h2 class="title">Sesiones</h2>
        </div>
    </div>
    <div class="content">
        <div class="col-md-12">
            <div class="card">
                <div class="scrollable-table">
  <table class="table table-striped table-header-rotated">
    <thead>
      <tr>
        <!-- First column header is not rotated -->
        <th></th>
        <!-- Following headers are rotated -->
        <th class="rotate-45"><div><span>02/04/2018</span></div></th>
        <th class="rotate-45"><div><span>2</span></div></th>
        <th class="rotate-45"><div><span>3</span></div></th>
        <th class="rotate-45"><div><span>4</span></div></th>
        <th class="rotate-45"><div><span>5</span></div></th>
        <th class="rotate-45"><div><span>6</span></div></th>
        <th class="rotate-45"><div><span>1</span></div></th>
        <th class="rotate-45"><div><span>2</span></div></th>
        <th class="rotate-45"><div><span>3</span></div></th>
        <th class="rotate-45"><div><span>4</span></div></th>
        <th class="rotate-45"><div><span>5</span></div></th>
        <th class="rotate-45"><div><span>12</span></div></th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="row-header">Row header 1</th>
        <td><input checked="checked" name="column1[]" type="radio" value="row1-column1"></td>
        <td><input checked="checked" name="column2[]" type="radio" value="row1-column2"></td>
        <td><input name="column3[]" type="radio" value="row1-column3"></td>
        <td><input name="column4[]" type="radio" value="row1-column4"></td>
        <td><input name="column5[]" type="radio" value="row1-column5"></td>
        <td><input name="column6[]" type="radio" value="row1-column6"></td>
        <td><input name="column3[]" type="radio" value="row1-column3"></td>
        <td><input name="column4[]" type="radio" value="row1-column4"></td>
        <td><input name="column5[]" type="radio" value="row1-column5"></td>
        <td><input name="column6[]" type="radio" value="row1-column6"></td>
        <td><input name="column5[]" type="radio" value="row1-column5"></td>
        <td><input name="column6[]" type="radio" value="row1-column6"></td>
      </tr>
    </tbody>
  </table>
</div>
            </div>
        </div>
      
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php $now = new \DateTime();?> @push ('scripts')
    <script type="text/javascript">
    $(document).ready(function() {
        $(".responsive-calendar").responsiveCalendar({
            time: '<?php echo $now->format('
            Y - m '); ?>',
            events: {
                @foreach($sesiones as $ses)

                "{{ $ses->Fecha}}": { "number": '{{ $ses->Nom_sesion}}', "url": "{{URL::action('SesionesController@show',$ses->idFecha)}}" },

                @endforeach

            }
        });
    });
    </script>
    @endpush @endsection