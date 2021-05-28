<?php
function koneksi(){
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "pw_tubes_203040063");

        return $conn;
    }

    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, $sql);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;

        }
        return $rows;
    }

    function upload()
{
  $nama_file = $_FILES['rokok']['name'];
  $tipe_file = $_FILES['rokok']['type'];
  $ukuran_file = $_FILES['rokok']['size'];
  $error = $_FILES['rokok']['error'];
  $tmp_file = $_FILES['rokok']['tmp_name'];

  if ($error == 4) {

    return 'gagal memperbarui';
  }

  // cek ekstensi file
  $daftar_picture = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));

  if (!in_array($ekstensi_file, $daftar_picture)) {
    echo "<script>
          alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/jfif') {
    echo "<script>
    alert('yang anda pilih bukan gambar!');
    </script>";
    return false;
  }

  if ($ukuran_file > 5000000) {
    echo "<script>
    alert('ukuran terlalu besar!');
    </script>";
    return false;
  }

  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}

    function tambah($data)
    {
        $conn = koneksi();
    
        $Name = htmlspecialchars($data['Name']);
        $Merk = htmlspecialchars($data['Merk']);
        $Price = htmlspecialchars($data['Price']);
        $Color = htmlspecialchars($data['Color']);
        $Quantity = htmlspecialchars($data['Quantity']);

        $Picture = upload();
        if (!$Picture) {
          return false;
        }
    
        $query = "INSERT INTO rokok
                      VALUES
                      ('', '$Name', '$Merk', '$Price', '$Color', '$Quantity', '$Picture')";
                      mysqli_query($conn, $query);
                      return mysqli_affected_rows($conn);
    }

function hapus($Id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM rokok WHERE Id = $Id") or die (mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $Id = ($data['Id']);
    $Name = htmlspecialchars($data['Name']);
    $Merk = htmlspecialchars($data['Merk']);
    $Price = htmlspecialchars($data['Price']);
    $Color = htmlspecialchars($data['Color']);
    $Quantity = htmlspecialchars($data['Quantity']);
    $Picture = htmlspecialchars($data['Picture']);

    $query = "UPDATE rokok SET
    nama = '$Name',
    merk = '$Merk',
    price = '$Price',
    color = '$Color',
    quantity = '$Quantity',
    picture = '$Picture'
    WHERE Id = $Id
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari ($keyword) {

    $query = "SELECT * FROM rokok
      WHERE nama = '$keyword'";
    return query($query);
    
}



function registrasi($data)
{
   $conn = koneksi();
   $username = strtolower(stripcslashes($data["username"]));
   $password = mysqli_real_escape_string($conn, $data["password"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah digunakan');
            </script>";
            return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

?>