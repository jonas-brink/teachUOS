<?php

class AddTables extends Migration
{
    public function description()
    {
        return 'add tables for plugin Ko.OP';
    }

    public function up()
    {
        $db = DBManager::get();
        $db->exec("CREATE TABLE IF NOT EXISTS `koop_favourites` (
            `user_id` VARCHAR(32) NOT NULL,
            `course_id` VARCHAR(32) NOT NULL,
            `block_id` INT(11) NOT NULL,
            `parent_id` INT(11) DEFAULT NULL,
            `title` VARCHAR(255) DEFAULT NULL,
            PRIMARY KEY (`user_id`, `course_id`, `block_id`) 
            )
        ");
    }

    public function down()
    {
        $db = DBManager::get();
        $db->exec("DROP TABLE IF EXISTS `koop_favourites`");
    }
}