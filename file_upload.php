<?php
// If is received a valid file from the 'field_name' form field
if (isset($_FILES['field_name'])) {
  if ($_FILES['field_name']['error'] > 0) {
    echo 'Error: '. $_FILES['field_name']['error']. '<br />';
  }
  else {
    echo 'Upload: '. $_FILES['field_name']['name']. '<br />';
    echo 'Type: '. $_FILES['field_name']['type']. '<br />';
    echo 'Size: '. ($_FILES['field_name']['size'] / 1024) . ' Kb<br />';
    echo 'Stored in: '. $_FILES['field_name']['tmp_name'];
  }
}
?>