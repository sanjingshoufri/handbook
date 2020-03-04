# MySQL报错
1. DELETE FROM es_user_sign WHERE id = (SELECT id FROM es_user_sign ORDER BY id desc LIMIT 1)   
它的意思是说，不能先select出同一表中的某些值，再update这个表(在同一语句中)，即不能依据某字段值做判断再来更新某字段的值。

2. 派生表的使用是需要别名的，直接使用派生表，是要报错的.

3. 