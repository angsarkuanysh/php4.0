<?php

  include "inc\lib.inc.php";
?>

    <!-- Область основного контента -->
    <form action='' method="POST">
      <label>Количество колонок: </label>
      <br />
      <input name='A' type='text' value="" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='B' type='text' value="" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='C' type='color' value="" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
<?php

    drawTable ($_POST['A'], $_POST['B'], $_POST['C']);
?>
    <!-- Таблица -->
    <!-- Область основного контента -->

