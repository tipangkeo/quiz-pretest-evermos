<?php

class QuizPretestEvermos
{

    // inisial properti i dgn nilai 1 bertipe integer dgn visibility public
    public int $i = 1;


    // fungsi mengurutkan angka genap keatas sebanyak n
    // dgn tipe argument yg dikirim bertipe integer
    public function hitungMaju(int $n)
    {
        // mencetak string Hitung Maju dgn memberikan indentasi ENTER menggunakan sintaks PHP_EOL
        echo "Hitung Maju :" . PHP_EOL;

        // jika nilai $i lebih kecil sama dengan nilai n (true) maka lakukan kondisi perulangan
        // jika kondisi perulangan sebanyak sama dgn n maka hentikan
        while ($this->i <= $n) {
            // lakukan pengecekan apabila hasil bagi 2 dari n perulangan adalah 0 
            if ($this->i % 2 == 0) {
                // cetak nilai modulo 2 dari $i (bilangan genap)
                echo $this->i . PHP_EOL;
            }

            // lakukanlah perulangan secara increment karna perhitungan dilakukan keatas
            $this->i++;
        }
    }

    // fungsi mengurutkan angka genap kebawah sebanyak n
    public function hitungMundur(int $n)
    {
        // definisi nilai i sebanyak n karna perulangan dilakukan dari atas (nilai terbesar) ke bawah (nilai terkecil)
        $this->i = $n;

        // mencetak string Hitung Mundur
        echo "Hitung Mundur :" . PHP_EOL;

        // jika nilai $i lebih besar sama dengan nilai n (true) lakukan kondisi perulangan
        // apabali kondisi perulangan sampai sama dengan perulangan terakhir yaitu 1 maka hentikan
        while ($this->i >= 1) {
            // lakukan pengecekan apakah $i adalah bilangan genap dgn melakukan operasi modulo 2
            if ($this->i % 2 == 0) {
                // cetak nilai modul 2 dari $i (bilangan genap)
                echo $this->i . PHP_EOL;
            }

            // lakukanlah perulangan decrement karna perhitungan dilakukan dari nilai terbesar ke terkecil
            $this->i--;
        }
    }
}

$quiz_pretest_evermos = new QuizPretestEvermos;
$quiz_pretest_evermos->hitungMaju(20);
$quiz_pretest_evermos->hitungMundur(20);
