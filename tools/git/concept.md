# 相关概念

## 理解概念
- version：

- HEAD：指针
    - detached head，是一种HEAD指针指向了某一个具体的 commit id，而不是分支的情况。 

- INDEX(索引)
    - 

### 版本库：
如何理解一个版本?  

- Fast-forward：


## 忽略
- 创建.gitignore，该文件只对未被追踪的文件生效，git status查看文件追踪的状态。如果已经加到了版本管理，解决办法是删除本地缓存，改成未被追踪的状态。
- git ls-files;   //查看忽略文件

### 将追踪文件改为未被追踪文件
> git rm -r --cached .
> git add .
> git commit -m 'update .gitignore'