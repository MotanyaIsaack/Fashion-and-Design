ALTER TABLE `collection` ADD CONSTRAINT FK_category_collection FOREIGN KEY (category_id) REFERENCES collection_category(category_id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `event_collection_bridge` ADD CONSTRAINT FK_event_bridge FOREIGN KEY (event_id) REFERENCES event(event_id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `event_collection_bridge` ADD CONSTRAINT FK_collection_bridge FOREIGN KEY (collection_id) REFERENCES collection(collection_id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `event_collection_bridge` ADD CONSTRAINT FK_info_bridge FOREIGN KEY (info_id) REFERENCES event_collection_info(info_id) ON DELETE CASCADE ON UPDATE CASCADE;

