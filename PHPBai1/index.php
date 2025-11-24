<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1 PHP</title>
</head>
<body>
    <?php
        //1.Cu phap in ra man hinh
        echo "Hello world! <br>";

        echo "PHP <br>";

        //2.Bien trong PHP
        //Cu phap: $ + ten bien = gia tri
        $ten = "Mai Son";
        $tuoi=20;

        echo "Xin chao ". $ten." ". $tuoi ." tuoi!" ;

        //3. Hang trong PHP
        define ("soPi","3,14");
        echo soPi."<br>";

        //4. Phan Biet '' va ""
        // '': string
        // "": bien
        echo '$ten <br>';
        echo "$ten <br>";

        //5. Su ly chuoi
        #5.1 Kiem tra do dai chuoi
        echo strlen($ten)."<br>";
        #5.2 dem tu trong string
        echo str_word_count($ten)."<br>";
        #5.3 tim kiem tu tu trong chuoi
        echo strpos($ten , "S" ) . "<br>";
        #5.4 thay the chuoi
        echo str_replace("Son", "Xol",$ten)."<br>";

        //6. su ly so number
        $so1=10;
        $so2=5;
        // toan tu nhu the
        echo $so1 + $so2 . "<br>";
        //toan tu gan
        echo $so1 %= $so2;
        echo "<br>";
        //7. cau dieu kien
        // $tong=$so1+$so2;
        if (($so1+$so2)<15) {
            echo "Tong ".$so1." va ".$so2." nho hon 15";
        }
        elseif(($so1+$so2)==15) {
            echo "Tong ".$so1." va ".$so2." bang hon 15";
        }
        else {
            echo "Tong ".$so1." va ".$so2." lon hon 15";
        }
        echo "<br>";

        //swich case
        $color="red";
        switch ($color) {
            case 'red':
                echo "is red";
                break;
            case 'blue':
                echo "is blue";
                break;
            default:
                echo "is no color";
                break;
        }
        echo "<br>";
        //for
        for ($i=0; $i < 50; $i++) { 
            echo $i.", ";
        }
    ?>
</body>
</html>