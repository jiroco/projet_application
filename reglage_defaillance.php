<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

    <form>
        <table>
            <tr>
                <td>Mode de défaillance 1:</td>
                <td><input type="text" name="defaillance_1" id="defaillance" value="Perte de la fonction" onkeyup="check(defaillance_1)"/></td>
               
                <script type="text/javascript">
                    function check(string defaillance_1){
                        if (this.value !=""){
                            document.getElementById("checkbox1").innerhtml="<input type="checkbox" name="boxdefaillance_1" id="boxdefaillance_1" required="defaillance_1" />"
                        }
                    }

                </script>

                <td id="checkbox1"><input type="checkbox" name="boxdefaillance_1" id="boxdefaillance_1" required="defaillance_1" /></td>
              
            </tr>
            <tr>
                <td>Mode de défaillance 2:</td>
                <td> <input type="text" name="defaillance_2" value="Fonction exécutée de façon intempestive"/> </td>
                <td><input type="checkbox" name="boxdefaillance_2" id="boxdefaillance_2"  /></td>
            </tr>
            <tr>
                <td>Mode de défaillance 3:</td>
                <td> <input type="text" name="defaillance_3" /> </td>
                <td><input type="checkbox" name="boxdefaillance_3" id="boxdefaillance_3"  /></td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Valider" /></td>
            </tr>

        </table>
    </form>




</body>
</html>

