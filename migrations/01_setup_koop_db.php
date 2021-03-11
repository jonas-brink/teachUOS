<?php

class SetupKoopDb extends Migration
{
    function description(){
        return '';
    }

    function up(){
        $db = DBManager::get();

        $sql = "CREATE TABLE IF NOT EXISTS `koop_pages` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `type` varchar(64) NOT NULL,
            `parent_id` int(11) DEFAULT NULL,
            `seminar_id` varchar(32) DEFAULT NULL,
            `selected` int(11) DEFAULT NULL,
            `title` varchar(255) DEFAULT NULL,
            `content` text NOT NULL,
            `chdate` int(11) DEFAULT NULL,
            `mkdate` int(11) DEFAULT NULL,
            PRIMARY KEY (`id`)
            )";

        $db->exec($sql);
    }

    function down(){
        $db = DBManager::get();

        $sql = "DROP TABLE koop_pages";

        $db->exec($sql);
    }
}