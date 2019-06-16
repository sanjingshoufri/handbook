# 系统监控

#### grafana配置文件
- /etc/grafana/grafana.ini     配置文件
- /etc/sysconfig/grafana-server  环境文件
- /var/lib/grafana/grafana.db 数据库库

- 初始账号：admin/admin

- 配置文件的修改
  阿里云打开端口,nginx设置反向代理,域名访问.

  
#### influxDB配置
- 

#### 相关操作记录
- service grafana-server status
- systemctl restart grafana-server

#### 概念
- 数据源
- 组织
- 用户
> 用户是一个指定的账号，属于一个或多个组织，可以设置不同的权限级别。

- 行
> 行是仪表盘内的一个逻辑分区，用于将Panel组合在一起.行是12个单位宽，这些单位依据你浏览器的分辨率自动缩放.你可以在一行内设置Panel相对的宽度.

- Panel

- 查询编辑器
> 查询数据源。

- 仪表盘