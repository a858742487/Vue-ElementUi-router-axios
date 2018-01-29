<template>
  <div class="policyIndex">
    <!-- 热门活动 技术交流盛会 -->
    <div class="title">
      <h3>行业热门活动 技术交流盛会</h3>
      <p>参与到产业活动中 和技术方零距离交流</p>
    </div>
    <div class="policyBoxFour">
      <el-row>
        <a href="#"><el-col :span="6" v-for="itemBox in itembottomBg" :key="itemBox.icon" class="boxBackground" :style="{background: 'url('+itemBox.bottomBg+')'}">
          <i :class="itemBox.icon" class="iconSize"></i>
          <p>{{itemBox.title}}</p>
        </el-col></a>
      </el-row>
    </div>
  </div>
</template>
<script>
  export default {
    name: 'policyIndex',
    data() {
      return {
        itembottomBg: [{
            bottomBg: require("../../assets/images/zhuanjiapic/solution-bgimg-fiv.jpg"),
            time: "2018年1月8日09:17:57",
            icon: "el-icon-upload",
            title: "行业展会"
          },
          {
            bottomBg: require("../../assets/images/zhuanjiapic/solution-bgimg-fou.jpg"),
            time: "2018年1月8日09:17:57",
            icon: "el-icon-success",
            title: "会议论坛"
          },
          {
            bottomBg: require("../../assets/images/zhuanjiapic/solution-bgimg-one.jpg"),
            time: "2018年1月8日09:17:57",
            icon: "el-icon-date",
            title: "社群交流"
          },
          {
            bottomBg: require("../../assets/images/zhuanjiapic/solution-bgimg-two.jpg"),
            time: "2018年1月8日09:17:57",
            icon: "el-icon-edit-outline",
            title: "会员活动"
          }
        ]

      }
    },
    methods: {

    }
  }

</script>

<style scoped>
  .title {
    margin-top: 60px;
  }

  .title h3 {
    font-family: "黑体";
    font-size: 1.7em;
  }

  .title p {
    font-size: 0.9em;
  }

  .policyBoxFour {
    width: 1000px;
    height: 400px;
    /* border:1px solid #ddd; */
    margin: 0 auto;
    padding-top: 30px;
  }

  .boxBackground {
    height: 400px;
  }
  .boxBackground:hover {
      opacity: 0.6;
      transition: 1s;
  }

  .iconSize {
    font-size: 3em;
    color: #fff;
    padding-top: 120px;
    padding-bottom: 30px;
  }

  .boxBackground p {
    color: #fff;
    font-weight: 800;
    font-family: "黑体";
    font-size: 1.1em;
    border-top: 1px solid #ddd;
    padding-top: 30px;
    width: 60%;
    margin: 0 auto;
  }

</style>
