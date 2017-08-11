<?php require __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Your friends are challenging you!</title>
    <meta property="og:title" content="Your friends are challenging you!" />
    <meta property="og:description" content="Stop getting amazed at huge wins. Come and Play Amazon Slots!" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://apps.facebook.com/<?= $appNamespace ?>/share.php" />
    <meta property="og:image" content="<?= $serverUrl ?>/sharing/share.png" />
    <meta property="fb:app_id" content="<?= $appId ?>" />
  </head>
  <body>
    <script>
      window.location = '<?= $serverUrl ?>';
    </script>
    <h1>Your friends are challenging you!</h1>
    <p>Stop getting amazed at huge wins. Come and Play Amazon Slots!</p>
    <img src="<?= $serverUrl ?>/sharing/share.png" />
  </body>
</html>
