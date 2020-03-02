# SQL优化

## 需要优化的场景
> 回想在程序里用到过的SQL操作.单用户和多用户(管理系统).

### 多用户
- 多表join + order by
- group by + aggregation-operation [ + join ]

### 单用户
多表join + update

### 工具
- explain
- 慢日志