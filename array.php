<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
    $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
    echo count($kids); // Lengkapi di sini

    $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray");
    echo count($adults);
    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: "; // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0] </li>";
    echo "<li> $kids[1] </li>";
    echo "<li> $kids[2] </li>";
    echo "<li> $kids[3] </li>";
    echo "<li> $kids[4] </li>";
    echo "<li> $kids[5] </li>";
    // Lanjutkan

    echo "</ol>";

    
            /*SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi*/
            
            $people1 = [ 'name' => "Will Byers"
                         'age' => "12"
                         'aliases' => "Will The Wise"
                         'status' => "Alive"
            ];
            print_r($people1);


           $people2 = [ 'name' => "Mike Wheeler"
                         'age' => "12"
                         'aliases' => "Dugeon Master"
                         'status' => "Alive"
            ];
            print_r($people2);


            $people3 = [ 'name' => "Jim Hooper"
                         'age' => "43"
                         'aliases' => "Chief Hopper"
                         'status' => "Deceased"
            ];
            print_r($people3);


            $people4 = [ 'name' => "Eleven"
                         'age' => "12"
                         'aliases' => "El"
                         'status' => "Alive"
            ];
            print_r($people4);
    ?>
</body>
</html>
