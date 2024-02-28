<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Конвертор</title>
</head>
<body>
  <h1>Преобразование из дюймов в сантиметры</h1>
  <?php
    require_once 'modules\library.php';
    $ins = 20;
    $cents = $ins * 2.54;
    $cents = round($cents);
    $ins_ending = case_ending($ins);
    $cents_ending = case_ending($cents);
    echo "<p>{$ins} дюйм{$ins_ending} = {$cents} сантиметр{$cents_ending}.<p>";
  ?>
</body>
</html>
