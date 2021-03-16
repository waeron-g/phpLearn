<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST</title>
</head>
<body>
 <form action="./theory_script.php" method="GET">
 <h1>GET FORM</h1>
 <label for="">NAME<input name="name" type="text"></label><br>
 <label for="">SURNAME<input name="surname" type="text"></label><br>
 <button name="action" value="add">SEND</button>
 </form>
 <a href="./theory_script.php?name=Авас&surname=Авасов">Меня зовут АВАС</a>
 <form action="./theory_script.php" method="POST">
 <h1>POST FORM</h1>
 <label for="">NAME1<input name="name[]" type="text"></label><br>
 <label for="">SURNAME1<input name="surname[]" type="text"></label><br>
 <label for="">NAME2<input name="name[]" type="text"></label><br>
 <label for="">SURNAME2<input name="surname[]" type="text"></label><br>
 <label for="">CHECKBOX<input name="check" type="checkbox"></label><br>
 <select name="multiple[]" multiple="multiple" style="width:300px">
        <option value="O1" data-badge="">Option1</option>
        <option value="O2" data-badge="">Option2</option>
        <option value="O3" data-badge="">Option3</option>
        <option value="O4" data-badge="">Option4</option>
        <option value="O5" data-badge="">Option5</option>
        <option value="O6" data-badge="">Option6</option>
        <option value="O7" data-badge="">Option7</option>
      </select><br>
 <button name="action" value="add">SEND</button>
 </form>   
</body>
</html>