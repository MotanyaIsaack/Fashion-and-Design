ALTER TABLE event_collection_bridge ADD CONSTRAINT FK_event_bridge FOREIGN KEY (event_id) REFERENCES event(event_id);

ALTER TABLE `event_collection_bridge` ADD CONSTRAINT FK_collection_bridge FOREIGN KEY (collection_id) REFERENCES collection(collection_id);

ALTER TABLE `event_collection_bridge` ADD CONSTRAINT FK_info_bridge FOREIGN KEY (item_info_id) REFERENCES event_collection_info(info_id);

ALTER TABLE `event_collection_info` ADD CONSTRAINT FK_image_info FOREIGN KEY (landing_img_id) REFERENCES image(img_id);

ALTER TABLE `collection` ADD CONSTRAINT FK_category_collection FOREIGN KEY (category_id) REFERENCES collection_category(category_id);