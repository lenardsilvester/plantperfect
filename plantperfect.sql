CREATE TABLE `users`(
    `user_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_name` VARCHAR(255) NOT NULL,
    `user_email` VARCHAR(255) NOT NULL,
    `user_uid` VARCHAR(255) NOT NULL,
    `user_pwd` VARCHAR(255) NOT NULL
);

CREATE TABLE `plants`(
    `plant_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `plant_name` VARCHAR(255) NOT NULL,
    `plant_bio` VARCHAR(255) NOT NULL,
    `plant_price` VARCHAR(255) NOT NULL
);

CREATE TABLE `cart`(
    `cart_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT UNSIGNED NOT NULL,
    `plant_name` VARCHAR(255) NOT NULL,
    `plant_price` VARCHAR(255) NOT NULL
);

INSERT INTO `plants` (`plant_id`, `plant_name`, `plant_bio`, `plant_price`) VALUES
(1, 'Zamioculcas.', '- Doesn\'t need much water. <br />\r\n- Needs alot of light. <br />\r\n- Lighty purifies the air.', '19,95'),
(2, 'Dracaena Marginata.', '- Doesn\'t need much water. <br />\r\n- Doesn\'t need alot of light. <br />\r\n- Strongly purifies the air.', '26,95'),
(3, 'Yucca.', '- Doesn\'t need much water. <br />\r\n- Needs alot of light. <br />\r\n- Purifies the air.', '29,95'),
(4, 'Dracaena Janet Lind.', '- Doesn\'t need much water. <br />\r\n- Doesn\'t need alot of light. <br />\r\n- Strongly purifies the air.', '29,95'),
(5, 'Alocasia Zebrina.', '- Needs alot of water. <br />\r\n- Doesn\'t need alot of light. <br />\r\n- Purifies the air.', '27,95'),
(6, 'Strelitzia Nicolai.', '- Needs alot of water. <br />\r\n- Needs alot of light. <br />\r\n- Lighty purifies the air.', '34,95');
