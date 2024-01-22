-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2020 at 04:23 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookbarns`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladdress`
--

DROP TABLE IF EXISTS `tbladdress`;
CREATE TABLE IF NOT EXISTS `tbladdress` (
  `addid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `houseno` varchar(20) NOT NULL,
  `street` varchar(100) NOT NULL,
  `cityid` int(11) NOT NULL,
  `stateid` int(11) NOT NULL,
  `pincode` int(6) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`addid`),
  KEY `userid` (`userid`),
  KEY `cityid` (`cityid`),
  KEY `stateid` (`stateid`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbladdress`
--

INSERT INTO `tbladdress` (`addid`, `userid`, `fname`, `lname`, `emailid`, `contactno`, `houseno`, `street`, `cityid`, `stateid`, `pincode`, `created`) VALUES
(64, 9, 'SHREENA', 'GABANI', 'shreenagabani317@gmail.com', 8758466008, 'Shantinagar soc.-2,s', 'yufgukh', 3, 1, 395006, '2020-06-03 13:35:24'),
(65, 1, 'amisha', 'dfgd', 'sdfse@gmail.com', 4555443344, 'sfset', 'gdg', 1, 1, 345654, '2020-06-03 13:37:17'),
(66, 1, 'amisha', 'dfgd', 'sdfse@gmail.com', 4555443344, 'sfset', 'gdg', 1, 1, 345654, '2020-06-03 13:49:32'),
(67, 1, 'amisha', 'dfgd', 'sdfse@gmail.com', 4555443344, 'sfset', 'gdg', 1, 1, 345654, '2020-06-03 15:22:20'),
(68, 9, 'SHREENA', 'GABANI', 'shreenagabani317@gmail.com', 8758466008, 'Shantinagar soc.-2,s', '224', 1, 1, 395006, '2020-06-05 14:19:13'),
(69, 10, 'het', 'gabani', 'het@gmail.com', 1234567890, '224', 'sathana jakatnaka', 5, 1, 395006, '2020-06-06 07:26:49'),
(70, 1, 'SHREENA', 'GABANI', 'shreenagabani317@gmail.com', 8758466008, 'Shantinagar soc.-2,s', '224', 1, 1, 395006, '2020-06-07 17:29:16'),
(71, 1, 'SHREENA', 'GABANI', 'shreenagabani317@gmail.com', 8758466008, 'Shantinagar soc.-2,s', '224', 3, 1, 395006, '2020-06-07 17:36:26'),
(72, 9, 'SHREENA', 'GABANI', 'shreenagabani317@gmail.com', 8758466008, 'Shantinagar soc.-2,s', '224', 1, 1, 395006, '2020-06-10 08:57:43'),
(73, 9, 'SHREENA', 'GABANI', 'shreenagabani317@gmail.com', 8758466008, 'Shantinagar soc.-2,s', '224', 1, 1, 395006, '2020-06-10 09:54:53'),
(74, 9, 'SHREENA', 'GABANI', 'shreenagabani317@gmail.com', 8758466008, 'Shantinagar soc.-2,s', '224', 1, 1, 395006, '2020-06-10 09:56:36'),
(75, 1, 'SHREENA', 'GABANI', 'shreenagabani317@gmail.com', 8758466008, 'Shantinagar soc.-2,s', '224', 3, 1, 395006, '2020-06-10 10:43:49'),
(76, 1, 'SHREENA', 'GABANI', 'shreenagabani317@gmail.com', 8758466008, 'Shantinagar soc.-2,s', '224', 1, 1, 395006, '2020-06-10 10:53:39'),
(77, 11, 'arsh', 'gabani', 'arsh@gmail.com', 1234567890, 'Shantinagar soc.-2,s', '224', 5, 1, 395006, '2020-06-10 16:42:24'),
(78, 9, 'SHREENA', 'GABANI', 'shreenagabani317@gmail.com', 8758466008, 'Shantinagar soc.-2,s', '', 1, 1, 395006, '2020-06-11 06:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `imageurl` varchar(500) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`adminid`, `adminname`, `password`, `email`, `contactno`, `imageurl`) VALUES
(1, 'gabani', '123', 'shreena123@gmail.com', 8849919079, 'admin1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblbook`
--

DROP TABLE IF EXISTS `tblbook`;
CREATE TABLE IF NOT EXISTS `tblbook` (
  `bookid` int(11) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(100) NOT NULL,
  `authorname` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `isbn` bigint(15) NOT NULL,
  `catid` int(11) NOT NULL,
  `subcatid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `bookcondition` varchar(50) NOT NULL,
  `status` tinyint(100) NOT NULL DEFAULT 1,
  `userid` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `cityid` int(11) NOT NULL,
  `language` varchar(20) NOT NULL,
  `edition` varchar(50) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblbook`
--

INSERT INTO `tblbook` (`bookid`, `bookname`, `authorname`, `description`, `isbn`, `catid`, `subcatid`, `price`, `bookcondition`, `status`, `userid`, `image`, `cityid`, `language`, `edition`) VALUES
(17, 'The Secret', 'Rhonda Byrne', 'Byrne re-introduces a notion originally popularized by persons such as Madame Blavatsky and Norman Vincent Peale that thinking about certain things will make them appear in one\'s life. Byrne provides examples of historical persons who have allegedly achieved this. Byrne cites a three-step process: a', 500778, 6, 12, 1100, 'Near Good', 1, 2, 'secret.png ts1.jpg ts2.JPG ', 6, 'English', 'Hard Cover'),
(18, 'Deadpool', 'Cullen Bunn', 'Deadpool (Wade Winston Wilson) is a fictional character appearing in American comic books published by Marvel Comics. Created by writer Fabian Nicieza and artist/writer Rob Liefeld, the character first appeared in The New Mutants #98 (cover-dated February 1991). Initially Deadpool was depicted as a supervillain when he made his first appearance in The New Mutants and later in issues of X-Force, but later evolved into his more recognizable antiheroic persona. Deadpool, whose real name is Wade Wil', 7617888, 1, 7, 500, 'Old', 1, 2, 'deadool.jpg dp1.jpg dp3.jpg ', 6, 'English', 'Revised'),
(21, 'Harry Potter', 'J.K.Rowling', 'Harry Potter is a series of fantasy novels written by British author J. K. Rowling. The novels chronicle the lives of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry. The main story arc concerns Harry\'s struggle against Lord Voldemort, a dark wizard who intends to become immortal, overthrow the wizard governing body known as the Ministry of Magic and subjugate all wizards and Muggles (non-magic', 236778, 6, 11, 1000, 'As New', 1, 1, 'hp-1.jpg hp-2.jpg hp-3.jpg ', 2, 'English', 'Paperback'),
(24, 'Little Women', 'Louisa May Alcott', 'Little Women is a novel by American author Louisa May Alcott (1832–1888) which was originally published in two volumes in 1868 and 1869. Alcott wrote the book over several months at the request of her publisher.[1][2] The story follows the lives of the four March sisters—Meg, Jo, Beth, and Amy—and details their passage from childhood to womanhood. It is loosely based on the lives of the author and her three sisters.[3][4]:202 Scholars classify it as an autobiographical or semi-autobiographical n', 67875544, 6, 11, 600, 'New', 1, 2, 'lw.jpg lw1.jpg lw2.jpg ', 6, 'English', 'Original'),
(25, 'The Wealth of Nations', 'Adam Smith', 'An Inquiry into the Nature and Causes of the Wealth of Nations, generally referred to by its shortened title The Wealth of Nations, is the magnum opus of the Scottish economist and moral philosopher Adam Smith. First published in 1776, the book offers one of the world\'s first collected descriptions of what builds nations\' wealth, and is today a fundamental work in classical economics. By reflecting upon the economics at the beginning of the Industrial Revolution, the book touches upon such broad', 776548865, 8, 15, 2000, 'Old', 1, 9, 'busi.jpg won.jpg won2.jpg ', 3, 'English', 'Reprinted'),
(26, 'Fun Home', 'Alison Bechdel', 'Fun Home: A Family Tragicomic is a 2006 graphic memoir by the American cartoonist Alison Bechdel, author of the comic strip Dykes to Watch Out For. It chronicles the author\'s childhood and youth in rural Pennsylvania, United States, focusing on her complex relationship with her father. The book addresses themes of sexual orientation, gender roles, suicide, emotional abuse, dysfunctional family life, and the role of literature in understanding oneself and one\'s family.', 7654468, 1, 8, 600, 'As new', 1, 9, 'fh.jpg fh1.jpg fh2.jpg ', 7, 'English', 'Paperback'),
(27, 'Down Under', 'Bill Bryson', 'The term Down Under is a colloquialism which is variously construed to refer to Australia and New Zealand. The term comes from the fact that these countries are in the Southern Hemisphere, ', 76744, 7, 14, 3000, 'Old', 1, 1, 'br1.jpg du-2.jpg du-3.jpg ', 1, 'English', 'Paperback'),
(28, 'The Lean Startup', 'Eric Ries', 'Ries developed the idea for the lean startup from his experiences as a startup advisor, employee, and founder.[2][3] Ries attributes the failure of his first startup, Catalyst Recruiting, to not understanding the wants of their target customers and focusing too much time and energy on the initial product launch.', 765667, 8, 15, 1200, 'New', 1, 9, 'tls.jpg tls2.jpg tls3.jpg ', 6, 'English', 'hardcover'),
(29, 'Aneri Vanagio', 'Nayana Shah', 'This book helps to satisfy the zest for food by giving recipes about a wide variety of dishes, including main course dishes, drinks, salads, raitas, chutneys and pastry. It includes Punjabi, South Indian, Chinese, Mexican, Burmese, Thai and Italian cuisine besides traditional Indian culinary delights. The book also provides very valuable information about various spices and ingredients used in the preparation of dishes, measures, appliances and cookery terminology.   Bestsellers', 3459757, 11, 21, 200, 'Old', 1, 9, 'av.jpg av-2.jpg av-3.jpg ', 1, 'Gujarati', 'Revised'),
(30, 'Pride and Prejudice', 'Jane Austen', 'Pride and Prejudice is a romantic novel of manners written by Jane Austen in 1813. The novel follows the character development of Elizabeth Bennet, the dynamic protagonist of the book who learns about the repercussions of hasty judgments and comes to appreciate the difference between superficial goodness and actual goodness. Its humour lies in its honest depiction of manners, education, marriage, and money during the Regency era in Great Britain.', 876356, 13, 28, 145, 'New', 1, 1, 'pp-1.jpg pp-2.jpg pp-3.jpg ', 2, 'French', 'Co-edition'),
(31, 'Tarkash ', 'Javed Akhtar', 'Akhtar ji mentions about his adverse relations with his father and then a helping friend in the initial days without revealing the friend\'s name. But I\'ve also read Gulzaar ji\'s half a rupee stories and there is a story \"Jaddu\" having intense connections with this one. So we know who was who  Coming to the Ghazals and poems, majority of them were not that very impressive... especially if you compare ...more', 56765432, 12, 24, 500, 'Old', 1, 2, 'tar.jpg tar1.jpg tar2.jpg ', 9, 'Hindi', 'Colonial'),
(33, 'The Complete Gujarati Cookbook', 'Tarla Dalal', 'Gujaratis Have Perhaps Truly Perfected The Art Of Vegetarian Cooking. This Book Is An Attempt To Document Classic Gujarati Recipes From The Basic Dals And Kadhis To The More Complicated And Difficult Recipes Like The Mohanthaal.', 81, 11, 21, 325, 'Near Fine', 1, 1, 'tcgb.jpg tgc-2.jpg tgc-3.jpg ', 5, 'Gujarati', 'Colonial'),
(35, 'Southern Flavours', 'Chandra Padmanabhan', 'Here, at last, is the answer to the pleas of popular cookbook writer Chandra Padmanabhan\'s myriad fans-a collection of their favourite recipes from her previous three bestselling cookbooks, exploring the gamut of South Indian meals served in Andhra Pradesh, Kerala, Tamil Nadu and Karnatka', 43, 11, 22, 599, 'Old', 1, 1, 'sf.jpg sf-2.jpg sf-3.jpg ', 2, 'English', 'Original'),
(36, 'The Silver Spoon', 'Clelia D\'Onofrio', 'cucchiaio d\'argento, or The Silver Spoon in English, is a major Italian cookbook and kitchen reference work originally published in 1950 by the design and architecture magazine Domus. It contains about 2000 recipes drawn from all over Italy, and has gone through nine editions.', 657, 11, 23, 899, 'New', 1, 1, 'ss-1.png ss-2.jpg ss-3.jpg ', 10, 'English', 'Paperback'),
(37, 'Essentials of Classic Italian Cooking', 'Marcella Hazan', 'Essentials of Italian Cooking is a culinary bible for anyone looking to master the art of Italian cooking, bringing together Marcella Hazan’s most beloved books, The Classic Italian Cook Book and More Classic Italian Cooking, in a single volume, updated and expanded with new entries and 50 new recipes. Designed as a basic manual for cooks of all levels of expertise—from beginners to accomplished professionals—it offers both an accessible and comprehensive guide to techniques and ingredients and ', 564, 11, 23, 649, 'Old', 1, 2, 'ecic.jpg ecic1.jpg ecic2.jpg ', 1, 'English', 'Revised'),
(38, 'Italian Food', 'Elizabeth David', 'Elizabeth David\'s Italian Food was one of the first books to demonstrate the enormous range of Italy\'s regional cooking. For the foods of Italy, explained David, expanded far beyond minestrone and ravioli, to the complex traditions of Tuscany, Sicily, Lombardy, Umbria, and many other regions. David imparts her knowledge from her many years in Italy, exploring, researching, tasting and testing dishes. Her passion for real food, luscious, hearty, fresh, and totally authentic, will inspire anyone w', 564, 11, 23, 489, 'New', 1, 2, 'if.jpg if-1.jpg if-2.jpg ', 7, 'English', 'Reprinted'),
(39, ' RIZZOLI La Cucina: The Regional Cooking of Italy ', 'The Italian Academy of Cuisine', '\"La Cucina: The Regional Cooking of Italy (Rizzoli, 2009) is a masterpiece of Italian cooking, compiled by the founders of the Italian Academy of Cuisine. It\'s an essential addition to any cook\'s library with 2,000 recipes.\" \"Try to cook your way through one of these books. Bigger is better with new cookbook trend.\"', 123, 11, 23, 799, 'Near Fine', 1, 2, 'lc.jpg lc-2.jpg lc-3.jpg ', 8, 'English', 'Library Edition'),
(40, 'Dakshin', 'Chandra Padmanabhan', '\"Dakshin\" in an ancient Sanskrit word meaning \"south.\" It symbolizes what this Indian cookbook is all about — the best and most delicious of South Indian vegetarian cuisine.  Filled with tempting recipes and beautiful photographs, Dakshin: Vegetarian Cooking from South India presents the finest cooking from the region. Drawn from the states of Kerala, Karnataka, Tamil Nadu, and Andhra Pradesh, and the union territory of Pondicherry, the recipes in this vegetarian cookbook bring traditional South', 678, 11, 22, 299, 'New', 1, 2, 'Db.jpg db-1.jpg db-2.jpg ', 4, 'Hindi', 'Paperback'),
(41, 'Delicious Diabetic Recipies', ' Tarla Dalal', 'Delicious Diabetic Recipes Gives Easy To Follow Information On Some Basic Facts About Diabetes As Well As Diabetic Diet. It Is A Collection Of Meticulously Planned Recipes From Different Cuisines Like Indian, Continental, Italian, Chinese And Mexican To Add More Variety To Our Meals. So, The Next Time Someone Says That A Diabetic Diet Is Boring And Uninteresting, Tell Him Or Her To Refer To This Book.', 609, 11, 21, 299, 'As New', 1, 2, 'dd.jpg dd-2.jpg dd-3.jpg ', 3, 'Gujarati', 'Hard Cover'),
(42, 'Fun Food For Children', 'Tarla Dalal', 'This book, Fun Foods for Children, has 41 innovative and easy recipes that are exciting and tasty enough to ensure that your kids are happy, satiated and well-nourished too.While these recipes are guaranteed to delight your kids, you need not stop with these. Once you start making such recipes, you are sure to slowly understand what it takes to please your kids. With that knowledge in place, you can give a child-friendly twist to most of the recipes, including traditional ones, to ensure that yo', 268, 11, 21, 349, 'Old', 1, 9, 'fc.jpg ffc.jpg ffc1.jpg ', 1, 'Gujarati', 'Reprinted'),
(43, 'A Taste of Madras', ' Rani Kingman', 'Part travel guide, storybook, and shopping list, this large-format cookbook not only shows how to prepare Southern Indian dishes, but introduces food lore, folklore, myths, legends and religious traditions that give the recipes a cultural context. The book includes information on mail-ordering some of the uncommon ingredients.', 583, 11, 22, 400, 'old', 1, 9, 'tm.jpg tom.jpg tom2.jpeg ', 7, 'Hindi', 'Original'),
(44, 'Food of the Italian South', 'Katie Parla', 'In most cultures, exploring food means exploring history—and the Italian south has plenty of both to offer. The pasta-heavy, tomato-forward “Italian food” the world knows and loves does not actually represent the entire country; rather, these beloved and widespread culinary traditions hail from the regional cuisines of the south. Acclaimed author and food journalist Katie Parla takes you on a tour through these vibrant destinations so you can sink your teeth into the secrets of their rustic, rom', 542, 11, 23, 569, 'New', 1, 9, 'fis.jpg fis1.jpg fis-3.jpg ', 2, 'English', '10th Anniversary Edition'),
(45, 'Pasta Grannies', 'Vicky Bennison', '\"When you have good ingredients, you don\'t have to worry about cooking. They do the work for you.\" – Lucia, 85 Inspired by the hugely popular YouTube channel of the same name, Pasta Grannies is a wonderful collection of time-perfected Italian recipes from the people who have spent a lifetime cooking for love, not a living: Italian grandmothers. Featuring easy and accessible recipes from all over Italy, you will be transported into the very heart of the Italian home to learn how to make great-tas', 984, 11, 23, 890, 'Old', 1, 1, 'pg.jpg pg-2.jpg pg-3.jpg ', 1, 'English', 'Original'),
(46, 'Idlis and Dosas', 'Tarla Dalal', 'This Book Is A Small, But Delightful Collection Of Recipes Which Are A Gateway To A Whole New World Of Idlis And Dosas. Also Included Is A Section On How To Make Delicious Delicacies Using Leftover Idlis And Dosas.', 857, 11, 22, 399, 'Near Fine', 1, 1, 'id.jpg id-2.jpg id-3.jpg ', 1, 'Hindi', 'Reprinted'),
(49, 'Chawal', 'Tarla Dalal', 'Can you imagine life without rice? That is how closely rice is entwined with India\'s history, tradition and culture. As people travelled across the world, mingling with more cosmopolitan societies, they found newer ways of preparing rice, based on international cuisines, and using modern kitchen tools like electric cookers, the microwave oven, etc., but in some form of the other rice continued to be, and remains, a popular staple food for Indians across the world.This book will give you more ide', 785, 11, 21, 100, 'As New', 1, 1, 'ch.jpg dc-2.jpg dc-3.jpg ', 1, 'Gujarati', 'Revised'),
(50, 'Leaves of Grass', 'Walt Whitman', 'Leaves of Grass is a poetry collection by the American poet Walt Whitman. Although the first edition was published in 1855, Whitman spent most of his professional life writing and re-writing Leaves of Grass, revising it multiple times until his death.', 879, 12, 25, 399, 'Old', 1, 1, 'log.jpg log-2.jpg log-3.jpg ', 2, 'English', ''),
(52, 'Madhushala ', ' Harivansh Rai Bachchan', 'Madhushala (Hindi: मधुशाला) (The Tavern/The House of Wine) is a book of 135 \"quatrains\": verses of four lines (Ruba\'i) by Hindi poet and writer Harivansh Rai Bachchan (1907–2003). The highly metaphorical work is still celebrated for its deeply Sufi incantations and philosophical undertones and is an important work in the Chhayavaad (Neo-romanticism) literary movement of early 20th century Hindi literature.', 452, 12, 24, 130, 'Old', 1, 1, 'm-1.jpg m-2.jpg m-3.png ', 3, 'Hindi', ''),
(53, 'Sunderkand', 'Goswami Tulsidas', 'Sunderkand, believed to be the most beautiful (Sunder) part of the Ramayana, describes Lord Hanuman journey to Lanka. This book elucidates his pristine lifestyle, following which brings karmic and spiritual knowledge and bhakti (devotion) in one’s life. It is even believed that when one reads the sunderkand, Lord Hanuman himself graces the reader with his presence. Carrying the entire text and explanation of the sunderkand, Shri Hanuman Chalisa and sankatmochan hanumanashtak, this edition also c', 123, 12, 24, 120, 'Old', 1, 1, 'sk.jpg sk-2.jpg sk-3.jpg ', 4, 'Hindi', ''),
(54, 'Diwan-e-Ghalib', 'Mirza Ghalib', 'Diwan-e-Ghalib is a famous poetry book written by the famous Persian and Urdu poet Mirza Asadullah Khan Ghalib. It is a collection of the Ghazals of Ghalib.Though it does not include all his Ghazals as he was too choosy to include all of his Ghazals, still in many other copies of Diwan-e-Ghalib the Urdu scholars have tried to collect all his precious works. It is the only book written by Ghalib. A lot of authentic copies of diwan e ghalib exist like Nuskha e Nizami, Nuskha e Arshi, Nuskha e Hami', 85, 12, 26, 230, 'Near Fine', 1, 1, 'deg.jpg dg-2.jpg dg-3.jpg ', 8, 'Urdu', ''),
(61, 'zxa', 'sdfsdgsr', 'sdfdghf', 3454, 7, 14, 523, 'sdfgsrdh', 1, 10, 'av.jpg busi.jpg ch.jpg ', 2, 'dgdsfvc', 'sfedf'),
(63, 'the railway bazzar', 'Paul Theroux', 'The Great Railway Bazaar: By Train Through Asia is a travelogue by American novelist Paul Theroux, first published in 1975. It recounts Theroux\'s four-month journey by train in 1973 from London through Europe, the Middle East, the Indian subcontinent and Southeast Asia, and his return via the Trans-Siberian Railway.', 5675, 7, 13, 230, 'As new', 1, 9, '6359464.jpg grb1.jpg grb2.jpg ', 4, 'gfghf', 'Hard Cover'),
(64, 'Sherlock Holmes', ' Stephen Fry', 'Traditionally, the canon of Sherlock Holmes consists of the 56 short stories and four novels written by Sir Arthur Conan Doyle. In this context, the term \"canon\" is an attempt to distinguish between Doyle\'s original works and subsequent works by other authors using the same characters.', 892, 1, 7, 200, 'Near Fine', 1, 9, 'sh.jpg sh1.jpg sh3.jpg ', 4, 'English', 'Original'),
(65, 'The Jungle Book', 'Jon Favreau', 'Mowgli is a boy brought up in the jungle by a pack of wolves. When Shere Khan, a tiger, threatens to kill him, a panther and a bear help him escape his clutches.', 543, 1, 7, 99, 'Old', 1, 9, 'tjb.jpg tjb1.jpg tjb2.jpg ', 2, 'Hindi', 'Hardcover'),
(66, 'Science Comics', 'Jon Chad', 'Every volume of Science Comics offers a complete introduction to a particular topic – dinosaurs, coral reefs, the solar system, volcanoes, bats, flying machines, and more. These gorgeously illustrated graphic novels offer wildly entertaining views of their subjects. Whether you’re a fourth grader doing a natural science unit at school or a thirty year old with a secret passion for airplanes, these books are for you!', 345, 1, 8, 199, 'Old', 1, 9, 'sc.jpg sc1.jpg sc2.png ', 6, 'English', 'Original'),
(67, 'Best Friends', 'Shannon Hale', 'Sixth grade is supposed to be perfect. Shannon’s got a sure spot in the in-crowd called The Group, and her best friend is their leader, Jen, the most popular girl in school.', 345, 1, 8, 200, 'As New', 1, 1, 'bf1.jpg bf2.jpg bf3.jpg ', 10, 'English', 'PaperBack'),
(68, 'understanding exposure', 'Bryan Peterson', 'More than 100 vivid, graphic comparison pictures illustrate every point in this revised classic and can help any photographer maximize the creative impact of his or her exposure decisions. Peterson stresses the importance of metering the subject for a starting exposure, and then explains how to use various exposure meters and different kinds of lighting. The book contains lessons on each element of the exposure-aperature, shutter speed, iso-and how it relates to the other two in terms of depth o', 345, 2, 10, 399, 'Old', 1, 1, 'uea1.jpg uea2.jpeg uea3.jpg ', 2, 'English', 'Original'),
(69, 'The Visual Art : A History', 'Hugh Honour ', 'An authoritative, balanced, and enlightened account of the history of art, ranging from the primitive art of hunters 30,000 years ago to examples of the most controversial art forms of today. This book contains over 1400 superb illustrations, including color maps and architectural plans, enabling the reader to gain perspective of the global scope of this subject. Encompassing the arts of Asia, Africa, Oceania, Europe, and the Americas, this book covers painting, mosaic, drawing, printmaking, scu', 123, 2, 9, 300, 'Near good', 1, 1, 'tva.jpg tva1.jpg tva2.jpg ', 7, 'English', 'Colonial'),
(70, 'Color: A Natural History of the Palette', 'Victoria Finlay', 'Roman emperors used to wear togas dyed with a purple color that was made from an odorous Lebanese shellfish–which probably meant their scent preceded them. In the eighteenth century, black dye was called logwood and grew along the Spanish Main. Some of the first indigo plantations were started in America, amazingly enough, by a seventeen-year-old girl named Eliza. And the popular van Gogh painting White Roses at Washington’s National Gallery had to be renamed after a researcher discovered that t', 345, 2, 9, 300, 'Old', 1, 2, 'co.jpg co1.webp co2.jpg ', 2, 'English', 'HardCover'),
(71, 'Banksy', 'Banksy', '\"Graffiti artist Banksy decorates streets, walls, bridges and zoos of towns and cities throughout the world. His identity remains unknown but his work is witty, subversive and prolific. And now, he\'s put together the best of his work in a fully illustrated color volume.\"--From the Publisher.', 345, 2, 9, 399, 'As New', 1, 2, 'ba1.jpg ba2.jpg ba3.jpg ', 7, 'English', 'Paperback'),
(72, 'Ways of Seeing', 'John Berger', 'Ways of Seeing is a 1972 television series of 30-minute films created chiefly by writer John Berger and producer Mike Dibb. It was broadcast on BBC Two in January 1972 and adapted into a book of the same name.', 45, 2, 9, 200, 'Old', 1, 1, 'wos.jpg wos1.jpg wos3.jpg ', 11, 'English', 'Original'),
(73, 'The Digital Photography Book', 'Scott Kelby', 'Scott Kelby, author of The Digital Photography Book, volume 1 (the world\'s best-selling digital photography book of all time), is back with a follow-up to his volume 2 smash best seller, with an entirely new book that picks up right where he left off.', 657, 2, 10, 450, 'As New', 1, 1, 'dpq.jpg dpq1.jpg dpq3.jpg ', 9, 'English', 'Original'),
(74, 'The Photographer\'s Eye', 'Michael Freeman', 'In his long and distinguished career, photographer and author Michael Freeman has concentrated principally on documentary travel reportage, and has been published in dozens of major publications worldwide, including Time-Life, GEO and Smithsonian magazine, for whom he has shot dozens of feature stories across the globe over the course of a three-decade relationship. Much of his work has focused on Asia, beginning in the early days with Thailand, and expanding throughout Southeast Asia, including', 54, 2, 10, 399, 'As New', 1, 2, 'tpe.jpg tpe1.jpg tpe3.jpg ', 5, 'English', 'PaperBack'),
(75, 'Charlie and the Chocolate Factory', 'Roald Dahl', 'Charlie and the Chocolate Factory is a 1964 children\'s novel by British author Roald Dahl. The story features the adventures of young Charlie Bucket inside the chocolate factory of eccentric chocolatier Willy Wonka.', 23, 6, 11, 300, 'Old', 1, 2, 'rdc1.jpg rdc2.jpg rdc3.jpg ', 2, 'English', 'Original'),
(76, 'Charlotte\'s Web', 'E. B. White', 'Charlotte\'s Web is a children\'s novel by American author E. B. White and illustrated by Garth Williams; it was published on October 15, 1952, by Harper & Brothers. The novel tells the story of a livestock pig named Wilbur and his friendship with a barn spider named Charlotte.', 546, 6, 11, 400, 'As New', 1, 2, 'cw.jpg cw2.jpg cw3.jpg ', 7, 'English', 'PaperBack'),
(77, 'Hear Bear Roar', 'Veronica Wagner', 'Come along on an animal adventure to meet - and hear - roaring bears, slithering snakes, deep-diving dolphins, and more! With classic Eric Carle animal artwork one every page and 30 sound buttons that play animal names and sounds, Hear Bear Roar makes learning new words fun!', 234, 6, 12, 400, 'As New', 1, 2, 'hbr.jpg hbr1.jpg hbr2.jpg ', 6, 'English', 'PaperBack'),
(78, 'Champak', 'CHAMPAK BHATTACHARYA', '', 23, 6, 12, 200, 'Champak present a story in Hindi about Blacky bear', 1, 9, 'cm.jpg cm1.jpeg cm2.jpg ', 8, 'Gujarati', 'Indian'),
(79, 'The Very Hungry Caterpillar', 'Eric Carle', 'The Very Hungry Caterpillar is a children\'s picture book designed, illustrated, and written by Eric Carle, first published by the World Publishing Company in 1969, later published by Penguin Putnam.', 546, 6, 12, 200, 'Old', 1, 1, 'tvh.png tvh1.png tvh2.jpg ', 9, 'English', 'Hardcover'),
(80, ' My First All in One', 'Wonder House Books', 'An excellent book to introduce the child to Alphabet, Numbers, Birds, Animals and a wide range of learning topics. The vibrant pictures with Hindi and English word labels encourage the child to expand their knowledge and build a robust vocabulary in a very short time.', 456, 6, 12, 139, 'Old', 1, 1, 'aa1.jpg aa2.jpg aa3.jpg ', 11, 'Hindi', 'HardCover'),
(81, 'Cinderella', 'Folk tale', '\"Cinderella\", or \"The Little Glass Slipper\", is a folk tale embodying an element of unjust oppression and triumphant reward. Thousands of variants are known throughout the world. The protagonist is a young woman living in forsaken circumstances that are suddenly changed to remarkable fortune.', 567, 6, 11, 139, 'Near Fine', 1, 1, 'cq.jpg cq2.jpg cq3.jpg ', 10, 'English', 'Original'),
(82, 'Into the Wild', 'Jon Krakauer', 'nto the Wild is a 1996 non-fiction book written by Jon Krakauer. It is an expansion of a 9,000-word article by Krakauer on Chris McCandless titled ', 346, 7, 13, 400, 'As New', 1, 9, 'iww1.jpg iww2.jpg iww3.jpg ', 11, 'English', 'HardCover'),
(83, 'Travels with Charley: In Search of America', 'John Steinbeck', 'Travels with Charley: In Search of America is a 1962 travelogue written by American author John Steinbeck. It depicts a 1960 road trip around the United States made by Steinbeck, in the company of his standard poodle, Charley.', 567, 7, 14, 300, 'As New', 1, 9, 'twc.webp twc1.jpg twc2.jpg ', 10, 'English', 'Colonial'),
(84, 'City of Djinns', 'William Dalrymple', 'City of Djinns: A Year in Delhi is a travelogue by William Dalrymple about the historical capital of India, Delhi. It is his second book, and culminated as a result of his six-year stay in New Delhi. ', 346, 7, 13, 200, 'Old', 1, 1, 'cwd.jpg cwd1.jpg cwd2.jpg ', 9, 'English', 'PaperBack'),
(85, 'Shantaram', ' Gregory David Roberts', 'Shantaram is a 2003 novel by Gregory David Roberts, in which a convicted Australian bank robber and heroin addict escapes from Pentridge Prison and flees to India. The novel is commended by many for its vivid portrayal of tumultuous life in Bombay.', 345, 7, 14, 250, 'Old', 1, 1, 'sg.jpeg sg1.jpg sg2.jpg ', 3, 'English', 'PaperBack'),
(86, 'Maximum City', 'Suketu Mehta', 'Maximum City: Bombay Lost and Found is a narrative nonfiction book by Suketu Mehta, published in 2004, about the Indian city of Mumbai. It was published in hardcover by Random House\'s Alfred A. Knopf imprint. When released in paperback, it was published by Vintage, a subdivision of Random House.', 345, 7, 13, 400, 'Old', 1, 1, 'mc.jpg mc1.jpg mc2.jpg ', 8, 'English', 'Hardcover'),
(87, 'A Fine Balance', 'Rohinton Mistry', 'DescriptionA Fine Balance is the second novel by Rohinton Mistry. Set in \"an unidentified city\" in India, initially in 1975 and later in 1984 during the turmoil of The Emergency', 345, 7, 14, 299, 'As Naw', 1, 2, 'af.jpeg af1.png af3.jpg ', 10, 'English', 'PaperBack'),
(88, 'Around India in 80 Trains', 'Monisha Rajesh', 'Two decades on, she turns to a map of the Indian Railways and takes a page out of Jules Verne\'s classic tale, embarking on an adventure around India in 80 trains, covering 40,000 km - the circumference of the Earth. She hopes that 80 train journeys up, down and across India will lift the veil on a country that has become a stranger to her.', 678, 7, 13, 249, 'As New', 1, 2, 'ai.jpg ai1.jpg ai2.jpg ', 7, 'English', 'PaperBack'),
(89, 'Rich Dad Poor Dad', 'Sharon Lechter', 'Rich Dad Poor Dad is a 1997 book written by Robert Kiyosaki and Sharon Lechter. It advocates the importance of financial literacy, financial independence and building wealth through investing in assets.', 345, 8, 15, 200, 'As New', 1, 2, 'rd1.jpg rd2.jpg rp2.jpeg ', 9, 'English', 'PaperBack'),
(90, 'Midnight\'s Children', 'Salman Rushdie', 'Midnight\'s Children is a 1981 novel by author Salman Rushdie. It deals with India\'s transition from British colonialism to independence and the partition of India. It is considered an example of postcolonial, postmodern, and magical realist literature. ', 23, 13, 27, 195, 'Old', 1, 9, 'mdc-1.jpg mdc-3.jpg mdc-4.jpg ', 11, 'Hindi', 'Paperback'),
(91, 'The Glass Palace', 'Amitav Ghosh', 'The Glass Palace is a 2000 historical novel by Indian writer Amitav Ghosh. The novel is set in Burma, Bengal, India, and Malaya, spans a century from the British invasion of Burma and the consequent fall of the Konbaung Dynasty in Mandalay, through the Second World War to late 20th century.', 12, 13, 27, 250, 'As New', 1, 9, 'gp.jpg gp-2.jpg gp-3.jpg ', 5, 'English', 'Reprinted'),
(92, 'Jane Eyre', ' Charlotte Bronte', '', 45, 13, 28, 150, 'Jane Eyre is a novel by English writer Charlotte B', 1, 9, 'je.jpg je-2.jpg je3.jpg ', 3, 'English', 'Library '),
(93, 'Wuthering Heights', 'Emily Bronte', 'Wuthering Heights is a novel by Emily Brontë published in 1847 under her pseudonym \"Ellis Bell\". Brontë\'s only finished novel, it was written between October 1845 and June 1846. ', 12, 13, 28, 125, 'As new', 1, 9, 'wh.jpg wh1.jpg wh2.jpg ', 1, 'English', 'Reprinted'),
(94, 'Think and Grow Rich', 'Napoleon Hill', 'Think and Grow Rich was written by Napoleon Hill in 1937 and promoted as a personal development and self-improvement book. He claimed to be inspired by a suggestion from business magnate and later-philanthropist Andrew Carnegie.', 123, 8, 15, 230, 'As New', 1, 2, 'tg.jpg tg1.jpg tg2.jpg ', 7, 'Hindi', 'Hardcover'),
(95, 'Shoe Dog: A Memoir by the Creator of Nike', 'Phil Knight', 'Shoe Dog is a memoir by Nike co-founder Phil Knight. The memoir chronicles the history of Nike from its early struggles to its evolution into one of the world’s most recognized and profitable companies.', 12, 8, 16, 230, 'As New', 1, 2, 'sd.jpg sd1.jpg sd-2.jpg ', 8, 'English', 'Printed'),
(96, 'Heart of Darkness', 'Joseph Conrad', 'Heart of Darkness is a novella by Polish-English novelist Joseph Conrad about a narrated voyage up the Congo River into the Congo Free State in the Heart of Africa. Charles Marlow, the narrator, tells his story to friends aboard a boat anchored on the River Thames.', 123, 13, 27, 198, 'As new', 1, 9, 'hd1.jpg hd2.jpg hd3.jpg ', 3, 'English', 'Hardcover'),
(97, 'War and Peace', 'Leo Tolstoy', 'War and Peace is a novel by the Russian author Leo Tolstoy, first published serially, then published in its entirety in 1869. It is regarded as one of Tolstoy\'s finest literary achievements and remains a classic of world literature.', 123, 13, 27, 299, 'Old', 1, 9, 'wp1.jpg wp2.jpg wp3.jpg ', 8, 'English', 'Reprinted'),
(98, 'Gaban', 'Premchand', 'Gaban is a Hindi novel by Munshi Premchand, written in 1931. Through this novel, he tries to show the falling moral values among lower middle class Indian youth in the era of British India, and to what heights a person can get to, to reach the world of elite class, and maintain the false image as a rich person.', 98, 13, 27, 299, 'As new', 1, 9, 'g.jpg g2.jpg g3.jpg ', 2, 'Hindi', 'Original'),
(99, 'The Midnight Rose', 'Lucinda Riley', 'In the heyday of the British Raj, Anahita becomes Princess Indira\'s official companion, and accompanies her to England just before the outbreak of the Great War. There, she meets the young Donald Astbury - reluctant heir to a magnificent, estate - and his scheming mother.', 675, 13, 28, 399, 'As New', 1, 1, 'mr1.jpg mr2.jpg mr3.jpg ', 9, 'English', 'Reprinted'),
(100, 'Savaar Laine', 'Anil Chavda', 'Savaar Laine is the first collection of ghazals written by Anil Chavda, a poet from Gujarat, India. The book won the Yuva Gaurav Award of 2014, instituted by the Sahitya Akademi, Delhi.', 34, 12, 24, 120, 'As new', 1, 9, 'sl1.jpg sl2.jpg sl3.jpg ', 1, 'Gujarati', 'Original'),
(101, 'Meri Ekyavan Kavitayen', 'Atal Bihari Vajpayee', ' मेरी इक्यावन कविताएँ कवि व राजनेता अटल बिहारी वाजपेयी का बहुचर्चित काव्य-संग्रह है जिसका लोकार्पण १३ अक्टूबर १९९५ को नई दिल्ली में भारत के पूर्व प्रधानमन्त्री पी० वी० नरसिंहराव ने सुप्रसिद्ध कवि शिवमंगल सिंह \'सुमन\' की उपस्थिति में किया था। कविताओं का चयन व सम्पादन डॉ॰ चन्द्रिकाप्रसाद शर्मा ने किया है। पुस्तक के नाम के अनुसार इसमें अटलजी की इक्यावन कविताएँ संकलित हैं जिनमें उनके बहुआयामी व्यक्तित्व के दर्शन होते हैं। बानगी के तौर पर यहाँ इस पुस्तक की कुछ कविताएँ भी दे दी गयीं हैं।', 12, 12, 24, 199, 'Old', 1, 9, 'mek.jpg mek2.jpg mek3.jpg ', 2, 'Hindi', 'Reprinted'),
(102, 'Bharat-Bharati (भारत-भारती)', 'Maithili Sharan Gupt', 'भारत भारती, मैथिलीशरण गुप्तजी की प्रसिद्ध काव्यकृति है जो १९१२-१३ में लिखी गई थी। यह स्वदेश-प्रेम को दर्शाते हुए वर्तमान और भावी दुर्दशा से उबरने के लिए समाधान खोजने का एक सफल प्रयोग है। भारतवर्ष के संक्षिप्त दर्शन की काव्यात्मक प्रस्तुति \"भारत-भारती\" निश्चित रूप से किसी शोध कार्य से कम नहीं है। गुप्तजी की सृजनता की दक्षता का परिचय देनेवाली यह पुस्तक कई सामाजिक आयामों पर विचार करने को विवश करती है। भारतीय साहित्य में भारत-भारती सांस्कृतिक नवजागरण का ऐतिहासिक दस्तावेज है।  मैथिलीशरण गुप्त जिस काव', 54, 12, 24, 299, 'As New', 1, 9, 'bb.jpg bb1.png bb2.png ', 10, 'Hindi', 'Hardcover'),
(103, 'The Canterbury Tales', 'Geoffrey Chaucer', 'The Canterbury Tales is a collection of 24 stories that runs to over 17,000 lines written in Middle English by Geoffrey Chaucer between 1387 and 1400. In 1386, Chaucer became Controller of Customs and Justice of Peace and, in 1389, Clerk of the King\'s work.', 34, 12, 25, 120, 'Old', 1, 2, 'tct1.jpg tct2.jpg tct3.jpg ', 7, 'English', 'Original'),
(104, 'Business Boutique: A Woman\'s Guide for Making Money Doing What She Loves', 'Christy Wright', '\"More women than ever are starting businesses -- side businesses, home-based businesses, hobby businesses and small businesses,\" says Wright. \"With increasing social media platforms and online tools, it\'s never been easier. But there are also many challenges and questions that come along with starting a business.', 133, 8, 15, 349, 'As New', 1, 9, 'busi1.jpg busi2.jpg busi3.jpg ', 3, 'English', 'Paperback');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooktags`
--

DROP TABLE IF EXISTS `tblbooktags`;
CREATE TABLE IF NOT EXISTS `tblbooktags` (
  `booktagid` int(11) NOT NULL AUTO_INCREMENT,
  `bookid` int(11) NOT NULL,
  `tagid` int(11) NOT NULL,
  PRIMARY KEY (`booktagid`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblbooktags`
--

INSERT INTO `tblbooktags` (`booktagid`, `bookid`, `tagid`) VALUES
(1, 4, 1),
(2, 5, 1),
(3, 6, 1),
(4, 9, 1),
(5, 9, 2),
(6, 11, 1),
(7, 20, 1),
(8, 21, 19),
(9, 24, 19),
(10, 25, 27),
(11, 26, 12),
(12, 27, 25),
(13, 28, 26),
(14, 12, 24),
(15, 12, 25),
(16, 12, 25),
(17, 29, 34),
(18, 30, 55),
(19, 31, 41),
(20, 32, 19),
(21, 33, 12),
(22, 34, 12),
(23, 35, 25),
(24, 12, 23),
(25, 62, 42),
(26, 62, 42),
(27, 62, 42),
(28, 62, 42),
(29, 62, 42),
(30, 12, 22),
(31, 63, 22),
(32, 63, 22),
(33, 64, 10),
(34, 65, 10),
(35, 65, 11),
(36, 28, 27),
(37, 66, 12),
(38, 67, 12),
(39, 68, 15),
(40, 68, 16),
(41, 69, 13),
(42, 69, 14),
(43, 17, 21),
(44, 70, 13),
(45, 71, 13),
(46, 72, 13),
(47, 72, 14),
(48, 73, 16),
(49, 74, 16),
(50, 75, 19),
(51, 76, 18),
(52, 76, 19),
(53, 77, 20),
(54, 78, 20),
(55, 79, 20),
(56, 80, 20),
(57, 81, 19),
(58, 82, 22),
(59, 82, 23),
(60, 83, 24),
(61, 83, 25),
(62, 82, 23),
(63, 84, 23),
(64, 85, 25),
(65, 86, 23),
(66, 87, 25),
(67, 88, 23),
(68, 89, 26),
(69, 90, 51),
(70, 91, 52),
(71, 92, 55),
(72, 93, 54),
(73, 93, 55),
(74, 94, 26),
(75, 95, 28),
(76, 95, 29),
(77, 96, 52),
(78, 97, 51),
(79, 97, 52),
(80, 98, 51),
(81, 98, 53),
(82, 99, 55),
(83, 100, 42),
(84, 101, 41),
(85, 102, 42),
(86, 103, 44),
(87, 104, 27);

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

DROP TABLE IF EXISTS `tblcart`;
CREATE TABLE IF NOT EXISTS `tblcart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `bookid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  PRIMARY KEY (`cartid`),
  KEY `bookid` (`bookid`),
  KEY `orderid` (`orderid`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblcart`
--

INSERT INTO `tblcart` (`cartid`, `bookid`, `orderid`, `qty`, `subtotal`) VALUES
(69, 30, 56, 1, 145),
(70, 17, 57, 2, 2200),
(71, 17, 58, 3, 3300),
(72, 18, 59, 2, 1000),
(73, 12, 59, 1, 1000),
(74, 21, 60, 1, 1000),
(75, 21, 61, 1, 1000),
(76, 21, 62, 1, 1000),
(77, 30, 63, 2, 290),
(78, 21, 63, 1, 1000),
(79, 21, 64, 1, 1000),
(80, 21, 65, 1, 1000),
(81, 27, 65, 2, 6000),
(82, 30, 66, 1, 145),
(83, 30, 67, 1, 145),
(84, 21, 68, 1, 1000),
(85, 31, 68, 1, 500),
(86, 27, 68, 1, 3000),
(87, 30, 68, 1, 145),
(88, 17, 68, 1, 1100),
(89, 18, 68, 1, 500),
(90, 24, 68, 1, 600),
(91, 12, 69, 1, 1000),
(92, 31, 70, 1, 500),
(93, 29, 70, 1, 200);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

DROP TABLE IF EXISTS `tblcategory`;
CREATE TABLE IF NOT EXISTS `tblcategory` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(100) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`catid`, `catname`) VALUES
(1, 'Comics'),
(2, 'Arts & Photography'),
(6, 'Children\'s Books'),
(7, 'Travel'),
(8, 'Business & Money'),
(11, 'CookBooks'),
(12, 'Poetry'),
(13, 'Literature');

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

DROP TABLE IF EXISTS `tblcity`;
CREATE TABLE IF NOT EXISTS `tblcity` (
  `cityid` int(11) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(100) NOT NULL,
  `stateid` int(11) NOT NULL,
  PRIMARY KEY (`cityid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`cityid`, `cityname`, `stateid`) VALUES
(1, 'Surat', 1),
(2, 'Mumbai', 2),
(3, 'Baroda', 1),
(4, 'Nasik', 2),
(5, 'Ahmedabad', 1),
(6, 'Chennai', 3),
(7, 'Madurai', 3),
(8, 'Kanya Kumari', 3),
(9, 'Bhopal', 4),
(10, 'Indore', 4),
(11, 'Ujjain', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

DROP TABLE IF EXISTS `tblfeedback`;
CREATE TABLE IF NOT EXISTS `tblfeedback` (
  `feedbackid` int(11) NOT NULL AUTO_INCREMENT,
  `feedback` varchar(300) NOT NULL,
  `bookid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`feedbackid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`feedbackid`, `feedback`, `bookid`, `userid`) VALUES
(16, 'nice', 17, 1),
(17, 'NICE', 12, 1),
(18, 'nice', 21, 1),
(19, 'gfdfw', 29, 9),
(20, 'nice book', 21, 9),
(21, 'good', 12, 11),
(22, ' b nb,', 27, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tblinquiry`
--

DROP TABLE IF EXISTS `tblinquiry`;
CREATE TABLE IF NOT EXISTS `tblinquiry` (
  `inquiryid` int(11) NOT NULL AUTO_INCREMENT,
  `bookid` int(11) NOT NULL,
  `fromuserid` int(11) NOT NULL,
  `touserid` int(11) NOT NULL,
  `message` varchar(300) NOT NULL,
  `reply` varchar(500) NOT NULL,
  `datetime` varchar(20) NOT NULL,
  `status` tinyint(100) NOT NULL DEFAULT 0,
  PRIMARY KEY (`inquiryid`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblinquiry`
--

INSERT INTO `tblinquiry` (`inquiryid`, `bookid`, `fromuserid`, `touserid`, `message`, `reply`, `datetime`, `status`) VALUES
(30, 21, 1, 9, 'price????', '3000', '2020-May-Sun', 1),
(31, 18, 2, 1, 'available???', 'Nooo', '2020-May-Sun', 1),
(32, 21, 1, 10, 'how is it??', 'good', '2020-Jun-Sat', 1),
(33, 21, 1, 9, 'what is about??', 'harry potter', '2020-Jun-Wed', 1),
(36, 44, 1, 9, 'Are the recipes vegetarian?', '', '2020-Jul-Thu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbllike`
--

DROP TABLE IF EXISTS `tbllike`;
CREATE TABLE IF NOT EXISTS `tbllike` (
  `likeid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  PRIMARY KEY (`likeid`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbllike`
--

INSERT INTO `tbllike` (`likeid`, `userid`, `bookid`) VALUES
(26, 2, 27),
(31, 1, 21),
(37, 2, 30),
(38, 2, 17),
(40, 9, 30),
(41, 9, 17),
(42, 1, 12),
(43, 2, 12),
(44, 2, 26),
(45, 9, 21),
(46, 11, 12),
(47, 11, 43);

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

DROP TABLE IF EXISTS `tblorder`;
CREATE TABLE IF NOT EXISTS `tblorder` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `addid` int(11) NOT NULL,
  `grandtotal` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`orderid`),
  KEY `addid` (`addid`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`orderid`, `addid`, `grandtotal`, `created`) VALUES
(56, 64, 145, '2020-06-03 13:35:24'),
(57, 65, 2200, '2020-06-03 13:37:17'),
(58, 66, 3300, '2020-06-03 13:49:32'),
(59, 67, 2000, '2020-06-03 15:22:20'),
(60, 68, 1000, '2020-06-05 14:19:13'),
(61, 69, 1000, '2020-06-06 07:26:49'),
(62, 70, 1000, '2020-06-07 17:29:16'),
(63, 71, 1290, '2020-06-07 17:36:26'),
(64, 72, 1000, '2020-06-10 08:57:43'),
(65, 73, 7000, '2020-06-10 09:54:53'),
(66, 74, 145, '2020-06-10 09:56:36'),
(67, 75, 145, '2020-06-10 10:43:49'),
(68, 76, 6845, '2020-06-10 10:53:40'),
(69, 77, 1000, '2020-06-10 16:42:24'),
(70, 78, 700, '2020-06-11 06:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

DROP TABLE IF EXISTS `tblpayment`;
CREATE TABLE IF NOT EXISTS `tblpayment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `currency` varchar(50) NOT NULL,
  `gatewayname` varchar(50) NOT NULL,
  `bankname` varchar(50) NOT NULL,
  `respcode` int(11) NOT NULL,
  `txnid` varchar(100) NOT NULL,
  `txnamount` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `banktxnid` int(11) NOT NULL,
  `txndate` datetime NOT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `orderid` (`order_id`),
  KEY `order_id` (`order_id`),
  KEY `order_id_2` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`payment_id`, `currency`, `gatewayname`, `bankname`, `respcode`, `txnid`, `txnamount`, `order_id`, `status`, `banktxnid`, `txndate`) VALUES
(28, 'INR', 'WALLET', 'WALLET', 1, '20200607111212800110168366301617491', 1000, 62, 'TXN_SUCCESS', 62585210, '2020-06-07 22:59:19'),
(27, 'INR', 'WALLET', 'WALLET', 1, '20200606111212800110168376801624228', 1000, 61, 'TXN_SUCCESS', 62579236, '2020-06-06 12:56:50'),
(26, 'INR', 'WALLET', 'WALLET', 1, '20200605111212800110168385601594333', 1000, 60, 'TXN_SUCCESS', 62576246, '2020-06-05 19:49:14'),
(25, 'INR', 'WALLET', 'WALLET', 1, '20200603111212800110168603101588714', 2000, 59, 'TXN_SUCCESS', 62562512, '2020-06-03 20:52:23'),
(24, 'INR', 'WALLET', 'WALLET', 1, '20200603111212800110168613801611626', 3300, 58, 'TXN_SUCCESS', 62562086, '2020-06-03 19:19:36'),
(23, 'INR', 'WALLET', 'WALLET', 1, '20200603111212800110168621003002593', 2200, 57, 'TXN_SUCCESS', 62562005, '2020-06-03 19:07:18'),
(22, 'INR', 'WALLET', 'WALLET', 1, '20200603111212800110168631801595053', 145, 56, 'TXN_SUCCESS', 62561995, '2020-06-03 19:05:25'),
(21, 'INR', 'WALLET', 'WALLET', 1, '20200603111212800110168644501602132', 3000, 55, 'TXN_SUCCESS', 62561980, '2020-06-03 19:02:03'),
(20, 'INR', 'HDFC', 'HDFC', 1, '20200603111212800110168666901603108', 1000, 53, 'TXN_SUCCESS', 2147483647, '2020-06-03 18:59:00'),
(19, 'INR', 'WALLET', 'WALLET', 1, '20200603111212800110168677401585463', 3000, 52, 'TXN_SUCCESS', 62561908, '2020-06-03 18:48:57'),
(18, 'INR', 'WALLET', 'WALLET', 1, '20200603111212800110168683501590859', 1000, 51, 'TXN_SUCCESS', 62561889, '2020-06-03 18:46:33'),
(17, 'INR', 'WALLET', 'WALLET', 1, '20200603111212800110168694601594016', 1000, 50, 'TXN_SUCCESS', 62561864, '2020-06-03 18:44:54'),
(14, 'INR', 'HDFC', 'HDFC', 1, '20200603111212800110168930101593390', 1100, 47, 'TXN_SUCCESS', 2147483647, '2020-06-03 18:32:09'),
(15, 'INR', 'WALLET', 'WALLET', 1, '20200603111212800110168921501581377', 1100, 48, 'TXN_SUCCESS', 62561805, '2020-06-03 18:38:09'),
(16, 'INR', 'HDFC', 'HDFC', 1, '20200603111212800110168916101615101', 4000, 49, 'TXN_SUCCESS', 2147483647, '2020-06-03 18:40:06'),
(29, 'INR', 'WALLET', 'WALLET', 1, '20200607111212800110168356601615258', 1290, 63, 'TXN_SUCCESS', 62585240, '2020-06-07 23:06:28'),
(30, 'INR', 'WALLET', 'WALLET', 1, '20200610111212800110168349301628418', 1000, 64, 'TXN_SUCCESS', 62602803, '2020-06-10 14:27:46'),
(31, 'INR', 'WALLET', 'WALLET', 1, '20200610111212800110168326501634869', 145, 66, 'TXN_SUCCESS', 62603524, '2020-06-10 15:26:37'),
(32, 'INR', 'SBI', 'SBI', 1, '20200610111212800110168313001641139', 145, 67, 'TXN_SUCCESS', 2147483647, '2020-06-10 16:13:56'),
(33, 'INR', 'WALLET', 'WALLET', 1, '20200610111212800110168306501705048', 6845, 68, 'TXN_SUCCESS', 62604243, '2020-06-10 16:23:40'),
(34, 'INR', 'WALLET', 'WALLET', 1, '20200610111212800110168295201626387', 1000, 69, 'TXN_SUCCESS', 62606718, '2020-06-10 22:12:36'),
(35, 'INR', 'SBI', 'SBI', 1, '20200611111212800110168077601616037', 700, 70, 'TXN_SUCCESS', 2147483647, '2020-06-11 11:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `tblstate`
--

DROP TABLE IF EXISTS `tblstate`;
CREATE TABLE IF NOT EXISTS `tblstate` (
  `stateid` int(11) NOT NULL AUTO_INCREMENT,
  `statename` varchar(100) NOT NULL,
  PRIMARY KEY (`stateid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblstate`
--

INSERT INTO `tblstate` (`stateid`, `statename`) VALUES
(1, 'Gujarat'),
(2, 'Maharashtra\r\n'),
(3, 'Tamil Nadu'),
(4, 'Madhya Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

DROP TABLE IF EXISTS `tblsubcategory`;
CREATE TABLE IF NOT EXISTS `tblsubcategory` (
  `subcatid` int(11) NOT NULL AUTO_INCREMENT,
  `subcatname` varchar(100) NOT NULL,
  `catid` int(11) NOT NULL,
  PRIMARY KEY (`subcatid`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`subcatid`, `subcatname`, `catid`) VALUES
(7, 'Fiction', 1),
(8, 'Non-Fiction', 1),
(9, 'Visual Art', 2),
(10, 'Photography Collection', 2),
(11, 'Fiction', 6),
(12, 'Educational ', 6),
(13, 'Asia', 7),
(14, 'Europe', 7),
(15, 'Economics', 8),
(16, 'Industries', 8),
(21, 'Gujarati', 11),
(22, 'South Indian', 11),
(23, 'Italian', 11),
(24, 'Hindi', 12),
(25, 'English', 12),
(26, 'Urdu', 12),
(27, 'Historical', 13),
(28, 'Romance', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbltags`
--

DROP TABLE IF EXISTS `tbltags`;
CREATE TABLE IF NOT EXISTS `tbltags` (
  `tagid` int(11) NOT NULL AUTO_INCREMENT,
  `tagname` varchar(100) NOT NULL,
  `subcatid` int(11) NOT NULL,
  PRIMARY KEY (`tagid`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbltags`
--

INSERT INTO `tbltags` (`tagid`, `tagname`, `subcatid`) VALUES
(10, 'Superhero', 7),
(11, 'Humor', 7),
(12, 'Science', 8),
(13, 'Graphic', 9),
(14, 'Illusion', 9),
(15, 'Wild-life', 10),
(16, 'Nature', 10),
(17, 'Sci-Fi', 11),
(18, 'Comedy', 11),
(19, 'Animation', 11),
(20, 'Textbooks', 12),
(21, 'Science', 12),
(22, 'Culture', 13),
(23, 'Tour Manual', 13),
(24, 'Research', 14),
(25, 'Experience', 14),
(26, 'Finance', 15),
(27, 'Trade', 15),
(28, 'International', 16),
(29, 'Statistics', 16),
(34, 'Traditional', 21),
(35, 'Fusion', 21),
(36, 'Breakfast', 22),
(37, 'Brunch', 22),
(38, 'Authentic', 22),
(39, 'Dessert', 23),
(40, 'Main Course', 23),
(41, 'Chhand', 24),
(42, 'Dohe', 24),
(43, 'Chaupai', 24),
(44, 'Epics', 25),
(45, 'Pastoral', 25),
(46, 'Sufi', 26),
(47, 'Kafi', 26),
(48, 'Gazal', 26),
(51, 'Multi-Period', 27),
(52, 'Mysteries', 27),
(53, 'Time-Travel', 27),
(54, 'Sagas', 28),
(55, 'Fantasy', 28);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `useremailid` varchar(100) NOT NULL,
  `userpassword` varchar(50) NOT NULL,
  `contactno` int(10) NOT NULL,
  `cityid` int(11) NOT NULL,
  `stateid` int(11) NOT NULL,
  `userimageurl` varchar(500) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`userid`, `username`, `firstname`, `lastname`, `useremailid`, `userpassword`, `contactno`, `cityid`, `stateid`, `userimageurl`) VALUES
(1, 'amishakanani', 'Amisha', 'Kanani', 'kanani@gmail.com', '123', 1234567890, 1, 2, 'amisha.jpg'),
(2, 'milankanani', 'Milan', 'Kanani', 'milan424@gmail.com', '123', 1234567890, 6, 3, 'milan.jpg'),
(9, 'gabani', 'SHREENA', 'GABANI', 'shreenagabani317@gmail.com', '123', 2147483647, 9, 4, 'gabani.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblwishlist`
--

DROP TABLE IF EXISTS `tblwishlist`;
CREATE TABLE IF NOT EXISTS `tblwishlist` (
  `wishlistid` int(11) NOT NULL AUTO_INCREMENT,
  `bookid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`wishlistid`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblwishlist`
--

INSERT INTO `tblwishlist` (`wishlistid`, `bookid`, `userid`) VALUES
(38, 19, 2),
(41, 22, 9),
(43, 26, 2),
(61, 30, 9),
(62, 12, 1),
(64, 12, 2),
(67, 12, 11),
(68, 43, 11);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbladdress`
--
ALTER TABLE `tbladdress`
  ADD CONSTRAINT `tbladdress_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `tbluser` (`userid`),
  ADD CONSTRAINT `tbladdress_ibfk_2` FOREIGN KEY (`cityid`) REFERENCES `tblcity` (`cityid`),
  ADD CONSTRAINT `tbladdress_ibfk_3` FOREIGN KEY (`stateid`) REFERENCES `tblstate` (`stateid`);

--
-- Constraints for table `tblcart`
--
ALTER TABLE `tblcart`
  ADD CONSTRAINT `tblcart_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `tblbook1` (`bookid`),
  ADD CONSTRAINT `tblcart_ibfk_2` FOREIGN KEY (`orderid`) REFERENCES `tblorder` (`orderid`);

--
-- Constraints for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD CONSTRAINT `tblorder_ibfk_1` FOREIGN KEY (`addid`) REFERENCES `tbladdress` (`addid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
