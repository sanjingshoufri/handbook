# 数据一致性

## Redis与MySQL数据一致性问题

### MySQL同步Redis
- 实时同步
    - 写入Redis成功，再写MySQL.场景，
    - 

- 定时同步
    - 一段时间的数据，统计到MySQL里。比如，秒杀活动最后的数据写入到MySQL中。