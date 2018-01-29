<template>
  <!-- 首页专家技术热门轮播 技术热门 -->
  <div class="hotTechnology">
    <h2 class="titlehot">技术热门
      <br>Hot technology</h2>
    <el-carousel :interval="4000" type="card" height="320px" class="threecontainer">
      <el-carousel-item v-for="(itemThree,index) in indexThreepic" :key="itemThree.title" class="threeboxwidth" v-if="itemThree.imageUrls == null ? false : true && index < 10">
        <router-link :to="{path: '/technicalDetails', query: {index: index}}">
          <img :src="itemThree.imageUrls" alt="" class="threepicimg">
          <p>
            {{ itemThree.title }}
          </p>
        </router-link>
      </el-carousel-item>
    </el-carousel>
  </div>
</template>
<script>
  export default {
    name: 'hotTechnology',
    data() {
      return {
        indexThreepic: []
      }
    },
    methods: {

    },
    created() {
      // var url = 
      this.$http.get(
        'https://bird.ioliu.cn/v1?url=http://120.76.205.241:8000/news/qihoo?kw=n&site=qq.com&apikey=PXYYZZLJn5JSfTasvTJUai1bIjyQNT9g6rsPg2LXUWf44KimzdnXEamLhqJdVpLb', {
          params: {

          }
        }).then(res => {
        this.indexThreepic = res.data.data;
        // console.log(this.tableData[0].create_at);

      }, response => {
        console.log("res");
      })
    }
  }

</script>

<style scoped>
  .hotTechnology {
    padding-top: 2%;
    width: 1000px;
  }
  .el-carousel__item h3 {
    color: #475669;
    font-size: 14px;
    opacity: 0.75;
    line-height: 200px;
    margin: 0;
  }

  .el-carousel__item:nth-child(2n) {
    background-color: #fff;
  }

  .el-carousel__item:nth-child(2n+1) {
    background-color: #fff;
  }

  .threepicimg {
    width: 550px;
    height: 260px;
    margin: 0;
    padding: 0;
    /* margin-bottom: 300px;  */
  }

  .threeboxwidth {
    /* width: 445px !important; */
    padding-top: 20px;
    border-radius: 5px;
    /* margin-bottom: 300px;  */
  }

  .titlehot {
    color: #fff;
    font-family: "黑体";
    padding-bottom: 2%;
    font-size: 2em;
    letter-spacing: 10px;
    font-weight: 800;
  }

</style>
