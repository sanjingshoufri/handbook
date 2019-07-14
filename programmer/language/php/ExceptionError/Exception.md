# 概述

## Exception
### 异常机制
- try：在try代码块里的throw，不会直接抛出异常，而是由catch接收.非try块里，就直接抛出异常了.
- 当出现异常时，异常之后的代码便不再执行了，php会尝试匹配catch块的代码。
- 至于何时throw exception，就由programmer自己设计。

### 应用场景
> 当你觉得你的代码可能有问题，你就可以用异常.