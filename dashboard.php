
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css">

    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<style>
    .highcharts-figure,
.highcharts-data-table table {
    min-width: 500px;
    max-width: 800px;
    margin: 1em auto;
    display: flex;
}

#container {
    height: 400px;
    border-radius: 5px;
    width: 1000px;
    margin: 20px 0 0;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

</style>
</head>
<?php
include 'koneksi.php';
//data chart pertahun       
$sql_pertahun = "SELECT YEAR(tgl_pembuatan) as 'tahun', count(*) as 'jumlah' FROM tb_inventori GROUP BY YEAR(tgl_pembuatan)";
$jumlah_data_pertahun = mysqli_query($conn, $sql_pertahun);

//jumlah data
$jumlah_status = mysqli_query($conn, "select * from tb_inventori");
$count1 = mysqli_num_rows($jumlah_status);
//status aktif
$jumlah_status_aktif = mysqli_query($conn, "select * from tb_inventori where status_aplikasi='Aktif'");
$count2 = mysqli_num_rows($jumlah_status_aktif);
//status tidak aktif
$jumlah_status_taktif = mysqli_query($conn, "select * from tb_inventori where status_aplikasi='Tidak Aktif'");
$count3 = mysqli_num_rows($jumlah_status_taktif);
?>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="header">
                    <a href="#">
                        <span class="desk-header">Diskominfo Kab.Malang</span>
                    </a>
                <div class="logo2">
                <img src="CSS/img/Logo_of_Ministry_of_Communication_and_Information_Technology_of_the_Republic_of_Indonesia.svg.png" alt="" class="icon2" width="100px">
                </div>
            </div>

            <div class="header-line">

            </div>

            <div class="main">
                <div class="list-item">
                    <a href="dashboard.php">
                    <i class="fa-solid fa-house" style="color: #000000; margin-right: 8px;"></i>
                        <span class="desk-header">Dashboard</span>
                    </a>
                </div>

                <div class="list-item">
                    <a href="form.php">
                    <i class="fa-solid fa-clipboard" style="color: #000000; margin-right: 10px; margin-left: 3px;"></i>
                        <span class="desk-header">Form Aplikasi</span>
                    </a>
                </div>

                <div class="list-item">
                    <a href="list.php">
                    <i class="fa-solid fa-list-ul" style="color: #000000; margin-right: 10px;"></i>
                        <span class="desk-header">List Data</span>
                    </a>
                </div>

                <div class="keluar">
                    <a href="index.php">
                    <i class="fa-solid fa-right-from-bracket" style="color: #000000; margin-right: 10px;"></i>
                        <span class="btn-keluar">Keluar</span>
                    </a>
                </div>
            </div>
        </div>

    <div class="dashboard">
        <div class="navigation">
           <div class="n1">
                <div class="search">
                <i class="fa-solid fa-magnifying-glass" style="color: #000000; margin-right: 14px;"></i>
                    <input type="text" placeholder="Search">
                </div>
           </div>

           <div class="profile">
                <i class="far fa-bell"></i>
                <img src="css/img/Admin-Profile-Vector-PNG-Clipart.png" alt="">
           </div>
        </div>

        <h3 class="dsh">
            Dashboard
        </h3>

        <div class="box-aktif">
            <div class="val-box" >
                <i class="fa-solid fa-chart-simple" style="color: #fff;"></i>
                <div>
                    <h3><?=$count2;?></h3>
                    <span>Aplikasi Aktif</span>
                </div>
            </div>

            <div class="val-box" >
                <i class="fa-solid fa-bell-slash" style="color: #ffffff;"></i>
                <div>
                    <h3><?=$count3;?></h3>
                    <span>Aplikasi Tidak Aktif</span>
                </div>
            </div>

            <div class="val-box" >
                <i class="fa-solid fa-chart-pie" style="color: #ffffff;"></i>
                <div>
                    <h3><?=$count1;?></h3>
                    <span>Total Aplikasi</span>
                </div>
            </div>

            <div class="val-box" >
            <a href="form.php">
                <i class="fa-solid fa-folder-plus" style="color: #ffffff;"></i>
            </a>
                <div>
                    <h3>Tambah Aplikasi</h3>
                </div>
            </div>

            <figure class="highcharts-figure">
    <div id="container"></div>
    
</figure>
        </div>
    </div>
    
</body>
<footer>
    <script>
        // Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: 'Statistik Data Status Aplikasi'
    },
    subtitle: {
        align: 'left',
        text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total Aplikasi'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: 'Browsers',
            colorByPoint: true,
            data: [
                <?php 
                    while($row = mysqli_fetch_array($jumlah_data_pertahun)){
                ?>
                {
                    name: <?php echo $row["tahun"]; ?>,
                    y: <?php echo $row["jumlah"]; ?>,
                    drilldown: <?php echo $row["tahun"]; ?>
                },
                        <?php
                    }
                    ?>
            ]
        }
    ],
    drilldown: {
        breadcrumbs: {
            position: {
                align: 'right'
            }
        },
        series: [
            <?php
                while($row = mysqli_fetch_array($jumlah_data_pertahun)){
                    $tahun = $row["tahun"];
                    //data chart pertahun aktif dan tidak aktif   
                    $sql_pertahun_2 = "SELECT status_aplikasi as 'status_aplikasi', count(*) as 'jumlah' FROM tb_inventori where YEAR(tgl_pembuatan)='$tahun' GROUP BY status_aplikasi";
                    $jumlah_data_pertahun_2 = mysqli_query($conn, $sql_pertahun_2);
                    
                    echo "{";
                    echo "name: ".$row["tahun"].",";
                    echo "id: ".$row["tahun"].",";
                    echo "data: [";
                            while($row2 = mysqli_fetch_array($jumlah_data_pertahun_2)){
                        echo "[";
                            echo $row2["status_aplikasi"].",";
                            echo $row2["jumlah"];
                        echo "]," ;
                         
                        }
                            echo "]";
                echo " },";
                }
            ?>
            
            
            
        ]
    }
});

    </script>
</footer>
</html>