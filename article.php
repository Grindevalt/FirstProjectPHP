<html>
<head>
    <?php
    require_once "models/functions.php";
    $news = getNews(1, $_GET["id"]);
    $title = $news["title"];
    require_once "blocks/head.php";
    ?>
</head>
<body>
<?php require_once "blocks/header.php" ?>
<div id="wrapper">
    <div id="leftCol">
        <?php
        echo '<div id=""bigArticle"><img src="/img/' . $news["id"]
            . '.png" alt="State ' . $news["id"] . '" title="State ' . $news["id"] . '">
            <h2>' . $news["title"] . '</h2>
            <p>' . $news["full_text"] . '</p>
               </div>';
        ?>
    </div>
    <?php require_once "blocks/rightCol.php" ?>
</div>
<?php require_once "blocks/footer.php" ?>


</body>


</html>