<?php
error_reporting(0);
?>
<head>
    <title>Currency Converter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        html {
            font-size: 20px;
        }

        .panel {
            border: solid white;
        }

        #results {
            font-size: 1em;
        }

        .dropdown {
            margin-bottom: 50px;
        }

        .inline-block {
            display: inline-block;
        }

        .center {
            width: 90%;
            margin: 0 auto 30px;
        }
    </style>

</head>

<body>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary text-center ">
                    <div class="panel-heading">
                        <h4 class="panel-title">Currency Converter</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form-vertical">

                            <div class="form-group center">
                                <label for="">Enter Value:</label>
                                <input type="number" class="amount form-control" placeholder="Enter value" id="amount">
                            </div>


                            <div class="form-group inline-block">
                                <label for="">From currency:</label>
                                <select class="currency-list form-control" onclick="exchangeCurrency()" id="fromCurrency">
                                    <option>--Select--</option>
                                    <option value="RUPEE">RUPEE</option>
                                    <option value="EURO">EURO</option>
                                    <option value="USD">USD</option>
                                    <option value="SOL">SOL</option>
                                </select>
                            </div>
                            <div class='inline-block'><i class='fas fa-exchange-alt' style='color:#509189' onclick="interChangeCurrency()"></i></div>
                            <div class="form-group inline-block">
                                <label>To currency:</label>
                                <select class="currency-list form-control" onclick="exchangeCurrency()" id="toCurrency">
                                    <option>--Select--</option>
                                    <option value="RUPEE">RUPEE</option>
                                    <option value="EURO">EURO</option>
                                    <option value="USD">USD</option>
                                    <option value="SOL">SOL</option>
                                </select>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <p id="results" class="text-center"></p>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>
<script src="myScript.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>