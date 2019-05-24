/**
 * 定义存储过程
 */
CREATE PROCEDURE proc7 ()
BEGIN

DECLARE v INT;


SET v = 0;

sanorder :
LOOP
	INSERT INTO sanorder (
		user_id,
		goods_id,
		goods_num,
		description
	) SELECT
		user_id,
		goods_id,
		goods_num,
		description
	FROM
		sanorder;


SET v = v + 1;


IF v >= 5 THEN
	LEAVE sanorder;


END
IF;


END
LOOP
;


END;



/**
 * 调用存储过程
 */
call proc7 () 