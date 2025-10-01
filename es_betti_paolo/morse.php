
<?php




$traduci = array(
        'A' => '.-',
        'B' => '-...',
        'C' => '-.-.',
        'D' => '-..',
        'E' => '.',
        'F' => '..-.',
        'G' => '--.',
        'H' => '....',
        'I' => '..',
        'J' => '.---',
        'K' => '-.-',
        'L' => '.-..',
        'M' => '--',
        'N' => '-.',
        'O' => '---',
        'P' => '.--.',
        'Q' =>  '--.-',
        'R' => '.-.',
        'S' => '...',
        'T' => '-',
        'U' => '..-',
        'V' => '...-',
        'W' => '.--',
        'X' => '-..-',
        'Y' => '-.--',
        'Z' => '--..',
        1 => '.----',
        2 => '..---',
        3 => '...--',
        4 => '....-',
        5 => '.....',
        6 => '-....',
        7 => '--...',
        8 => '---..',
        9 => '----.',
        0 => '-----',
);

$traduci_morse = array(
        '.-'    => 'A',
        '-...'  => 'B',
        '-.-.'  => 'C',
        '-..'   => 'D',
        '.'     => 'E',
        '..-.'  => 'F',
        '--.'   => 'G',
        '....'  => 'H',
        '..'    => 'I',
        '.---'  => 'J',
        '-.-'   => 'K',
        '.-..'  => 'L',
        '--'    => 'M',
        '-.'    => 'N',
        '---'   => 'O',
        '.--.'  => 'P',
        '--.-'  => 'Q',
        '.-.'   => 'R',
        '...'   => 'S',
        '-'     => 'T',
        '..-'   => 'U',
        '...-'  => 'V',
        '.--'   => 'W',
        '-..-'  => 'X',
        '-.--'  => 'Y',
        '--..'  => 'Z',
        '.----' => '1',
        '..---' => '2',
        '...--' => '3',
        '....-' => '4',
        '.....' => '5',
        '-....' => '6',
        '--...' => '7',
        '---..' => '8',
        '----.' => '9',
        '-----' => '0',
);


if(isset($_GET['traduci'])){  // Controlla se è stato premuto il bottone "traduci"
    $lettera = strtoupper($_GET['lettera']); // vale anche per le lettere in minuscolo
    if(isset($traduci[$lettera])){
        echo $traduci[$lettera];
    }
    else{
        echo "non valido";
    }
}

if(isset($_GET['traduci_morse'])) {  // Controlla se è stato premuto il bottone "traduci_morse"
    $morse = $_GET['morse1'];
    if (isset($traduci_morse[$morse])) {
        echo $traduci_morse[$morse];
    } else {
        echo "non valido";
    }
}
?>

<html>
<title> CODICE MORSE </title>

<h1>
    utilizzalo per codificare da lettera normale a morse
<form action = "" method = "get">

    LETTERA: <input type="text" name="lettera"><br>
    MORSE: <input type="text" name="morse"><br>

    <input type="submit" name="traduci" value="traduci">
</h1>
</form>
<h2>
    utilizzalo per decodificare da linguaggio morse a lettera <br></br>

<form action = "" method = "get">

    MORSE: <input type = "text" name = "morse1"><br>
    LETTERA: <input type = "text" name = "lettera1"><br>

    <input type="submit" name="traduci_morse" value="traduci_morse">

</h2>
</form>
</html>

