<?php

$db = mysqli_connect('localhost', 'root', 'root', 'kontak');


if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}


function tambah_data($post)
{
    global $db;

   
    $nama   = strip_tags($post['nama']);
    $nim    = strip_tags($post['nim']);
    $email  = strip_tags($post['email']);
    $jenis_kelamin  = strip_tags($post['jenis_kelamin']);
    $kelas   = strip_tags($post['kelas']);
    $pesan = strip_tags($post['pesan']);

   
    $stmt = $db->prepare("INSERT INTO form_kontak (nama, nim, email, jenis_kelamin, kelas, pesan) VALUES (?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . $db->error);
    }


    $stmt->bind_param('ssssss', $nama, $nim, $email, $jenis_kelamin, $kelas, $pesan);


    $stmt->execute();

 
    $insert_id = $db->insert_id;

  
    $stmt->close();

    return $insert_id;
}


if (isset($_POST['submit'])) {
    $insert_id = tambah_data($_POST);
    if ($insert_id) {
        echo "<script>
                alert('Data berhasil ditambahkan dengan ID: $insert_id');
                document.location.href = 'index.php'; // Ganti dengan halaman yang sesuai
            </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan');
                document.location.href = 'index.php'; // Ganti dengan halaman yang sesuai
            </script>";
    }
}


mysqli_close($db);
?>
