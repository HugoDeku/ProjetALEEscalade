<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site web de l'Ale-Escalade</title>
    <link rel="stylesheet" href="../View/Design/HeaderFooter.css">
    <link rel="stylesheet" href="../View/Design/Planning.css">
  </head>
  <body>
    <?php include "Design/Header.view.php"; ?>

    <div class="agenda"> <!-- Agenda des cours -->
      <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23EF6C00&amp;ctz=Europe%2FParis&amp;src=MmpzMzhoMWFiamNnYTQxYjlvOG1zb2czaHNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%238A2D38&amp;showTz=0&amp;showCalendars=0&amp;showTabs=1&amp;showNav=1&amp;showDate=1&amp;mode=WEEK" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>

    <div class="agenda"> <!-- Agenda des événements organisés par l'ALE -->

    </div>

    <?php include "Design/Footer.view.php"; ?>
  </body>
</html>
