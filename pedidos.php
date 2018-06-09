<?php
$con = @mysqli_connect('localhost', 'pizzapizza', 'facapartedesseahto', 'pizza');
if (!$con) {
    echo "Error: " . mysqli_connect_error();
  exit();
}

$sql  = 'SELECT * FROM Pedido';
$query  = mysqli_query($con, $sql);

mysqli_close ($con);
?>
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <div id="container">
      <table>
        <tr>
          <th colspan="999999">Pedidos 
          </th>
        </tr>
        <tr>
          <th>ID</th>
          <th>Cliente</th>
          <th>Endereco</th>
          <th>Forma de Pagamento</th>
          <th>Custo</th>
          <th>Troco</th>
          <th>Descricao</th>
          <th>Obs</th>
        </tr>
    
        <?php
        while ($row = mysqli_fetch_array($query)){
          echo "<tr><td>";
          echo $row['ID'];
          echo "</td>";
          echo "<td>";
          echo $row['Cliente'];
          echo "</td>";
          echo "<td>";
          echo $row['endereco'];
          echo "</td>";
          echo "<td>";
          echo $row['forma_de_pg'];
          echo "</td>";
          echo "<td>";
          echo "R$".$row['custo'];
          echo "</td>";
          echo "<td>";
          echo $row['troco'];
          echo "</td>";
          echo "<td>";
          echo $row['desc'];
          echo "</td>";
          echo "<td>";
          echo $row['obs'];
          echo "</td>";
          ?>
          <td>
            <button <?php if($row['status'] == 1) echo " class=\"active\""; ?>>
              Recebido
            </button>
          </td>
          <td>
            <button <?php if($row['status'] == 2) echo " class=\"active\""; ?>>
              Em Producao
            </button>
          </td>
          <td>
            <button <?php if($row['status'] == 3) echo " class=\"active\""; ?>>
              Saiu para entrega
            </button>
          </td>
          <td>
            <button <?php if($row['status'] == 4) echo " class=\"active\""; ?>>
              Concluido
            </button>
          </td>
          <?php } ?>
      </table>
    </div>
  </body>
  <script type="application/javascript" src="js/jquery.js"></script>
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/pedidos.css" />
</html>
