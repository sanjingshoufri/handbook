# 概念

## 文档
> ES是面向文档的，这意味着它可以存储整个对象或文档，然而还会索引每个文档的内容。
在ES中，你可以对文档内容进行，检索、过滤、排序、索引，这种方式是ES能够执行复杂的全文搜索的原因

## 索引
> 默认情况下，文档中所有的字段都会被索引。如何理解，ES的索引概念，比如字典的A-Z排序，可以理解A-Z就是索引。

- 类比：
> Relational DB -> Databases -> Tables -> Rows -> Columns
> Elasticsearch -> Indices   -> Types  -> Documents -> Fields

## 搜索
> 