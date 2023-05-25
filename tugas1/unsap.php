<?php
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="Selamat Datang "){
    echo "<div style='background-color: #f2f2f2; padding: 10px; text-align: center;'>";
    echo "<h1 style='color: #333;'>".$salam."</h1>";
    echo "<h3 style='color: #333;'>Perkenalkan, nama saya ".$nama."</h3>";

    // Menampilkan Foto
    echo "<img src='FotoLinkedIn.jpg' alt='Foto Profil' width='200'><br/>";

    echo "<p style='color: #555;'>Saya berusia ". hitungUmur(2001,2023) . " tahun</p>";
    echo "<p style='color: #555;'>Senang berkenalan dengan anda</p>";
    echo "<p style='color: #555;'>Saya senang dapat mengikuti pelatihan VSGA Tahun 2023 Gelombang 5</p>";
    echo "</div>";
} 

perkenalan("Rizki Fauziah Arief");
?>
