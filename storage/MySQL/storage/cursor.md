# 游标
## 概述
- 游标声明，必须在handler声明之前，变量和条件声明之后. 
- 服务端游标限制
在MySQL中，服务端的游标是由内部临时表实现的.


## 相关语句
1. FETCH [[NEXT] FROM] cursor_name INTO var_name [, var_name] ...
获取cursor数据集的下一行记录，然后将cursor推前一次.如果这行记录存在，则将

2. OPEN cursor_name