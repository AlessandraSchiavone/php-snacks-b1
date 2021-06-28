<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. 
Olimpia Milano - Cantù | 55-60
-->
<?php 

$matches = [
    [
        [
            "squadra" => "De'Longhi Treviso",
            "punti" => 84,
        ],
        [
            "squadra_host" => "Dolomiti Energia Trentino",
            "punti" => 80,
        ]
    ],
    [
        [
            "squadra" => "Openjobmetis Varese",
            "punti" => 94,
        ],
        [
            "squadra_host" => "Germani Brescia",
            "punti" => 89,
        ]
    ],
    [
        [
            "squadra" => "UNAHOTELS Reggio Emilia",
            "punti" => 71,
        ],
        [
            "squadra_host" => "A|X Armani Exchange Milano",
            "punti" => 87,
        ]
    ],
    [
        [
            "squadra" => "Allianz Pallacanestro Trieste",
            "punti" => 102,
        ],
        [
            "squadra_host" => "Vanoli Basket Cremona",
            "punti" => 77,
        ]
    ],
    [
        [
            "squadra" => "Carpegna Prosciutto Pesaro",
            "punti" => 85,
        ],
        [
            "squadra_host" => "Banco di Sardegna Sassari",
            "punti" => 95,
        ]
    ],

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<style>
*{
    box-sizing:border-box;
    margin:0;
    padding:0;
}
body{
    width:70%;
    margin:20px auto;
}
#matches {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
#title{
    width: 100%;
    border: 1px solid #ddd;
    padding-top: 20px;
    padding-bottom: 20px;
    background-color: #2B294F;
    color: white;
    font-size:20px;
    font-weight:700;
    letter-spacing:2px;
    text-align:center;
    border-collapse: collapse;
    
}

#matches td, #matches th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align:left;
}
#matches tr:nth-child(even){
    background-color: #f2f2f2;
}
#matches tr:hover {
    background-color: #ddd;
}
#matches th {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: #FF9A24;
  color: white;
}
</style>
<body>
    <div id="title">
        1* Giornata - Andata
    </div>
    <table id="matches">
        <tr>
            <th>Casa</th>
            <th>Ospite</th>
            <th>Risultato</th>
        </tr>
        <?php 
        for($i=0; $i < count($matches); $i++ ){
            echo"<tr>";
            echo "<td>".$matches[$i][0]["squadra"]."</td>";
            echo "<td>".$matches[$i][1]["squadra_host"]."</td>";
            echo "<td>".$matches[$i][0]["punti"]." - ". $matches[$i][1]["punti"]."</td>"; 
            echo"</tr>";
         }
        ?>
    </table>
</body>
</html>