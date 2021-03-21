# 命名
## 缩写
- 常见缩写
	- stat、count    
		- 统计

- 英文单词缩写规则
	- 辅音之后，元音之前
	- 仅极少数单词，采用压缩字母
		- 比如Japanese缩写为Jpn

## 思考方向
- 语意表达
	- 表达数据结构
		- 比如list、orderList(订单列表)
	- 可以从句子成分的角度来思考

- 借鉴
	- 比如你使用php里的内置函数的命名
		- redis、linux里的指令命名
		- Symfony和Laravel里的代码借鉴

- 变量
	- bool型的标识，$receive_flag = 'true'
	- 数组使用_arr后缀，或使用名词复数形式

- 函数名
	- set
		- 一般的kv操作，返回bool.
	- 函数体的功能过多，用核心的函数逻辑来命名函数.

- 方法名
	- 更新方法，update前缀
	- 删除方法，remove/delete前缀
	- 插入方法，save/insert前缀
	- 统计方法，count前缀
	- 判断方法，is前缀

## 常规
- 不建议使用单词缩写

## 原则
- 命令不能指代不明，或者有歧义