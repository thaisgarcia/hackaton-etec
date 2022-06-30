<?php
$sql = "SELECT * FROM Depoimentos;";
$res = $conn->query($sql) or die("erro");
$qtd = $res->num_rows;

if ($qtd > 0) {
  while ($row = $res->fetch_object()) {
    print "
    <div class='carousel-item' data-bs-interval='20000'>
      <div class='depoimento-coluna'>
        <div>
          <h1>".utf8_encode($row->nome)."</h1>
          <span class='depoimento-complemento'>".utf8_encode($row->titulo_op)."</span>
        </div>
        <div>
          <p>".utf8_encode($row->depoimento)."</p>
        </div>
        <div>
          <span class='depoimento-complemento'>{$row->data}</span>
        </div>
      </div>
    </div>";
    }
  }
?>