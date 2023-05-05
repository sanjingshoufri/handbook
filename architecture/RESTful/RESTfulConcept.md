# API
## 结构
- 客户端
- 资源

# REST
## 概述
- REST
	- Representational State Transfer，状态传输，一种软件架构 

## 结构
- 客户端
	- 请求
		- 结构
			- URI
			- 方法
				- GET
					- 获取资源
				- POST
					- 客户端发送数据给服务器	
				- PUT
				    - 更新服务器的资源，具有幂等性
					- 不能使用form-data格式的http-body，而要使用www-enurl编码		
				- DELETE
					- 删除资源		
			- HTTP头

## API
- 认证方法
	- HTTP认证
		- 基础认证
		- Bearer认证
	- API Keys
	- OAuth				

# 特性
## 幂等性
- 不管调用多少次接口，产生的结果不会变
	- 尤其是增加和修改的操作尤为重要