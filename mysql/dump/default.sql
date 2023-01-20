-- Host: db-server
-- Server version: 8.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- ---------------------------------------------------------------------

-- Table structure for table `greetings`
CREATE TABLE `greetings` (
  `id` int NOT NULL,
  `greetings` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `greetings` (`id`, `greetings`, `date_time`) VALUES
(1, 'Hello!', '2023-01-19 16:54:49'),
(2, 'Hy!', '2023-01-19 16:54:49'),
(3, 'Wellcome!', '2023-01-19 16:54:49');


-- Indexes for table `greetings`
ALTER TABLE `greetings`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT for table `greetings`
ALTER TABLE `greetings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
