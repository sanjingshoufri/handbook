# 删除一个存储过程
DROP PROCEDURE IF EXISTS curdemo;  
CREATE PROCEDURE curdemo(IN in_count INT)
BEGIN
# 声明变量
DECLARE varid INT DEFAULT 0;
DECLARE var_user_id INT DEFAULT 0;
DECLARE i INT DEFAULT 0;

# 声明游标
DECLARE cursor_0 CURSOR FOR SELECT id, user_id FROM es_user LIMIT 10;     #声明一个游标cursor_0
# 打开一个游标
OPEN cursor_0;

# 遍历数据集
WHILE in_count > i DO
# 游标获取的数据集
FETCH cursor_0 INTO varid, var_user_id;
SELECT varid, var_user_id;
SET i = i + 1;
END WHILE;

# 关闭一个游标
CLOSE cursor_0;
END;

CALL curdemo(11);