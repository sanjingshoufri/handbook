# 应用
## 要思考的问题
- 提交之后，将别人的代码丢失，这是为什么?
- 强制push<无视冲突>，远程服务器会发生什么?
- 远程分支能做的操作?
- 提交和分支的关系

## 常见操作
- 丢弃暂存区的修改

- 强制拉取到本地
git fetch --all && git reset --hard origin/master && git pull

- 版本回退
git reset 

- 强制push到远程分支
git push -f origin develop:pro

### 分支
- 提交到远程分支
    - git push origin develop:testing
    - git push origin develop:pro

- 查看远程分支
    - git branch -a;

- 分支合并
    - 分支A合并分支B，将分支B上不同的内容更新到分支A上(想想compare工具)。 
    - git merge; 

- 分支状态
    -     

- 创建分支
    - git push -b branch_name