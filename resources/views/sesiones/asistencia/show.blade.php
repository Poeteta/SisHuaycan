@extends ('layouts.app') @section('main-content')
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
                <a class="navbar-brand" href="#pablo">Panels</a>
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
    <div class="panel-header panel-header-sm">p
        gvxdfg
    </div>
    <div class="content">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Asistencia</h4> @include('sesiones.asistencia.search')
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Familia
                                </th>
                                <th>
                                    Asistencia de {{ $fechas->Fecha}}
                                </th>
                                <th class="text-right">
                                    Opciones
                                </th>
                            </thead>
                            @foreach ($auditoria as $au)
                            <?php $bandera = 0 ?>
                            <?php $nulo = 0 ?>
                            <tbody>
                                <td>{{ $au->Nom_fam}}</td>
                                @foreach($asistencia as $asis) @if($au->idFamilia == $asis->Familia_idFamilia && $asis->Estado_asistencia == 1)
                                <!-- aqui igualo la id -->
                                <?php $bandera++ ?> @endif @if($au->idFamilia == $asis->Familia_idFamilia && $asis->Estado_asistencia == 0)
                                <!-- aqui igualo la id -->
                                <?php $nulo++ ?> @endif @endforeach @if ($bandera)
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" checked="" disabled="">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <a data-target="#modal-EditAsis-{{$au->idFamilia}}" data-toggle="modal">
                                        <button class="btn"><i class="ti-pencil-alt2"></i> Editar</button>
                                    </a>
                                </td>
                                @elseif($nulo)
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" disabled="">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <a data-target="#modal-ReRegAsis-{{$au->idFamilia}}" data-toggle="modal">
                                        <button class="btn btn-info"><i class="ti-receipt"></i> Registrar</button>
                                    </a>
                                </td>
                                @else
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" disabled="">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <a data-target="#modal-RegAsis-{{$au->idFamilia}}" data-toggle="modal">
                                        <button class="btn btn-info"><i class="ti-receipt"></i> Registrar</button>
                                    </a>
                                </td>
                                @endif
                                </tr>
                                @include('sesiones.asistencia.RegAsis') @include('sesiones.asistencia.ReRegAsis') @include('sesiones.asistencia.EditAsis') @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection