USE jitney;

/************************************/


DROP TABLE IF EXISTS riders;
DROP TABLE IF EXISTS drivers;

DROP TABLE IF EXISTS ride_requests;
DROP TABLE IF EXISTS ride_request_history;
DROP TABLE IF EXISTS bid_history;

/************************************/

CREATE TABLE riders (
`username` VARCHAR(20) NOT NULL,
`phone` int(10) NOT NULL,
`name` VARCHAR(200),
PRIMARY KEY(`username`)
);


CREATE TABLE drivers (
`username` VARCHAR(20) NOT NULL,
`phone` int(10) NOT NULL,
`name` VARCHAR(200),
PRIMARY KEY(`username`)
);


/************************************/

CREATE TABLE ride_requests (
`ride_request_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`username_rider` VARCHAR(20) NOT NULL,
`from` VARCHAR(200),
`to` VARCHAR(200),
`from_lat` DECIMAL(9,6) default NULL,
`from_lng` DECIMAL(9,6) default NULL,
`to_lat` DECIMAL(9,6) default NULL,
`to_lng` DECIMAL(9,6) default NULL,
`time_from` VARCHAR(200),
`bid_max` DECIMAL(4,2), 
`top_bid_bid_id` VARCHAR(200),
`top_bid_username_driver` VARCHAR(20),
`top_bid_bid_min` DECIMAL(4,2),
`top_bid_bid_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
`state` VARCHAR(200),
PRIMARY KEY(`ride_request_id`)
);


CREATE TABLE ride_request_history (
`ride_request_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`username_rider` VARCHAR(20) NOT NULL,
`from` VARCHAR(200),
`to` VARCHAR(200),
`from_lat` DECIMAL(9,6) default NULL,
`from_lng` DECIMAL(9,6) default NULL,
`to_lat` DECIMAL(9,6) default NULL,
`to_lng` DECIMAL(9,6) default NULL,
`time_from` VARCHAR(200),
`bid_max` DECIMAL(4,2), 
`state` VARCHAR(200),
PRIMARY KEY(`ride_request_id`)
);



CREATE TABLE bid_history (
`bid_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`username_driver` VARCHAR(20) NOT NULL,
`username_rider` VARCHAR(20) NOT NULL,
`ride_request_id`  int(11) unsigned NOT NULL,
`bid_max` DECIMAL(4,2),
`bid_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY(`bid_id`)
);



/************************************/

INSERT INTO riders (`username`, `phone`, `name`)
VALUES
('henry','2031212121','Henry Collins'),
('ssingh','2032323232','Sidharth Singh');


INSERT INTO drivers (`username`, `phone`, `name`)
VALUES
('jjmclean','2032222222','Johnny Joel'),
('ssesky','2031111111','Samantha Esky');



/************************************
************************************
INSERT INTO ride_requests(`username_rider`, `from`, `to`, `time_from`, `bid_max`, `top_bid_bid_id`, `top_bid_username_driver`, `top_bid_bid_min`, `state`) 
VALUES 
('henry', 'Hialeah','Castle', '8:00AM', '7.50', '', '', '', 'OPEN'),
('ssingh', 'Wilton High School','Rye', '2:00AM', '2.50', '', '', '', 'OPEN');

INSERT INTO bid_history(`username_driver`, `username_rider`, `ride_request_id`, `bid_max`) 
VALUES 
('jjmclean', 'henry', 1,'7.75'),
('ssesky', 'henry', 1,'7.50'),
('jjmclean', 'henry', 1,'7.25'),
('ssesky', 'ssingh', 2,'11.00'),
('jjmclean', 'ssingh', 2,'10.25');
************************************
************************************/