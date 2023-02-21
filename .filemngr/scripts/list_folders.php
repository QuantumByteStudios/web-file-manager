<?php
$parent_directory = "home";
// print_r($_POST);
$scan = scandir($parent_directory);
// Files
foreach ($scan as $sub_directory) {
  // Folder
  if (is_dir("$parent_directory/$sub_directory")) {
    if ($sub_directory == "." || $sub_directory == "..") continue;
    else {
      echo "
      <form method=\"post\">
        <button class='folder-button' name=\"$sub_directory\" value=\"$sub_directory\">
          <div class='alert cursor-pointer'>
          <i class='fa fa-solid fa-folder'></i>&nbsp;&nbsp;&nbsp;$sub_directory
          </div>
        </button>
      </form>";
    }
  }
}
 // $sel = $file;
// setcookie("selected", $sel, time() + 2 * 24 * 60 * 60);