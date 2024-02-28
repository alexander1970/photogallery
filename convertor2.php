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
    $aIns = [19, 20, 24, 27, 32, 45, 80];
    $cnt = count($aIns);
    for ($i = 0; $i < $cnt; $i++) {
      $ins = $aIns[$i];
      $cents = $ins * 2.54;
      $ins_ending = case_ending($ins);
      $cents_ending = case_ending($cents);
      echo "<p>{$ins} дюйм{$ins_ending} = {$cents} сантиметр{$cents_ending}.<p>";
  ?>
  <?php } ?>
</body>
</html>
