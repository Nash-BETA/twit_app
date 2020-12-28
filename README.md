# APP

オブジェクト指向設計勉強用第一弾（ツイッター風サイト）


## ロジック周り

## テーブル回り

CREATE TABLE `twit`.`users`(
    `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
    `account_name` CHAR(10) CHARACTER
SET
    utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '表示ID',
    `password` VARCHAR(150) CHARACTER
SET
    utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'パスワード',
    `name` VARCHAR(200) CHARACTER
SET
    utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '名前',
    `created` DATETIME NOT NULL COMMENT '作成日',
    `deleted` TINYINT(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ',
    `deleted_date` DATETIME NULL DEFAULT NULL COMMENT '削除日',
    PRIMARY KEY(`id`)
) ENGINE = InnoDB;

CREATE TABLE `twit`.`tweets`(
    `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
    `user_id` INT(10) NOT NULL COMMENT 'USER_ID',
    `value` VARCHAR(180) CHARACTER
SET
    utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'つぶやき内容',
    `created` DATETIME NOT NULL COMMENT '作成日',
    PRIMARY KEY(`id`)
) ENGINE = InnoDB;
