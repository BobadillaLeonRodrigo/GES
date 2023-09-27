@include('layout.scripts')
@include('layout.headerpanel')
@include('layout.menuAdmin')
@include('layout.contentAdmin')
<div class="row">
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-area" style="color: #32bd4e;"></i>
                <em><strong>Grafica de Humedad</strong></em>
            </div>
                <div class="card-body">
                    <canvas id="graficaH" width="100%" height="50"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar" style="color: #32bd4e;"></i>
                        <em><strong>Grafica de Temperatura</strong></em>
                </div>
            <div class="card-body">
                <canvas id="graficaT" width="100%" height="50"></canvas>
            </div>
        </div>
    </div>
</div>



<!--    **GRAFICA DE TEMPERATURA**    -->
<script>
    new Chart(document.getElementById("graficaT"), {
        type: 'line',
            data: {
                labels: [
                    @foreach($hora as $hora)
                        "{{ $hora -> hora_m}}",
                        @endforeach
                ],
                datasets: [{
                    label: "Temperatura",
                    //fill: false,
                    backgroundColor: [
                        @foreach($hora as $hora)
                        '#' + Math.floor(Math.random() * 16777215).toString(16),
                        @endforeach
                    ],
                    data: [
                        @foreach($graficoT as $graficoT)
                    "{{ $graficoT  -> temperatura_m }}",
                    @endforeach
                    ]
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: 'Horas en Temperatura'
                }
            }
    });
</script>

<!--    **GRAFICA DE HUMEDAD**    -->
<script>
        new Chart(document.getElementById("graficaH"), {
            type: 'line',
            data: {
                labels: [
                    @foreach($horas as $horas)
                        "{{ $horas -> hora_m}}",
                        @endforeach
                ],
                datasets: [{
                    label: "Humedad",
                    backgroundColor: [
                        @foreach($horas as $horas)
                        '#' + Math.floor(Math.random() * 16777215).toString(16),
                        @endforeach
                    ],
                    data: [
                        @foreach($graficoH as $graficoH)
                    "{{ $graficoH  -> humedad_m }}",
                    @endforeach
                    ]
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: 'Horas en Humedad'
                }
            }
        });
</script>
