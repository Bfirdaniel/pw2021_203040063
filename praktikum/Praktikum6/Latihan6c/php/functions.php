<?php
function koneksi(){
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "pw_tubes_203040063");

        return $conn;
    }

    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;

        }
        return $rows;
    }

    function tambah($data)
    {
        $conn = koneksi();
    
        $Name = htmlspecialchars($data['Name']);
        $Merk = htmlspecialchars($data['Merk']);
        $Price = htmlspecialchars($data['Price']);
        $Color = htmlspecialchars($data['Color']);
        $Quantity = htmlspecialchars($data['Quantity']);
        $Picture = htmlspecialchars($data['Picture']);
    
        $query = "INSERT INTO rokok
                                VALUES
                                ('', '$Name', '$Merk', '$Price', '$Color', '$Quantity', '$Picture')";
                                mysqli_query($conn, $query);
                                return mysqli_affected_rows($conn);
    }

    function hapus($Id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM rokok WHERE Id = $Id");

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
    Name = '$Name',
    Merk = '$Merk',
    Price = '$Price',
    Color = '$Color',
    Quantity = '$Quantity',
    Picture = '$Picture'
    WHERE Id = $Id
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
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