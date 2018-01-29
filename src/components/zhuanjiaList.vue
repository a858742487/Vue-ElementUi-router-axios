<template>
  <!-- 这个页面是主页的banner -->
  <div class="zhuanjiaList">
    <!-- 相关专家 专家列表页 -->
    <!-- 面包屑 -->
    <div class="breadcrumb">
      <el-breadcrumb separator="/">
        <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
        <el-breadcrumb-item>专家</el-breadcrumb-item>
        <el-breadcrumb-item>相关专家</el-breadcrumb-item>
      </el-breadcrumb>
    </div>
    <div class="ListMain">
      <el-row :gutter="10">
        <el-col :span="18">
          <div class="grid-content">
              <!-- 判断接收到的imagesUrl是否为null 空就不要 -->
            <el-col :span="24" v-for="(zhuanjiaList,index) in tableData" :key="zhuanjiaList.title" v-if="zhuanjiaList.imageUrls == null ? false : true && index < 7">
              <div class="grid-content bg-purple ListHeight">
                <!-- {{index}} -->
                <el-row>
                  <el-col :span="6" class="headImage">
                      <!-- 链接技术详情 需更改 -->
                    <router-link :to="{path: '/ExpertIntroductionDetails', query: {index: index}}">
                      <div class="borderImg">
                        <img :src="zhuanjiaList.imageUrls" alt="">
                      </div>
                    </router-link>
                  </el-col>
                  <el-col :span="18" class="ZjTextMain">
                    <div class="ZjTextMainTitle">
                        <!-- 链接技术详情 需更改 -->
                      <router-link :to="{path: '/ExpertIntroductionDetails', query: {index: index}}">
                        <div class="name">
                          <p>{{zhuanjiaList.title}}</p>
                        </div>
                      </router-link>
                      <div class="btn">
                        <el-button type="primary" plain>{{zhuanjiaList.posterScreenName}}</el-button>
                      </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="iconTag">
                      <el-tag>{{zhuanjiaList.posterScreenName}}</el-tag>
                      <el-tag type="success">{{zhuanjiaList.posterScreenName}}</el-tag>
                      <el-tag type="info">{{zhuanjiaList.posterScreenName}}</el-tag>
                      <el-tag type="warning">{{zhuanjiaList.posterScreenName}}</el-tag>
                      <el-tag type="danger">{{zhuanjiaList.posterScreenName}}</el-tag>
                    </div>
                    <div class="jianjieText">
                      <p style="font-size:1.1em; font-weight:800; padding-bottom:10px;">简介</p>
                      <p class="jianjiewenzi">{{zhuanjiaList.content}}</p>
                    </div>
                    <h5>
                      <i class="el-icon-date"></i>{{zhuanjiaList.title}}
                      <p>
                          <!-- 链接技术详情 需更改 -->
                        <router-link :to="{path: '/ExpertIntroductionDetails', query: {index: index}}" style="float:right; color:#0078ff;">更多</router-link>
                      </p>
                    </h5>
                  </el-col>
                </el-row>
              </div>
            </el-col>
          </div>
        </el-col>
        <el-col :span="6" class="border rightMain" style="margin:0;padding:0;">
          <div class="grid-content">
            <el-col :span="24" style="margin:0;padding:0;">
              <div class="grid-content Righttitle">推荐机构参考</div>
            </el-col>
            <el-col :span="24" style="margin:0;padding:0;" v-for="(lgf,index) in tableData" :key="lgf.title">
              <div class="grid-content jigouList">{{index+1}} - {{lgf.title}}</div>
            </el-col>
          </div>
        </el-col>
      </el-row>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'zhuanjiaList',
    data() {
      return {
        logoBackground: require('../assets/logo.png'),
        tableData: []
      }
    },
    methods: {},
    components: {

    },
    created() {
      this.$http.get(
        'https://bird.ioliu.cn/v1?url=http://120.76.205.241:8000/news/qihoo?kw=%E4%B8%93%E5%AE%B6&site=http%3A%2F%2Fnews.sohu.com%2F&apikey=PXYYZZLJn5JSfTasvTJUai1bIjyQNT9g6rsPg2LXUWf44KimzdnXEamLhqJdVpLb', {
          params: {

          }
        }).then(res => {
        this.tableData = res.data.data;
        console.log(this.tableData[0].create_at);
      }, response => {
        console.log("res");
      })
    }
  }

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .Righttitle {
    font-size: 1.4em;
    background-color: #f0f0f0;
    line-height: 60px;
  }

  p {
    margin: 0;
    padding: 0;
  }

  .zhuanjiaList {
    width: 100%;
  }

  .breadcrumb {
    width: 1000px;
    /* border: 1px solid #ddd; */
    margin: 0 auto;
    height: 44px;
    padding-top: 30px;
  }

  .ListMain {
    width: 1000px;
    /* border: 1px solid #ddd; */
    margin: 0 auto;
  }

  .border {
    border: 1px solid #eee;
  }

  .el-row {
    /* 主图 */
    margin-bottom: 20px;
  }

  .bg-purple {
    /* background: #d3dce6; */
    border: 1px solid #ddd;
  }

  .ListHeight {
    height: 300px;
    background: #fffdfd;
    margin-bottom: 15px;
  }

  .ListHeight .headImage {
    height: 300px;
    /* background-color: #f0f; */
  }

  .ListHeight .headImage .borderImg {
    width: 70%;
    height: 43%;
    border-radius: 100px;
    border: 3px solid #ddd;
    margin: 13%;
    overflow: hidden;
    background-color: #fff;
    padding: 2px;
  }

  .ListHeight .headImage .borderImg img {
    width: 100%;
    height: 100%;
  }


  .ListHeight .ZjTextMain {
    /* border: 1px solid #ddd; */
    height: 300px;
    margin: 0;
    padding-right: 15px;
    padding-top: 15px;
  }

  .title {
    background-color: #ddd;
    margin-bottom: 15px;
  }

  .jigouList {
    height: 45px;
    background: #fffdfd;
    border-bottom: 1px solid #ddd;
    margin-bottom: 5px;
    padding: 5px 10px 0 10px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
  }

  .ZjTextMainTitle .name {
    float: left;
    font-size: 1.1em;
    font-weight: 800;
  }

  .ZjTextMainTitle .btn {
    float: right;
  }

  .iconTag {
    height: 55px;
  }

  .jianjieText {
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
  }

  .jianjiewenzi {
    height: 60px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
    color: #727272;
    font-family: "黑体";
  }

</style>
