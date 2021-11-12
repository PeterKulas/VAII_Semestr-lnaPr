CREATE TABLE `users` (
    `id` int(8) unsigned NOT NULL auto_increment,
    `firstname` varchar(255) NOT NULL,
    `lastname` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `registrationDate` datetime NOT NULL,
    PRIMARY KEY (`id`)
 ) AUTO_INCREMENT = 1;

