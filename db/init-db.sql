CREATE DATABASE IF NOT EXISTS db5; USE db5;

CREATE TABLE `Person` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Person` (`id`, `name`) VALUES
(1, 'William234'),
(2, 'Mar234c'),
(3, 'John234');
