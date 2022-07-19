-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2016 at 07:25 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bangladeshethnobotanionlinedatabase`
--
CREATE DATABASE IF NOT EXISTS `bangladeshethnobotanionlinedatabase` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bangladeshethnobotanionlinedatabase`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'Admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `descriptionoftree`
--

CREATE TABLE IF NOT EXISTS `descriptionoftree` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `scientificname` varchar(50) NOT NULL,
  `synonyms` varchar(300) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `family` varchar(100) NOT NULL,
  `groupname` varchar(50) NOT NULL,
  `growthhabit` varchar(50) NOT NULL,
  `banglaname` varchar(300) NOT NULL,
  `tribalname` varchar(300) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `modeofuse` varchar(1000) NOT NULL,
  `distribution` varchar(1000) NOT NULL,
  `diseas` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `vis` int(100) NOT NULL,
  `english_name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `descriptionoftree`
--

INSERT INTO `descriptionoftree` (`id`, `scientificname`, `synonyms`, `duration`, `family`, `groupname`, `growthhabit`, `banglaname`, `tribalname`, `description`, `modeofuse`, `distribution`, `diseas`, `image`, `vis`, `english_name`) VALUES
(51, 'Elatostema papilosum Wedd.', 'jjjjjjjjjjjj', 'Annual', 'Urticaceae', 'Monocot', 'Herb', 'Elya', 'Shilajhar (Chakma), Omchoi obpai (Murang)', '', '', 'Forests of Chittagong Hill Tracts and Cox''s Bazar.', 'jjjjjjjjj', '', 0, 'jjjjjjjjjj'),
(52, 'Elatostema papilosum Wedd.', '', 'Annual', 'kkkk', 'Monocot', '', 'করলা', '', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma).\r\nA paste of the leaves is applied to affected areas for the treatment of infections (Murang).', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma).\r\nA paste of the leaves is applied to affected areas for the treatment of infections (Murang).', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma).\r\nA paste of the leaves is applied to affected a', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma). A paste of the leaves is applied to affected ar', '', 1, ''),
(53, 'Crushed plants of Elatostemma papilosum, Hedyotis ', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the s', 'Annual', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the s', 'Monocot', 'Crushed plants of Elatostemma papilosum, Hedyotis ', 'Crushed plants of Elatostemma papilosum, Hedyotis ', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the s', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma).\r\nA paste of the leaves is applied to affected areas for the treatment of infections (Murang).', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma).\r\nA paste of the leaves is applied to affected areas for the treatment of infections (Murang).', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma).\r\nA paste of the leaves is applied to affected a', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma). A paste of the leaves is applied to affected ar', '', 0, 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the s'),
(54, 'Crushed plants of Elatostemma papilosum, Hedyotis ', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the s', 'Annual', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the s', 'Monocot', 'Crushed plants of Elatostemma papilosum, Hedyotis ', 'Crushed plants of Elatostemma papilosum, Hedyotis ', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the s', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma).\r\nA paste of the leaves is applied to affected areas for the treatment of infections (Murang).', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma).\r\nA paste of the leaves is applied to affected areas for the treatment of infections (Murang).', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma).\r\nA paste of the leaves is applied to affected a', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma). A paste of the leaves is applied to affected ar', 'DSC_0116.JPG', 0, 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the s'),
(55, 'Crushed plants of Elatostemma papilosum, Hedyotis ', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the s', 'Biennial', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the s', 'Monocot', 'Crushed plants of Elatostemma papilosum, Hedyotis ', 'Crushed plants of Elatostemma papilosum, Hedyotis ', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the s', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma).\r\nA paste of the leaves is applied to affected areas for the treatment of infections (Murang).', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma).\r\nA paste of the leaves is applied to affected areas for the treatment of infections (Murang).', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma).\r\nA paste of the leaves is applied to affected a', 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma). A paste of the leaves is applied to affected ar', 'FB_20150513_22_18_52_Saved_Picture.jpg', 0, 'Crushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the s'),
(56, '', '', 'Perennial', '', 'Gymnosperm', '', '', '', '', '', '', '', '', 1, ''),
(57, 'Cocos nucifera L.', 'Calappa nucifera (L.) Kuntze , Cocos indica Royle', 'Perennial', 'Arecaceae - Palm family ', 'Monocot', 'Plam', 'Narikel, Dab, Naiyl (Noakhali), ????', 'Nariul (Chakma), Kikuii (Khumi), Own-ui (Murang)', 'A tall palm, 12-24 m high, with straight or curved annulate stem. Leaves large, 1.8-4.5 m long, pinnatisect; leaflets linear-lanceolate. Spadix long, stout, androgynous, simply panicled. Lower spathes 60-90 cm long, oblong, hard, spliting lengthwise. Fruit trigonously obovoid or subglobose, with a large cavity filled with sweetish fluid.', 'Green coconut water is taken as soft drinks for body cooling and refreshing (Khumi).\r\nGreen coconut water is carminative and digestive. Coconut water is taken as a refreshing beverage (Murang).\r\nThe fruit shell is divided into two parts. The patient is stood on the shell by his leg and given slight pressure. After this processing leg touching in the soil or water is prohibited for the treatment of paralysis (Rakhaing).', 'Cultivated widely throughout Bangladesh.', '', '', 0, 'Cocoanut'),
(58, 'Cocos nucifera L.', 'Calappa nucifera (L.) Kuntze,Cocos indica Royle', 'Perennial', 'Arecaceae - Palm family ', 'Monocot', 'Plam', 'Narikel, Dab, Naiyl (Noakhali).', 'Nariul (Chakma), Kikuii (Khumi), Own-ui (Murang)', 'A tall palm, 12-24 m high, with straight or curved annulate stem. Leaves large, 1.8-4.5 m long, pinnatisect; leaflets linear-lanceolate. Spadix long, stout, androgynous, simply panicled. Lower spathes 60-90 cm long, oblong, hard, spliting lengthwise. Fruit trigonously obovoid or subglobose, with a large cavity filled with sweetish fluid.', 'Green coconut water is taken as soft drinks for body cooling and refreshing (Khumi).\r\nGreen coconut water is carminative and digestive. Coconut water is taken as a refreshing beverage (Murang).\r\nThe fruit shell is divided into two parts. The patient is stood on the shell by his leg and given slight pressure. After this processing leg touching in the soil or water is prohibited for the treatment of paralysis (Rakhaing).', 'Cultivated widely throughout Bangladesh.', 'diarea', 'DSC01468.JPG', 0, 'Cocoanut'),
(59, 'Cocos nucifera L.', 'Calappa nucifera (L.) Kuntze,Cocos indica Royle', 'Perennial', 'Arecaceae - Palm family ', 'Monocot', 'Plam', 'Narikel, Dab, Naiyl (Noakhali).', 'Nariul (Chakma), Kikuii (Khumi), Own-ui (Murang)', 'A tall palm, 12-24 m high, with straight or curved annulate stem. Leaves large, 1.8-4.5 m long, pinnatisect; leaflets linear-lanceolate. Spadix long, stout, androgynous, simply panicled. Lower spathes 60-90 cm long, oblong, hard, spliting lengthwise. Fruit trigonously obovoid or subglobose, with a large cavity filled with sweetish fluid.', 'Green coconut water is taken as soft drinks for body cooling and refreshing (Khumi).\r\nGreen coconut water is carminative and digestive. Coconut water is taken as a refreshing beverage (Murang).\r\nThe fruit shell is divided into two parts. The patient is stood on the shell by his leg and given slight pressure. After this processing leg touching in the soil or water is prohibited for the treatment of paralysis (Rakhaing).', '34444', 'diarea', 'DSC01468.JPG', 0, 'Cocoanut'),
(60, 'Abelmoschus esculentus (L.) Moench', 'Hibiscus esculentus L.', 'Perennial', 'Malvaceae - Mallow family', 'Dicot', 'Shrub', 'Dheros; Vendi (Chittagong).', 'Clag-long, Lai Long Ma (Murang).', 'A tall shrubby annual, covered with rough hairs. Leaves polymorphous; the lower roundish-angled, the upper palmately 3-5-lobed, lobes oblong toothed, hairy on both surfaces; petioles long. Flowers large, axillary, yellow with crimson centre. Capsule pyramidal-oblong, 5-angled, hispid.', 'Paste of boiled fruits is taken with boiled rice to cure dysentery and diarrhoea. Fruits are cooked as vegetable.', 'Cultivated widely throughout the country.', 'Shutterstock', 'LadiesFinger.jpg', 0, ''),
(61, 'Abelmoschus moschatus (L.) Medik', 'Hibiscus abelmoschus L. Abelmoschus moschatus Medik. Abelmoschus moschatus subsp. moschatus.', 'Perennial', 'Malvaceae - Mallow family', 'Dicot', 'Shrub', 'Mushakdana, Kalokasturi', 'Konigaas (Chakma), Taowi-akangnay (Khumi), Fluma Wai (Marma), Purnima Gaith (Tanchangya), Bacchama (', 'A tall annual; stem clothed with long hairs. Leaves polymorphous, the lower ovate, acute or roundish-angled, the upper palmately 3-7 lobed, hairy on both surfaces. Flowers large, corolla bell-shaped, yellow with purple centre. Capsules fulvous-hairy, pyramidal-oblong, acute.', 'Leaves together with 17 other plants (see Typhonium trilobatum) are used to repare a paste, which is applied to the affected areas for the treatment of lephantiasis.(Tripura).\r\nLeaves of Abelmoschus moschatus, whole plants of Bogotori and Thladiantha cordifolia are crushed together and applied to wounds for the treatment of healing wounds (Chakma).\r\nRoot/seed extract is mixed with honey is applied to tongue for the treatment of tongue sore (Khumi).', 'Chittagong, Chittagong Hill Tracts, Sylhet and Northern districts in fallow lands and forest outskirts.', 'Abdominal Cramps (Heat Cramps)', 'Muskmallow.jpg', 0, 'Musk mallow.'),
(62, 'Bauhinia acuminita L.', '', 'Perennial', 'Fabaceae - Pea family', 'Dicot', 'Tree', 'Shet Kanchan', 'Sadakadam (Chakma), Magong-aphal (Garo), Leyei-kaowling (Khumi), O-kaw (Murang).', 'A small evergreen to semi-deciduous tree. Leaves slightly cordate, lobes acute or subobtuse, not reaching half way down. Racemes axillary, short peduncled, corymbose. Petals oblong, white. Pods oblong, flat.', 'Barks and leaves are used in dropsy (Chakma).\r\nDecoction prepared from bark is taken for the treatment of asthma (Khumi).\r\nLeaf extract is taken to treat piles. Also planted as ornamental (Murang).', 'Occur in the forests of Chittagong, Chittagong Hill Tracts and Moulavi Bazar.', 'Abscessed Tooth Guide', 'Dwarfwhitebauhinia.jpg', 0, 'Dwarf white bauhinia'),
(63, 'Cocos nucifera L.', 'Calappa nucifera (L.) Kuntze, Cocos indica Royle', 'Perennial', 'Arecaceae - Palm family ', 'Monocot', 'Plam', 'Narikel, Dab, Naiyl (Noakhali).', 'Nariul (Chakma), Kikuii (Khumi), Own-ui (Murang).', 'A tall palm, 12-24 m high, with straight or curved annulate stem. Leaves large, 1.8-4.5 m long, pinnatisect; leaflets linear-lanceolate. Spadix long, stout, androgynous, simply panicled. Lower spathes 60-90 cm long, oblong, hard, spliting lengthwise. Fruit trigonously obovoid or subglobose, with a large cavity filled with sweetish fluid.', 'Green coconut water is taken as soft drinks for body cooling and refreshing (Khumi).\r\nGreen coconut water is carminative and digestive. Coconut water is taken as a refreshing beverage (Murang).\r\nThe fruit shell is divided into two parts. The patient is stood on the shell by his leg and given slight pressure. After this processing leg touching in the soil or water is prohibited for the treatment of paralysis (Rakhaing).', 'Cultivated widely throughout Bangladesh.', 'Fever', 'coconut.jpg', 0, 'Cocoanut'),
(64, '', '', 'Perennial', 'Bombacaceae - Kapok-tree family ', 'Dicot', 'Tree', '', 'Bely-plow (Khumi).', '', '', '', '', 'coconut.jpg', 1, ''),
(65, 'Ceiba pentandra (L.) Gaertn.', '', 'Perennial', 'Bombacaceae - Kapok-tree family ', 'Dicot', 'Tree', '', 'Bely-plow (Khumi).', '', '', '', '', 'coconut.jpg', 0, ''),
(66, 'Ceiba pentandra (L.) Gaertn.', 'Bombax pentandrum L., Ceiba caribaea (DC.) A. Chev., Ceiba casearia Medik. Eriodendron anfractuosum DC', 'Perennial', 'Bombacaceae - Kapok-tree family ', 'Dicot', 'Tree', '', 'Bely-plow (Khumi).', '', '', '', '', 'coconut.jpg', 0, ''),
(67, 'Ceiba pentandra (L.) Gaertn.', 'Bombax pentandrum L., Ceiba caribaea (DC.) A. Chev., Ceiba casearia Medik. Eriodendron anfractuosum DC', 'Perennial', 'Bombacaceae - Kapok-tree family ', 'Dicot', 'Tree', '', 'Bely-plow (Khumi).', '', '', '', '', 'coconut.jpg', 0, 'White silk cotton tree, Kapok, True Kapok tree'),
(68, 'Ceiba pentandra (L.) Gaertn.', 'Bombax pentandrum L.,Ceiba caribaea (DC.) A. Chev.,Ceiba casearia Medik. Eriodendron anfractuosum DC', 'Perennial', 'Bombacaceae - Kapok-tree family ', 'Dicot', 'Tree', 'Shet Simul, Kapok; Sirmai Tula', 'Bely-plow (Khumi).', '', '', '', '', 'coconut.jpg', 0, 'White silk cotton tree, Kapok, True Kapok tree'),
(69, 'Ceiba pentandra (L.) Gaertn.', 'Bombax pentandrum L., Ceiba caribaea (DC.) A. Chev., Ceiba casearia Medik. Eriodendron anfractuosum DC', 'Perennial', 'Bombacaceae - Kapok-tree family ', 'Dicot', 'Tree', 'Shet Simul, Kapok; Sirmai Tula, Burma Simul', 'Bely-plow (Khumi).', '', '', '', '', 'coconut.jpg', 0, 'White silk cotton tree, Kapok, True Kapok tree'),
(70, 'Ceiba pentandra (L.) Gaertn.', 'Bombax pentandrum L., Ceiba caribaea (DC.) A. Chev., Ceiba casearia Medik. Eriodendron anfractuosum DC', 'Perennial', 'Bombacaceae - Kapok-tree family ', 'Dicot', 'Tree', 'Shet Simul, Kapok; Sirmai Tula, Burma Simul', 'Bely-plow (Khumi).', 'A medium-sized, deciduous tree; branches horizontal, in whorls of three. Leaves long petioled, leaflets 5-8, lanceolate. Flowers dirty white, appears at the ends of the branches in clusters of 2-8. Capsules fusiform.', 'Decoction or infusion of the flowers is given as a laxative. The oil from the seeds is used as an emollient. Cotton is used for pillow and blanket (Khumi).', '', '', 'TrueKapoktree.jpg', 0, 'White silk cotton tree, Kapok, True Kapok tree'),
(71, 'Ceiba pentandra (L.) Gaertn.', 'Bombax pentandrum L., Ceiba caribaea (DC.) A. Chev., Ceiba casearia Medik. Eriodendron anfractuosum DC', 'Perennial', 'Bombacaceae - Kapok-tree family ', 'Dicot', 'Tree', 'Shet Simul, Kapok; Sirmai Tula, Burma Simul', 'Bely-plow (Khumi).', 'A medium-sized, deciduous tree; branches horizontal, in whorls of three. Leaves long petioled, leaflets 5-8, lanceolate. Flowers dirty white, appears at the ends of the branches in clusters of 2-8. Capsules fusiform.', '', 'Decoction or infusion of the flowers is given as a laxative. The oil from the seeds is used as an emollient. Cotton is used for pillow and blanket (Khumi).', '', 'TrueKapoktree.jpg', 0, 'White silk cotton tree, Kapok, True Kapok tree'),
(72, 'Ceiba pentandra (L.) Gaertn.', 'Bombax pentandrum L., Ceiba caribaea (DC.) A. Chev., Ceiba casearia Medik. Eriodendron anfractuosum DC', 'Perennial', 'Bombacaceae - Kapok-tree family ', 'Dicot', 'Tree', 'Shet Simul, Kapok; Sirmai Tula, Burma Simul', 'Bely-plow (Khumi).', 'A medium-sized, deciduous tree; branches horizontal, in whorls of three. Leaves long petioled, leaflets 5-8, lanceolate. Flowers dirty white, appears at the ends of the branches in clusters of 2-8. Capsules fusiform.', 'The plant yields a gum, which contains phenolic substances. It also contains linarin (acacetin 7-rutinoside) and water-soluble antigen. Seeds contain a fixed oil rich in palmitic, oleic and linoleic acids (Ghani, 2003).', 'Decoction or infusion of the flowers is given as a laxative. The oil from the seeds is used as an emollient. Cotton is used for pillow and blanket (Khumi).', 'Fever,pain', 'TrueKapoktree.jpg', 0, 'White silk cotton tree, Kapok, True Kapok tree'),
(73, 'Ceiba pentandra (L.) Gaertn.', 'Bombax pentandrum L., Ceiba caribaea (DC.) A. Chev., Ceiba casearia Medik. Eriodendron anfractuosum DC', 'Perennial', 'Bombacaceae - Kapok-tree family ', 'Dicot', 'Tree', 'Shet Simul, Kapok; Sirmai Tula, Burma Simul', 'Bely-plow (Khumi).', 'A medium-sized, deciduous tree; branches horizontal, in whorls of three. Leaves long petioled, leaflets 5-8, lanceolate. Flowers dirty white, appears at the ends of the branches in clusters of 2-8. Capsules fusiform.', 'The plant yields a gum, which contains phenolic substances. It also contains linarin (acacetin 7-rutinoside) and water-soluble antigen. Seeds contain a fixed oil rich in palmitic, oleic and linoleic acids (Ghani, 2003).', 'Hello How are you Cox Bazar Chittagong Bangladesh', 'Fever', 'TrueKapoktree.jpg', 0, 'White silk cotton tree, Kapok, True Kapok tree'),
(74, 'Dysophylla auricularia Blume.', '', 'Annual', 'Lamiaceae', 'Dicot', 'Herb', '', 'Acha-kamsen (Khumi), Krom Dung Pow(Marma), Krom be(Marma), Rixom payo (Marma)', 'A hairy course annual. Leaves ovate-lanceolate or ovate-oblong, acute, serrate, hairy.Flowers pinkish.Nutlets ellipsoid.', 'An extract of the whole plant is taken with salt for the treatment of diarrhoea (Marma).\r\nLeaves and flowers are used to rub in whole body for the remedy of fever. Tie a piece of bark with a thread round the neck or hand of frightened child for the treatment of phobia (Khumi).\r\nLeaf juice is used as eye drops in hysteria. The extract of the plant is given with salt in diarrhoea by the Marma in Bandarban.', 'Chittagong and Chittagong Hill Tracts, in fallow lands.', '', 'Dysophylla auricularia Blume.jpg', 0, ''),
(75, 'Elatostema papilosum Wedd.', '', 'Annual', 'Urticaceae', 'Monocot', 'Herb', 'Elya', 'Shilajhar (Chakma), Omchoi obpai (Murang)', 'Suberect herb, young stems densely pale pubescent. Leaves asymmetrically elliptic; stipule lanceolate. Male heads peduncled, recepticular bracts not horned. Female heads sessile. Achnes ribbed.', 'rushed plants of Elatostemma papilosum, Hedyotis scandens and Tacca integrifolia are dried in the sun and taken for the treatment of hysteria (Chakma).\r\nA paste of the leaves is applied to affected areas for the treatment of infections (Murang).', 'Occur in the moist forest floors of Chittagong, Chittagong Hill Tracts, Cox''s Bazar and Sylhet.', '', '', 0, ''),
(76, 'Garcinia xanthochymus Hook. f. ex T. Anderson', 'Garcinia pictoria (Roxb.) Engl. Garcinia tinctoria (DC.) W. Wight Xanthochymus pictorius Roxb. Xanthochymus tinctorius DC.', 'Perennial', 'Clusiaceae - Mangosteen family ', 'Dicot', 'Tree', 'Dephal, Dambel, Tamal', 'Dem-gola (Chakma), Aruak (Garo)', 'Evergreen trees. Leaves large. Very coriaceous opposite, liner, oblong. Flowers polygamous, solitary male flowers fascicled shortly pedicelled. Fruits berry, like rind leathery, green in colour. Turning golden yellow when it is ripen.', 'Golden yellow fruits with a yellow juicy and acidic pulp usually containing two seeds. Flavor is quite tasty and a bit sour, ripe fruits can be eaten flesh. It is also used in making jams, can be used as a substitute for tamarind in cooking(Dinajpur).\r\nA sharbot (beverage) made with "Amsul" (sun-dried slices of the fruit), with a little rock-salt, pepper, cumin, ginger and sugar, is administered in bilious conditions.', '', '', 'tamal.jpg', 0, 'Garcinia'),
(77, '', '', '', '', '', '', '', '', '', '', '', '', '', 1, ''),
(78, '', '', 'Annual', '', 'Monocot', '', '', '', '', '', 'Forest', '', '', 1, ''),
(79, '', '', 'Annual', '', 'Monocot', '', '', '', '', '', 'Forest of Chittagong hill trackt and', '', '', 1, ''),
(80, '', '', 'Annual', '', 'Monocot', '', '', '', '', 'Coxs', 'Forest of Chittagong hill trackt and coxs bazar', '', '', 1, ''),
(81, '', '', 'Annual', '', 'Monocot', '', '', '', '', '', '@ ', '', '', 1, ''),
(82, '', '', 'Annual', '', 'Monocot', '', '', '', '', '', '"', '', '', 1, ''),
(83, '', '', 'Annual', '', 'Monocot', '', '', '', '', '', '-', '', '', 1, ''),
(84, '', '', 'Annual', '', 'Monocot', '', '', '', '', '', '''', '', '', 1, ''),
(85, '', '', 'Annual', '', 'Monocot', '', '', '', '', '', 'Planted mainly in Cox''s Bazar, Chittagong Hill Tracts and Chittagong; sporadically elsewhere.', '', '', 0, ''),
(86, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(87, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(88, 'Abelmoschus esculentus (L.) Moench', '', 'Annual', '', 'Monocot', '', 'ভেন্ডি', '', '', '', '', '', '', 0, ''),
(89, 'আলালাল', '', 'Annual', '', 'Monocot', '', 'ভেন্ডি', '', '', '', '', '', '', 0, ''),
(90, 'akakaka', 'akakakak', 'Annual', '', 'Monocot', '', '', '', '', '', '', '', '', 0, ''),
(91, 'Bangla Test', '', 'Annual', '', 'Monocot', '', 'ভেন্ডি বাংলা টেস্ট', '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `dictionary`
--

CREATE TABLE IF NOT EXISTS `dictionary` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `dictionary_type` varchar(15) NOT NULL,
  `dictionary_word` varchar(30) NOT NULL,
  `word_details` varchar(200) NOT NULL,
  `vis` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dictionary`
--

INSERT INTO `dictionary` (`id`, `dictionary_type`, `dictionary_word`, `word_details`, `vis`) VALUES
(1, 'Botanical', 'Botany', 'One of the most interested subject !', 0),
(2, 'Botanical', 'Indigenous', 'Don''t know the word meaning! This is done afetr update', 0),
(3, 'Pharmacological', 'Pharmacy', 'Pharmacy create medicine for desias !', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
