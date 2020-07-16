<?php function print_cds($array_cds){
  $output = '';

   foreach ($array_cds as $data){
     $output .= '<img src="' . $data['poster'] . '" alt="poster">';
     $output .= '<h2>' . $data['title'] . '</h2>';
     $output .= '<span class="author">' . $data['autor'] . '</span>';
     $output .= '<span>' . $data['year'] . '</span>';

    }
    return $output;

  }
?>
