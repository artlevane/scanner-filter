<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scanner Info Filter</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme5.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="form-content">
                    <div class="form-items">
                        <div>
                            <h6>Quick Links</h6>
                                    <a target="_blank" href="https://paisvcprod.service-now.com/$knowledge.do" class="link-light" style=
                                    "color: white;">KB Base</a><br>
                                    <a target="_blank" href="https://paisvcprod.service-now.com/$knowledge.do" class="link-light" style=
                                    "color: white;">Snow Cases</a><br>
                                    <a target="_blank" href="https://fujitsuscannerstore.com/service_programs/" class="link-light" style="color: white;">Service Contracts</a><br>
                                    <a target="_blank" href="https://imagescanner.fujitsu.com/global/dl/" class="link-light" style="color:white;">fi Downloads</a><br>
                                    <a target="_blank" href="https://scansnap.fujitsu.com/global/dl/" class="link-light" style="color:white;">ScanSnap Downloads</a><br>
                                    <a target="_blank" href="http://fujitsuscannerstore.com" class="link-light" style="color:white;">Fujitsu Scanner Store</a><br>
                                    <a target="_blank" href="https://imagescanner.fujitsu.com/global/dl/index-sps.html" class="link-light" style="color:white;">SP Downloads</a><br>
                            <br><br>
                        </div>

                        <h3>Select your scanner</h3>
                        <form>
                            <button type="button" class="btn btn-secondary" id="ss-btn">ScanSnap</button>
                            <button type="button" class="btn btn-secondary" id="fi-btn">fi-Series</button>
                            <br><br>
                            <!-- SCANSNAP DROPDROWN -->
                            <div id="scansnap" class="collapse">
                                <!-- Current -->
                                <div class="dropdown inline">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Current
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a id="ix1600" class="dropdown-item" href="#">iX1600</a></li>
                                    <li><a id="ix1400" class="dropdown-item" href="#">iX1400</a></li>
                                    <li><a id="ix1300" class="dropdown-item" href="#">iX1300</a></li>
                                    <li><a id="ix100" class="dropdown-item" href="#">iX100</a></li>
                                    <li><a id="sv600" class="dropdown-item" href="#">SV600</a></li>

                                    </ul>
                                </div>

                                <!-- Discontinued -->
                                <div class="dropdown inline">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Discontinued
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a id="ix1500" class="dropdown-item" href="#">iX1500</a></li>
                                    <li><a id="ix500" class="dropdown-item" href="#">iX500</a></li>
                                    <li><a id="s1500" class="dropdown-item" href="#">S1500</a></li>
                                    <li><a id="s1300" class="dropdown-item" href="#">S1300</a></li>
                                    <li><a id="s1300i" class="dropdown-item" href="#">S1300i</a></li>
                                    <li><a id="s1100" class="dropdown-item" href="#">S1100</a></li>
                                    <li><a id="s1100i" class="dropdown-item" href="#">S1100i</a></li>
                                    <li><a id="s510" class="dropdown-item" href="#">S510</a></li>
                                    <li><a id="s500" class="dropdown-item" href="#">S500</a></li>
                                    <li><a id="s300" class="dropdown-item" href="#">S300</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- FI-SERIES DROPDROWNS -->
                            <div id="fi-series" class="collapse">
                                <button type="button" class="btn btn-secondary series-btn" id="fi-8000-series-btn">fi-8000 Series</button>
                                <button type="button" class="btn btn-secondary series-btn" id="fi-7000-series-btn">fi-7000 Series</button>
                                <button type="button" class="btn btn-secondary series-btn" id="fi-6000-series-btn">fi-6000 Series</button>
                                <button type="button" class="btn btn-secondary series-btn" id="fi-5000-series-btn">fi-5000 Series</button>
                                <button type="button" class="btn btn-secondary series-btn" id="network-series-btn">Network Series</button>
                                <button type="button" class="btn btn-secondary series-btn" id="sp-series-btn">SP Series</button>

                                <!-- fi-8000 Series Dropdown -->
                                <div class="dropdown inline">
                                    <button class="btn btn-secondary dropdown-toggle fi-8000-series-dropdown collapse" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        fi-8000 Series
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a id="fi8190" class="dropdown-item" href="#">fi-8190 / fi-8290</a></li>
                                    <li><a id="fi8170" class="dropdown-item" href="#">fi-8170 / fi-8270</a></li>
                                    <li><a id="fi8150" class="dropdown-item" href="#">fi-8150 / fi-8250</a></li>
                                    <li><a id="fi8150u" class="dropdown-item" href="#">fi-8150U / fi-8250U</a></li>
                                    <li><a id="fi800r" class="dropdown-item" href="#">fi-800R</a></li>
                                    </ul>
                                </div>

                                <!-- fi-7000 Series Dropdown -->
                                <div class="dropdown inline">
                                    <button class="btn btn-secondary dropdown-toggle fi-7000-series-dropdown collapse" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        fi-7000 Series
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a id="fi7800" class="dropdown-item" href="#">fi-7800 / fi-7900</a></li>
                                    <li><a id="fi7600" class="dropdown-item" href="#">fi-7600 / fi-7700</a></li>
                                    <li><a id="fi7700s" class="dropdown-item" href="#">fi-7700S</a></li>
                                    <li><a id="fi7460" class="dropdown-item" href="#">fi-7460 / fi-7480</a></li>
                                    <li><a id="fi7300nx" class="dropdown-item" href="#">fi-7300NX</a></li>
                                    <li><a id="fi7180" class="dropdown-item" href="#">fi-7180 / fi-7280</a></li>
                                    <li><a id="fi7160" class="dropdown-item" href="#">fi-7160 / fi-7260</a></li>
                                    <li><a id="fi7140" class="dropdown-item" href="#">fi-7140 / fi-7240</a></li>
                                    <li><a id="fi7030" class="dropdown-item" href="#">fi-7030</a></li>
                                    </ul>
                                </div>

                                <!-- fi-6000 Series Dropdown -->
                                <div class="dropdown inline">
                                    <button class="btn btn-secondary dropdown-toggle fi-6000-series-dropdown collapse" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        fi-6000 Series
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a id="fi6800" class="dropdown-item" href="#">fi-6800</a></li>
                                    <li><a id="fi6400" class="dropdown-item" href="#">fi-6400</a></li>
                                    <li><a id="fi6670" class="dropdown-item" href="#">fi-6670 / fi-6770</a></li>
                                    <li><a id="fi6670a" class="dropdown-item" href="#">fi-6670A / fi-6770A</a></li>
                                    <li><a id="fi6750s" class="dropdown-item" href="#">fi-6750S</a></li>
                                    <li><a id="fi6140z" class="dropdown-item" href="#">fi-6140Z / fi-6240Z</a></li>
                                    <li><a id="fi6130z" class="dropdown-item" href="#">fi-6130Z / fi-6120Z</a></li>
                                    <li><a id="fi6140" class="dropdown-item" href="#">fi-6140 / fi-6240</a></li>
                                    <li><a id="fi6130" class="dropdown-item" href="#">fi-6130 / fi-6230</a></li>
                                    <li><a id="fi6110" class="dropdown-item" href="#">fi-6110</a></li>
                                    <li><a id="fi65f" class="dropdown-item" href="#">fi-65F</a></li>
                                    </ul>
                                </div>

                                <!-- fi-5000 Series Dropdown -->
                                <div class="dropdown inline">
                                    <button class="btn btn-secondary dropdown-toggle fi-5000-series-dropdown collapse" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        fi-5000 Series
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a id="fi5950" class="dropdown-item" href="#">fi-5950</a></li>
                                        <li><a id="fi5530c2" class="dropdown-item" href="#">fi-5530C2</a></li>
                                        <li><a id="fi5010c" class="dropdown-item" href="#">fi-5015C</a></li>
                                    </ul>
                                </div>

                                <!-- Network Series Dropdown -->
                                <div class="dropdown inline">
                                    <button class="btn btn-secondary dropdown-toggle network-series-dropdown collapse" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Network Series
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a id="n7100e" class="dropdown-item" href="#">N7100E</a></li>
                                        <li><a id="n7100" class="dropdown-item" href="#">N7100</a></li>
                                        <li><a id="fi6010n" class="dropdown-item" href="#">fi-6010N</a></li>
                                        <li><a id="n1800" class="dropdown-item" href="#">N1800</a></li>
                                    </ul>
                                </div>

                                <!-- SP Series Dropdown -->
                                <div class="dropdown inline">
                                    <button class="btn btn-secondary dropdown-toggle sp-series-dropdown collapse" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        SP Series
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a id="sp1130ne" class="dropdown-item" href="#">SP-1130Ne</a></li>
                                        <li><a id="sp1120n" class="dropdown-item" href="#">SP-1120N / SP-1125N / SP-1130N</a></li>
                                        <li><a id="sp1425" class="dropdown-item" href="#">SP-1425</a></li>
                                        <li><a id="sp1120" class="dropdown-item" href="#">SP-1120 / SP-1125 / SP-1130</a></li>
                                    </ul>
                                </div>
                                <br><br>
                                <div class="fi-links collapse">
                                    <h6>Drivers / Software</h6>
                                            <a target="_blank" href="http://imagescanner.fujitsu.com/global/dl/setup/psip-twain32-3100.html?MODEL=5141" class="link-light" style=
                                            "color: white;">TWAIN Driver</a><br>
                                            <a target="_blank" href="http://imagescanner.fujitsu.com/global/dl/setup/psip-isis-302.html?MODEL=5141" class="link-light" style="color: white;">ISIS Driver</a><br>
                                            <a target="_blank" href="http://imagescanner.fujitsu.com/global/dl/setup/psss-105.html?MODEL=5141" class="link-light" style="color:white;">PaperStream ClickScan</a><br>
                                            <a target="_blank" href="https://imagescanner.fujitsu.com/global/dl/" class="link-light" style="color:white;">fi Downloads</a><br>
                                            <a target="_blank" href="https://imagescanner.fujitsu.com/global/dl/index-sps.html" class="link-light" style="color:white;">SP Downloads</a><br>
                                    <br><br>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="form-holder text-center">
            <?php include 'scanners/fi-7000/fi7300nx.php' ?>
            </div>
        </div>
    </div>
<script src="js/main.js"></script>
<script src="js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $( document ).ready(function() {


        // WHEN I CLICK ON THE SCANSNAP BUTTON
        
        $( "#ss-btn" ).click(function() {
            $( "#ss-btn" ).removeClass("btn-secondary").addClass("btn-primary");
            $("#fi-btn").removeClass("btn-primary").addClass("btn-secondary");
            $("#fi-series, .fi-links").addClass("collapse");
            $("#scansnap").removeClass("collapse");
        });

        // WHEN I CLICK ON THE FI-SERIES BUTTON

        $( "#fi-btn" ).click(function() {
            $("#sp-series-btn, #fi-8000-series-btn, #fi-7000-series-btn, #fi-6000-series-btn, #fi-5000-series-btn, #network-series-btn").removeClass("collapse btn-primary").addClass("btn-secondary");
            $( "#fi-btn" ).removeClass("btn-secondary").addClass("btn-primary");
            $("#ss-btn").removeClass("btn-primary").addClass("btn-secondary");
            $("#scansnap, .fi-8000-series-dropdown, .fi-7000-series-dropdown, .fi-6000-series-dropdown, .fi-5000-series-dropdown, .network-series-dropdown, .sp-series-dropdown").addClass("collapse");
            $("#fi-series, .fi-links").removeClass("collapse");
        });

        // WHEN I CLICK ON THE FI-8000 SERIES BUTTON

        $( "#fi-8000-series-btn" ).click(function() {
            $("#fi-8000-series-btn, #fi-7000-series-btn, #fi-6000-series-btn, #fi-5000-series-btn, #network-series-btn").removeClass("btn-primary").addClass("btn-secondary collapse");
            $("#fi-8000-series-btn").addClass("btn-primary").removeClass("btn-secondary");
            $(".fi-7000-series-dropdown, .fi-6000-series-dropdown, .fi-5000-series-dropdown, .network-series-dropdown, #sp-series-btn").addClass("collapse");
            $(".fi-8000-series-dropdown").removeClass("collapse");
            $("#fi-btn").removeClass("btn-primary").addClass("btn-secondary");
        });

        // WHEN I CLICK ON THE FI-7000 SERIES BUTTON

        $( "#fi-7000-series-btn" ).click(function() {
            $("#fi-7000-series-btn, #fi-8000-series-btn, #fi-6000-series-btn, #fi-5000-series-btn, #network-series-btn").removeClass("btn-primary").addClass("btn-secondary collapse");
            $("#fi-7000-series-btn").addClass("btn-primary").removeClass("btn-secondary");
            $(".fi-8000-series-dropdown, .fi-6000-series-dropdown, .fi-5000-series-dropdown, .network-series-dropdown, #sp-series-btn").addClass("collapse");
            $(".fi-7000-series-dropdown").removeClass("collapse");
            $("#fi-btn").removeClass("btn-primary").addClass("btn-secondary");
        });

        // WHEN I CLICK ON THE FI-6000 SERIES BUTTON

        $( "#fi-6000-series-btn" ).click(function() {
            $("#fi-6000-series-btn, #fi-7000-series-btn, #fi-8000-series-btn, #fi-5000-series-btn, #network-series-btn").removeClass("btn-primary").addClass("btn-secondary collapse");
            $("#fi-6000-series-btn").addClass("btn-primary").removeClass("btn-secondary");
            $(".fi-7000-series-dropdown, .fi-8000-series-dropdown, .fi-5000-series-dropdown, .network-series-dropdown, #sp-series-btn").addClass("collapse");
            $(".fi-6000-series-dropdown").removeClass("collapse");
            $("#fi-btn").removeClass("btn-primary").addClass("btn-secondary");
        });

        // WHEN I CLICK ON THE FI-5000 SERIES BUTTON

        $( "#fi-5000-series-btn" ).click(function() {
            $("#fi-5000-series-btn, #fi-7000-series-btn, #fi-6000-series-btn, #fi-8000-series-btn, #network-series-btn").removeClass("btn-primary").addClass("btn-secondary collapse");
            $("#fi-5000-series-btn").addClass("btn-primary").removeClass("btn-secondary");
            $(".fi-7000-series-dropdown, .fi-6000-series-dropdown, .fi-8000-series-dropdown, .network-series-dropdown, #sp-series-btn").addClass("collapse");
            $(".fi-5000-series-dropdown").removeClass("collapse");
            $("#fi-btn").removeClass("btn-primary").addClass("btn-secondary");
        });

        // WHEN I CLICK ON THE NETWORK SERIES BUTTON

        $( "#network-series-btn" ).click(function() {
            $("#network-series-btn, #fi-7000-series-btn, #fi-6000-series-btn, #fi-5000-series-btn, #fi-8000-series-btn").removeClass("btn-primary").addClass("btn-secondary collapse");
            $("#network-series-btn").addClass("btn-primary").removeClass("btn-secondary");
            $(".fi-7000-series-dropdown, .fi-6000-series-dropdown, .fi-5000-series-dropdown, .fi-8000-series-dropdown, #sp-series-btn").addClass("collapse");
            $(".network-series-dropdown").removeClass("collapse");
            $("#fi-btn").removeClass("btn-primary").addClass("btn-secondary");
        });

        // WHEN I CLICK ON THE SP SERIES BUTTON

        $( "#sp-series-btn" ).click(function() {
            $("#network-series-btn, #sp-series-btn, #fi-7000-series-btn, #fi-6000-series-btn, #fi-5000-series-btn, #fi-8000-series-btn").removeClass("btn-primary").addClass("btn-secondary collapse");
            $(".network-series-dropdown, .fi-7000-series-dropdown, .fi-6000-series-dropdown, .fi-5000-series-dropdown, .fi-8000-series-dropdown").addClass("collapse");
            $(".sp-series-dropdown").removeClass("collapse");
            $("#fi-btn").removeClass("btn-primary").addClass("btn-secondary");
        });

        // WHEN I SELECT A SCANNER

        // fi-8000 series

        // fi-8190 - fi8290
        $( "#fi8190" ).click(function() {
            $(".form-holder").load("scanners/fi-8000/fi8190.php");
        });

        // fi-8170 - fi8270
        $( "#fi8170" ).click(function() {
            holder = $(this).text();
            $(".form-holder").load("scanners/fi-8000/fi8170-fi8270.php");
        });

        // fi-8150 - fi8250
        $( "#fi8150" ).click(function() {
            $(".form-holder").load("scanners/fi-8000/fi8150-fi8250.php");
        });

        // fi-800R
        $( "#fi800r" ).click(function() {
            $(".form-holder").load("scanners/fi-8000/fi800r.php");
        });

        // fi-7000 series

        // fi-7800 - fi7900
        $( "#fi7800" ).click(function() {
            $(".form-holder").load("scanners/fi-7000/fi7800.php");
        });

        // fi-7600 - fi7700
        $( "#fi7600" ).click(function() {
            $(".form-holder").load("scanners/fi-7000/fi7600.php");
        });

        // fi-7700S
        $( "#fi7700s" ).click(function() {
            $(".form-holder").load("scanners/fi-7000/fi7700s.php");
        });

        // fi-7460 - fi7480
        $( "#fi7460" ).click(function() {
            $(".form-holder").load("scanners/fi-7000/fi7460.php");
        });

        // fi-7300NX
        $( "#fi7300nx" ).click(function() {
            $(".form-holder").load("scanners/fi-7000/fi7300nx.php");
        });

        // fi-7180 - fi7280
        $( "#fi7180" ).click(function() {
            $(".form-holder").load("scanners/fi-7000/fi7180.php");
        });

        // fi-7160 - fi7260
        $( "#fi7160" ).click(function() {
            $(".form-holder").load("scanners/fi-7000/fi7160.php");
        });

        // fi-7140 - fi7240
        $( "#fi7140" ).click(function() {
            $(".form-holder").load("scanners/fi-7000/fi7140.php");
        });

        // fi-7030
        $( "#fi7030" ).click(function() {
            $(".form-holder").load("scanners/fi-7000/fi7030.php");
        });

        // fi-6000 series

        // fi-6800
        $( "#fi6800" ).click(function() {
            $(".form-holder").load("scanners/fi-6000/fi6800.php");
        });

        // fi-6400
        $( "#fi6400" ).click(function() {
            $(".form-holder").load("scanners/fi-6000/fi6400.php");
        });

        // fi-6670
        $( "#fi6670" ).click(function() {
            $(".form-holder").load("scanners/fi-6000/fi6670.php");
        });

        // fi-6670a
        $( "#fi6670a" ).click(function() {
            $(".form-holder").load("scanners/fi-6000/fi6670a.php");
        });

        // fi-6750s
        $( "#fi6750s" ).click(function() {
            $(".form-holder").load("scanners/fi-6000/fi6750s.php");
        });

        // fi-6140z
        $( "#fi6140z" ).click(function() {
            $(".form-holder").load("scanners/fi-6000/fi6140z.php");
        });

        // fi-6130z
        $( "#fi6130z" ).click(function() {
            $(".form-holder").load("scanners/fi-6000/fi6130z.php");
        });

        // fi-6140
        $( "#fi6140" ).click(function() {
            $(".form-holder").load("scanners/fi-6000/fi6140.php");
        });

        // fi-6130
        $( "#fi6130" ).click(function() {
            $(".form-holder").load("scanners/fi-6000/fi6130.php");
        });

        // fi-6110
        $( "#fi6110" ).click(function() {
            $(".form-holder").load("scanners/fi-6000/fi6110.php");
        });

        // fi-65f
        $( "#fi65f" ).click(function() {
            $(".form-holder").load("scanners/fi-6000/fi65f.php");
        });

        // fi-5000 series

        // fi-5015c
        $( "#fi5015c" ).click(function() {
            $(".form-holder").load("scanners/fi-5000/fi5015c.php");
        });

        // fi-5530c2
        $( "#fi5530c2" ).click(function() {
            $(".form-holder").load("scanners/fi-5000/fi5530c2.php");
        });

        // fi-5950
        $( "#fi5950" ).click(function() {
            $(".form-holder").load("scanners/fi-5000/fi5950.php");
        });

        // network series

        // fi-6010n
        $( "#fi6010n" ).click(function() {
            $(".form-holder").load("scanners/network/fi6010n.php");
        });

        // n1800
        $( "#n1800" ).click(function() {
            $(".form-holder").load("scanners/network/n1800.php");
        });

        // n7100 
        $( "#n7100" ).click(function() {
            $(".form-holder").load("scanners/network/n7100.php");
        });

        // n7100e
        $( "#n7100e" ).click(function() {
            $(".form-holder").load("scanners/network/n7100e.php");
        });

        // sp-series

        // sp-1130ne
        $( "#sp1130ne" ).click(function() {
            $(".form-holder").load("scanners/sp/sp-1130ne.php");
        });

        // sp-1120N / sp-1125n / sp-1130n
        $( "#sp1120n" ).click(function() {
            $(".form-holder").load("scanners/sp/sp-1120n-1125n-1130n.php");
        });

        // sp-1120 / sp-1125 / sp-1130
        $( "#sp1120" ).click(function() {
            $(".form-holder").load("scanners/sp/sp-1120-1125-1130.php");
        });

        // sp-1425
        $( "#sp1425" ).click(function() {
            $(".form-holder").load("scanners/sp/sp-1425.php");
        });

    });
</script>
</body>
</html>
