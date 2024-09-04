
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Data');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `subject_name` varchar(350) DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expiration_date` datetime DEFAULT current_timestamp(),
  `payment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `product_id`, `price`, `num`, `total_money`, `user_id`, `created_at`, `updated_at`, `expiration_date`, `payment`) VALUES
(1, 1, 20, 1, 20, 1, '2024-08-29 18:13:15', '2024-09-04 07:28:56', NULL, 'DONE'),
(4, 3, 70, 1, 70, 1, '2024-08-31 15:03:22', '2024-09-04 07:47:10', '2024-08-31 15:03:22', 'DONE'),
(7, 1, 20, 1, 20, 1, '2024-09-04 00:30:53', '2024-09-04 00:30:53', '2024-10-04 00:30:53', NULL),
(8, 1, 20, 1, 20, 1, '2024-09-04 07:13:13', '2024-09-04 07:13:13', '2024-10-04 07:13:13', 'pending'),
(9, 1, 20, 1, 20, 1, '2024-09-04 07:13:45', '2024-09-04 07:13:45', '2024-10-04 07:13:45', 'pending'),
(10, 1, 20, 1, 20, 1, '2024-09-04 07:14:14', '2024-09-04 07:14:14', '2024-10-04 07:14:14', 'pending'),
(11, 1, 20, 2, 40, 1, '2024-09-04 07:16:30', '2024-09-04 07:16:30', '2024-11-04 07:16:30', 'pending'),
(12, 1, 20, 2, 40, 1, '2024-09-04 07:19:29', '2024-09-04 07:19:29', '2024-11-04 07:19:29', 'pending'),
(13, 1, 20, 2, 40, 1, '2024-09-04 07:19:40', '2024-09-04 07:19:40', '2024-11-04 07:19:40', 'pending'),
(14, 1, 20, 2, 40, 1, '2024-09-04 07:25:21', '2024-09-04 07:25:21', '2024-11-04 07:25:21', 'pending'),
(15, 1, 20, 2, 40, 1, '2024-09-04 07:44:10', '2024-09-04 07:44:10', '2024-11-04 07:44:10', 'pending'),
(16, 1, 20, 1, 20, 1, '2024-09-04 07:48:19', '2024-09-04 07:48:19', '2024-10-04 07:48:19', 'pending'),
(17, 1, 20, 1, 20, 1, '2024-09-04 07:51:55', '2024-09-04 07:51:55', '2024-10-04 07:51:55', 'pending'),
(18, 1, 20, 1, 20, 1, '2024-09-04 07:57:18', '2024-09-04 07:57:18', '2024-10-04 07:57:18', 'pending'),
(19, 1, 20, 1, 20, 1, '2024-09-04 07:59:11', '2024-09-04 07:59:11', '2024-10-04 07:59:11', 'pending'),
(20, 1, 20, 1, 20, 1, '2024-09-04 08:02:03', '2024-09-04 08:02:03', '2024-10-04 08:02:03', 'pending'),
(21, 1, 20, 1, 20, 1, '2024-09-04 08:04:24', '2024-09-04 08:04:24', '2024-10-04 08:04:24', 'pending'),
(22, 1, 20, 1, 20, 1, '2024-09-04 09:05:41', '2024-09-04 09:05:41', '2024-10-04 09:05:41', 'pending'),
(23, 1, 20, 1, 20, 1, '2024-09-04 09:12:09', '2024-09-04 09:12:09', '2024-10-04 09:12:09', 'pending'),
(24, 1, 20, 1, 20, 1, '2024-09-04 09:14:03', '2024-09-04 09:14:03', '2024-10-04 09:14:03', 'pending'),
(25, 1, 20, 1, 20, 1, '2024-09-04 09:18:02', '2024-09-04 09:18:02', '2024-10-04 09:18:02', 'pending'),
(26, 1, 20, 1, 20, 1, '2024-09-04 09:22:14', '2024-09-04 09:22:14', '2024-10-04 09:22:14', 'pending'),
(27, 1, 20, 1, 20, 1, '2024-09-04 09:22:23', '2024-09-04 09:22:23', '2024-10-04 09:22:23', 'pending'),
(28, 1, 20, 1, 20, 1, '2024-09-04 09:24:57', '2024-09-04 09:24:57', '2024-10-04 09:24:57', 'pending'),
(29, 1, 20, 1, 20, 1, '2024-09-04 09:25:30', '2024-09-04 09:25:30', '2024-10-04 09:25:30', 'pending'),
(30, 1, 20, 1, 20, 1, '2024-09-04 09:26:47', '2024-09-04 09:26:47', '2024-10-04 09:26:47', 'pending'),
(31, 1, 20, 1, 20, 1, '2024-09-04 09:27:39', '2024-09-04 09:27:39', '2024-10-04 09:27:39', 'pending'),
(32, 1, 20, 1, 20, 1, '2024-09-04 09:29:12', '2024-09-04 09:29:12', '2024-10-04 09:29:12', 'pending'),
(33, 1, 20, 1, 20, 1, '2024-09-04 09:47:49', '2024-09-04 09:47:49', '2024-10-04 09:47:49', 'pending'),
(34, 1, 20, 1, 20, 1, '2024-09-04 09:48:28', '2024-09-04 09:48:28', '2024-10-04 09:48:28', 'pending'),
(35, 1, 20, 1, 20, 1, '2024-09-04 09:58:22', '2024-09-04 09:58:22', '2024-10-04 09:58:22', 'pending'),
(36, 1, 20, 1, 20, 1, '2024-09-04 09:59:14', '2024-09-04 10:02:17', '2024-10-04 09:59:14', 'DONE');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `payString` varchar(255) NOT NULL,
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payment`
--

INSERT INTO `payment` (`id`, `payString`, `order_id`) VALUES
(1, 'WIMFhoq0LO', 10),
(2, 'CR9MmGU41x', 11),
(3, 'LVcL3Pa4d7', 12),
(4, 'f8W3vhs8WG', 13),
(5, 'MkLx7p3u7u', 14),
(6, 'QHdQX71dx9', 15),
(7, 'e1rxxPmOYf', 16),
(8, 'aOXihnk27X', 17),
(9, 'OHYWNTQThy', 18),
(10, 'JCTLPjCUI2', 19),
(11, 'AMJ1sJcuH3', 20),
(12, 'woKKcZEWWi', 21),
(13, 'brh5QOPJI3', 22),
(14, 'ojQpFPk2H4', 23),
(15, 'D4Q63t8vbM', 24),
(16, 'PFWXhQkmVn', 25),
(17, 'zOJh1bAADD', 26),
(18, 'CfIMxqAPNK', 27),
(19, 'i8Q6MVvFOc', 28),
(20, 'FbEBQy0U74', 29),
(21, '7CGRK6KiZk', 30),
(22, 'MmzJYnY1Nz', 31),
(23, '07PZGv25S0', 32),
(24, 'mllDS1YZm8', 33),
(25, 'Cf9aznD01w', 34),
(26, 'UVXjDeJMMH', 35),
(27, '6zqVWCZHzR', 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `brandwidth` int(11) DEFAULT NULL,
  `supportSim` varchar(30) DEFAULT NULL,
  `serverLocation` varchar(255) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `device` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `price`, `time`, `capacity`, `brandwidth`, `supportSim`, `serverLocation`, `discount`, `device`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 1, 'BASIC', 20, 30, 1000, 100, 'Viettel', 'Việt Nam', NULL, 2, NULL, NULL, NULL),
(2, 1, 'PLUS', 50, 30, 2000, 150, 'Viettel', 'Việt Nam', NULL, 3, NULL, NULL, NULL),
(3, 1, 'SUPPER', 70, 30, 10000, 200, 'Viettel', 'Việt Nam', NULL, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tokens`
--

CREATE TABLE `tokens` (
  `user_id` int(11) NOT NULL,
  `token` varchar(32) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone_number`, `address`, `password`, `role_id`, `created_at`, `updated_at`, `deleted`) VALUES
(1, NULL, 'anh@gmail.com', NULL, NULL, '$2y$10$GAihsmdcH7EtKd5gk4FfVeHAb.O3fXa5yDGZYIBkDA7JkolaWDlau', NULL, '2024-08-29 14:16:47', '2024-08-29 14:16:47', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payString` (`payString`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`user_id`,`token`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `galery`
--
ALTER TABLE `galery`
  ADD CONSTRAINT `galery_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
