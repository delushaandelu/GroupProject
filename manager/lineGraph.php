<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <!-- link css and sweetalert files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"  href="Stock_NewReport_Design.css"/>
    <script type="text/javascript" src = "js/Chart.min.js"></script>
    
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 align='center'>Priyantha Enterprises- purchase order per day</h3>
        </div>
        
    </div>
    <div class="row">
<div id="content">
        <div id="top3">
            <div id>
    <canvas id="myChart" width="250" height="120"></canvas>

</div>

<script>
$.ajax({
    url : "lineGraphData.php",
})
.done(function(data){
        
                   //console.log(data);
                    var date = [];
                    var count = [];
                    var itemList = jQuery.parseJSON(data);

                    for(var i in itemList){

                        date.push(itemList[i][0]);

                        
                        count.push(itemList[i][1]);
                        
                    }
                

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: date,//x axis
            datasets: [{

              label: 'date',
              data: count,//y axis
              backgroundColor: "rgba(0,128,128,0.8)"
            }]
          }
        });
    });

</script>


    


        </div>
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>

    </div>      
</div>
<!-- js files -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
