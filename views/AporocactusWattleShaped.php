Апорокактус плетевидный = AporocactusWattleShaped

<?php
    $is_image = $url == '/AporocactusWattleShaped/Images';
    $is_info = $url == '/AporocactusWattleShaped/Info'
?>

<h1>Апорокактус плетевидный</h1>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link <?= $is_image ? "active" : '' ?>" href="/AporocactusWattleShaped/Images">
        Картинка
    </a>
  </li>
      <a class="nav-link <?= $is_info ? "active" : '' ?>" href="/AporocactusWattleShaped/Info">
        Информация
    </a>
</ul>

<?php if ($is_image): require __DIR__ . "/../views/AporocactusWattleShapedImages.php";?>
<?php elseif ($is_info): require __DIR__ . "/../views/AporocactusWattleShapedInfo.php";?>
<?php endif; ?>

