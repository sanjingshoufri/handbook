# 协议总结

## TCP

### 特点
1. TCP是流式协议，没有消息边界，客户端向服务端发送一次数据，可能被服务端分多次收到，也可能一次收到
2. 保证传输的可靠性和顺序
3. TCP拥有拥塞控制，所以数据包会延后发送

> 收发有缓存区 
> 比如：当水从一端流到另外一端，我们在收数据的时候，不能每一滴水就处理一次，这个缓存区相当于一个水桶，接到了一定的水之后内核再把数据交给到用户空间，这样就可以提升性能 

### 数据格式
1. tcp是基于字节流的协议，也就是说字节是构成数据的基本单位。

### 粘包
TCP粘包是


### 长连接和短连接


#### 长连接
- 心跳维持
- 网络抖动