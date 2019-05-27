# 消息队列

## RabbitMQ
- 相关路径：
    - /usr/lib/rabbitmq/lib/rabbitmq_server-3.7.14/sbin

- 设置代理服务器管理RabbitMQ guest/guest

### 应用场景
- 应用解耦
- 流量销峰
- 异步

### 消息应答机制
> 当消息没有被消费者接收引申出来的处理机制,只有当消费者返回一个ACK给RabbitMQ,然后RabbitMQ才会删掉这个消息.RabbitMQ没有超时设置,ACK默认关闭.

### 消息持久化
> 保存消息到硬盘，队列和消息都需要设置.但是这个持久化,并不是强持久化,因为这个过程里面有个时间窗口.

### 调度模式
#### 公平分发
RabbitMQ顺序发送消息给消费者,每个消费者大体上得到相同数量的消息.

#### Round-robin [轮询调度]
> 设置prefetch_count=1,让.