create database simplecrm;
use simplecrm;
--user--
create table if not exists `users` (
	`id` int (10) unsigned not null auto_increment,
	`username` varchar(64) not null,
	`password` varchar(128) not null,
	`code` varchar (10) not null,
	`name` varchar (10) not null,
	`birthday` varchar (10) not null,
	`phone` varchar (128) not null,
	`email` varchar (128) not null,
	`job_title` varchar(64) not null,
	`superior` varchar(64) null,
	`department` varchar(64) null,
	`created_at` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`updated_at` datetime DEFAULT NULL,
	`updated_by` int(10) DEFAULT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--customer--
create table if not exists `customers` (

	`id` int (10) unsigned not null auto_increment,
	`id_card` varchar(64) not null,
	`name` varchar(10) not null,
	`phone` varchar (128) not null,
	`address` varchar (128) not null,
	`source` varchar (128) not null,
	`created_at` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`updated_at` datetime DEFAULT NULL,
	`updated_by` int(10) DEFAULT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--property
create table if not exists `properties` (
	`id` int (10) unsigned not null auto_increment,
	`code` varchar(64) not null,
	`address` varchar (128) not null,
	`area` varchar(64) not null,
	`unit_price` varchar(64) not null,
	`age` varchar(64) not null,
	`created_at` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`updated_at` datetime DEFAULT NULL,
	`updated_by` int(10) DEFAULT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--contract--
create table if not exists `contracts` (
	`id` int (10) unsigned not null auto_increment,
	`contract_number` varchar(128) not null,
	`status` tinyint(4) not null default 0,
	`content` text not null,
	`created_at` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`updated_at` datetime DEFAULT NULL,
	`updated_by` int(10) DEFAULT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--contract history--
create table if not exists `histories` (
	`id` int (10) unsigned not null auto_increment,
	`contract_id` int (10) unsigned not null,
	`status` tinyint(4) not null default 0,
	`remark` text not null,
	`created_at` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`updated_at` datetime DEFAULT NULL,
	`updated_by` int(10) DEFAULT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
ALTER TABLE histories ADD FOREIGN KEY (contract_id) REFERENCES contract(id);

--files--
create table if not exists `files` (
	`id` int (10) unsigned not null auto_increment,
	`property_id` int (10) unsigned not null,
	`created_at` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`updated_at` datetime DEFAULT NULL,
	`updated_by` int(10) DEFAULT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--statuses--
create table if not exists `statuses` (
	`id` int (10) unsigned not null auto_increment,
	`status` varchar (128) unsigned not null,
	`created_at` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`updated_at` datetime DEFAULT NULL,
	`updated_by` int(10) DEFAULT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

