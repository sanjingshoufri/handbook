# 工具
- 删除数据库所有的表
SELECT concat('DROP TABLE IF EXISTS ', table_name, ';') FROM information_schema.tables WHERE table_schema = 'estime';    
粘贴出查询的结果，然后执行.