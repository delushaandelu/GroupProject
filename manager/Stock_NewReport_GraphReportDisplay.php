<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <link rel="stylesheet" type="text/css"  href="Stock_NewReport_Design.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      
        
    <script src="js/sweetalert-dev.js"></script>
    <script type="text/javascript" src = "js/Chart.min.js"></script>
    <script>
    function printPageArea(areaID){
	var printContent = document.getElementById(areaID);
	var WinPrint = window.open('', '', 'width=900,height=650');
	WinPrint.document.write(printContent.innerHTML);
	WinPrint.document.close();
	WinPrint.focus();
	WinPrint.print();
	WinPrint.close();
    }
    </script>
    <script type="text/javascript">
    function display_graph(value){
                //alert("correct");
                //alert ("hiii");
                //var value = $('input[name="type"]:checked').val();
                alert(value);

               // alert ("caf");
             if(value){
               
                $.ajax({
                    url: 'Stock_NewReport_GraphData.php',
                    
                    type : 'POST',
                    data: {"categoryname" : value},
                    //alert ($value);

                
               success : function(data){
                     
                    alert(data);
                    console.log(data);
                    var Name = [];
                    var qty = [];
                    var itemList = jQuery.parseJSON(data);

                    for(var i in itemList){

                        Name.push(itemList[i].itemName + "(" + itemList[i].buyingPrice + ")");
                        //alert(data[i]);
                        //alert(itemList[i].itemName);
                        qty.push(itemList[i].stockQty);
                        
                    }


                    var chartdata = {
                         labels : Name,
                        datasets : [
                            {
                                label : 'Quantity',
                                backgroundColor : 'rgba(200,200,200,0.75)',
                                borderColor : 'rgba(200,200,200,0.75)',
                                hoverBackgroundColor : 'rgba(200,200,200,1)',
                                hoverBorderColor : 'rgba(200,200,200,1)',
                                data : qty

                            }
                        ]
                    };
                    //window.location.href = "Stock_NewReport_GraphReportDisplay.php";
                    var ctx = $ ('#mycanvas');
                    var barGraph = new Chart(ctx, {
                        type : 'bar',
                        data : chartdata
                    });
                },

                error : function(data){
                    console.log(data);
                }

            });
              
            }
              
       
            
    }
    </script>
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Graphical reports</h3>
            <a href="javascript:void(0);" id="print_button2" style="width: 130px; padding: 5px 8px 5px 8px;text-align: center;float: right;background-color: #1caf9a;color: #fff;text-decoration: none; margin: 10px;" onclick="printPageArea('top')">Print</a>
        
        </div>
        
    </div>
    <div class="row">
        <div id="content">
        <div id="top">
        <?php
            $value = $_POST['type'];?>

    
            

            <script>
                var value = "<?php echo $value; ?>";
                display_graph(value);
            </script>

      

                <ul class="breadcrumb">
                    <h4> <?php  echo $value;  ?></h4>
                </ul>



    <div id="chart-container">
            <canvas id = "mycanvas"></canvas>
        </div>

            </div>
        </div>

    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>