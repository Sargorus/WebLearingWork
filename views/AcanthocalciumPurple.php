Акантокалициум фиолетовый = AcanthocalciumPurple
<?php
    $is_image = $url == '/AcanthocalciumPurple/Images';
    $is_info = $url == '/AcanthocalciumPurple/Info'
?>

<h1>Акантокалициум фиолетовый</h1>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link <?= $is_image ? "active" : '' ?>" href="/AcanthocalciumPurple/Images">
        Картинка
    </a>
  </li>
      <a class="nav-link <?= $is_info ? "active" : '' ?>" href="/AcanthocalciumPurple/Info">
        Информация
    </a>
</ul>

<?php if ($is_image): require __DIR__ . "/../views/AcanthocalciumPurpleImages.php";?>
<?php elseif ($is_info): require __DIR__ . "/../views/AcanthocalciumPurpleInfo.php";?>
<?php endif; ?>