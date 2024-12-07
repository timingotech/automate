-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2024 at 02:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automate`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_responses`
--

CREATE TABLE `chat_responses` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat_responses`
--

INSERT INTO `chat_responses` (`id`, `text`, `reply`) VALUES
(1, 'hello', 'Hi there! How can I help you?'),
(2, 'how are you', 'I am just a bot, but I am functioning well!'),
(3, 'bye', 'Goodbye! Have a great day!'),
(4, 'engine won’t start', 'Check if the battery is charged and the starter motor is working.'),
(5, 'battery draining', 'Inspect the alternator and check for parasitic power draw.'),
(6, 'strange engine noise', 'It could be a loose belt or an issue with the timing chain.'),
(7, 'overheating engine', 'Check the coolant level and ensure the radiator fan is functioning.'),
(8, 'check engine light on', 'Use an OBD-II scanner to read the fault codes for further diagnosis.'),
(9, 'low fuel efficiency', 'Inspect the air filter and tire pressure. It could also be a fuel injector issue.'),
(10, 'brake pedal feels soft', 'Check for air in the brake lines or low brake fluid levels.'),
(11, 'brakes squealing', 'Inspect the brake pads and rotors for wear.'),
(12, 'car vibrates while driving', 'Check the tires for balancing issues or suspension components.'),
(13, 'steering feels loose', 'Inspect the tie rods and steering rack.'),
(14, 'car pulls to one side', 'Check the wheel alignment and brake calipers.'),
(15, 'smoke from exhaust', 'White smoke indicates coolant, blue smoke indicates oil, and black smoke indicates excess fuel.'),
(16, 'oil warning light on', 'Check the engine oil level and oil pressure sensor.'),
(17, 'car won’t shift gears', 'Inspect the transmission fluid level and linkage.'),
(18, 'dashboard lights flickering', 'It could be a faulty alternator or loose electrical connections.'),
(19, 'car stalls frequently', 'Check the fuel pump and throttle body.'),
(20, 'tires wearing unevenly', 'Ensure proper wheel alignment and suspension balance.'),
(21, 'strange smell inside car', 'Check for leaks or mold in the AC system.'),
(22, 'horn not working', 'Inspect the horn relay and wiring connections.'),
(23, 'windows won’t roll down', 'Check the window regulator and electrical switches.'),
(24, 'car shaking at high speeds', 'Inspect the wheel balancing and suspension components.'),
(25, 'car makes clicking sound when starting', 'It’s likely a weak battery or faulty starter.'),
(26, 'headlights dim', 'Inspect the alternator and battery connections.'),
(27, 'car won’t turn off', 'The ignition switch or engine control module could be faulty.'),
(28, 'transmission slipping', 'Check the transmission fluid level and quality.'),
(29, 'AC not cooling', 'Inspect the refrigerant level and compressor functionality.'),
(30, 'heater not working', 'Check the thermostat and heater core.'),
(31, 'parking brake won’t release', 'Inspect the parking brake cable and linkage.'),
(32, 'leaking fluid under car', 'Identify the fluid color—green for coolant, red for transmission, or amber for oil.'),
(33, 'car bounces excessively', 'Check the shocks and struts.'),
(34, 'wipers not working', 'Inspect the wiper motor and fuse.'),
(35, 'car won’t accelerate', 'It could be a clogged fuel filter or faulty throttle sensor.'),
(36, 'fuel smell inside car', 'Inspect the fuel lines and fuel tank for leaks.'),
(37, 'high-pitched whine from engine', 'It could be a worn serpentine belt or failing alternator.'),
(38, 'car makes grinding noise while braking', 'Brake pads may be completely worn out.'),
(39, 'low tire pressure', 'Inflate the tires to the recommended PSI and check for punctures.'),
(40, 'car leaking coolant', 'Inspect the radiator, hoses, and water pump.'),
(41, 'engine misfiring', 'Check the spark plugs and ignition coils.'),
(42, 'car not responding to key fob', 'Replace the key fob battery and check the receiver module.'),
(43, 'steering wheel vibration', 'Inspect the tires and steering column.'),
(44, 'dashboard smells burnt', 'It could be an electrical short or overheating wires.'),
(45, 'car jerking while driving', 'Inspect the fuel injectors and transmission system.'),
(46, 'radiator fan not working', 'Check the fan motor and associated relays.'),
(47, 'engine making knocking sound', 'It could be low oil pressure or worn engine bearings.'),
(48, 'power steering not working', 'Inspect the power steering pump and fluid levels.'),
(49, 'ABS warning light on', 'Use a diagnostic scanner to identify the issue with the ABS system.'),
(50, 'clutch feels spongy', 'Check the clutch fluid and bleed the hydraulic system.'),
(51, 'fuel gauge not working', 'Inspect the fuel sending unit in the tank.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'efidi victor', 'vefidi135@gmail.com', '$2y$10$Cnbg6k09aS/UVOlJKnbEo.Ivk2lBKz/QuMz9ounVfdwer875lOe2O'),
(2, 'chicken nuggets medium', 'vefidi13@gmail.com', '$2y$10$.FPxoVXlE6Q.pbieUSy9keiY0bkyBkuFPloGaqnGBlP7Fs0mfIqxC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_responses`
--
ALTER TABLE `chat_responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_responses`
--
ALTER TABLE `chat_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
