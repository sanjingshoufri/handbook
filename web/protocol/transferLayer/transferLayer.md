# 传输层
## 概述
- 数据格式
	- 报文段
		- 实现方法
			- 将报文划分为较小的块
			- 并为每块加上一个运输层首部以生成运输层报文段
- 多路分解
	- 将运输层报文段中的数据交付到正确的套接字的工作			
- 多路复用
	- 源主机从不同套接字中收集数据块，并为每个数据块封装上首部信息从而生成报文段
		- 然后将报文段传递到网络层，这个过程称为多路复用

## 作用
- 为应用程序提供进程到进程的交付服务
- 套接字
	- 从网络向进程传递数据和从进程向网络传递数据的门户

## 可靠传输
- ARQ
	- Automatic Repeat reQuest
		- 自动重传请求
- 差错检测
- 接收方反馈
- 重传