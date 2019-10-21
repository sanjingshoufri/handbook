# 相关概念

## 理解概念
- HEAD：指针
    - detached head，是一种HEAD指针指向了某一个具体的 commit id，而不是分支的情况。
    - 
    - 

- ORIGIN：远程

### 版本库：
> 如何理解一个版本?


- Fast-forward：



### 代码放置
    - workspace[working tree]
    - stage，index，git add
    - branch，git commit


## git流
- 
- 

## git文件结构
- Refs
> git引用，存储本地分支、远程分支和一些备注tag。



## git是如何存储数据的?
> git保存的是一些列的文件快照。

## 忽略
- 创建.gitignore，该文件只对未被追踪的文件生效，git status查看文件追踪的状态。如果已经加到了版本管理，解决办法是删除本地缓存，改成未被追踪的状态。
- git ls-files;   //查看忽略文件


### 将追踪文件改为未被追踪文件
> git rm -r --cached .
> git add .
> git commit -m 'update .gitignore'

