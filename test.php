我是一个测试文件。用于学习git
目前已经学会的命令：
git init        //用户初始化用。
git add <file>  //将修改文件添加到暂存区
git commit -m ‘messing’   //提交到git仓库
git log     //提交日志
git status   //查看状态
git diff    //查看详细状态
git reset --hard HEAD^    //回退到上个一版本
git reset --hard <提交的编号>  //退回到指定版本
git reflog    //获取执行过的提交编号
git checkout --<file>  //把指定文件在工作区的修改全部撤销
git rm       //删除一个文件
git remote add [origin] git@<server-name>:<path>/<repo-name>.git  //关联一个远程库
git push [-u] [origin] [master]    //推送分支上的所有内容
git pull [origin] [master]         //拉取远程
git checkout [-b] <分支名称>       //创建并且切换分支
git checkout <分支名称>            //切换分支
git branch                         //查看当前分支[列出所有分支，当前分支钱会标有*号]
git merge <被合并的分支名称>       //合并某个分支到当前分支
git git branch -d <分支名称>       //删除分支
