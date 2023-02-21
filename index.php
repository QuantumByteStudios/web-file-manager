<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>File Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Stylesheet -->
  <link rel="stylesheet" href=".filemngr/style/style.css">
  <!-- GoogleFonts -->
  <link href='https://fonts.googleapis.com/css?family=Gloock' rel='stylesheet'>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/d082f105b3.js" crossorigin="anonymous"></script>
  <!-- Navbar -->
  <nav>
    <div style="background-color: #80A1D4;" class="container-fluid">
      <div class="btn-group">
        <a style="border: none; text-decoration: none;" href=".">
          <button style="border: none; background-color: transparent; text-decoration: none; border: none; padding: 15px;">
            <h1 style="color: #F7F4EA;">
              <b>File Manager</b>
            </h1>
          </button>
          <button style="border: none; background-color: transparent; text-decoration: none; border: none; padding: 15px;">
            <p style="margin: 0px; color: #F7F4EA;">-dimensional</p>
          </button>
        </a>
      </div>

    </div>
  </nav>
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div style="height: 100vh; background-color: #ded9e2;" class="col-2">

        <?php
        $scan = scandir('home');
        // Files
        foreach ($scan as $file) {
          // Folder
          if (is_dir("home/$file")) {
            echo "
            <form method=\"post\">
            <button class='folder-button' name=\"$file\" value=\"$file\">
              <div class='alert cursor-pointer'>
                <i class='fa fa-solid fa-folder'></i>&nbsp;
                $file
              </div>
            </button>
            </form>
            ";
          }
        }
        // $sel = $file;
        // setcookie("selected", $sel, time() + 2 * 24 * 60 * 60);
        ?>
      </div>
      <div style="height: 100vh; background-color: #F7F4EA;" class="col-10">

        <?php

        // print_r($_POST);
        $directory = array_keys($_POST)[0];
        echo "<br>Selected: " . $directory . "<hr>";

        $scan = scandir('home/' . $directory);
        // Files
        foreach ($scan as $file) {
          if (!is_dir("home/$file")) {
            echo "<button class='file-button'>";
            echo "<i class='fa fa-solid fa-file'></i>&nbsp;&nbsp;&nbsp;";
            echo "<a class=\"File-Name\" href='home/$directory/$file'>$file</a>";
            echo "</button>";
          }
        }

        ?>
      </div>
    </div>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>