# Superset
是一个数据探索和可视化平台，设计用来提供直观的，可视化的，交互式的分析体验。

> 介绍：http://lxw1234.com/archives/2018/03/904.htm

## apache / incubator-superset

> 项目github地址：https://github.com/apache/incubator-superset


## amancevice / superset
> superset 的 docker镜像：https://github.com/amancevice/superset


### 另：docker命令启动容器的方式:

> docker run -d -p 8088:8088 --name test_superset -e MAPBOX_API_KEY=pk.donotcopythis.replaceyourownapikey amancevice/superset

数据卷，注意用户的权限：

> -v $PWD/superset:/var/lib/superset
-v $PWD/conf:/home/superset