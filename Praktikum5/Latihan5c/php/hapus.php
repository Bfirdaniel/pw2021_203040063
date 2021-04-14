<?php
require 'functions.php';

$Id = $_GET['Id'];

if (hapus($Id) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!!');
          document.location.href = 'admin.php';
          </script>";
} else {
  echo "<script>
    alert('Data gagal dihapus!!');
    document.location.href = 'admin.php';
    </script>";
}