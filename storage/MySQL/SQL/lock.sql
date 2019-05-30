/**
 * Lock
 */

/**
 * 写锁，当一个请求对同一条记录更新时，另外一个请求无法读取记录
 */
BEGIN;
	SELECT *,sleep(10) FROM sanorder WHERE id = 1 FOR UPDATE;
	UPDATE sanorder SET goods_num = goods_num + 100 WHERE id = 1;
COMMIT;