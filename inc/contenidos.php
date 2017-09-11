<?php
function contenidosPorNombre($ptipo, $nombre, $npaginas){

  $args = array(
      'post_type' => $ptipo,
      'pagename' => $nombre,
      'posts_per_page' => $npaginas
  );

return $args;

}



?>
