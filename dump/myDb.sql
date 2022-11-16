SET time_zone = "+08:00";

CREATE TABLE `Person` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Person` (`id`, `name`,`age`) VALUES
(1, 'William',30),
(2, 'Marc',17),
(3, 'John',55);

CREATE TABLE IF NOT EXISTS `users` (
    `user_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_name` VARCHAR(100) NOT NULL UNIQUE,
    `user_password` VARCHAR(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET=latin1;

-- Sample user and data

INSERT INTO `users` (`user_id`, `user_name`,`user_password`) VALUES
(1,'test','$2y$10$9phx9WxnXL2yDJ.Z5Ygaze5a9AiVSu1blMy/kBbh2og.1Z/rNCYx.'),
(2,'User1','$2y$10$PARfzpp1B5HFPvC2gsr8cuIwTfZi6xuAEXTiJPHv7I2mqe0D1QhOe');