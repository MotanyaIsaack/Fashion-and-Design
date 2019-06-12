INSERT INTO `collection_category` (`category_id`, `category_name`) VALUES
(1, 'menswear'),
(2, 'womenswear'),
(3, 'vintage'),
(4, 'kids');

INSERT INTO `collection` (`collection_id`, `category_id`) VALUES
(3, 1),
(5, 1),
(4, 2),
(2, 4);

INSERT INTO `event` (`event_id`, `date`, `location`) VALUES
(1, '2018-11-23', 'Dakhla, Western Sahara'),
(2, '2018-10-25', 'Lagos, Nigeria');

INSERT INTO `event_collection_info` (`info_id`, `short_name`, `full_name`, `landing_page_image`, `item_info`, `item_summary`, `overview_header`, `overview_content`) VALUES
(1, 'FIMA 2018', 'Festival International de la Mode Africaine', 'fima1.png', 'KikoRomeo showed its latest collection “Desert Rhapsody” at FIMA (Festival International de la Mode Africaine) by Alphadi, in Dakhla, Western Sahara on 23rd November 2018. This was the first time FIMA had been held outside Niger, and celebrated a coming together of artists, musicians and designers from around Africa and beyond. The 4 day festival included a Music Festival, Young Designer and Model Competition, Jewellery and Leatherwork show, Panafrican show and show of Designers from 5 Continents. Guests stayed in elegant tents, modelled on a traditional Tuareg style village.\r\nThe show opened with an outstanding couture cloak of wool with patchwork inserts. The cloak picks on the shield motif in the Kenyan flag and symbolises the brand’s commitment to sustainable fashion as fabric wastage is sewn into crazy patchwork, through a project which incorporates 15 women groups across Western Kenya.\r\nThe rest of the collection was menswear, inspired by the idea of Maasai travelling through the desert. Picking up on traditional reds and blues, KikoRomeo commissioned handwoven cotton checks  for dramatic scarves and turbans. These were teamed with layers of tunic shirts over skinny leg pants, and accessorised with KikoRomeo by Baobab fishskin bags, done in collaboration with Victoria Foods, who tanned the Nile Perch skins  in Kitale.', 'KikoRomeo showed its latest collection “Desert Rhapsody” at FIMA (Festival\r\nInternational de la Mode Africaine) by Alphadi, in Dakhla, Western Sahara on 23rd\r\nNovember 2018. This was the first time FIMA had been held outside Niger, and\r\ncelebrated a coming together of artists, musicians and designers from around Africa\r\nand beyond.', 'Collection Name, By, Bags by, Held On', 'Desert Rhaspody, Kikoromeo, Baobab Fishskin bags, 23 November 2018'),
(2, 'LFW 2018', 'Lagos Fashion Week 2018', 'lfw1.png', 'It was a new generation takeover as 22-year-old Iona McCreath took to the runway with the latest SS2019 KIKOROMEO collection on Thursday 25th October night at Day 1 of Lagos Fashion Week. Iona, who has apprenticed in her mother’s fashion business since birth, took the bow as she presented the brand’s latest collection. Now co-designing with her mother, she is taking the lead on the silhouettes, while her mother works on the textiles and cutting. To celebrate this new way of working they chose baptism by fire in presenting at Lagos Fashion Week, the most influential platform in Africa.\r\nSpeaking about her experience Iona said “Lagos is very influential around Africa and acts as a voice of Africa to the world. When people see Africa the first thing they see or hear is Nigerian. That means being able to integrate within the Nigerian market is strategic. It is also very exciting, because of the vibrant entertainment scene, which has helped contemporary arts and culture develop to be at the heart of the economy. Nigerians love fashion and the collection has been very well received”\r\n\r\n\r\nCollection styled by Moses Ebito of Moashy Styling https://www.facebook.com/Moashy-Styling-388149878052186/\r\nBags in Fishskin leather KikoRomeo by Baobab Global. https://www.facebook.com/search/top/?q=Baobab%20Global\r\nThank you to Bella Naija for the photos!\r\n', 'It was a new generation takeover as 22-year-old Iona McCreath took to the runway with the latest SS2019 KIKOROMEO collection on Thursday 25th October night at Day 1 of Lagos Fashion Week. Iona, who has apprenticed in her mother’s fashion business since birth, took the bow as she presented the brand’s latest collection. ', 'Collection, Styled by,Bags, Photo Credits, Held on', 'SS2019 KIKOROMEO, Moses Ebito of Moashy Styling, Fishskin leather by Baobab Global, Bella Naija, 25th October 2018'),
(3, 'KK Kids', 'Kikoromeo Kids 2018', 'kk4.jpg', 'Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '', 'Designed by, Released on ', 'Tula Boomi,1 December 2018'),
(4, 'SS2015', 'The SS 2015 Collection', 'ss2014_1.jpg', '<p>The SS 2015 Collection, an immersive exhibition dedicated to the three creative houses of Chanel, just landed at Shanghai&#39;s West Bund Art Center\r\nfor a six-week stint. The traveling exhibition has already made stopovers in Seoul,\r\n<p>Hong Kong, and London&mdash;and though the contents and intent remain the same,the design is completely different each time. With 6000 square meters of space at the West Bund Art Center, there is much room to play with this time around. Click through for a look at the exhibit.</p>\r\n', '', 'Collection,Created by ,Completed on ', 'SS2015,Kikoromeo,17 October 2016'),
(5, 'AWT 2015-16', 'The AWT 2016/16 Collection', 'awt1516_2.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ad velit dolore tempora porro minima aperiam molestias, iusto, nisi molestiae debitis rem eveniet magnam. Repellendus quasi tempore corrupti reprehenderit eligendi?</p>\r\n', '', 'Released on ', '20th November 2018'),
(6, 'VTG 2019', 'The Vintage Collection 2019 ', 'vintage19_1.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ad velit dolore tempora porro minima aperiam molestias, iusto, nisi molestiae debitis rem eveniet magnam. Repellendus quasi tempore corrupti reprehenderit eligendi?</p>\r\n', '', 'Released on,Designed by ', '1 April 2019,Loux the Vintage Guru');

INSERT INTO `event_collection_bridge` (`info_id`, `event_id`, `collection_id`) VALUES
(1, 1, NULL),
(2, 2, NULL),
(3, NULL, 2),
(4, NULL, 3),
(5, NULL, 4),
(6, NULL, 5);

INSERT INTO user(username,email,password) VALUES('Rosanne','rosanneodiero9@gmail.com','Rosanne');