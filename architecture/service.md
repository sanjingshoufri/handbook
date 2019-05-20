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