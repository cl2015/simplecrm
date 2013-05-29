ALTER TABLE `users` ADD `group_id` TINYINT( 4 ) NOT NULL DEFAULT '1' COMMENT '分组ID' AFTER `password` ,
ADD `role_id` TINYINT( 4 ) NOT NULL DEFAULT '1' COMMENT '角色ID:1:员工;2:经理;3:管理员;' AFTER `group_id` ;
