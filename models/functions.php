<?php
require_once "config/ConnectionUtil.php";

function getNews($limit, $id)
{
    $connection = new ConnectionUtil();
    global $db;
    $connection->connectDB();
    if ($id)
        $where = "WHERE `id` = " . $id;
        $result = $db->query("SELECT * FROM `news`$where ORDER BY `id` DESC LIMIT $limit");
    $connection->closeDB();
    if (!$id)
        return resultToArray($result);
    else
        return $result->fetch_assoc();

}

function resultToArray($result)
{
    $array = array();
    while (($row = $result->fetch_assoc()) != false)
        $array[] = $row;
        return $array;

}
