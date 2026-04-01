Акантокалициум фиолетовый = AcanthocalciumPurple
<?php
    $is_image = $url == '/AcanthocalciumPurple/Images';
    $is_info = $url == '/AcanthocalciumPurple/Info'
?>

<h1>Акантокалициум фиолетовый</h1>
<a href="/AcanthocalciumPurple/Images">Картинки</a>
<a href="/AcanthocalciumPurple/Info">Информация</a>


<?php if ($is_image): require __DIR__ . "/../views/AcanthocalciumPurpleImages.php";?>
<?php elseif ($is_info): require __DIR__ . "/../views/AcanthocalciumPurpleInfo.php";?>
<?php endif; ?>