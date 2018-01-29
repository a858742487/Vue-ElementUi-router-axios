<template>
<!-- 首页新闻资讯 -->
  <div class="newIndex">
    <el-row class="newMain">
      <el-col :span="24">
        <img src="../../assets/images/zhuanjiapic/newslogo_1.png" alt="" class="boximg">
      </el-col>
    </el-row>
    <el-row :gutter="60" class="textMain">
      <el-col :span="8" v-for="itemMain in tableData" :key="tableData.reply_count">
        <a href="#"><div class="main">
          <p class="title">{{itemMain.title}}</p>
          <p class="textMainXiangqing">{{itemMain.content}}</p>
          <span class="more">了解更多</span>
        </div></a>
      </el-col>
    </el-row>
  </div>
</template>

<script>
  export default {
    name: "newIndex",
    data() {
      return {
        tableData: ""
      }
    },
    created() {
      this.$http.get('https://cnodejs.org/api/v1/topics', {
        params: {
          page: 1,
          limit: 3
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

<style scoped>
  .newIndex {
    width: 1000px;
    margin: 0 auto;
    padding-top: 60px;
  }

  .newMain {
    height: 30px;
    /* border:1px solid #ddd; */
  }

  .boximg {
    height: 30px;
    float: left;
  }

  .textMain {
    margin-top: 20px;
    /* border: 1px solid #ddd; */
  }

  .main:hover .title {
    color:red;
  }
  .main:hover .textMainXiangqing {
    color:red;
  }
  .main .title {
    font-size: 1.1em;
    text-align: left;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
  }

  .main .textMainXiangqing {
    text-align: left;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
    font-size: 0.8em;
    color: #999;
  }
  

  .more {
    margin-top: 10px;
    padding: 4px 5px 4px 5px;
    border: 1px solid #ddd;
    float: left;
    font-size: 0.8em;
    color:#666;
  }

</style>
