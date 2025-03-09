<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Toggle with GrapesJS</title>
    <link rel="stylesheet" href="m_styles.css">

    <!-- Local GrapesJS CSS -->
    <link rel="stylesheet" href="assets/grapesjs-dev/dist/css/grapes.min.css">

</head>
<body>


    <div class="top">
        <?php include 'C:/xampp/htdocs/Proiecte/Proiect mare/Control/m_top.php'; ?>
    </div>

  
    <button id="menu-icon" class="menu-icon" onclick="toggleNav()">&#9776;</button>

   
    

 
    <div class="mid">
        <div id="mySidenav" class="sidenav">
            <?php include 'C:/xampp/htdocs/Proiecte/Proiect mare/Control/m_leftpanel.php'; ?>
        </div>
        <div class="main">
            <?php include 'C:/xampp/htdocs/Proiecte/Proiect mare/maincontroll/m_main.php'; ?>
        </div>
        <div id = right>
            <?php include 'C:/xampp/htdocs/Proiecte/Proiect mare/Control/m_rightpanel.php'; ?>
        </div>
    </div>


    <div class="foot">
        <?php include 'C:/xampp/htdocs/Proiecte/Proiect mare/Control/m_footer.php'; ?>
    </div>

    <script>

        function toggleNav() {
            let sidenav = document.getElementById("mySidenav");
            let main = document.getElementById("main");
            let menuIcon = document.getElementById("menu-icon");

            if (sidenav.style.width === "250px") {
                sidenav.style.width = "0";
                main.style.marginLeft = "0";
                menuIcon.innerHTML = "&#9776;"; // ☰ 
            } else {
                sidenav.style.width = "250px";
                main.style.marginLeft = "250px";
                menuIcon.innerHTML = "&times;"; // ✖ 
            }
        }

    </script>
</body>
</html>
