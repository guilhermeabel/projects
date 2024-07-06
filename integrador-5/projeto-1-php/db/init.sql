CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document` varchar(255) NOT NULL,
  `name` varchar(255),
  `email` varchar(255) NOT NULL,
  `phone` varchar(255),
  `password` varchar(255),
  PRIMARY KEY (`id`)
) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

CREATE TABLE `pets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL, 
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

CREATE TABLE `donations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document` varchar(255) NOT NULL,
  `name` varchar(255),
  `email` varchar(255) NOT NULL,
  `phone` varchar(255),
  `amount` decimal(10,2) NOT NULL,
  `method` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

INSERT INTO `users` (`id`,`document`, `name`, `email`, `password`) VALUES
(1,'000.000.000-91', 'Admin', 'admin@gmail.com', '123456');

INSERT INTO `pets` (`id`, `name`, `age`, `breed`, `size`, `photo`, `description`) VALUES
(7, 'Toby', '3 anos', 'Vira-lata', 'Pequeno', 'toby.png', 'Este pequeno cãozinho tem uma história incrível de superação. Resgatado de situações difíceis, ele está pronto para encontrar um lar onde possa desfrutar do amor e da segurança que merece. Dê a este pequeno amigo peludo a oportunidade de uma vida feliz e segura!'),
(6, 'Kim', '10 meses', 'Vira-lata', 'Médio', 'kim.png', 'Este adorável cãozinho foi resgatado das ruas, onde enfrentou vários desafios. Ele adora brincar e correr e está pronto para encontrar um lar repleto de carinho e cuidados. Ajude-nos a dar a este lindo cãozinho uma segunda chance.'),
(5, 'Luna', '2 anos', 'Vira-lata', 'Médio', 'luna.jpg', 'Esta linda cadelinha foi resgatada de uma situação de abandono e maus-tratos. Ela é muito carinhosa e adora brincar. Luna está pronta para encontrar um lar onde possa ser amada e cuidada como merece. Adote esta linda cadelinha e dê a ela a oportunidade de uma vida feliz!'),
(1, 'Bella', '5 anos', 'Vira-lata', 'Pequeno', 'bella.png', 'Esta linda cadelinha foi resgatada de uma situação de abandono e maus-tratos. Ela é muito carinhosa e adora brincar. Bella está pronta para encontrar um lar onde possa ser amada e cuidada como merece. Adote esta linda cadelinha e dê a ela a oportunidade de uma vida feliz!'),
(2, 'Daisy', '2 anos', 'Vira-lata', 'Médio', 'daisy.png', 'Esta linda cadelinha foi resgatada de uma situação de abandono e maus-tratos. Ela é muito carinhosa e adora brincar. Daisy está pronta para encontrar um lar onde possa ser amada e cuidada como merece. Adote esta linda cadelinha e dê a ela a oportunidade de uma vida feliz!'),
(3, 'Rocky', '3 anos', 'Vira-lata', 'Grande', 'rocky.png', 'Este lindo cãozinho foi resgatado de uma situação de abandono e maus-tratos. Ele é muito carinhoso e adora brincar. Rocky está pronto para encontrar um lar onde possa ser amado e cuidado como merece. Adote este lindo cãozinho e dê a ele a oportunidade de uma vida feliz!');

INSERT INTO `products` (`description`, `id`, `main_image`, `name`, `price`) VALUES 
('Casinha para Cachorro tamanho Grande, feita em material reciclado, resistente e de alta qualidade.', 1, 'casinha-cachorr-grande.jpg', 'Casinha de Cachorro Grande', '350.00'),
('Coleira rosa em material resistente', 2, 'coleira-rosa.jpg', 'Coleira rosa', '20.00'),
('Para cachorros ou gatos, tamanho pequeno', 3, 'casinha-cachorro.jpg', 'Casinha de madeira', '150.00'),
('Par de coleiras tamanho médio de material couro.', 4, 'par-coleira-marrom.jpg', 'Par coleira marrom couro', '100.00'),
('Pote de ração em tamanho 15cm. Material Plástico de alta durabilidade', 5, 'pote-racao-vermelho.jpg', 'Pote de ração Vermelho', '40.00'),
('Pote de ração em tamanho 20cm. Material Inox de alta durabilidade', 6, 'pote-racao.jpg', 'Pote de ração', '50.00'),
('Para cachorros ou gatos tamanho M, guia com peitoral\n', 7, 'guia.jpg', 'Guia Vermelha', '60.00');



