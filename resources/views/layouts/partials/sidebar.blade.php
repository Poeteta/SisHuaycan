<div class="sidebar" data-color="orange">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="logo-mini">
                    <img class="img" src="{{ asset('img/logo.png') }}"> 
                </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Hospital Huaycan
                </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
        
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        {{ Auth::user()->Nom_user}}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini-icon">MP</span>
                                <span class="sidebar-normal">Mi Perfil</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini-icon">EP</span>
                                <span class="sidebar-normal">Editar Perfil</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/logout')}}">
                                <span class="sidebar-mini-icon">C</span>
                                <span class="sidebar-normal">Cerrar Sesión</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
          @if(auth()->User()->Rol_idRol == '2' )
        <ul class="nav">
          
            <li class="active">
                <a href="{{url('home')}}">
                            <i class="now-ui-icons design_app"></i>
                            <p>Menu Principal</p>
                        </a>
            </li>
            <li>
                <a href="{{url('Familia/')}}}">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Familia</p>
                        </a>
            </li>
             <li>
                <a href="{{url('sesiones/asistencia')}}">
                            <i class="now-ui-icons design-2_ruler-pencil"></i>
                            <p>Asistencia</p>
                        </a>
            </li>
            <li>
                <a href="{{url('Herramientas/')}}">
                            <i class="now-ui-icons ui-1_settings-gear-63"></i>
                            <p>Herramientas</p>
                        </a>
            </li>
        </ul>
        @elseif(auth()->User()->Rol_idRol == '3' )
        <ul class="nav">
            <li class="active">
                <a href="{{url('dhome')}}">
                            <i class="now-ui-icons design_app"></i>
                            <p>Menu Principal</p>
                        </a>
            </li>
            <li>
                <a href="{{url('seguridad/usuario/')}}">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>Usuarios</p>
                        </a>
            </li>
            <li>
                <a href="../examples/map.html">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Historial</p>
                        </a>
            </li>
            <li>
                <a href="{{url('evaluacion/')}}">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>Evaluacion</p>
                        </a>
            </li>

            <li class="">
                <a href="{{url('reporte/')}}">
                            <i class="now-ui-icons business_chart-pie-36"></i>
                            <p>Reportes</p>
                            
                        </a>
            </li>
             <li>
                <a href="{{url('Herramientas')}}">
                            <i class="now-ui-icons ui-1_settings-gear-63"></i>
                            <p>Herramientas</p>
                        </a>
            </li>
            
        </ul>
        @endif
    </div>
</div>
