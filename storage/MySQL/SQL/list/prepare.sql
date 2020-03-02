# 声明预备编译
PREPARE test_update FROM "UPDATE es_user SET referrer_id = 1111 WHERE `user_id` = '100000'";
PREPARE test_update1 FROM "SELECT referrer_id FROM es_user WHERE `user_id` = '100000'";

# 执行预编译
EXECUTE test_update;
EXECUTE test_update1;

# 释放预编译
DEALLOCATE PREPARE test_update;
DEALLOCATE PREPARE test_update1;