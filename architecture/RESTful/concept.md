# RESTful
## 特性
### 幂等性
- 不管调用多少次接口，产生的结果不会变
	- 尤其是增加和修改的操作尤为重要


## 备注
- 当使用PUT方法时，不能使用form-data格式的http-body，而要使用www-enurl编码