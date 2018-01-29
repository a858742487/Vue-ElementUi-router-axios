<template>
<!-- 首页底部 -->
  <div class="bottomIndex">
    <div class="mainBox">
      <el-row :gutter="30">
        <el-col :span="6">
          <h3 class="title">关于迈科技</h3>
          <p class="textLi">
            <a href="">艾科技简介</a>
          </p>
          <p class="textLi">
            <a href="">优势与服务</a>
          </p>
          <p class="textLi">
            <a href="">发展之路</a>
          </p>
        </el-col>
         <el-col :span="6">
          <h3 class="title">公司服务</h3>
          <p class="textLi">
            <a href="">创新发展规划</a>
          </p>
          <p class="textLi">
            <a href="">服务流程</a>
          </p>
          <p class="textLi">
            <a href="">更多服务</a>
          </p>
        </el-col>
        <el-col :span="7">
          <h3 class="title">联系我们 <span class="time">(工作日 9:30-18:30)</span></h3>
          <p class="textLi">
            客服电话：
            <h3 class="number">400-000-1768</h3>
          </p>
          <p class="textLi">
            邮箱：y9b@qq.com
          </p>
          <p class="textLi">
            地址:大师来到了卡桑德拉思考决定立即埃里克角度看拉萨
          </p>
        </el-col>
        <el-col :span="5">
            <img src="../../assets/logo.png">
        </el-col>
      </el-row>
      
    </div>
    <div class="bottomBeian">
      <span>Copyright © 沪ICP备15000929号-1 | 上海迈坦信息科技有限公司 | 021-54336693</span>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'bottomIndex',
    data() {
      return {

      }
    }

  }

</script>

<style scoped>
  .bottomIndex {
    width: 100%;
    height: 330px;
    /* border:1px solid #ddd; */
    margin-top: 1px;
    background: #323232;
  }

  .mainBox {
    width: 1000px;
    height: 280px;
    /* border: 1px solid #ddd; */
    margin: 0 auto;
    text-align : left;
    padding-top:50px;
  }
.title {
    font-size:1.3em;
    color:#fff;

}
.textLi {
    padding:0;
    margin:0;
    line-height: 30px;
    color:#ddd;
}
.time {
    font-size:0.7em;
    color:#999;
}
.number {
    font-size:2em;
    color:#0972d4;
    padding:0;
    margin:0;
}
.textLi a {
    color:#999;
    font-size:0.8em;
    line-height:20px;
}
.bottomBeian {
    background:#000;
    width: 100%;
    height: 30px;
}
.bottomBeian span {
  color: #fff;
  font-size: 0.8em;
  line-height: 30px;
}
</style>
