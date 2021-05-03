<?php
  include __DIR__.'/data.php';
?>

<!-- encoder json -->
<?php
header('Content-Type: application/json');

echo json_encode($albums);
?>
