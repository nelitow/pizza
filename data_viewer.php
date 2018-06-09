<!DOCTYPE html>
<html>
  <head>
  <style>
  table.blueTable {
      text-align: center;
    }
    table.blueTable td, table.blueTable th {
      border: 1px solid #AAAAAA;
      padding: 0px 0px;
    }
    table.blueTable tr:nth-child(even) {
      background: #D0E4F5;
    }
    table.blueTable thead {
      background: #1C6EA4;
      background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
      background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
      background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
      border-bottom: 2px solid #444444;
    }
    table.blueTable thead th {
      font-size: 15px;
      font-weight: bold;
      color: #FFFFFF;
      border-left: 2px solid #D0E4F5;
    }
    table.blueTable thead th:first-child {
      border-left: none;
    }

    table.blueTable tfoot td {
      font-size: 14px;
    }
    table.blueTable tfoot .links {
      text-align: right;
    }
    table.blueTable tfoot .links a{
      display: inline-block;
      background: #1C6EA4;
      color: #FFFFFF;
      padding: 2px 8px;
      border-radius: 5px;
    }
  </style>
  </head>
  <body>
    <div id="container">
     <?php
        $url = 'data/pizzas.json';
        $data = file_get_contents($url);
        $bomdia = json_decode($data);
     ?>
     <table class="blueTable">
        <tr>
        <?php
        foreach ($bomdia as $pizza) {
        	echo "<th>" .$pizza->sabor . '</th>';
        }
        ?>
        </tr>
        <tr>
        <?php
        foreach ($bomdia as $pizza) {
        	echo "<td>" .$pizza->valor . '</td>';
        }
        ?>
        </tr>       
        <tr>
        <?php
        foreach ($bomdia as $pizza) {
            echo "<td>";
            $i = 0;
            foreach ($pizza->ingredientes as $ingredientes) {
            	if(count($pizza->ingredientes)!= $i+1){
                	echo $pizza->ingredientes[$i]. ", ";
                }else{
                	echo $pizza->ingredientes[$i];
                }
                $i++;
            }
            echo '</td>';
        }
        ?>
        </tr>
        <tr>
        <?php
        foreach ($bomdia as $pizza) {
        	echo "<td><img src=\"imgs/" .$pizza->sabor . ".png\"></td>";
        }
        ?>
        </tr>
    </div>
  </body>
  <script type="application/javascript" src="js/jquery.js"></script>
  <script type="application/javascript" src="data/pizzas.js"></script>
  <script>
  </script>
  <link rel="stylesheet" href="css/main.css" />
</html>
