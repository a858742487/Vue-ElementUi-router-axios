<template>
 <!-- 热门技术 -->
  <div class="advanback" :style="{background: 'url('+advanBackBottomBg+')'}">
    <div class="threeBox">
        <el-row :gutter="30">
          <el-col :span="8" class="box" v-for="itemgh in itemArray" :key="itemgh.key">
              <div :class="itemgh.icon"></div>
              <p class="text">{{itemgh.text}}</p>
              <h6 class="htext">{{itemgh.htext}}</h6>
          </el-col>
        </el-row>
    </div>
    <div class="sixMainBox">
        <el-row :gutter="40">
          <el-col :span="8" v-for="itemsix in itemArrayMain" :key="itemsix.key">
              <div class="sixbox">
                  <i :class="itemsix.icon" class="elIcon"></i>
                  <span class="textMainHover">{{itemsix.title}}</span>
                  <h6 class="textMainHover">{{itemsix.text}}</h6>
              </div>
          </el-col>
        </el-row>
    </div>
  </div>
</template>

<script>


  export default {
    name: 'advanback',
    data() {
      return {
        advanBackBottomBg: require('../../assets/images/zhuanjiapic/advanback.jpg'),
        logoBottomBg: require('../../assets/images/zhuanjiapic/72.png'),
        itemArray : [
            {text : "全面规划发展企业道路" , htext :"企业发展规划需要涉及诸多方面，一份形成体系的全盘规划可以帮助企业在发展之路走得更远更顺利。", key : "1", icon : "logo"},
            {text : "企业技术创新转型升级规划" , htext :"3000+项成熟而优质的技术项目，帮助企业快速落地，在提升核心竞争力的同时，也在市场竞争中赢得时间优势。" ,key : "2", icon : "logo1"},
            {text : "全面规划发展企业道路" , htext :"随时服务企业技术创新，规划企业技术创新及相关荣誉资质体系，进而通过引入技术、资金、荣誉等多种资源帮助会员企业实现向创新驱动型公司的转变。", key : "3", icon : "logo2"}
        ],
        itemArrayMain : [
            {icon : "el-icon-edit" , title : "1.点击预约" , text : "留下您的联系方式，迈科技会在1个工作日内与您确认预约安排", key : "1"},
            {icon : "el-icon-document" , title : "2.上门诊断" , text : "技术创新经理免费上门诊断，为企业创新规划做准备", key : "2"},
            {icon : "el-icon-phone-outline" , title : "3.洽谈签约" , text : "签约成为企动力会员，获得技术创新诊断报告", key : "3"},
            {icon : "el-icon-printer" , title : "4.服务执行" , text : "根据签约内容，由迈科技专业的服务人员为企业提供服务", key : "4"},
            {icon : "el-icon-service" , title : "5.后续服务" , text : "服务回访，以及技术创新经理的全程、常年服务", key : "5"},
            {icon : "el-icon-success" , title : "6.全程保障" , text : "全程保障，保障客户权益，是我们最大的用心", key : "6"},
        ]

      }
    }

  }

</script>

<style scoped>
  .advanback {
    background-size: 100%;
    height: 823px;
    margin-top: 80px;
  }
.threeBox {
    width: 1000px;
    height: 350px;
    border-bottom:1px solid #ddd;
    margin: 0 auto;
}
.box {
    padding-top: 10%;
}
.logo {
    width: 80px;
    height: 80px;
    overflow: hidden; 
    margin: 0 auto;
    z-index: 99999;
    background: url(../../assets/images/zhuanjiapic/72.png) no-repeat;
    /* border:1px solid #fff; */
    /* border-radius: 100%;     */
}
.logo1 {
    width: 80px;
    height: 80px;
    overflow: hidden; 
    margin: 0 auto;
    z-index: 99999;
    background: url(../../assets/images/zhuanjiapic/free.png) no-repeat;
    /* border:1px solid #fff; */
    /* border-radius: 100%;     */
}
.logo2 {
    width: 80px;
    height: 80px;
    overflow: hidden; 
    margin: 0 auto;
    z-index: 99999;
    background: url(../../assets/images/zhuanjiapic/low.png) no-repeat;
    /* border:1px solid #fff; */
    /* border-radius: 100%;     */
}


.text {
    color: #fff;
    font-size: 1.4em;
}
.logo:hover{
    background-position: 0 -80px;
    /* color: red; */
    /* border-width: 100px; */
    /* transition: 1s; */
}
.logo1:hover{
    background-position: 0 -80px;
    /* color: red; */
    /* border-width: 100px; */
    /* transition: 1s; */
}
.logo2:hover{
    background-position: 0 -80px;
    /* color: red; */
    /* border-width: 100px; */
    /* transition: 1s; */
}
.htext {
   color:#a6bad3;
}

.sixMainBox {
    width: 1000px;
    height: 400px;
    border-bottom:1px solid #ddd;
    margin: 0 auto;
}
.sixbox {
    padding-top: 40px;
    font-size: 1.2em;
    color: #fff;
    font-weight: 800;
    height: 140px;
}
.sixbox .elIcon{
    font-size: 2em;
    color: red;
}
.sixbox:hover .textMainHover{
    color: red;
    /* font-weight: 800; */
}
</style>
