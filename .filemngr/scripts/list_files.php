<?php
// print_r($_POST);
if (!empty(array_keys($_POST)[0])) {
  $sub_directory = array_keys($_POST)[0];
  echo "<br>Selected directory: " . "&nbsp;$parent_directory/" . $sub_directory . "<hr>";
} else {
  echo "<br>No directory selected<hr>";
  $sub_directory = ".";
}

$scan = scandir("$parent_directory/$sub_directory");

foreach ($scan as $file) {
  // echo $item;
  if (!is_dir("$parent_directory/$file")) {
    echo "
    <button class='file-tile'>
      <a class=\"file-name\" href='$parent_directory/$sub_directory/$file'>
      <i class='fa fa-solid fa-file'></i>&nbsp;&nbsp;&nbsp;$file</a>
    </button>
    ";
  }
}
