# 协议
- AMQP
	- 
- STOMP
	- 	

# 传输
- 消息应答机制
	- 当消息没有被消费者接收而产生的处理机制
		- 只有当消费者返回一个ACK给RabbitMQ，然后RabbitMQ才会删掉这个消息
		- 消息没有超时设置，ACK默认关闭