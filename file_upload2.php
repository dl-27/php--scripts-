<?php
$updir = 'uploads/';       // sets the folder where the uploaded files are copied
$max_size = 100;         // sets maximum file size allowed (in KB)

// file types allowed
$allowtype = array('gif', 'jpg', 'jpeg', 'png');

// If is received a valid file from the 'field_name' form field
if (isset($_FILES['field_name'])) {
  // check for errors
  if ($_FILES['field_name']['error'] > 0) {
    echo 'Error: '. $_FILES['field_name']['error']. '<br />';
  }
  else {
    // get the name, size (in kb) and type (the extension) of the file
    $fname = $_FILES['field_name']['name'];
    $fsize = $_FILES['field_name']['size'] / 1024;
    $ftype = end(explode('.', strtolower($fname)));

    // checks if the file already exists
    if (file_exists($updir. $fname)) {
      echo 'The file: '. $fname. ' already exists';
    }
    else {
      // if the file not exists, check its type (by extension) and size
      if (in_array($ftype, $allowtype)) {
        // check the size
        if ($fsize <= $max_size) {
          // uses  function to copy the file from temporary folder to $updir
          if (!move_uploaded_file ($_FILES['field_name']['tmp_name'], $updir. $fname)) {
            echo 'The file '. $fname. ' could not be copied, try again';
          }
          else {
            echo $fname. ' ('. $fsize. ' kb) was successfully uploaded';
          }
        }
        else {
          echo 'The file '. $fname. ' exceeds the maximum permitted size, '. $max_size. ' KB';
        }
      }
      else {
        echo $fname. ' - invalid file type';
      }
    }
  }
}
?>

<form action="" method="post" enctype="multipart/form-data">
 <input type="file" name="field_name" /><br />
<input type="submit" name="submit" value="Submit" />
</form>