<template>
  <div class="ruzhuMainPeople">
    <!-- 专家入驻 tab -->
    <!-- 四个专家,矩形 -->
    <div class="mainBox">
      <div class="titleTop">
        <p class="borderLeft"></p>
        <p class="borderText">入驻专家</p>
        <p class="borderRight"></p>
        <h5>知名学者、产业专家，为您技术升级转型之路出力</h5>
      </div>
      <div class="ruzhuBoxFour">
        <div class="parallelogram">
          <!-- 链接的是技术详情,index是传值 -->
          <router-link :to="{path: '/ExpertIntroductionDetails', query: {index: 1}}"> 
            <div class="boxImg" :style="{background:'url('+back1+')'}"></div>
            <div class="boxText">
              <span class="name">高乃平</span>
              <span>
                <i class="el-icon-location-outline"></i>上海</span>
              <P>同济大学 | 副教授</P>
              <div class="parall">生物制剂</div>
              <div class="parall1">空气泵</div>
              <div style="clear : both;"></div>
              <div class="parall2">撒哈拉沙漠</div>
            </div>
          </router-link>
        </div>
        <div class="parallelogram">
          <router-link :to="{path: '/ExpertIntroductionDetails', query: {index: 2}}"> 
          <div class="boxText">
            <span class="name">高乃平</span>
            <span>
              <i class="el-icon-location-outline"></i>上海</span>
            <P>同济大学 | 副教授</P>
            <div class="parall">生物制剂</div>
            <div class="parall1">空气泵</div>
            <div style="clear : both;"></div>
            <div class="parall2">撒哈拉沙漠</div>
          </div>
          <div class="boxImg" :style="{background:'url('+back2+')'}"></div>
        </router-link>
        </div>
        <div class="parallelogram"><router-link :to="{path: '/ExpertIntroductionDetails', query: {index: 3}}"> 
          <div class="boxImg" :style="{background:'url('+back3+')'}"></div>
          <div class="boxText">
            <span class="name">高乃平</span>
            <span>
              <i class="el-icon-location-outline"></i>上海</span>
            <P>同济大学 | 副教授</P>
            <div class="parall">生物制剂</div>
            <div class="parall1">空气泵</div>
            <div style="clear : both;"></div>
            <div class="parall2">撒哈拉沙漠</div>
          </div>
          </router-link>
        </div>
        <div class="parallelogram"><router-link :to="{path: '/ExpertIntroductionDetails', query: {index: 4}}"> 
          <div class="boxText">
            <span class="name">高乃平</span>
            <span>
              <i class="el-icon-location-outline"></i>上海</span>
            <P>同济大学 | 副教授</P>
            <div class="parall">生物制剂</div>
            <div class="parall1">空气泵</div>
            <div style="clear : both;"></div>
            <div class="parall2">撒哈拉沙漠</div>
          </div>
          <div class="boxImg" :style="{background:'url('+back4+')'}"></div>
          </router-link>
        </div>
      </div>
      <!-- 链接专家列表 -->
          <h2 class="more"><router-link :to="'/zhuanjiaList'"><a>查看更多合作机构</a></router-link></h2>
    </div>
    <!-- 院校合作 多边矩形 -->
    <!-- sssssssssssssssssssssss -->
  </div>
</template>

<script>
  export default {
    name: "ruzhuMainPeople",
    data() {
      return {
        back1: require('../../assets/images/ruzhuPic/1.jpg'),
        back2: require('../../assets/images/ruzhuPic/2.jpg'),
        back3: require('../../assets/images/ruzhuPic/3.jpg'),
        back4: require('../../assets/images/ruzhuPic/4.jpg')
      }
    }
  }

</script>

<style scoped>
  .parallelogram {
    width: 200px;
    height: 620px;
    margin-left: 40px;
    -webkit-transform: skew(-20deg);
    -moz-transform: skew(-20deg);
    -o-transform: skew(-20deg);
    background: #000;
    overflow: hidden;
    float: left;
    position: relative;
    left: 8%;
    top: 6%;
  }

  .parallelogram .boxImg {
    width: 460px;
    height: 420px;
    /* border: 1px solid #ddd; */
    position: absolute;
    left: -55%;
    top: 0%;
    /* z-index: 999px; */
    /* background: blue; */
    -webkit-transform: skew(20deg);
    -moz-transform: skew(20deg);
    -o-transform: skew(20deg);
    background-size: 200px 420px;
  }

  .parallelogram .boxImg:hover {
    opacity: 0.8;
  }

  .parallelogram .boxText {
    width: 460px;
    height: 200px;
    background-color: #fff;
    -webkit-transform: skew(20deg);
    -moz-transform: skew(20deg);
    -o-transform: skew(20deg);
    z-index: 999;
    position: absolute;
    left: -60%;
    top: 67%;
    padding-top: 10px;
  }

  .parallelogram .name {
    font-size: 1.1em;
    font-weight: 800;
  }

  .parall {
    width: 65px;
    height: 25px;
    margin-left: 32%;
    -webkit-transform: skew(-20deg);
    -moz-transform: skew(-20deg);
    -o-transform: skew(-20deg);
    /* background: blue; */
    border: 1px solid #156fb8;
    color: #156fb8;
    font-size: 0.9em;
    line-height: 25px;
    float: left;
    /* overflow: hidden; */
  }

  .parall1 {
    width: 65px;
    height: 25px;
    margin-left: 4%;
    -webkit-transform: skew(-20deg);
    -moz-transform: skew(-20deg);
    -o-transform: skew(-20deg);
    /* background: blue; */
    border: 1px solid #156fb8;
    color: #156fb8;
    font-size: 0.9em;
    line-height: 25px;
    float: left;
    /* overflow: hidden; */
  }

  .parall2 {
    width: 150px;
    height: 25px;
    margin-left: 29%;
    margin-top: 2%;
    -webkit-transform: skew(-20deg);
    -moz-transform: skew(-20deg);
    -o-transform: skew(-20deg);
    /* background: blue; */
    border: 1px solid #156fb8;
    color: #156fb8;
    font-size: 0.9em;
    line-height: 25px;
    float: left;
    /* overflow: hidden; */
  }

  .ruzhuMainPeople {
    width: 100%;
    height: 930px;
    background-color: #eee;
  }

  .mainBox {
    width: 1200px;
    margin: 0 auto;
    height: 900px;
    /* border: 1px solid #ddd; */
  }

  .titleTop {
    position: relative;
  }

  .titleTop .borderLeft {
    width: 200px;
    height: 1px;
    background: #999;
    position: absolute;
    top: 30%;
    left: 20%;
  }

  .titleTop .borderRight {
    width: 200px;
    height: 1px;
    background: #999;
    position: absolute;
    top: 30%;
    right: 20%;
  }

  .borderText {
    display: inline-block;
    font-size: 1.7em;
    font-weight: 800;
  }

  .ruzhuBoxFour {
    width: 1200px;
    height: 700px;
    /* border: 1px solid #ddd; */
    position: relative;
  }
    .more {
        position: relative;
        bottom:2%;
        left: 0%;
    }
    .more a {
        color: #156fb8;
    }
</style>
