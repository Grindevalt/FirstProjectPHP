<html>
<head>
    <?php
    require_once "models/functions.php";
    $title = "Стажорская херня";
    require_once "blocks/head.php";
    $news = getNews(3, $_GET["id"]);
    ?>
</head>
<body>
<?php require_once "blocks/header.php" ?>
<div id="wrapper">
    <div id="leftCol">
        <?php for ($i = 0; $i < count($news); $i++) { ?>
            <?php  if ($i == 0) { ?>
                <div id="bigArticle">
            <?php } else { ?>
                <div class="article">
           <?php } ?>
            <img src="/img/<?php echo $news[$i]["id"] ?>.png"
                 alt="State <?php echo $news[$i]["id"] ?>"
                 title="State <?php echo $news[$i]["id"] ?>" />
            <h2><?php echo $news[$i]["title"] ?></h2>
            <p><?php echo $news[$i]["intro_text"] ?></p>
            <a href="/article.php?id=<?php echo $news[$i]["id"] ?>">
                <div class="more">More</div>
            </a>
               </div>
            <?php if ($i == 0) { ?>
                <div class="clear"><br></div>
            <?php } ?>
       <?php } ?>
    </div>
    <?php require_once "blocks/rightCol.php" ?>
</div>
<?php require_once "blocks/footer.php" ?>


</body>


</html>