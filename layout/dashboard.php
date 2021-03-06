<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
!
<body>
    <nav class="navbar navbar-dark bg-primary sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.html">Vp6 Teste</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">
                                <span data-feather="home"></span>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="orders.php">
                                <span data-feather="file-text"></span>
                                Tabela Inadimplência
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tabelaVendas.html">
                                <span data-feather="file-text"></span>
                                Tabela Vendas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ocupacaoLojas.html">
                                <span data-feather="file-text"></span>
                                Tabela Ocupação Lojas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tabelaFluxo.html">
                                <span data-feather="file-text"></span>
                                Tabela Fluxo de pessoas
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="estacionamentoReceita.html">
                                <span data-feather="file-text"></span>
                                Tabela Receita Estacionamento
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="estacionamentoFluxo.html">
                                <span data-feather="file-text"></span>
                                Tabela Fluxo Estacionamento
                            </a>
                        </li>
                </div>
            </nav>
           
                <!-- Bootstrap core JavaScript
         ================================================== -->
                <!-- Placed at the end of the document so the pages load faster -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                    crossorigin="anonymous"></script>
                <script>
                    window.jQuery || document.write(
                        '<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')
                </script>
                <script src="../../../../assets/js/vendor/popper.min.js"></script>
                <script src="../../../../dist/js/bootstrap.min.js"></script>
                <!-- Icons -->
                <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
                <script>
                    feather.replace()
                </script>
                <!-- Graphs -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
                <script>
                    var ctx = document.getElementById("myChart");
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday",
                                "Saturday"
                            ],
                            datasets: [{
                                data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                                lineTension: 0,
                                backgroundColor: 'transparent',
                                borderColor: '#007bff',
                                borderWidth: 4,
                                pointBackgroundColor: '#007bff'
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: false
                                    }
                                }]
                            },
                            legend: {
                                display: false,
                            }
                        }
                    });
                </script>
</body>

</html>