<?php 

function StockPicker($arr) {

  // code goes here
  $n = count($arr); // Menghitung jumlah elemen dalam array $arr
    if ($n < 2) {
        return -1; // Jika jumlah elemen kurang dari 2 maka, tidak ada cukup data untuk mencari profit, maka kembalikan ke -1
 }
  $max_profit = 0; // Variabel untuk menyimpan maksimum profit yang ditemukan
  $min_price = $arr[0]; // Variabel untuk menyimpan harga saham terendah yang ditemukan, inisialisasi dengan harga saham pertama
  
    // Loop untuk mencari harga saham terendah dan potensi profit yang lebih besar
    for ($i = 1; $i < $n; $i++) {
        $min_price = min($min_price, $arr[$i]); // Memperbarui $min_price jika harga saham saat ini lebih rendah
        $max_profit = max($max_profit, $arr[$i] - $min_price); // Memperbarui $max_profit jika potensi profit yang ditemukan lebih besar
    }
    // Jika ada potensi profit (maksimum profit lebih besar dari 0), kembalikan nilai maksimum profit, jika tidak, kembalikan -1
    return $max_profit > 0 ? $max_profit : -1;
} 
// keep this function call here  
echo StockPicker(fgets(fopen('php://stdin', 'r')));  

?>