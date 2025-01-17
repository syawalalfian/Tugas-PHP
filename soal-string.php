<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        /* 
            SOAL NO 1
            Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! 
            Tunjukkan juga jumlah kata di dalam kalimat tersebut! 

            Contoh: 
            $string = "PHP is never old";
            Output:
            Panjang string: 16, 
            Jumlah kata: 4 
        */
        
        echo "<h3> Soal Contoh</h3>";
        // --------------------------------------- //
        // ini contoh
        $string = "PHP is never old";
        echo $string;
        echo "<br>";
        echo "Panjang string: ". strlen($string);
        echo "<br>";
        echo "Jumlah kata: " . str_word_count($string); 
        // --------------------------------------- //

        
        echo "<h3> Soal No 1</h3>";
        echo "<h5>Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! </h5>";
        echo "<h5>Tunjukkan juga jumlah kata di dalam kalimat tersebut!</h5>";
        $first_sentence = "Hello PHP!" ; 
        // Panjang string 10, jumlah kata: 2
        //Untuk Menampilkan Kata "Hello PHP"
        echo "String : " . $first_sentence;
        echo "<br>";
        //Untuk Menampilkan Panjang String
        echo "Panjang string: ". strlen($first_sentence);
        echo "<br>";
        //Untuk Menampilkan Jumlah Kata String
        echo "Jumlah kata: " . str_word_count($first_sentence);
        $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5
        
        echo "<h3> Soal No 2</h3>";
        echo "<h5> Mengambil kata pada string dan karakter-karakter yang ada di dalamnya.</h5>";

        /* 
            SOAL NO 2
            Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
            
            
        */
        $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        // Lanjutkan di bawah ini
        echo "Kata kedua: " . substr($string2, 2, 4) . "<br>" ;
        echo "Kata Ketiga: " . substr($string2, 7, 3) ;
        echo "<h3> Soal No 3 </h3>";
        echo "<h5> Mengubah karakter atau kata yang ada di dalam sebuah string. </h5>";
        /*
            SOAL NO 3
            Mengubah karakter atau kata yang ada di dalam sebuah string.
        */
        $string3 = "PHP is old but Good!";
        echo "String: \"$string3\" " . "<br>" ; 
        echo str_replace("Good", "Awesome", $string3);
        // OUTPUT : "PHP is old but awesome"

    ?>
</body>
</html>
