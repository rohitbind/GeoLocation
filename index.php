<!DOCTYPE html>
<html lang="">
<head>
    <title>Geo Location</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbrZ4lTHX3vul-LXkrmn7pkTAjX03Xvnw"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="mapCanvas"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="infoPanel">
                    <b>Closest matching address</b>
                    <p id="address"></p>

                    <b>Current position</b>
                    <p id="info"></p>

                    <b>Marker status</b>
                    <div id="markerStatus">
                        <p>Click and drag the marker.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/script.js"></script>
</body>
</html>