<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <ul class="nav nav-pills nav-pills-primary flex-column" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                                                Vacunas
                                            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                                                Control
                                            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                                                Problemas de Salud
                                            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link10" role="tablist">
                                                Micronutrientes
                                            </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="tab-content">
                    <div class="tab-pane active" id="link7" class="col-md-4">
                        <div class="btn-group" data-toggle="buttons" style="float: right;">
                            <button type="button" class="btn btn-round btn-info">Mes</button>
                            <button type="button" class="btn btn-round btn-info">Semana</button>
                            <button type="button" class="btn btn-round btn-info">Exportar</button>
                        </div>
                    </div>
                    <div class="tab-pane" id="link8">
                        <div class="btn-group" data-toggle="buttons" style="float: right;">
                            <button type="button" class="btn btn-round btn-info">Mes</button>
                            <button type="button" class="btn btn-round btn-info">Semana</button>
                            <button type="button" class="btn btn-round btn-info">Exportar</button>
                        </div>
                    </div>
                    <div class="tab-pane" id="link9">
                        <div class="btn-group" data-toggle="buttons" style="float: right;">
                            <button type="button" class="btn btn-round btn-info">Mes</button>
                            <button type="button" class="btn btn-round btn-info">Semana</button>
                            <button type="button" class="btn btn-round btn-info">Exportar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <script src="{{ asset('js/plugins/chartjs.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
    window.onload = function() {
        var ctx = document.getElementById("myChart");
        var lineChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "2015",
                    data: [10, 8, 6, 5, 12, 8, 16, 17, 6, 7, 6, 10]
                }]
            }
        })

        var ctxa = document.getElementById("myChart2");
        var lineChart = new Chart(ctxa,{
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "2015",
                    data: [10, 8, 6, 5, 12, 8, 16, 17, 6, 7, 6, 10]
                }]
            }
        })

        var ctxb = document.getElementById("myChart3");
        var lineChart = new Chart(ctxb,{
            type: 'bar',
             data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "2015",
                    data: [10, 8, 6, 5, 12, 8, 16, 17, 6, 7, 6, 10]
                }]
            }
        })
    }
    </script>