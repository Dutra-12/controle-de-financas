CREATE TABLE `usuario` (
    `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
    `senha` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
)