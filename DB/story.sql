-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 07:25 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `story`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `story` varchar(5000) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `story`, `title`, `category`) VALUES
(35, 'A lion was once sleeping in the jungle when a mouse started running up and down his body just for fun. This disturbed the lion’s sleep, and he woke up quite angry. He was about to eat the mouse when the mouse desperately requested the lion to set him free. “I promise you, I will be of great help to you someday if you save me.” The lion laughed at the mouse’s confidence and let him go.\r\n\r\nOne day, a few hunters came into the forest and took the lion with them. They tied him up against a tree. The lion was struggling to get out and started to whimper. Soon, the mouse walked past and noticed the lion in trouble. Quickly, he ran and gnawed on the ropes to set the lion free. Both of them sped off into the jungle.', 'My first story', 'Other'),
(36, 'I still remember the first day I saw her. It was in English. She had positioned herself at the front of the classroom and I took the seat directly behind her. My friend Rebecca walked in a few moments later and noticing that there was no empty seat next to me, looked confused.\r\n\r\nSitting behind Leilani had not been my choice. Natural desire had pushed me that way and it would have burned within me had a decided to sit anywhere else. It might have been the darkness of her skin, compared to the paleness of all of ours that pulled me in. Her lips were stained coral and she smelled like candy. I assumed she did not know perfume and make-up were not allowed. Her hair was a thick sheet of black and it hung over the back of her chair, taunting me. I wanted so badly to stroke it and that longing scared me.\r\n\r\n            “Excuse me,” she said, turning around. “How much is the Shakespeare collection for this class?”\r\n\r\n            “I…I don’t know.” Syllabi for all of our classes arrived in the mail in the summer. I gave mine to my mother and she purchased all of the books. I’m sure my mother didn’t even know how much she paid for it. But Leilani made me wish I had cared.\r\n\r\n            I watched Leilani as she eyed a copy of the collection that was on the desk of the girl beside her. Her eyes were distinct: almond like in shape and color. They had drifted away from me and I needed them back.  Wanting to say something to her so badly, I blurted out, “I think it was around $60.”\r\n\r\n            “Oh, thanks,” she said. She didn’t look at me again. Instead she scribbled something in her notebook: “check library for Shakespeare collection” I read over her shoulder.\r\n\r\n            As time went on, Leilani became a prime conversation piece for everyone in St. Mary’s. It was senior year and we were all more than ready to graduate and go to college where we would have boys in our classes. Coming to St. Mary’s at this time seemed backwards and though I’m sure she had a reason, I never found it out what it was. They were simple questions: “are you new in town?”, “where did you live before?”, “what made you come here?” But I was too wrapped up in the social politics of St. Mary’s to ask what I wanted to know.\r\n\r\n            Instead of speaking to her, we stared as she floated from class to class alone, her uniform skirt like a tent over her wide hips. We commented on how poor she had to be considering her Reebok Classics. She didn’t even wear pearls.\r\n\r\nThere were a number of times I knew for sure Leilani had heard our comments about her oversized ass and ownership of a bus pass. A few times she had looked directly at me, almond eyes brimming with amusement as she continued walking to wherever.\r\n\r\n#\r\n\r\nOne day, after school, I saw Leilani standing at the old pay phone on the side of the St. Mary’s building. It was a hot spring day and she had the long sleeves of her uniform button-down rolled up. She was engrossed in the conversation she was having on the phone and didn’t seem to notice that anyone else was near.\r\n\r\n            “…They could come out though. My point is they could come out. I could be like doing something on the floor and they could come out and be like…”\r\n\r\n            She paused, presumably for whoever was on the other end to speak. I inched closer.\r\n\r\n            “But where is the bed though, Vincent? Is the bed against the wall?”\r\n\r\n            She paused again. I was quite close now. She was shorter than me and so I could see straight down her shirt. It was hard not to imagine unbuttoning the rest of it and feeling her curves in my hands. When I managed to tear my eyes away from her chest, I noticed her right forearm. Tattooed in pink was a hibiscus flower. I recognized it from my vacation the previous summer in Hawaii. Under the flower, in neat but fluid cursive, was the name Vincent, which I read upside down.\r\n\r\n            “Oh, so your father can’t see the bed? Is the bed high?”\r\n\r\n            She brushed a hand over the black hair before flipping it. She wrinkled her round nose in good humor at whatever “Vincent” had said. I hated this Vincent.\r\n            Before I knew it had happened, her conversation was over and she was looking at me. She did not seem surprised. She smiled before running her tongue over her lips and then slowly over her teeth. She bit her bottom lip all the while staring into me with her sharp, almond eyes and I thought “this is it”. This is right, me and her, and she thinks so too and…\r\n\r\nAnd then she laughed at me. She shook her head, picked her bag up and before I could beat her to it, Leilani walked away, hips swinging, black hair soaring behind her.', '857 words story', 'Other'),
(40, 'as', 'as', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` char(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `contact`, `password`) VALUES
(3, 'jkahskj', 'shivam@gmail.com', 8960222999, 'Bansal2'),
(4, 'Bansal', 'bansal@gmail.com', 7753999222, 'Bansal1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
