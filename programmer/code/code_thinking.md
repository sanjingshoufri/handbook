# 概述
- 重构/优化/修复Bug，同时只能做一件
- 

# 编写
- 考虑多种情况，处理对应的情况
- 用最少的代码，做最多的事情
	- 操作上，能批量处理，尽量不枚举处理
- 异常机制

# 错误处理
- 数据可恢复
	- 当程序没有按照正确的业务逻辑执行，也就是代码的编写有逻辑错误
		- 一旦错误出现，比如出现了错误数据
			- 这个时候如果你的代码编写恢复程序高(逆推数据)，就可以减少错误

# 思考
- 开发环境与正式的环境的区别