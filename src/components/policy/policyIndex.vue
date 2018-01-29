<template>
  <!-- 政策计划 -->
  <div class="policyIndex">
    <policyBanner></policyBanner>
    <div class="indexMainBox">
      <h2>政策计划</h2>
      <h5>Policy plan</h5>
      <el-row>
        <el-col :span="7" v-for="(o, index) in tableData" :key="o.title" class="listPolicy"  v-if="o.imageUrls == null ? false : true && index < 4">
          <router-link :to="{path: '/ExpertIntroductionDetails', query: {index: index}}">
            <el-card :body-style="{ padding: '30px' }" class="policyImg">
              <img :src="o.imageUrls" class="image">
              <div style="padding: 14px;">
                <span class="titleSpan">{{o.title}}</span>
                <div class="bottom clearfix">
                  <time class="time">{{ o.posterScreenName }}</time>
                </div>
              </div>
            </el-card>
          </router-link>
        </el-col>
        <div class="policyBottomPic">
          <p class="title">相关服务推荐</p>
          <img src="../../assets/images/policyBottomPic.jpg" alt="">
        </div>
      </el-row>

       <el-row>
        <el-col :span="7" v-for="(o, index) in tableData" :key="o.title" class="listPolicy"  v-if="o.imageUrls == null ? false : true && index < 4">
          <router-link :to="{path: '/ExpertIntroductionDetails', query: {index: index}}">
            <el-card :body-style="{ padding: '30px' }" class="policyImg">
              <img :src="o.imageUrls" class="image">
              <div style="padding: 14px;">
                <span class="titleSpan">{{o.title}}</span>
                <div class="bottom clearfix">
                  <time class="time">{{ o.posterScreenName }}</time>
                </div>
              </div>
            </el-card>
          </router-link>
        </el-col>
        <div class="policyBottomPic">
          <p class="title">相关服务推荐</p>
          <img src="../../assets/images/policypicBottom1.jpg" alt="">
        </div>
      </el-row>
    </div>
  </div>
</template>

<script>
  //   import zhuanjiaBanner from './zhuanjiaMain/zhuanjiaBanner'
  import policyBanner from './policyBanner'
  export default {
    name: 'policyIndex',
    data() {
      return {
        currentDate: new Date(),
        tableData : []
      }
    },
    components: {
      policyBanner
    },
    created() {
      this.$http.get(
        'https://bird.ioliu.cn/v1?url=http://120.76.205.241:8000/news/qihoo?kw=%E4%B8%93%E5%AE%B6&site=http%3A%2F%2Fnews.sohu.com%2F&apikey=PXYYZZLJn5JSfTasvTJUai1bIjyQNT9g6rsPg2LXUWf44KimzdnXEamLhqJdVpLb', {
          params: {

          }
        }).then(res => {
        this.tableData = res.data.data;
        // console.log(this.tableData[0].create_at);
      }, response => {
        console.log("res");
      })
    }
  }

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .indexMainBox {
    width: 1000px;
    margin: 0 auto;
    /* border: 1px solid #ddd; */
    /* height: 200px; */
  }

  .time {
    font-size: 13px;
    color: #999;
  }

  .bottom {
    margin-top: 13px;
    line-height: 12px;
  }

  .button {
    padding: 0;
    float: right;
  }

  .image {
    width: 100%;
    display: block;
  }

  .clearfix:before,
  .clearfix:after {
    display: table;
    content: "";
  }

  .clearfix:after {
    clear: both
  }

  .listPolicy {
    margin: 20px;
  }

  .policyBottomPic {
    width: 1000px;
    margin: 40px 0 50px 0;
  }

  .policyBottomPic img {
    width: 100%;
    height: 200px;
  }
  .policyImg .image {
    height: 300px;
  }

  .policyBottomPic .title {
    text-align: left;
  }
  .titleSpan {
    display: -webkit-box;
-webkit-box-orient: vertical;
-webkit-line-clamp: 1;
overflow: hidden;
  }

</style>
