-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2023 at 01:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar-e`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_username` varchar(50) NOT NULL,
  `doctor_email` varchar(100) NOT NULL,
  `doctor_address` varchar(200) NOT NULL,
  `doctor_speciality` varchar(50) NOT NULL,
  `doctor_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_username`, `doctor_email`, `doctor_address`, `doctor_speciality`, `doctor_password`) VALUES
(1, 'Cheboui Imene', 'imenefati16@gmail.com', 'algiers', 'Dermatologist', '$2y$10$a8jyHI4JrxhEbHG.MZPT5.nUxEYx6RZvZT7MhX3aF5I4mxGGtb30u'),
(2, 'Cheboui Imene', 'imenefati16@gmail.com', 'algiers', 'Dermatologist', '$2y$10$wocr4Zm0KlLsO.mxOAakuuEZDyJRESzF5jozWbfwI5GMUwX/pTrAS'),
(3, 'Cheboui Imene', '', 'algiers', 'Dermatologist', '$2y$10$oX0x3EKBL2XwKYaQIZInR.9BuLiVmf4sBnAIXS2kbW6tLLoGn38eW'),
(4, 'Cheboui Imene', 'imenefati16@gmail.com', 'algiers', 'Dermatologist', '$2y$10$egzkQSW30HKFjcjP7441jOPkuFBZZznkbmegSs0.GCcuyxGyNL.Dq'),
(5, 'Cheboui Imene', 'imenefati16@gmail.com', 'algiers', 'Dermatologist', '$2y$10$vPaS30QkdKc.WBXeZydXxeFgbw4v7U0EWyOlMKFVoVhSxe4dqFrRi'),
(7, 'Hana_Afra', 'hana@gmail.com', 'Ain Naaja', 'Pediatre', '7e5e405321b1bd48b705ffff116bdf87c4ed06d1e3891ee9b7d02353c221a1b50b55ffb07364e6e7d77a462cd25bf5da86e590f40fbfc13598bdd37cb97836a5'),
(8, 'Douaa_Djaid', 'douaa@douaa.com', 'Bouira', 'Ophtalmologist', '8f76ca5b248dd28ce8d44d80a6926acc8b5cdd8421c3ef8de1207d3d4fe762b492288c35a1ade25eaeb97aa1c43887c4e57d0cce1c0332bce61fec552eb51780'),
(9, 'Douaa', 'douaadjaid@gmail.com', 'Bouira', 'Ophtalmologist', '228da7b0a4c59f4e365f024e002fb024d88b7fcbab39ca76169cfdeabe1e988bee378dc8f072499f1fb36302b8a85d131c7b994897ca0d8a360f0023d720c524'),
(10, 'imene', 'fatma.cheboui@ensia.edu.dz', 'algiers', 'Dermatologist', 'f1ecaa05b13c891b0bfe0d11bca2922284bb4e201c5f5400c393fcfaeea245cc0acafcad90d7fcc9bb8bbc59d009bdbae7298478ea00d7841218e5fa288c9504'),
(11, 'Aziz', 'aziz@gmail.com', 'Damous', 'Cardiologist', 'afe7cc4d6ab219db7675496e00854cd91d923a6d776b45dd0b91ae7e072184937ddb35949734af9cb1762add023768697ec09eddae0f5a547bd01d46692b69f1'),
(12, 'Imene', 'imene@imene.com', 's', 's', 'f196c5c441e67e35ed1c40b1a679a514899f603d9541d56190895adaaa0b88b2bb4449226a3b152951af6106746eeb3fcbefd37a54e2ca439bd6c231b55678f0'),
(14, 'Cheboui_Belkacem', 'cheboui@hotmail.com', 'Damous', 'Generalist', 'e8b76e6b2f6aa8ffad9f4f63c5c68fc600c30d4180cf873e17b7c37430aab3f9af7a0385a8f0b72b153989447fba64c98c5f9cd47b73bf734c328a449fa3072b'),
(15, 'Dahmen', 'dah@gmail.com', 'Algiers', 'Dermato', '77e3fd424f5ad1da067fba017b436a0046008a399228c6a84fa56bf59c9177670199c541ec91f4dc51e7e4c4f053972287217de333e5332997f276dbbc5aad1d');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(100) NOT NULL,
  `doctor_name` varbinary(1000) NOT NULL,
  `doctor_type` varbinary(1000) NOT NULL,
  `address` varbinary(1000) NOT NULL,
  `phone` varbinary(1000) NOT NULL,
  `email` varbinary(1000) NOT NULL,
  `treatment_period` varbinary(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `document_id` int(11) NOT NULL,
  `document_name` varchar(200) NOT NULL,
  `document_data` blob NOT NULL,
  `speciality_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `user_id` varchar(100) NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicalrecords`
--

CREATE TABLE `medicalrecords` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `location` varbinary(50) NOT NULL,
  `responsive_doctor` varbinary(50) NOT NULL,
  `issue_description` varbinary(1000) NOT NULL,
  `diagnosis` varbinary(1000) NOT NULL,
  `prescribed_solution` varbinary(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `medication_name` varbinary(1000) NOT NULL,
  `medication_dose` varbinary(1000) NOT NULL,
  `medication_frequency` varbinary(100) NOT NULL,
  `prescription_begin` varbinary(100) NOT NULL,
  `prescription_end` varbinary(100) NOT NULL,
  `medication_link` varbinary(500) NOT NULL,
  `medication_warnings` varbinary(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `patient_username` varchar(100) NOT NULL,
  `patient_email` varchar(200) NOT NULL,
  `patient_password` varchar(250) NOT NULL,
  `patient_birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_username`, `patient_email`, `patient_password`, `patient_birthdate`) VALUES
(1, 'Cheboui_Belkacem', 'cheboui@hotmail.com', '13a389c74f69ec466b592303650031e0dde076507b10b2e7ace7243e79b48956d089441677ca420966f92ee789a1bc7d5fb3d0ddf0b871414166161998022880', '1965-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `speciality`
--

CREATE TABLE `speciality` (
  `speciality_id` int(11) NOT NULL,
  `speciality_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `salt`) VALUES
(4, 'Cheboui_Belkacem', 'cheboui@hotmail.com', 'e8b76e6b2f6aa8ffad9f4f63c5c68fc600c30d4180cf873e17b7c37430aab3f9af7a0385a8f0b72b153989447fba64c98c5f9cd47b73bf734c328a449fa3072b', 'edd8459cd0dbcddf96f3ecf067f8102600501c828e5d4bf1ee005e2ab9a68db7d6bbe8cf74bd3e256ec29ef03e86d1381ebfc849166fd3acfcf571f2e4d3a63d'),
(5, 'Cheboui_Belkacem', 'cheboui@hotmail.com', 'abf0007da0a44923e4f98dad82add457c4b2a35310557b5a2316a11ec729145339abada3001323686c615044ddf0d7bcb02e792aa77b86cac4280f221dd815c0', 'd07762f1f497740078ea738fd3a4ff898b9c59cee61013d8b19f4682ad728ca8bfa70755845a4c63b66681fc8fa0f39e113bbb03960dc9352dafd208a35b5202'),
(6, 'Cheboui_Belkacem', 'cheboui@hotmail.com', '985b80915429ccec6100047d19794357d2222ea989440fd1a9f4f8aecd1ac6413009a48474b3aab30eef27d279a7c60942b2e970f0b042bda676249f0445fdba', 'a62d40616d5179ffa98262d00303d190d282a2f7cc83f30dca6094dd388c2b010ec944bfde1b78d887ee8438c041acc90028735913e2dbe5d7ebe2173cd22cec'),
(7, 'Cheboui_Belkacem', 'cheboui@hotmail.com', '13a389c74f69ec466b592303650031e0dde076507b10b2e7ace7243e79b48956d089441677ca420966f92ee789a1bc7d5fb3d0ddf0b871414166161998022880', '337946618381bb6895c41abd0171960ecdeb3f507e6a873949ef319f60a6a0b9c8c07e64033fddf0d07e3d8cfe47682eb2db36fa9c42c534787ebb678623a1b3'),
(8, 'Dahmen', 'dah@gmail.com', '77e3fd424f5ad1da067fba017b436a0046008a399228c6a84fa56bf59c9177670199c541ec91f4dc51e7e4c4f053972287217de333e5332997f276dbbc5aad1d', 'a05268a21b4df5c74eeb63d2db3e6e6119bfdfabeea7af7689a1c1d3683f3bfe3476e93ad0c9aab88829708ad2dc39c49e6de88ad85bd5996b17216ddfe27ed8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`document_id`),
  ADD KEY `ForeignKey_user` (`user_id`),
  ADD KEY `ForeignKey_spec` (`speciality_id`);

--
-- Indexes for table `medicalrecords`
--
ALTER TABLE `medicalrecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`speciality_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicalrecords`
--
ALTER TABLE `medicalrecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `speciality`
--
ALTER TABLE `speciality`
  MODIFY `speciality_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `documents_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `documents_ibfk_3` FOREIGN KEY (`speciality_id`) REFERENCES `speciality` (`speciality_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
