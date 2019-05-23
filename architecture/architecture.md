# 架构

## 软件框架模式
- service，分担controller的负担，辅助Controller，封装到Service里的逻辑有：
    - 牵涉到外部行为，如发送Email，使用外部API.
    - 使用PHP写的逻辑，如根据购买的件数有不同的折扣，如果写在Controller里面，会造成代码臃肿，难以维护.
