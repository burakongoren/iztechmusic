<?php
include "server.php";
$table_name = "member";

// Veritabanı bağlantısını yapın ve karakter setini belirleyin
$conn = mysqli_connect("$servername", "$username", "$password", $dbname);
mysqli_set_charset($conn, "utf8");

// Tablo verilerini seçin
$query = "SELECT * FROM $table_name";
$result = mysqli_query($conn, $query);

// CSV dosyası oluşturun
$filename = "IZTECH_Music_MemberList" . "_" . date('Y-m-d') . ".csv";
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: text/csv; charset=utf-8");

// CSV dosyasının başlık satırını oluşturun
$header = array();
foreach ($result as $row) {
    foreach ($row as $key => $value) {
        if (!in_array($key, $header)) {
            array_push($header, $key);
        }
    }
    break;
}
$header = implode(",", $header);
echo $header . "\n";

// CSV dosyası içeriğini oluşturun
foreach ($result as $row) {
    $line = array();
    foreach ($row as $key => $value) {
        // Türkçe karakterleri düzeltmek için iconv() fonksiyonunu kullanın
        $value = iconv("UTF-8", "ISO-8859-9", $value);
        array_push($line, $value);
    }
    $line = implode(",", $line);
    echo $line . "\n";
}

// Bağlantıyı kapatın
mysqli_close($conn);

?>