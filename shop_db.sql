-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Mar 2022, 15:47
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shop_db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `city`, `state`, `total_products`, `total_price`) VALUES
(0, 'Łukasz Kowalka', '123222222', 'lukasz.kowalka.21@gmail.com', 'cash on delivery', 'Gostomie', 'test', 'Frytki (1) ', '8'),
(0, 'Łukasz Kowalka', '123222222', 'lukasz.kowalka.21@gmail.com', 'cash on delivery', 'Gostomie', 'test', 'Frytki (1) ', '8'),
(0, 'Łukasz Kowalka', '7654333333', 'lukasz.kowalka.21@gmail.com', 'cash on delivery', 'Gostomie', 'gjg', 'Frytki (1) ', '8'),
(0, 'Łukasz Kowalka', '7654333333', 'lukasz.kowalka.21@gmail.com', 'cash on delivery', 'Gostomie', 'gjg', 'Frytki (1) ', '8'),
(0, 'Łukasz Kowalka', '7654333333', 'lukasz.kowalka.21@gmail.com', 'cash on delivery', 'Gostomie', 'gjg', 'Frytki (1) ', '8'),
(0, 'Łukasz Kowalka', '7654333333', 'lukasz.kowalka.21@gmail.com', 'cash on delivery', 'Gostomie', 'gjg', 'Frytki (1) ', '8'),
(0, 'Łukasz Kowalka', '7654333333', 'lukasz.kowalka.21@gmail.com', 'cash on delivery', 'Gostomie', 'gjg', 'Frytki (1) ', '8'),
(0, 'Łukasz Kowalka', '7654333333', 'lukasz.kowalka.21@gmail.com', 'cash on delivery', 'Gostomie', 'gjg', 'Frytki (1) ', '8'),
(0, 'Łukasz Kowalka', '644100309183', 'lukasz.kowalka.21@gmail.com', 'cash on delivery', 'Gostomie', 'gg', 'Frytki (1) ', '8'),
(0, 'Łukasz Kowalka', '644100309183', 'lukasz.kowalka.21@gmail.com', 'cash on delivery', 'Gostomie', 'gg', 'Frytki (1) ', '8'),
(0, 'Łukasz Kowalka', '644100309183', 'lukasz.kowalka.21@gmail.com', 'płatnosć gotówka przy dobiorze', 'Gostomie', 'h', 'Frytki (1) ', '8'),
(0, 'Łukasz Kowalka', '12345678', 'lukasz.kowalka.21@gmail.com', 'płatnosć gotówka przy dobiorze', 'Gostomie', 'hff', 'Wołowy (5) , Serowy (5) , 2X Ser, 2X Kurczak (1) ', '164');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(0, 'Wołowy', '34', 'product-3.png'),
(0, '2X Ser, 2X Kurczak', '34', 'product-4.png'),
(0, 'XXL Stek', '23', 'burger-baner.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`, `admin`) VALUES
(4, 'yugesh verma', 'yugeshverma32@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '6263056779', 'bhilai', '25 commercial complex, nehru nagar,east near vijya bank, bhilai C.G.', 0),
(5, 'yugesh', 'yugeshverma@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '9165063741', 'bhilai', 'bhilai', 0),
(6, 'edek', '1@gmail.com', '331465c2b352d4e89de94cc91fbc6fb8', 'ok', 'ok', 'ok', 0),
(7, 'admin', 'admin@gmail.com', '14e1b600b1fd579f47433b88e8d85291', 'admin', 'Gostomie', 'Gostomie, 3', 1),
(8, '?ukasz Kowalka1', '2@gmail.com', '7b36fa67c2f982245c94675e45bcc15c', 'ok', 'Gostomie', 'Gostomie, 3', 0),
(9, 'test', 'test@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '3456789432', 'Gostomie', 'Gostomie, 3', 0),
(10, '?ukas', 'adminn@gmail.com', 'c2f1366c51911b52369fe27df307ff84', '123', 'Gostomie', 'Gostomie, 3', 0),
(11, 'qwer', '12@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '1234567890', 'Gostomie', 'Gostomie, 3', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
