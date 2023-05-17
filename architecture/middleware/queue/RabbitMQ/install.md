# Erlang
## 安装

## 卸载
- rm -rf /usr/lib64/erlang     
	- 如果是yum安装的，就通过yum remove卸载

# RabbitMQ
## 安装
### Win


### Centos
- https://gist.github.com/fernandoaleman/fe34e83781f222dfd8533b36a52dddcc
	- 测试有用的

## 卸载
- rm -rf /var/lib/rabbitmq  
- rm -rf /etc/rabbitmq/  
- rm -rf /var/log/rabbitmq

## 启动
- 项目路径/usr/lib/rabbitmq，其中执行程序在bin下，通过Service启动RabbitMQ服务


## 开启插件
- rabbitmq-plugins enable rabbitmq_management  
- 访问UI界面

## 管理
- 设置代理服务器管理RabbitMQ guest/guest