# APP

オブジェクト指向設計勉強用第一弾（ツイッター風サイト）


## ロジック周り

## テーブル回り
### ユーザー
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

### ツイートテーブル
CREATE TABLE `twit`.`tweets`(
    `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
    `user_id` INT(10) NOT NULL COMMENT 'USER_ID',
    `value` VARCHAR(180) CHARACTER
SET
    utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'つぶやき内容',
    `created` DATETIME NOT NULL COMMENT '作成日',
    PRIMARY KEY(`id`)
) ENGINE = InnoDB;

### お気に入りテーブル
CREATE TABLE `twit`.`favorites`(
    `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
    `users_id` MEDIUMINT(10) NOT NULL COMMENT 'ユーザーID',
    `tweet_id` MEDIUMINT(10) NOT NULL COMMENT 'ツイートID',
    PRIMARY KEY(`id`)
) ENGINE = InnoDB;

### フォローテーブル
CREATE TABLE `twit`.`follows`(
    `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
    `users_id` MEDIUMINT(10) NOT NULL COMMENT 'ユーザーID',
    `follow_user_id` MEDIUMINT(10) NOT NULL COMMENT 'フォローユーザーID',
    PRIMARY KEY(`id`)
) ENGINE = InnoDB;