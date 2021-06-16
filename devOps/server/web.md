# 请求
- server处理web请求
	- thread-based architecture
		- 一般是使用多线程
			- 每当接收到一个请求，便开启一个独立的线程来处理
	- event-driven architecture
		- 定义一系列的事件处理器来响应事件的发生
			- 并且将服务端接受连接与对事件的处理分离
		- reactor
			- 解耦并发请求的服务并分发给对应的事件处理器来处理