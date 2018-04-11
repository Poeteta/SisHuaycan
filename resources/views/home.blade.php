@extends('layouts.app') @section('htmlheader_title') Home @endsection @section('main-content')
<div class="main-panel">
    <!-- Navbar -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                <a class="navbar-brand" href="#pablo">Wizard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
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
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="col-md-10 mr-auto ml-auto">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card card-wizard" data-color="primary" id="wizardProfile">
                    {{Form::Open(array('action'=>array('FamiliaController@store'),'method'=>'POST'))}} {{Form::token()}}
                    <div class="card-header text-center" data-background-color="orange">
                        <h3 class="card-title">
                       Carnet Familiar
                    </h3>
                        <div class="wizard-navigation">
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#about" data-toggle="tab">
                                    <i class="now-ui-icons users_circle-08"></i>
                                    Datos Generales
                                  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#account" data-toggle="tab">
                                    <i class="now-ui-icons ui-1_settings-gear-63"></i>
                                    Responsable de Familia
                                  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#madre" data-toggle="tab">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                    Datos de la Madre
                                  </a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="#nino" data-toggle="tab">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                    Datos del Niño
                                  </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="about">
                                <h5 class="info-text">Iniciemos con la Informacion Basica </h5>
                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="picture-container">
                                            <div class="picture">
                                                <img src="../../assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
                                                <input type="file" id="wizard-picture">
                                            </div>
                                            <h6 class="description">Choose Picture</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group form-control-lg">
                                            <span class="input-group-addon">
                                            <i class="now-ui-icons users_circle-08"></i>
                                        </span>
                                            <input id="Codigo_fam" name="Codigo_fam" type="Number" class="form-control" placeholder="Codigo de Familia">
                                        </div>
                                        <div class="input-group form-control-lg">
                                            <span class="input-group-addon">
                                            <i class="now-ui-icons text_caps-small"></i>
                                        </span>
                                            <input id="Nom_fam" name="Nom_fam" type="text" class="form-control" placeholder="Nombre de Familia">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account">
                                <div class="row justify-content-center">
                                    <div class="col-sm-12">
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <label>Apellidos y Nombre (s)</label>
                                            <input type="text" class="form-control" name="Respons_fam" id="Respons_fam">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group label-floating ">
                                            <label class="control-label" for="Distrito_idDistrito"> Distrito </label>
                                        <select id="distrito_idDistrito" class="form-control" name="distrito_idDistrito">
                                            <option disabled=" " selected=" "></option>
                                            <option value="1">Chosica</option>
                                            <option value="2">Lurigancho</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5 ">
                                    <div class="form-group label-floating ">
                                        <label class="control-label ">Modo de Captacion</label>
                                        <select name="Modo_Captacion_idModo_Captacion" class="form-control" id="Modo_Captacion_idModo_Captacion" >
                                            <option disabled=" " selected=" "></option>
                                            <option value="1 "> Visita Domiciliaria </option>
                                            <option value="2 "> Hospital </option>
                                            <option value="3 "> Campaña de Salud </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5 ">
                                   <div class="form-group label-floating">
                                        <label class="control-label">Caracteristicas</label>
                                        <select name="Tipo_Familia_idTipo_Familia" class="form-control" id="Tipo_Familia_idTipo_Familia">
                                            <option disabled=" " selected=" "></option>
                                            <option value="1"> Nueva </option>
                                            <option value="2"> Continuante </option>
                                            <option value="3"> Reingresante </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="madre">
                            <div class="row justify-content-center">
                                <div class="col-sm-3 col-sm-offset-1">
                                    <div class="form-group label-floating">
                                        <label class="contol-label">Apellido Paterno</label>
                                        <input type="text" class="form-control" name="Madre_apel_pa" id="Madre_apel_pa">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Apellidos Materno</label>
                                        <input type="text" class="form-control" name="Madre_apel_ma" id="Madre_apel_ma" >
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" name="Madre_fecha" id="Madre_fecha" >
                                    </div>
                                </div>
                                  <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombre (s)</label>
                                        <input type="text" class="form-control " name="Madre_nombre" id="Madre_nombre" >
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label "> DNI </label>
                                        <input type="number" class="form-control " name="Madre_DNI" id="Madre_DNI">
                                    </div>
                                </div>
                                <div class="col-sm-7 col-sm-offset-1">
                                    <div class="form-group label-floating">
                                        <label class="control-label ">Direccion</label>
                                        <input type="text" class="form-control" id="Madre_direccion" name="Madre_direccion">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group label-floating ">
                                        <label class="control-label "> Telefono </label>
                                        <input type="number" class="form-control" name="Madre_telf" id="Madre_telf">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nino">
                            <div class="row justify-content-center">

                                <p>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group label-floating ">
                                                    <label class="control-label" >Historia Clinica</label>
                                                    <input type="text" class="form-control" name="Nino_HC[]">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">DNI</label>
                                                    <input type="number" class="form-control" name="Nino_DNI[]">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <div class="form-group label-floating ">
                                                    <label class="control-label ">Sexo</label>
                                              <select name="Nino_sexo[]" class="form-control ">
                                                <option disabled=" " selected=" "></option>
                                                <option value="Masculino"> Masculino </option>
                                                <option value="Femenino"> Femenino </option>
                                            </select>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="col-sm-7 ">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Apellido Paterno</label>
                                                    <input type="text " class="form-control " name="Nino_apelpa[]">
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="col-sm-4 ">
                                                <div class="form-group label-floating ">
                                                    <label class="control-label ">Apellido Materno</label>
                                                    <input type="text" class="form-control " name="Nino_apelma[]">
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="col-sm-7 col-sm-offset-1 ">
                                                <div class="form-group label-floating ">
                                                    <label class="control-label ">Nombre (s)</label>
                                                    <input type="text" class="form-control " name="Nino_nombre[]">
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="col-sm-3 ">
                                                <div class="form-group label-floating ">
                                                    <label class="control-label "></label>
                                                    <input type="date" class="form-control" name="Nino_fecha[]">
                                                </div>
                                            </div>
                                            
                                        </p>
                                        <p><a href="#" class='remove'><i class="material-icons ">remove_circle_outline</i></a></p>
                                        <p><a href="#" class='addsection'> <i class="material-icons ">person_add</i></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer ">
                    <div class="pull-right ">
                        <input type='button' class='btn btn-next btn-fill btn-rose btn-wd' name='Siguiente' value='Siguiente' />
                        <input name="_token " value="{{ csrf_token() }} " type="hidden" />
                        <input type='submit' class='btn btn-finish btn-fill btn-rose btn-wd' name='finish' value='Terminar' />
                    </div>

                    <div class="pull-left ">
                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Anterior' />
                    </div>
                    <div class="clearfix "></div>
                     {{Form::Close()}}
                </div>

            </form>
        </div>
    </div> <!-- wizard container -->
</div>

                    </div>
                 
            </div>

<script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js "></script>

<script src="{{ asset( 'js/demo.js') }} " type="text/javascript "></script>

    <script >
        $(document).ready(function(){
            // Initialise the wizard
            demo.initNowUiWizard();
            setTimeout(function(){
                $('.card.card-wizard').addClass('active');
            },600);
        });
    </script>


@endsection