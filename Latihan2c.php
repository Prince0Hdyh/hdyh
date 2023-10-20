<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan 2 C </title>
   
</head>

<body>

    <div class="luarnya">

        <?php
        for ($hid = 1; $hid <= 5; $hid++) {
             
            $nih = ($hid % 2 == 0) ? 'genap' : 'ganjil';
        
            for ($H = 1; $H <= $hid; $H++) {
                echo "<div class='nihnya $nih'>" . $H. "</div>";
            }
            echo "<br>";
        }
        ?>

    </div>


    
</body>
<style>
      .ganjil {
          background-color: #003;
          color: #fff;
 
        }

        .genap {
            background-color: #999;
         
        }
       
        .luarnya {
            border: 5px solid palevioletred;
            padding: 10px;
            margin: 10px;
            width: 28%;
        }

        .nihnya {
            border: 3px solid black;
            padding: 10px;
            width: 24px;
            height: 24px;
            font-size: 20px;
            text-align: center;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 10px;
        }
    </style>

</html>