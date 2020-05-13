<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>registrieren.php</title>
</head>

<body>
    <h1>Folgenden Daten wurden ermittelt</h1>
    <table border="1">
        <tr>
            <th width="125">Privat oder Firma</th>
            <th width="125">Name</th>
            <th width="125">Vorname</th>
            <th width="125">E-Mail</th>
            <th width="125">Telefon</th>
        </tr>
        <?php
        $Kundeninfo = array(
            $_POST["wahl"], $_POST["Nachname"],
            $_POST["Vorname"], $_POST["email"],
            $_POST["Telefon"]
        );
        $Kundeninfos = array(
            $Kundeninfo,
            $Kundeninfo,
            $Kundeninfo,
            $Kundeninfo,
            $Kundeninfo,
            $Kundeninfo
        );
        echo "<p> Privat oder Firma: " . $_POST["wahl"]  . "<br>";
        echo "<p> Vorname: " . $_POST["Vorname"] . "<br>";
        echo "<p> Nachname: " . $_POST["Nachname"] . "<br>";
        echo "<p> Email: " . $_POST["Email"] . "<br>";
        echo "<p> Telefon: " . $_POST["Telefon"] . "<br>";
        $_Vorname = isset($_POST["Vorname"]) ? $_POST['Vorname'] : " ";
        if (empty(trim($_Vorname))) {
            die("dieses Feld kann nicht leer sein");
        }
        $_telefon = isset($_POST["Telefon"]) ? $_POST['Telefon'] : " ";
        if (empty(trim($_telefon))) {
            die("dieses Feld kann nicht leer sein");
        }
        foreach ($Kundeninfos as $KInfo ) {
            echo "<tr>";
            foreach ($KInfo as $_POST => $ausgabe) {
                list($Name, $_Vorname, $email, $_telefon) = $ausgabe;
                echo "<td>$ausgabe</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>

</html>