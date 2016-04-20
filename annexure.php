<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ShantibanApp">
    <meta name="author" content="ShantibanApp">

    <title>Shantiban Society Financial Model</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="t.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.html">Shantiban Society Financial Model</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.html"></a>
                    </li>
                    
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</body>

<?php
$servername = "localhost";
$username = "root";
$password = "sojwal";
$dbname = "pars";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT sum(total) as annual_maintenance  FROM  annual_main";
$sql1 = "SELECT sum(amount)  as incom FROM  income";
$sql2 = "SELECT sum(amount)  as expend  FROM expenditure";
$result = $conn->query($sql);
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
?>

<section id = "table" class= "bg-darkest-black">
<div class="container">
<div class="caption">Annexure</div>	
<div id="table">
<div class="header-row row">
    <span class="cell">Description</span>
    <span class="cell">Amount</span>
    
</div>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class=row>";
        echo "<span class=cell primary data-label=Description>";
        echo "annual maintenance";
        echo "</span>";
        echo "<span class=cell primary data-label=Amount>";
        echo $row["annual_maintenance"];
        echo "</span>";echo "</div>";
    }
} else {
    echo "0 results";
}

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        echo "<div class=row>";
        echo "<span class=cell primary data-label=Description>";
        echo "income";
        echo "</span>";
        echo "<span class=cell primary data-label=Amount>";
        echo $row["incom"];
        echo "</span>";echo "</div>";
    }
} else {
    echo "0 results";
}
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        echo "<div class=row>";
        echo "<span class=cell primary data-label=Description>";
        echo "expenditure";
        echo "</span>";
        echo "<span class=cell primary data-label=Amount>";
        echo $row["expend"];
        echo "</span>";echo "</div>";

    }
} else {
    echo "0 results";
}


$conn->close();
?>
</div>
</div>
</section>
</html>