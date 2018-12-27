<?php

  $connect = mysqli_connect("localhost", "root", "", "narguile");

  if(isset($_POST["query"])) {

    $output = '';

    $query = "SELECT * FROM produto WHERE tipo_produto LIKE '%".$_POST["query"]."%'";

    $result = mysqli_query($connect, $query);

    $output = '<ul class="list-unstyled">';

    if(mysqli_num_rows($result) > 0) {

      while($row = mysqli_fetch_array($result)) {

        $output .= '<li>'.$row["tipo_produto"].'</li>';  
      }
    }

    else {

      $output .= '<li>Produto não encontrado</li>';  
    }

    $output .= '</ul>';

    echo $output;  
  }
?>