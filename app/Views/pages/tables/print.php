<!DOCTYPE html>
<html>

<head>
    <!-- <title>Data Monitoring Limbah BPSI Tanah dan Pupuk</title> -->
</head>

<body>
    <style type="text/css">
        body {
            font-family: 'Times New Roman', Times, serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;
            text-align: center;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
    </style>

    <center>
        <h3>Data Monitoring Limbah BPSI Tanah dan Pupuk</h3>
    </center>

    <table>
        <thead>
            <tr>
                <th colspan="2">No.</th>
                <th colspan="2">Waktu</th>
                <th colspan="2">pH</th>
                <th colspan="2">TDS</th>
                <th colspan="2">Suhu</th>
                <th colspan="2">Kualitas Limbah</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $i = 1;
            foreach ($data as $isi) { ?>
                <tr>
                    <td colspan="2"><?= $i++ ?></td>
                    <td colspan="2"><?= $isi['tanggal'], $isi['waktu']?></td>
                    <td colspan="2"><?= $isi['ph'] ?> </td>
                    <td colspan="2"><?= $isi['tds'] ?> </td>
                    <td colspan="2"><?= $isi['suhu'] ?> </td>
                    <td colspan="2"><?= $isi['kualitas_limbah'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
<script>
    window.print();
</script>

</html>