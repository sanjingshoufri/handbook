# 配置
- git config --list       //查看所有的配置
- git config key          //查看某个key的值
- git help config         //查看config的帮助

# 代理
git config --global http.proxy               //设置代理
git config --global --unset http.proxy       //删除代理

# 库
- git clone             //克隆一个ref源
    - 使用SSH和HTTPS方式的不同

# version
- git checkout     //切换分支或者恢复工作区的文件
    - git checkout -b|-B <new_branch>;   //创建一个新的分支

- git fetch            //    

- git reset            //重置当前的HEAD为指定状态

# 存储
- git count-objects    //计算解压缩的对象数及其磁盘消耗

# 将追踪文件改为未被追踪文件
- git rm -r --cached .
- git add .
- git commit -m 'update .gitignore'

# 分支
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