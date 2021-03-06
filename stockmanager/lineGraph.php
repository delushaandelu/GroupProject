<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>  
        
        <link rel="stylesheet" type="text/css"  href="Stock_NewReport_Design.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      
        
       <script src="js/sweetalert-dev.js"></script>
       

       <script type="text/javascript" src = "js/Chart.min.js"></script>
       
 <link rel="stylesheet" href="js/sweetalert.css">

                  
    </head>
    <body>
        
     <?php
            include("../config/stockmgrmenu.php");
        ?> 


        

                <ul class="breadcrumb">
                    <h3>Graphical Reports</h3>
                    <h4 align='center'>Priyantha Enterprises</h4>

                </ul>

                <h4 align="center">Purchase Orders per day</h4>  
<div id>
    <canvas id="myChart" width="250" height="120"></canvas>

</div>
<style>
    /*#myChart{
        box-shadow:3px 3px 5px 200px #ccc;
    }*/
</style>

       





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


    


        
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






