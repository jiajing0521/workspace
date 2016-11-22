#终端操作
1.ls 查看 
2.ls -t 按时间查看

3.mkdir 创建文件夹
4.touch 创建文件

5.cat 查看文件
6.i 进入编辑
7.:wq 保存退出
8.q 退出

9.less 查看文件
10.u 上一页
11.d 下一页
12.z 逐行读取

#GIT
1. 在网上新创建一个库
2. 在终端输入命令
3.cd 文件夹路径

4.git init //初始化本地路径
5.git status 查看初始状态

6. git add . 添加到git
7.git status 查看
8.git commit -m "first time commit" 提交
9.git remote add xx https://git.oschina.net/jiajing0521/gitTest.git
10.git remote add 名字 网上复制版本库路径
11.git pull xx master:master --allow-unrelated-histories

12.git --version //查看版本
git version 2.10.0
13.git pull xx master:xx/master --allow-unrelated-histories
13.git pull xx master:master --allow-unrelated-histories
13.git pull xx master:xx/master
14.#git push xx master:master

14.以上三种试一下 那个好用

#SAE 提供(http://sae.sina.com.cn/?m=vermng&app_id=wangjj&ver=1)


    在你应用的git代码目录里，添加一个新的git远程仓库 sae
    $ git remote add sae https://git.sinacloud.com/wangjj

    编辑代码并将代码部署到 `sae` 的版本1。
    $ git add .
    $ git commit -m 'Init my first app'
    $ git push sae master:1
    SAE支持Git、SVN、代码打包上传三种提交方式，具体请参考：http://www.sinacloud.com/doc/sae/tutorial/code-deploy.html#git

#终端向新浪云提交

		cd 文件夹路径
		git add .
		git commit -m "注释"
		git push sae 1:1
		






