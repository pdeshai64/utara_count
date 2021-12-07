SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `vadtal_dham_ss` (
  `room_no` int(5) NOT NULL,
  `count` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vadtalss`
--
ALTER TABLE `vadtal_dham_ss`
  ADD PRIMARY KEY (`room_no`);




CREATE TABLE `vadtal_dham_1` (
  `room_no` int(5) NOT NULL,
  `count` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vadtalss`
--
ALTER TABLE `vadtal_dham_1`
  ADD PRIMARY KEY (`room_no`);




CREATE TABLE `vadtal_dham_2` (
  `room_no` int(5) NOT NULL,
  `count` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vadtalss`
--
ALTER TABLE `vadtal_dham_2`
  ADD PRIMARY KEY (`room_no`);




CREATE TABLE `gadhpur_dham` (
  `room_no` int(5) NOT NULL,
  `count` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vadtalss`
--
ALTER TABLE `gadhpur_dham`
  ADD PRIMARY KEY (`room_no`);




CREATE TABLE `junagadh_dham_male` (
  `room_no` int(5) NOT NULL,
  `count` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vadtalss`
--
ALTER TABLE `junagadh_dham_male`
  ADD PRIMARY KEY (`room_no`);




CREATE TABLE `junagadh_dham_female` (
  `room_no` int(5) NOT NULL,
  `count` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vadtalss`
--
ALTER TABLE `junagadh_dham_female`
  ADD PRIMARY KEY (`room_no`);




CREATE TABLE `dholera_dham_male` (
  `room_no` int(5) NOT NULL,
  `count` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vadtalss`
--
ALTER TABLE `dholera_dham_male`
  ADD PRIMARY KEY (`room_no`);




CREATE TABLE `dholera_dham_female` (
  `room_no` int(5) NOT NULL,
  `count` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vadtalss`
--
ALTER TABLE `dholera_dham_female`
  ADD PRIMARY KEY (`room_no`);




CREATE TABLE `dharm_ss_male` (
  `room_no` int(5) NOT NULL,
  `count` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vadtalss`
--
ALTER TABLE `dharm_ss_male`
  ADD PRIMARY KEY (`room_no`);






CREATE TABLE `bhakti_ss_female` (
  `room_no` int(5) NOT NULL,
  `count` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vadtalss`
--
ALTER TABLE `bhakti_ss_female`
  ADD PRIMARY KEY (`room_no`);



COMMIT;
