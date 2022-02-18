# 指令
- 执行方式
	- 顺序执行

## 常见指令
- location
    - 用于匹配请求URI，匹配上之后按照其定义的方式对该请求进行处理
	- 如果指令定义在location里，请求进一步的处理会继续
- rewrite
- try_files
- break
	- 停止处理当前的指令集
- if
	- 
- proxy_pass