<?php
if (isset($_REQUEST['page'])) {

  $page = $_REQUEST['page'];

  switch ($page) {
    case 'pendaftaran_user':
      echo "Pendaftaran";
      break;
    case 'pengumuman':
      echo "Pengumuman";
      break;
    case 'user_gantipassword':
      echo "Ganti Password";
      break;
  }
} else {
  echo "Home";
}
