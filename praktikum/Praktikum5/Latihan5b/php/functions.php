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
        while ($row = mysqli_fetch_assoc($result)){
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

?>