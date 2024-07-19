<?php
include 'style/navbar.php';
?>

<main>
    <?php
    $sql = "SELECT filename, filetype FROM files WHERE id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $filename = $row['filename'];
        $filetype = $row['filetype'];
    } else {
        echo "File tidak ditemukan.";
        exit;
    }

    if ($filetype == 'image/jpeg' || $filetype == 'image/png') {
        // Tampilkan gambar
        echo '<img src="img/' . $filename . '" class="img-fluid img-thumbnail" alt="File Image">';
    } elseif ($filetype == 'application/pdf') {
        // Tampilkan PDF
        echo '<embed src="img/' . $filename . '" type="application/pdf" width="100%" height="600px" />';
    } else {
        echo 'Jenis file tidak didukung.';
    }
    ?>

    <?php
    include 'style/footer.php';
    ?>