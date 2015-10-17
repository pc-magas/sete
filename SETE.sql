-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: localhost
-- Χρόνος δημιουργίας: 17 Οκτ 2015 στις 18:38:44
-- Έκδοση διακομιστή: 5.5.44-MariaDB-1ubuntu0.14.04.1
-- Έκδοση PHP: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση: `SETE`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Business`
--

CREATE TABLE IF NOT EXISTS `Business` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf32 NOT NULL,
  `place_id` int(10) unsigned NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `long` float NOT NULL,
  `lat` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rew` (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Άδειασμα δεδομένων του πίνακα `Business`
--

INSERT INTO `Business` (`id`, `name`, `place_id`, `description`, `long`, `lat`) VALUES
(1, 'Marika''s Souvlaki', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.', 36.1679, 27.6846);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Keywords`
--

CREATE TABLE IF NOT EXISTS `Keywords` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `offer_id` int(10) unsigned NOT NULL,
  `name` varchar(45) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lope` (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Άδειασμα δεδομένων του πίνακα `Keywords`
--

INSERT INTO `Keywords` (`id`, `offer_id`, `name`) VALUES
(1, 1, 'gyro'),
(2, 1, 'pita'),
(3, 1, 'Pira Gyro');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Offers`
--

CREATE TABLE IF NOT EXISTS `Offers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price` float NOT NULL,
  `business_id` int(10) unsigned NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `name` varchar(45) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `okn` (`business_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci' AUTO_INCREMENT=2 ;

--
-- Άδειασμα δεδομένων του πίνακα `Offers`
--

INSERT INTO `Offers` (`id`, `price`, `business_id`, `description`, `name`) VALUES
(1, 3.25, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.', 'Puta Gyros ');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Places`
--

CREATE TABLE IF NOT EXISTS `Places` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `long` float NOT NULL,
  `lat` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Άδειασμα δεδομένων του πίνακα `Places`
--

INSERT INTO `Places` (`id`, `name`, `description`, `long`, `lat`) VALUES
(1, ' Ρόδος', 'Η Ρόδος είναι ένα νησί της Ελλάδας που βρίσκεται στο νοτιοανατολικό Αιγαίο. Βρίσκεται περίπου 350 χλμ νοτιοανατολικά της Αθήνας και 18 χλμ νοτιοδυτικά της Τουρκίας. Με έκταση 1.400,684 χλμ2 είναι το μεγαλύτερο νησί του συμπλέγματος των Δωδεκανήσων και το τέταρτο σε σειρά ολόκληρης της χώρας, μετά την Κρήτη, την Εύβοια και τη Λέσβο. Διαθέτει ακτογραμμή μήκους 253 χλμ και το υψηλότερο σημείο της είναι η κορυφή του όρους Αττάβυρος σε ύψος 1.215 μ. Σύμφωνα με την απογραφή του 2011, ο πληθυσμός του νησιού ανέρχεται σε 115.490 κατοίκους, γεγονός που καθιστά τη Ρόδο το τρίτο πολυπληθέστερο ελληνικό νησί, μετά την Κρήτη και την Εύβοια.\r\n\r\nΣτο βορειοανατολικό άκρο του νησιού βρίσκεται η πρωτεύουσα του, η πόλη της Ρόδου, που με πληθυσμό περίπου 55.000 κατοίκους αποτελεί και το μεγαλύτερο οικισμό του. Εντός των ορίων της πόλης της Ρόδου, βρίσκεται η Μεσαιωνική πόλη της Ρόδου, μια από τις καλύτερα διατηρημένες μεσαιωνικές πόλεις του κόσμου, η οποία έχει ενταχθεί, από το 1988, στα μνημεία παγκόσμιας κληρονομιάς της UNESCO.\r\n\r\nΣτο νησί λειτουργούν τμήματα του Πανεπιστημίου Αιγαίου και πιο συγκεκριμένα: το Παιδαγωγικό Τμήμα Δημοτικής Εκπαίδευσης, το Τμήμα Επιστημών Προσχολικής Αγωγής και Εκπαιδευτικού Σχεδιασμού και το Τμήμα Μεσογειακών Σπουδών.\r\n\r\nΟι σημαντικότερες θρησκευτικές γιορτές είναι το προσκύνημα στον Άγιο Φανούριο (27 Αυγούστου), τον προστάτη του νησιού της Ρόδου, της Παναγιάς της Κρεμαστής (15 Αυγούστου), της Παναγιάς Τσαμπίκας (8 Σεπτεμβρίου), του Αγίου Σουλά (30 Ιουλίου) στο χωριό Σορωνή, της Παναγιάς Σκιαδενής (Σάββατο του Λαζάρου - Κυριακή του Θωμά) στο χωριό Μεσαναγρός, της Παναγιάς Υψενής (23 Αυγούστου) στη Λάρδο και της Υψώσεως του Τιμίου Σταυρού (14 Σεπτεμβρίου) στο χωριό Απόλλωνα.', 36.1679, 27.6846),
(2, 'Λήμνος', 'Η Λήμνος είναι το όγδοο μεγαλύτερο νησί της Ελλάδας με έκταση 476 τετραγωνικά χιλιόμετρα και το τέταρτο σε μήκος ακτών (260 χιλιόμετρα). Βρίσκεται στο βόρειο Αιγαίο, στο Θρακικό πέλαγος, ανάμεσα στο Άγιον Όρος, τη Σαμοθράκη, την Ίμβρο και τη Λέσβο. Μαζί με τον Άγιο Ευστράτιο αποτελούν την επαρχία Λήμνου του νομού Λέσβου. Πρωτεύουσα και κύριο λιμάνι της Λήμνου είναι η Μύρινα, που πήρε το όνομα της γυναίκας του πρώτου βασιλιά του νησιού, του Θόαντα. Ως το 1955 η Μύρινα ονομαζόταν Κάστρο, ονομασία που επικράτησε κατά την ύστερη βυζαντινή περίοδο και άτυπα ακόμα έτσι αποκαλείται από τους παλιότερους Λημνιούς.\r\n\r\nΗ Λήμνος είναι ηφαιστειογενές νησί. Αν και δεν έχει δάση, έχει εκτεταμένες εύφορες πεδιάδες καλλιεργημένες με σιτηρά κι αμπέλια. Επίσης, έχει υπέροχες και καθαρές παραλίες και είναι ένα νησί ιδανικό για ήρεμες διακοπές. Οι βασικές ασχολίες των κατοίκων είναι η κτηνοτροφία, η γεωργία και η αλιεία. Επίσης, ο τουρισμός, το εμπόριο και τα ναυτικά επαγγέλματα. Ο πληθυσμός του νησιού ανέρχεται σε 17.000 κατοίκους περίπου βάσει της απογραφής του 2011 (το 2001 ο πληθυσμός είχε βρεθεί περίπου 18.000).', 39.9091, 25.0999);

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `Business`
--
ALTER TABLE `Business`
  ADD CONSTRAINT `Business_ibfk_1` FOREIGN KEY (`place_id`) REFERENCES `Places` (`id`);

--
-- Περιορισμοί για πίνακα `Keywords`
--
ALTER TABLE `Keywords`
  ADD CONSTRAINT `Keywords_ibfk_1` FOREIGN KEY (`offer_id`) REFERENCES `Offers` (`id`);

--
-- Περιορισμοί για πίνακα `Offers`
--
ALTER TABLE `Offers`
  ADD CONSTRAINT `Offers_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `Business` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
