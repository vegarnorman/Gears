<?php require "gears/gears.php"; ?>

<!doctype html>

<html lang="<?php echo SITE_LANGUAGE; ?>">

<head>

  <meta charset="utf-8" />

  <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>" />
  <meta name="author" content="<?php echo SITE_AUTHOR; ?>" />

  <title><?php echo SITE_NAME; ?></title>

</head>

<body>

  <div style="width: 860px; margin: 80px auto; font-family: sans-serif; color: #333; line-height: 150%;">

  <?php Gears::Run(); ?>

  </div>

</body>
</html>
