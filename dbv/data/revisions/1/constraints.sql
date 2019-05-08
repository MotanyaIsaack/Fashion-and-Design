ALTER TABLE `event_collection_info` CHANGE `overview_header` `overview_header` VARCHAR(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT 'Collection Name, By, Bags by, Held On';

ALTER TABLE `event_collection_info` CHANGE `landing_img_id` `landing_img_id` INT(11) NULL;

ALTER TABLE `event` CHANGE `date` `date` VARCHAR(255) NOT NULL;

ALTER TABLE `event` CHANGE `event_id` `event_id` INT(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `event_collection_info` CHANGE `overview_content` `overview_content` VARCHAR(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;

ALTER TABLE `event_collection_info` CHANGE `item_id` `item_id` INT(11) NULL;

ALTER TABLE `event_collection_info` CHANGE `item_summary` `item_summary` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;