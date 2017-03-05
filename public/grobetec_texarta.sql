

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Dublin','Millenium Collection','2016-11-27 14:33:57','2016-11-28 23:36:28'),(5,'Crepe','Millenium Collection','2016-11-28 23:37:19','2016-11-28 23:37:19'),(4,'Cancún','Millenium Collection','2016-11-28 14:59:12','2016-11-28 23:36:59'),(6,'Gravité','Millenium Collection','2016-11-28 23:38:05','2016-11-28 23:38:05'),(7,'Taos','Millenium Collection','2016-11-28 23:38:16','2016-11-28 23:38:16'),(8,'Malla','Millenium Collection','2016-11-28 23:38:32','2016-11-28 23:38:32');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `colors`
--

LOCK TABLES `colors` WRITE;
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
INSERT INTO `colors` VALUES (6,'Azafrán','Descripción','2016-11-28 23:46:11','2016-11-28 23:46:11','1480376771.jpg'),(4,'Marfil','Prueba de color 1.','2016-11-27 15:52:59','2016-11-28 23:42:33','1480376553.jpg');
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'David Camhi','david182_26@hotmail.com','Grobetech','59127340','Probando','2016-11-28 08:51:33','2016-11-28 08:51:33'),(2,'Gilberto Silva','gilbertosg1292@gmail.com','Grobetech','553319191','Probando2','2016-11-28 08:56:57','2016-11-28 08:56:57'),(8,'Jonathan','bueno@gmail.com','','','Quisiera saber si este mensaje les va a llegar. Gracias','2017-01-23 01:49:22','2017-01-23 01:49:22');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Dumping data for table `price_requests`
--

LOCK TABLES `price_requests` WRITE;
/*!40000 ALTER TABLE `price_requests` DISABLE KEYS */;
INSERT INTO `price_requests` VALUES (2,'jon','jon@hotmail.com','mi compañia','55555555','Quiero ver si  se guarda','2016-12-03 18:44:39','2016-12-03 18:44:39',4,6,10,'pies');
/*!40000 ALTER TABLE `price_requests` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Cancún Marfil','Descripción del producto 1. Edit',4,4,'1480447607.jpg',1,'2016-11-27 17:32:11','2016-11-29 19:26:47',1,'100% Polipropileno','1.40 m','450 gr/m','','Resina Acrílica',''),(3,'Tela2','Producto prueba',1,4,'1480344823.jpg',1,'2016-11-28 14:53:43','2016-11-28 14:53:43',1,'sa','2','1','ada','dasd','gfa'),(4,'Tela 3','prueba, una vez mas',1,4,'1480344855.jpg',1,'2016-11-28 14:54:15','2016-11-28 14:54:15',1,'fdf','2323','12 g','asdfa','fdsaf','fads'),(5,'tela 4','probando',1,4,'1480344970.png',1,'2016-11-28 14:56:10','2016-11-28 14:56:10',1,'q','q','q','q','','q'),(6,'prueba imagen','a',1,4,'1480345090.jpg',1,'2016-11-28 14:58:10','2016-11-28 14:58:10',1,'a','a','a','a','a','a'),(7,'producto prueba','a',4,4,'1480345195.jpg',1,'2016-11-28 14:59:55','2016-11-28 14:59:55',1,'r','','','','e',''),(8,'Probando mas','d',4,4,'1480345218.jpg',1,'2016-11-28 15:00:18','2016-11-28 15:00:18',1,'fd','f','f','f','',''),(9,'dublin extra','una descripción de este producto',1,4,'1485138064.jpg',0,'2017-01-23 02:21:04','2017-01-23 02:21:04',1,'fibra','','100','ancho y patrón vacíos','backing','');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `samples`
--

LOCK TABLES `samples` WRITE;
/*!40000 ALTER TABLE `samples` DISABLE KEYS */;
INSERT INTO `samples` VALUES (1,'David Camhi','david182_26@hotmail.com','Grobetech','59127340','Prueba muestras1.','2016-11-28 12:50:03','2016-11-28 12:50:03',1,4);
/*!40000 ALTER TABLE `samples` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'David Camhi de la Tejera',1,'david.camhi26@gmail.com','$2y$10$a7g9Ec4iiL5YmTFQ3X1lvOuKu4HEu1bVlx3zrH/cJcjLtg7ASs56W',NULL,'2016-11-14 07:14:05','2016-11-15 07:27:27'),(3,'Jonathan Nurko',1,'nurkojonathan@gmail.com','$2y$10$DBe0hScWsw967uM5SvmYxOxmU.jVEFd9cd5QEb432veMmcCMVelyi',NULL,'2016-11-14 08:48:39','2016-11-14 08:48:39'),(4,'Gilberto Silva',1,'gilbertosg@gmail.com','$2y$10$7FrJ7r3ECIEDNNqSJmiV9.Y7yP7TI5thVpKmTY.SYYWX9.s3W7Hoe',NULL,'2016-11-27 14:06:57','2016-11-27 14:06:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
