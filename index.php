<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info X-A</title>
    <style>
        body {
            background-color: #ffffff;
            color: #000000;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .info {
            border-top: 1px solid #000000;
            margin-top: 20px;
            padding-top: 20px;
        }

        #header-logo {
            text-align: center;
        }

        #footer {
            margin-top: 40px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="header-logo">
            <a href="https://smak1bpk.penabur.sch.id" target="_blank">
                <img src="https://i.ibb.co/SVV8JF6/XALOGO.png" alt="XALOGO" border="0">
            </a>
            <p>Hi! Welcome to Daily Updated Information System X-A</p>
        </div>


        <?php
        // Simpan informasi dalam array sesuai tanggal
        $info = array(
            '2024-01-22' => 'Informasi hari ini...',
            '2024-01-23' => 'Informasi besok...',
            // Tambahkan entri lain sesuai kebutuhan
        );

        // Ambil tanggal hari ini
        $today = date('Y-m-d');

        // Tampilkan informasi terkait tanggal hari ini
        if (array_key_exists($today, $info)) {
            echo '<div class="info">';
            echo '<strong>' . $today . '</strong>';
            echo '<p>' . $info[$today] . '</p>';
            echo '</div>';
        } else {
            echo '<p>Tidak ada informasi untuk hari ini.</p>';
        }
        ?>
    </div>

    <div id="footer">
        X-A Digital Integrated System v 2.2 <br> Developed by M★.
    </div>
</body>

</html>