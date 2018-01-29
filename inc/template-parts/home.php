<?php
$ms = new KyrieStoreModel();
$ms_data = $ms->read();
$num_ms = count($ms_data);
//var_dump($ms_data);

echo "<h3>Numero de productos: <mark>$num_ms</mark></h3>";

for ( $n=0; $n < count($ms_data); $n++) {
  echo '
    <div class="row">
      <div class="col s6">
        <div class="card">
          <div class="card-image">
          <img src="' . $ms_data[$n]['product_img']  . '">
            <a class="btn-floating halfway-fab pulse red">
            <i class="material-icons">add</i></a>
          </div>
          <div class="card-content">
            <h2 class="card-title">' . $ms_data[$n]['nombre']  . '</h2>
            <p>' . $ms_data[$n]['product_descrip']  . '</p>
            <p>$' . $ms_data[$n]['precio']  . '</p>
            <p>' . $ms_data[$n]['product_disp']  . '</p>
          </div>
        </div>
      </div>';
      $n++;
      if($n < count($ms_data)){
        echo'
          <div class="col s6">
            <div class="card">
              <div class="card-image">
                <img src="' . $ms_data[$n]['product_img']  . '">
                <a class="btn-floating halfway-fab pulse red">
                <i class="material-icons">add</i></a>
              </div>
              <div class="card-content">
                <h2 class="card-title">' . $ms_data[$n]['nombre']  . '</h2>
                <p>' . $ms_data[$n]['product_descrip']  . '</p>
                <p>$' . $ms_data[$n]['precio']  . '</p>
                <p>' . $ms_data[$n]['product_disp']  . '</p>
              </div>
            </div>
          </div>
        ';
      }
     echo '</div>'; 
  }
        