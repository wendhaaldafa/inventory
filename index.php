
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css";>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="header">
                <div class="list-item">
                    <a href="#">
                        <span class="desk-header">Diskominfo Kab.Malang</span>
                    </a>
                </div>
                <div class="logo2">
                    <img src="" alt="">
                </div>
            </div>

            <div class="main">
                <div class="list-item">
                    <a href="mainbar.php">
                    <img src="CSS/img/1200px-Home-icon.svg.png" alt="" class="icon2" width="20px">
                        <span class="desk-header">Beranda</span>
                    </a>
                </div>

                <div class="list-item">
                    <a href="list.php">
                    <img src="CSS/img/checklist-icon-checklist-icon-png-list-icon-7.png" alt="" class="icon2" width="20px">
                        <span class="desk-header">List Data</span>
                    </a>
                </div>

                <div class="list-item">
                    <a href="upload.php">
                    <img src="CSS/img/upload.png" alt="" class="icon2" width="20px">
                        <span class="desk-header">Upload Data</span>
                    </a>
                </div>

                <div class="list-item">
                    <a href="cetak.php">
                    <img src="CSS/img/printer-printing-a-picture-of-a-landscape_icon-icons.com_56236.png" alt="" class="icon2" width="20px">
                        <span class="desk-header">Cetak</span>
                    </a>
                </div>

                <div class="keluar">
                    <a href="login.php">
                        
                        <span class="btn-keluar">Keluar</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="list-item">
                <?php include 'mainbar.php'?>
            
            </div>

        </div>
    </div>
    
    <script> scr="script.js"</script>
</body>
</html>