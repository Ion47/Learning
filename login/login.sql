CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) 


INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'ion', 'aion', 'Ion'),
(2, 'gabi', 'gabi', 'Gabi');

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
