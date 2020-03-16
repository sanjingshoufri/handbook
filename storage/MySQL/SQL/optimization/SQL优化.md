# SQL优化
## 工具
### explain
查询执行计划(解释如何执行一个查询)
- 重要列的含义
    - type，访问类型，join的类型
    - ref，与索引比较的列
    - key，实际上被选中的索引
    - filtered，被表条件过滤的百分数
    - extra，MySQL如何解析查询
        - Using filesort    根据join的类型
        - Using index       

## 慢事务追踪



## SQL慢日志

### SQL语句优化
#### ORDER_BY
LIMIT语句会影响到Order by的排序.