<html>
    <head>
        <title>ZT2B</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="screen.css">
    </head>
    
    <header>
            <ul>
              <li><a href="#html">HTML</a></li>
              <li><a href="#tabulky">tabulky</a></li>
              <li><a href="#php">PHP</a></li>
              <li><a href="#funkce">Funkce</a></li>
            </ul>
    </header>
    <body>
        <a id="html"><h2> texty, fonty</h2></a>
        <p style="text-align: center"><i>Hypertext Transfer protocol</i><br><br>
        <b>-protokol pro přenos stránek mezi web. serverem a prohlížečem</b><br>
        -vystavený nad protokolem TCP <br>
        <span style=color:red>-bezstavový protokol modelu požadavek/odpověď</span> <br>
        -problémy pro web. aplikace</p> <br>
        
        <hr>
        <h2> Odkazy</h2>
        
        <table class="odkazy" cellpadding="20">
        <tr><td><a href="www.google.com/">Google</a></td>
            <td><a href="www.jakpsatweb.cz/">Příručka HTML/CSS v češtině</td></tr>
        <tr><td><a href="seznam.cz">Seznam</a></td>
            <td><a href="www.w3schools.com/">Příručka HTML/CSS v Angličtině</td></tr>
        </table>    
            
        <hr>
        <h2> Obrázek</h2>
        <center><img src="sro.png" width="600" height="400" alt title="PASOSINASSASSIN" ></center>

        <hr>
        
            <a id="tabulky"><h2> Tabulky</h2></a>
        
            <table>
              <tr>
                <th>jméno</th>
                <th>příjmení</th>
                <th>věk</th>
              </tr>
              <tr>
                <td>Peter</td>
                <td>Griffin</td>
                <td>36</td>
              </tr>
              <tr>
                <td>Lois</td>
                <td>Griffin</td>
                <td>32</td>
              </tr>
              <tr>
                <td>Joe</td>
                <td>Swanson</td>
                <td>50</td>
              </tr>
              <tr>
                <td>Cleveland</td>
                <td>Brown</td>
                <td>40</td>
              </tr>
            </table>
        
         
          <hr>
        <h2> Checkboxy + select </h2>
          <h3>Jaké sociální sítě používáte?</h3>
          <input name="facebook" type="checkbox">Facebook
          <input name="instagram" type="checkbox">Instagram
          <input name="twitter" type="checkbox">Twitter
          <input name="vk" type="checkbox" checked>VKčko jako Rosťa<br>
          <input name="Jiné" type="text">
         <input name="odeslat" type="submit"> Jiné
        
        <h3>Co jste za pohlaví?</h3>
            <select name "pohlaví"> 
            <option value="1"> muž</option>
            <option value="2"> žena</option>
            <option value="3"> Vít</option>
        </select>
        <input name="odeslat" type="submit">
          <br><br>
        
          <hr>
        <a id="php"></a>
    <?php
        echo "<h1>Začátek PHP</h1><br>";
        echo"tak si dáme \t \"příklad\" \t s PHP<br>";
        
        $jablka = 10;
        $jablka2= 10-8;
        $hrušky = 4;
        $celkem = $jablka2 + $hrušky;
        
        echo "Pepíček ztratil " . $jablka . " jablek a snědl všechny " . $hrušky . " hrušky<br> ";
        echo "pokud Pepíček našel " . $hrušky . " hrušky a " . $jablka2 . " jablka, kolik má celkem ovoce?<br>";
        echo "pepíček má celkem " . $celkem . " kusů ovoce<br>";
        
        echo"<hr>";
        
        echo "<h2>počty</h2><br>";
        
        $a = 5;
        $b = 10;
        var_dump($a+$b);
        var_dump($a-$b);
        var_dump($a/$b);
        var_dump($a*$b);
        var_dump($a++);
        var_dump($a--);
        var_dump($a+=$b);
        var_dump($a-=$b);
        var_dump($a/=$b);
        var_dump($a==$b);
        var_dump($a!=$b);
        var_dump($a>$b);
        var_dump($a<$b);
        
        echo"<hr>";
        
        echo "<h2>funkce for, od 0 do 20</h2><br>";
        for($i=0; $i <=20; $i++){
            echo $i."<br>";
        }
        
        echo"<hr>";
        ?>
         <a id="funkce"></a>
        <?php
        echo "<h2>řetězové funkce</h2><br>";
        $text=" bolí mě to když čůrám<br>";
        
        echo ucwords($text);
        echo ucfirst($text);
        echo strtoupper($text);
        
        echo"<hr>";
        
        echo "<h2> Matematické funkce</h2><br>";
        $ex= 13;
        $ey= 15;
        $ez= 63;
        
        echo max($ex, $ey, $ez);  
        echo "<br>";
        echo min($ex, $ey, $ez);
        
        echo "<br>";
        $cislo= 8.43;
        echo round($cislo);
        
        echo"<hr>";
        
        echo "<h2>Cvičení</h2>";
        echo "McGregor začal s profesionálním MMA v roce 2008, poté co opustil své dosavadní zaměstnání jako instalatér. V roce 2009 se zúčastnil turnaje UFC 93 a byl tak inspirován zkušeností, že začal žít svůj sen, že jednoho dne si udělá kariéru v Ultimate Fighting Championship. McGregor trénuje pod vedením Johna Kavanagha, který je prvním Irem, co získal hnědý pás v brazilském jiu jitsu v jeho týmu SBG Ireland. Conor byl vždy zapálený do bojování a bojové sporty mu nebyly cizí, když už trénoval box. Se základním boxem také cvičil taekwondo, karate, capoeiru a kickbox před soutěžemi v profesionálním MMA. Po zápase s Dustinem Poirierem byl Kavanaghem povýšen na hnědý pás. V týmu SBG trénuje po boku bojovníků z UFC jako jsou Cathal Pendred nebo Gunnar Nelson. Zmrde"; 
        
       echo "<br>"; 
        
        $string = "McGregor začal s profesionálním MMA v roce 2008, poté co opustil své dosavadní zaměstnání jako instalatér. V roce 2009 se zúčastnil turnaje UFC 93 a byl tak inspirován zkušeností, že začal žít svůj sen, že jednoho dne si udělá kariéru v Ultimate Fighting Championship. McGregor trénuje pod vedením Johna Kavanagha, který je prvním Irem, co získal hnědý pás v brazilském jiu jitsu v jeho týmu SBG Ireland. Conor byl vždy zapálený do bojování a bojové sporty mu nebyly cizí, když už trénoval box. Se základním boxem také cvičil taekwondo, karate, capoeiru a kickbox před soutěžemi v profesionálním MMA. Po zápase s Dustinem Poirierem byl Kavanaghem povýšen na hnědý pás. V týmu SBG trénuje po boku bojovníků z UFC jako jsou Cathal Pendred nebo Gunnar Nelson. Zmrde"; 
        
        $param2 = "Zmrde";

        echo "<br>";
        echo "<br>";
        
            echo "Je tento text bez vulgárních či sprostých slov připraven na vložení do foŕa?";
        
            var_dump(isvalid($string, $param2));
        
        function isvalid($string, $param2){
            if (strpos($string, $param2) !== false) {
                return "false";
                }
            else{
                return "True";
            }
        }
        echo "<br>";
        echo"<hr>";
        echo "<br>";
        echo "<br>";
    ?>
        
        </select>
    </body>
    
</html>