-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 03:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contentverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Emily Johnson', 'emily.j@gmail.com', 'SecurePass123'),
(2, 'Alex Carter', 'alex.c@yahoo.com', 'StrongP@ssword456');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `uno` int(10) NOT NULL,
  `pid` int(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` text NOT NULL,
  `paragraph1` text NOT NULL,
  `paragraph2` text NOT NULL,
  `paragraph3` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`uno`, `pid`, `title`, `description`, `image_url`, `paragraph1`, `paragraph2`, `paragraph3`, `time`) VALUES
(1, 1, 'Quantum Computing ', 'Unleashing Computing\'s Next Frontier\r\n', 'IMG-64ee1830ca3343.45064971.jpeg', 'In the realm of technological innovation, quantum computing stands as a beacon of untapped potential. It represents a monumental leap beyond classical computing, promising solutions to complex problems that were previously considered insurmountable. Quantum computing harnesses the unique properties of quantum mechanics to process information in ways that defy the limitations of classical bits. As we embark on this technological journey, we delve into the fascinating world of quantum computing, where qubits replace bits and the boundaries of computational power are pushed to unprecedented heights.\r\n', 'At the heart of quantum computing lies the concept of qubits, or quantum bits. Unlike classical bits, which can be either 0 or 1, qubits can exist in multiple states simultaneously due to superposition. This property enables quantum computers to perform parallel computations that outpace classical counterparts. Moreover, entanglement, another quantum phenomenon, allows qubits to become interconnected in such a way that the state of one qubit directly influences the state of another, regardless of distance. These attributes give quantum computers an extraordinary ability to handle complex calculations, making them especially promising for cryptography, optimization, material science simulations, and drug discovery.However, quantum computing is not without its challenges. Qubits are incredibly delicate, susceptible to environmental interference, and maintaining their quantum states requires stringent conditions. Quantum error correction and fault tolerance mechanisms are being developed to address these issues, but they remain ongoing research areas. Additionally, building and maintaining quantum computers is an intricate endeavor, often requiring specialized expertise and infrastructure. Companies and research institutions worldwide are racing to overcome these obstacles and unlock the full potential of quantum computing.\r\n', 'Quantum computing is poised to reshape industries, from finance and healthcare to artificial intelligence and climate modeling. As quantum computers become more accessible and robust, they hold the promise to tackle problems that were previously intractable, revolutionizing our understanding of the world and providing solutions to challenges that have long perplexed us. The journey into this uncharted computational territory is still in its early stages, but the strides being made in quantum research inspire hope for a future where the frontiers of computing are expanded beyond imagination.\r\n', '2023-08-25 21:40:48'),
(2, 2, 'Sustainable Living and Climate Action', 'Exploring climate change awareness, renewable energy progress and eco-friendly choices for a greener world.', 'IMG-64f18db0ab6b73.67959814.jpg', 'In a world where environmental concerns are growing more urgent each day, the call for sustainable living and climate action resonates stronger than ever. This collection delves into the multifaceted realm of these topics, examining the vital importance of raising climate change awareness, the impressive strides made in harnessing renewable energy sources, and the array of eco-conscious lifestyle choices and products that empower individuals to contribute to a healthier planet.', 'Eco-Friendly Lifestyle Tips and Products: Embracing eco-friendly living is not just a trend; it is a necessity. Individuals can make impactful changes by adopting practices such as reducing single-use plastics, conserving water, and supporting local, sustainable agriculture. The market responds to these demands with a plethora of eco-conscious products—ranging from biodegradable household items to innovative, earth-friendly fashion. These choices empower consumers to align their lifestyles with their values, contributing to a circular economy. As we collectively navigate a pivotal juncture in our relationship with the environment, sustainable living and climate action hold the key to preserving the future of our planet. By fostering climate change awareness, harnessing the potential of renewable energy and making conscious choices, we steer the course toward a greener, more resilient world. The journey is both individual and collaborative, driven by the understanding that our actions today shape the legacy we leave for generations to come.', 'As we navigate a pivotal juncture in our relationship with the environment, sustainable living and climate action hold the key to preserving the future of our planet. By fostering climate change awareness, harnessing the potential of renewable energy and making conscious choices, we collectively steer the course toward a greener, more resilient world. The journey is both individual and collaborative, driven by the understanding that our actions today shape the legacy we leave for generations to come.\r\n', '2023-08-27 12:39:42'),
(3, 1, 'Space Tourism: Journeying Beyond Earth\'s Borders', 'Explore the exciting realm of space tourism, where companies like SpaceX and Blue Origin are making it possible for everyday people to venture beyond our planet.', 'IMG-64f4bd48211623.47103714.jpg', 'Space has always been the realm of astronauts and scientists, but in recent years, a new frontier is opening up: space tourism. Companies like SpaceX and Blue Origin have set their sights on making space travel accessible to the masses. This journey into the cosmos brings forth a host of possibilities and challenges that could redefine the way we think about vacations, adventure, and our place in the universe.', 'SpaceX, led by Elon Musk, and Blue Origin, founded by Jeff Bezos, are at the forefront of the space tourism industry. SpaceX\'s Crew Dragon spacecraft and Blue Origin\'s New Shepard suborbital rocket are designed to take civilians on journeys to the edge of space. These endeavors mark a significant shift from space exploration being solely a government-driven enterprise to a commercial venture.\r\n\r\nThe possibilities are awe-inspiring. Imagine a vacation where you can experience weightlessness, witness the curvature of the Earth, and gaze upon the stars from the ultimate vantage point. Space tourism promises to offer experiences that were once the stuff of science fiction novels.\r\n\r\nHowever, it\'s not without its challenges. The high cost of space tourism remains a barrier for most. Safety concerns, training requirements, and the environmental impact of space travel are also important considerations. Striking a balance between making space accessible and ensuring the sustainability of our planet and beyond is a delicate task.', 'Space tourism represents a thrilling leap into the future of human exploration. As companies like SpaceX and Blue Origin continue to push the boundaries, we stand on the cusp of a new era where ordinary individuals may soon have the chance to journey into the cosmos. With innovation and responsible stewardship, space tourism could become a catalyst for not only expanding our horizons but also preserving the wonders of our home planet. The dream of journeying beyond Earth\'s borders is no longer confined to the realm of science fiction—it\'s on the brink of becoming reality.', '2023-09-03 22:37:20'),
(4, 2, 'Environmental Conservation: Nurturing Our Planet\'s Future', 'Explore the critical realm of environmental conservation and the global efforts to protect and restore our planet.', 'IMG-64f4c71b06b1d9.86127531.jpg', 'The environment is at the forefront of global consciousness as we collectively recognize the urgent need for conservation. Environmental conservation is not just a movement; it\'s a responsibility we all share. This exploration delves into the vital efforts to protect and rejuvenate our planet, forging a path toward a sustainable future for generations to come.\r\n\r\n', 'Environmental conservation encompasses a spectrum of initiatives, from reforestation projects that combat deforestation to marine sanctuaries that safeguard our oceans\' biodiversity. Organizations, governments, and individuals worldwide are uniting to address climate change, reduce pollution, and preserve endangered species.\r\n\r\nOne remarkable aspect of environmental conservation is the restoration of ecosystems. It\'s akin to healing the wounds inflicted on the Earth. Through projects like rewilding, polluted areas are revitalized, and biodiversity flourishes once more. The collaborative efforts of scientists, conservationists, and volunteers are making a tangible difference.\r\n\r\nHowever, there are significant challenges on this journey. Climate change poses an existential threat, and the clock is ticking. Balancing the needs of growing populations with ecological preservation is an ongoing challenge. Yet, the urgency of these issues has catalyzed innovations in renewable energy, sustainable agriculture, and eco-conscious lifestyles.', 'Environmental conservation is humanity\'s pledge to protect and nurture the Earth. It\'s a testament to our commitment to safeguard the delicate balance of nature that sustains us. As we confront climate challenges, we must also embrace the incredible opportunities for positive change. By collectively striving to conserve our environment, we can ensure a thriving planet for ourselves and the countless species with whom we share this remarkable home. The path to environmental stewardship is one of hope, resilience, and unwavering dedication to preserving the beauty and diversity of our world.\r\n\r\n\r\n\r\n\r\n', '2023-09-03 23:19:15'),
(5, 1, 'Mental Health and Wellbeing', 'In a post-pandemic world, mental health takes center stage.\r\n', 'IMG-64fdb3b4b31131.12908693.jpg', 'The COVID-19 pandemic, an unprecedented global crisis, has profoundly impacted societies in ways beyond the physical health repercussions it brought. As we navigate the turbulent waters of a post-pandemic world, the spotlight has shifted to a subject that, for too long, dwelled in the shadows: mental health and wellbeing. The pandemic\'s far-reaching effects, from social isolation to economic uncertainties, have placed an enormous strain on individuals and communities worldwide. As a result, discussions surrounding mental health, strategies for stress management, and achieving overall wellbeing have gained unprecedented prominence. This shift reflects a collective recognition of the importance of psychological resilience in facing the ongoing challenges of our rapidly changing reality.\r\n', 'The heightened awareness of mental health and wellbeing stems from several interconnected factors. First and foremost, the pandemic imposed abrupt and substantial changes to daily life. Lockdowns, social distancing, and remote work arrangements isolated people physically, often leading to feelings of loneliness, anxiety, and depression. Economic uncertainties brought about job losses and financial instability, adding another layer of stress. Moreover, the constant stream of pandemic-related news and uncertainty about the future intensified feelings of unease and stress. In response to these challenges, individuals, communities, and governments have rallied to prioritize mental health. Conversations about seeking therapy, practicing mindfulness, and maintaining a healthy work-life balance have become commonplace. Employers are increasingly recognizing the importance of supporting employee mental health, offering resources, and creating flexible work environments. Healthcare systems are expanding access to mental health services and reducing the stigma associated with seeking help.\r\n', 'The emphasis on mental health and wellbeing in the post-pandemic world represents a positive shift towards a more compassionate and resilient society. It serves as a reminder that taking care of our mental health is just as crucial as our physical health, and it underscores the importance of a support network, open conversations, and readily available resources. While the challenges of a post-pandemic world persist, the focus on mental health equips us with valuable tools to navigate these uncharted waters with greater resilience and empathy, ensuring that our collective wellbeing remains a priority in the years to come.\r\n', '2023-09-10 17:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mid` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` char(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mid`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Emerson Snow', 'snowemerson@gmail.com', '8634578212', 'I\'m truly impressed by the diverse range of content on this platform. It\'s been an invaluable resource for expanding my knowledge and exploring new interests. I\'m really fascinated by space and astronomy. Could you please provide me with some content related to the field of space?'),
(2, 'Paul Doe', 'pauldoe23@gmail.com', '8932582716', 'The user-friendly interface and well-organized content make it a pleasure to navigate. Keep up the excellent work!'),
(3, 'Sarah Miller', 'sarah.m@yahoo.com', '6537890123', 'I\'m impressed by the quality and diversity of articles. It\'s my go-to source for information and inspiration!\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`uno`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `uno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
