<?php
$ms = new CategoriaModel();

$ms_data = $ms->read();
$num_ms = count($ms_data);
//var_dump($ms_data);

echo "<h3>Numero de categoria: <mark>$num_ms</mark></h3>";

echo'<h3>Tabla Categorias</h3>';

echo '
  <table>
    <tr>
      <th>cat_id</th>
      <th>cat_nombre</th>
    </tr>
';

for ( $n=0; $n < count($ms_data); $n++ ) {
  echo '
    <tr>
      <td>' . $ms_data[$n]['cat_id']  .'</td>
      <td>' . $ms_data[$n]['cat_nombre']  . '</td>
    </tr>
  ';
}
echo '</table>';
