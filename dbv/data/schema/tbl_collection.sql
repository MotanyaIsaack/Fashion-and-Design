CREATE TABLE `collection` (
  `collection_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `collection_name` varchar(255) NOT NULL,
  `collection_details` varchar(255) NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;