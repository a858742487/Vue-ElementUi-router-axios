<template>
  <!-- 专家详情介绍页 详细内容 -->
  <div class="ExpertIntroductionDetails">
    <div class="breadcrumb">
      <el-breadcrumb separator="/">
        <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
        <el-breadcrumb-item>专家</el-breadcrumb-item>
        <el-breadcrumb-item>专家详情</el-breadcrumb-item>
      </el-breadcrumb>
    </div>
    <!-- <div style="clear:both;"></div> -->
    <!-- 接收上一个网页传过来的值 -->
    <!-- <p>{{$route.query.index}}</p> -->
    <div class="mainBox">
      <el-row>
        <el-col :span="17" class="mainBox1">
          <div class="headImgBg" :style="{background: 'url('+bottomBg+')'}">
            <div class="headImgBorder">
              <img :src="tableData[$route.query.index].imageUrls" alt="">
            </div>
          </div>
          <div class="title">
            <h1 class="titleTop">{{tableData[$route.query.index].title}}</h1>
            <p>{{tableData[$route.query.index].posterScreenName}} | {{tableData[$route.query.index].posterScreenName}}</p>
          </div>
          <div class="MainSurvey">
            <div class="topOne">
              <!-- posterScreenName标签 -->
              <h4>[1] {{tableData[$route.query.index].url}}</h4>
              <h4>[2] {{tableData[$route.query.index].title}}</h4>
              <h4>[3] {{tableData[$route.query.index].posterScreenName}}</h4>
              <h4>[4] {{tableData[$route.query.index].publishDateStr}}</h4>
              <!-- <h6>[4] {{tableData[$route.query.index].imageUrls}}</h6> -->
            </div>
            <div class="topTwo">
              <i class="el-icon-document"></i>
              <span>代表性论文 Representative Papers</span>
              <div class="topTwoText">
                <h4>[1] {{tableData[$route.query.index].url}}</h4>
                <h4>[2] {{tableData[$route.query.index].title}}</h4>
                <h4>[3] {{tableData[$route.query.index].posterScreenName}}
                  <img :src="tableData[$route.query.index].imagerls" alt="">
                </h4>
                <h4>[4] {{tableData[$route.query.index].publishDateStr}}</h4>
              </div>
            </div>
          </div>
        </el-col>
        <el-col :span="7" class="borLeft">
          <span style="" class="title">专家推荐服务</span>
          <p class="number">10000+深度合作专家 提供专业咨询</p>
          <div class="from">
            <el-input placeholder="您的姓名"></el-input>
            <el-input placeholder="请输入您的手机号">
              <template slot="prepend">+86</template>
            </el-input>
            <el-input placeholder="请输入验证码">
              <el-button slot="append">发送验证码</el-button>
            </el-input>
            <el-input type="textarea" :rows="4" placeholder="请提供您的需求，我们将为您推荐合适的专家，提供专业的咨询服务" v-model="textarea">
            </el-input>
            <el-button type="primary" style="width:100%">帮我联系</el-button>
          </div>
        </el-col>
      </el-row>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'ExpertIntroductionDetails',
    data() {
      return {
        bottomBg: require('../assets/images/banner.jpg'),
        headImgBorder: require('../assets/logo.png'),
        textarea: '',
        tableData: [],
        loading : true
      }
    },
    methods: {},
    components: {

    },
    mounted() {
      setTimeout(() => {
        this.$http.get(
          'https://bird.ioliu.cn/v1?url=http://120.76.205.241:8000/news/qihoo?kw=%E4%B8%93%E5%AE%B6&site=qq.com&apikey=PXYYZZLJn5JSfTasvTJUai1bIjyQNT9g6rsPg2LXUWf44KimzdnXEamLhqJdVpLb', {
            params: {}
          }).then(res => {
          this.tableData = res.data.data;
          // this.loading = false;
        }, response => {
          console.log("res");
        })
      }, 1000);
    }
  }

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .borLeft {
    border-left: 10px solid #eee;
    height: 1000px;
    padding: 15px;
    text-align: left;
  }

  .borLeft .title {
    padding-left: 10px;
    font-size: 1.1em;
    font-weight: 800;
    border-left: 5px solid #2f87ff;
  }

  .borLeft .number {
    color: #ddd;
    font-size: 15px;
  }

  .titleTop {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    padding: 0 70px;
  }


  .ExpertIntroductionDetails {
    background: #eee;
    margin-bottom: 50px;
  }

  p {
    margin: 0;
    padding: 0;
  }

  .breadcrumb {
    width: 1000px;
    /* border: 1px solid #ddd; */
    margin: 0 auto;
    height: 44px;
    padding-top: 30px;
  }

  .mainBox {
    width: 1000px;
    margin: 0 auto;
    position: relative;
    background-color: #fff;
  }

  .mainBox1 {
    position: relative;
    background-color: #fff;
  }

  .mainBox1 .headImgBg {
    height: 120px;
    position: relative;
  }

  .headImgBorder {
    width: 110px;
    height: 110px;
    border: 1px solid #eee;
    border-radius: 100%;
    position: absolute;
    left: 42%;
    top: 50%;
    background-size: cover;
    overflow: hidden;
    background-color: #fff;
  }

  .headImgBorder img {
    width: 150%;
  }

  .mainBox1 .title {
    margin-top: 70px;
  }

  .MainSurvey .topOne {
    padding: 0 10%;
    color: #999;
    font-size: 14px;
    line-height: 2.6;
    text-align: left;
    background-color: #fff;
  }

  .topTwo {
    text-align: left;
    margin-top: 20px;
    border-top: 1px solid #ddd;
    padding: 20px 0;
    font-size: 20px;
  }

  .from {
    line-height: 55px;
    margin-top: 10px;
  }

  .topTwo .topTwoText {
    padding: 0 10%;
    color: #999;
    font-size: 14px;
    line-height: 2.6;
    text-align: left;
  }

  .el-icon-document {
    padding-left: 30px;
  }

</style>
