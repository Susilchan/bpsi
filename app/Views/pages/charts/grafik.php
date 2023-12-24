<script>
    // Data retrieved https://en.wikipedia.org/wiki/List_of_cities_by_average_temperature
    Highcharts.chart('container-ph', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Grafik Pemantauan pH Air Limbah</h1>'
        },


        xAxis: {
            categories: <?php
                        echo "[";
                        foreach ($siang as $index => $dt) {
                            echo "'" . "|" . $dt['tanggal'] . " " . $dt['waktu'] . "|" . "',";
                        }
                        echo "]";
                        ?>
        },
        yAxis: {
            title: {
                text: 'pH'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'pH',
            data: <?php
                    echo "[";
                    foreach ($siang as $index => $dt) {
                        echo "" . $dt['ph'] . ",";
                    }
                    echo "]";
                    ?>
        }, ]
    });

    // tds
</script>
<script>
    Highcharts.chart('container-suhu', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Grafik Pemantauan Suhu Air Limbah'
        },


        xAxis: {
            categories: <?php
                        echo "[";
                        foreach ($siang as $index => $dt) {
                            echo "'" . "|" . $dt['tanggal'] . " " . $dt['waktu'] . "|" . "',";
                        }
                        echo "]";
                        ?>
        },
        yAxis: {
            title: {
                text: 'Temprature (°C)'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'Suhu',
            data: <?php
                    echo "[";
                    foreach ($siang as $index => $dt) {
                        echo "" . $dt['suhu'] . ",";
                    }
                    echo "]";
                    ?>
        }]
    });
</script>
<script>
    Highcharts.chart('container-tds', {
        chart: {
            type: 'line',

        },
        title: {
            text: 'Grafik Pemantauan TDS Air Limbah'
        },


        xAxis: {
            categories: <?php
                        echo "[";
                        foreach ($siang as $index => $dt) {
                            echo "'" . "|" . $dt['tanggal'] . " " . $dt['waktu'] . "|" . "',";
                        }
                        echo "]";
                        ?>
        },
        yAxis: {
            title: {
                text: 'TDS (ppm)'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'TDS',
            data: <?php
                    echo "[";
                    foreach ($siang as $index => $dt) {
                        echo "" . $dt['tds'] . ",";
                    }
                    echo "]";
                    ?>
        }]
    });
</script>