 <!DOCTYPE html>

<html lang="cs">
      <head>
          <title>
              
             Ladislav Kraus ZT2A 
              
          </title>
          <meta charset="utf-8">
    </head>
    
    <body>
        <form action="index.php"> 
        <input name ="username" type ="text" value="ahoj">
        <input name ="password" type ="password" value="ahoj"><br>
                <hr>                
        
        <br>
        
        <input type ="radio" name="studuje" value = "1" > studuje<br>
        <input type ="radio" name="studuje" value = "0" checked>nestuduje<br><br>
        <hr> 
        <input type ="radio" name="pohlaví" value = "0" >muž<br>
        <input type ="radio" name="pohlaví" value = "1" >žena<br>
        <input type ="radio" name="pohlaví" value = "2" checked >buzerant<br>
        <input type ="radio" name="pohlaví" value = "3" >transvestita<br>
        <input type ="radio" name="pohlaví" value = "4" >neznámé<br>
        <input type ="radio" name="pohlaví" value = "5" >neurčité<br>
        <br><br>
        <input type ="checkbox"name="sites"value="facebook">FB
        <input type ="checkbox"name="sites"value="instagram">Ig
        <input type ="checkbox"name="sites"value="skype">Skype
        <br><br>        <br> <hr>

        <select name="vaha"> 
            <option value="0"selected>
            <option value="1">1-5</option>
            <option value="2">5-20</option>
            <option value="3">20-50</option>
            <option value="4">50-75</option>
                <option value="5">75-100</option>
                 <option value="6">100-125</option>
                  <option value="7">125-150</option>
                   <option value="8">150-175</option>
                    <option value="9">175-200</option>
                  
            
            
        </select>
        vaha
        
        <br><br>
        <hr>

        
        <input type ="file" name="foto">
        </form>


<br>


<?PHP>
 <?PHP echo date ('H:i:s');?>

<br><br><br>

<?PHP echo "Ahoj"?>

<br><br>
<?PHP $jmeno="Ladislav Kraus"; echo $jmeno; ?>

<br>
<?PHP

$a = 9;
echo"<br>";
$b = 4;

echo "<br>";

echo $a+$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a-$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a*$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a/$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a+=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a-=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a*=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a/=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a==$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a!=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a>$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a<$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a||$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a&b;

echo "<br>";

$produkt["nakupni seznam"] =array( 

array("nazev" => "ananas",
                  "typ" => "šťavnatý",
                  "váha" => "3kg",
                  "množství" => "12"),

 
 array("nazev" => "Paprika",
                  "typ" => "ohnivá",
                  "váha" => "200kg",
                  "množství" => "2"),
 
 
array("nazev" => "brambory",
                  "typ" => "neloupaná",
                  "váha" => "2340kg",
                  "množství" => "10"),
 
 
array("nazev" => "pomeranče",
                  "typ" => "loupané",
                  "váha" => "350kg",
                  "množství" => "13"),

 
array("nazev" => "mléko",
                  "typ" => "plnotučné",
                  "váha" => "1200l",
                  "množství" => "3")
    );
    $produkt["svačina"] =array( 
 
 
 array("nazev" => "máslo",
                  "typ" => "ředěné",
                  "váha" => "50kg",
                  "množství" => "200"),
 
 
array("nazev" => "knedlík",
                  "typ" => "bramborový",
                  "váha" => "800g",
                  "množství" => "273"),
 
 
array("nazev" => "knedlík",
                  "typ" => "houskový",
                  "váha" => "1200g",
                  "množství" => "730"),

 
array("nazev" => "hranoky",
                  "typ" => "točené",
                  "váha" => "20g",
                  "množství" => "1400"),
 
 
 array("nazev" => "rohlík",
                  "typ" => "špinavý",
                  "váha" => "28g",
                  "množství" => "130000"),

 
 array("nazev" => "banán",
                  "typ" => "zralí",
                  "váha" => "900g",
                  "množství" => "19"),

 
 array("nazev" => "kiwi",
                  "typ" => "chlupaté",
                  "váha" => "10g",
                  "množství" => "10"),

 
array("nazev" => "Papája",
                  "typ" => "semená",
                  "váha" => "4500g",
                  "množství" => "3"),

 
 array("nazev" => "Khaki",
                  "typ" => "neloupané",
                  "váha" => "350g",
                  "množství" => "1"),

 
array("nazev" => "salám",
                  "typ" => "masový",
                  "váha" => "1kg",
                  "množství" => "23"),

 array("nazev" => "máslo",
                  "typ" => "hranaté",
                  "váha" => "50g",
                  "množství" => "10"),
 
 
 array("nazev" => "houby",
                  "typ" => "sušené",
                  "váha" => "800g",
                  "množství" => "29"),

 
 array("nazev" => "hruška",
                  "typ" => "otrávená",
                  "váha" => "3564kg",
                  "množství" => "2"),
 
 
array("nazev" => "pizza",
                  "typ" => "salámová",
                  "váha" => "1,5kg",
                  "množství" => "9"),
 
 
 array("nazev" => "houska",
                  "typ" => "křupavá",
                  "váha" => "18g",
                  "množství" => "8450"));
var_dump($produkt);
echo "</table>";

$a = array(1,2,5,6,7,8);
echo"<br>";
$a = abs($a[3]);
echo "<br>". $a;



$a = array(1,2,5);
echo"<br>";
$a = max($a);
echo "<br>". $a;




$a = array(1,2,5);
echo"<br>";
$a = min ($a);
echo "<br>". $a;

echo"<br>";
echo"<br>";
$a = rand();




echo"<br>";
$val = 10.988786;
$a = round($val);
echo "<br>". $a;


echo "<br>";
echo "<br>";
$jmena = "Audi, Honda, Ferrari, Citroen";
var_dump($jmena);
$jmena = str_replace("",",", $jmena);
var_dump($jmena);
$jmena = str_replace(",,",",", $jmena);
var_dump($jmena);
$jmena = str_replace("-",",", $jmena);
var_dump($jmena);
$jmena = str_replace(";",",", $jmena);
$jmena = str_replace(",",",", $jmena);
var_dump($jmena);
$jmena = strtolower($jmena);
var_dump($jmena);
$jmena = ucwords($jmena);
var_dump($jmena);
$jmena = explode("",$jmena);
 var_dump($jmena);
echo"<table border=1.5>";
$pocet = 2;
foreach ($jmena as $jmena) {
    echo "<tr>";
    echo "<td>" . $jmena . "</td>";
    echo "</tr>";
    $pocet++;
    };

    
    
    
    
    
?>
<?PHP
$text = "Cervena kurva je pohadka o setkani mlade devky s vlkem. Tento pribeh se behem sve histori velmi menil
        a stal se predlohou pro zasrane mnozstvi modernich adaptaci. Nejstarsi psana verze pochazi z pera
        Charlese Perraulta, dnes asi nejrozrenejsi verze je zalozena na zpracovani bratri Grimmu.
        Slovo karkulka pochazi z latinskeho suku carracalla a znamena cepecek, capku ci pokryvku hlavy.
        Pravidla ceskeho pravopisu toleruji podobu Cervena karkulka i Cervena Karkulka."
        
$NEvulgrity = array ("kurva", "devky", "zasrane", "suku");

var_dump (isValid($text, $NEvulgarity));

function isValid($test, $NEvulgarity) {
    foreach ($NEvulgarity as $word) {
        if (strpos($text, $word))!== FALSE) {
            return TRUE;
        }
    }
}
 
?>



    </body>
</html>