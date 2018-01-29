<template>
  <!-- 这个页面是技术详情页 -->
  <div class="technicalDetailsMain">
    <!-- 详情页上面的box -->
    <div class="mainBoxTop">
      <el-row>
        <el-col :span="8" class="border imgTop">
          <img :src="tableData[$route.query.index].imageUrls" alt="" class="collaboratorsBoxImg">
          <!-- {{$route.query.index}} -->
        </el-col>
        <el-col :span="15" class="textTop">
          <h4 class="title">{{tableData[$route.query.index].title}}</h4>
          <p class="text">{{tableData[$route.query.index].content}}</p>
          <div class="elTag">
            <el-tag>标签一</el-tag>
            <el-tag type="success">标签二</el-tag>
            <el-tag type="info">标签三</el-tag>
            <el-tag type="warning">标签四</el-tag>
            <el-tag type="danger">标签五</el-tag>
          </div>
          <el-button type="primary" class="TopBoxBtn">主要按钮</el-button>
        </el-col>

        <el-col :span="24" class="border biaoqianText">
          <el-row>
            <el-col :span="6" class="fenleiJianjie">
              <span>技术编号：</span>T2017060118</el-col>
            <el-col :span="6" class="fenleiJianjie">
              <span>成熟度：</span>生试阶段</el-col>
            <el-col :span="6" class="fenleiJianjie">
              <span>来源地：</span>中国</el-col>
            <el-col :span="6" class="fenleiJianjie">
              <span>合作方式：</span>技术入股、技术转让、技术许可...</el-col>
            <el-col :span="6" class="fenleiJianjie">
              <span>合作价格：</span>面议</el-col>
            <el-col :span="6" class="fenleiJianjie">
              <span>专利：</span>有</el-col>
            <el-col :span="6" class="fenleiJianjie">
              <span>交付形式：</span>产品</el-col>
            <el-col :span="6" class="fenleiJianjie">
              <span>所属领域：</span>材料科技、化学化工</el-col>
            <el-col :span="24" class="fenleiJianjie">
              <span>此技术可用于：</span>通用|工程塑料、天然|合成橡胶、表面处理、功能材料</el-col>
          </el-row>
        </el-col>
      </el-row>
    </div>
    <!-- 详情页左边的box -->
    <div class="mainLeftBox">
      <el-row>
        <el-col :span="24">
          <h3 class="titleLogoText">方案描述</h3>
        </el-col>
        <!-- 01技术详细描述 -->
        <el-col :span="4" class="mainLeftStyle title">01
          <br>技术详述</el-col>
        <el-col :span="20" class="mainLeftStyle text height1">一、技术背景 轮胎生产需经硫化机加热硫化，金属模具用于轮胎外表面花纹的成型，可伸缩胶囊用于轮胎内表面的成型。 在生胎与金属模具的接触面，脱模剂就显得非常重要了，没有脱模剂，硫化时，生胎气密层的橡胶和金属模具就会粘在一起。根据不同工厂的工艺安排，脱模剂可以喷涂在生胎的内侧或者金属表面。一些工厂使用单次脱模的脱模剂，也有些工厂使用多次脱模的脱模剂。一条轮胎的生产要经过很多步骤，最后一步是生胎的硫化成型。如果这一步失败，就会损失很多价值。因此，一款高效的脱模剂能提供最佳的硫化条件。
          二、技术介绍 脱模剂是一种在轮胎硫化时介于胶囊和轮胎之间的功能性物质，起到润滑、隔离和脱模的作用。一般以交联型改性聚硅氧烷和大分子有机物为主，另外加入功能性助剂。在高温状态下，即可在金属模具和轮胎之间进行自交联，形成弹性体薄膜，使产品内表面不粘、光滑、饱满、不结垢，不污染环境和其他隔离工具，是无毒无害的水性环保产品。脱模剂
          – 轮胎生产企业必备的化工助剂，主要是有利于橡胶和模具的分离，避免产生难于脱模导致的产品损坏或者质量不达标。由上海化工研究院和国家有机硅重点实验室联合开发。本技术课题相应国家十三五规划，进行进口材料的替代，提高国产材料国产化率。目前产品已经量产，生产厂在浙江。生产过程都符合环保要求，且达到安全要求。本产品应用过程中，包括四大工序：清洗、喷涂、装胎和硫化。产品外观及其使用效果如图1所示。
          图1 产品外观及其使用效果 三、应用影响 与国外品牌对比 1、替代瓦克E1982，只能硫化5-6锅； 2、替代肯天mono lube8136 QD，价格太贵，硫化7-8锅。 客户领域 本技术适用于轮胎制造型企业-轮胎生产过程中脱模。本产品还可以用到塑料制造和金属制造企业，调整配方即可。
          市场优势 和目前市场上的产品比较，价格低，效果好，性能稳定。国产的目前有家山东的企业能做，只能做到3-4硫化量/锅，不需提及。
        </el-col>
        <!-- 02技术详细描述 -->
        <el-col :span="4" class="mainLeftStyle title">02
          <br>技术详述</el-col>
        <el-col :span="20" class="mainLeftStyle text height2">一、技术背景 轮胎生产需经硫化机加热硫化，金属模具用于轮胎外表面花纹的成型，可伸缩胶囊用于轮胎内表面的成型。 在生胎与金属模具的接触面，脱模剂就显得非常重要了，没有脱模剂，硫化时，生胎气密层的橡胶和金属模具就会粘在一起。根据不同工厂的工艺安排，脱模剂可以喷涂在生胎的内侧或者金属表面。一些工厂使用单次脱模的脱模剂，也有些
        </el-col>
        <el-col :span="4" class="mainLeftStyle title">03
          <br>技术详述</el-col>
        <el-col :span="20" class="mainLeftStyle text height3">一、技术背景 轮胎生产需经硫化机加热硫化，金属模具用于轮胎外表面花纹的成型，可伸缩胶囊用于轮胎内表面的成型。 在生胎与金属模具的接触面，脱模剂就显得非常重要了，没有脱模剂，硫化时，生胎气密层的橡胶和金属模具就会粘在一起。根据不同工厂的工艺安排，脱模剂可以喷涂在生胎的内侧或者金属表面。一些工厂使用单次脱模的脱模剂，也有技术背景
          轮胎生产需经硫化机加热硫化，金属模具用于轮胎外表面花纹的成型，可伸缩胶囊用于轮胎内表面的成型。 在生胎与金属模具的接触面，脱模剂就显得非常重要了，技术背景 轮胎生产需经硫化机加热硫化，金属模具用于轮胎外表面花纹的成型，可伸缩胶囊用于轮胎内表面的成型。
          在生胎与金属模具的接触面，脱模剂就显得非常重要了，技术背景 轮胎生产需经硫化机加热硫化，金属模具用于轮胎外表面花纹的成型，可伸缩胶囊用于轮胎内表面的成型。 在生胎与金属模具的接触面，脱模剂就显得非常重要了，技术背景 轮胎生产需经硫化机加热硫化，金属模具用于轮胎外表面花纹的成型，可伸缩胶囊用于轮胎内表面的成型。
          在生胎与金属模具的接触面，脱模剂就显得非常重要了，技术背景 轮胎生产需经硫化机加热硫化，金属模具用于轮胎外表面花纹的成型，可伸缩胶囊用于轮胎内表面的成型。 在生胎与金属模具的接触面，脱模剂就显得非常重要了，些

        </el-col>
        <el-col :span="4" class="mainLeftStyle title">04
          <br>技术详述</el-col>
        <el-col :span="20" class="mainLeftStyle text height4">一、技术背景 轮胎生产需经硫化机加热硫化，金属模具用于轮胎外表面花纹的成型，可伸缩胶囊用于轮胎内表面的成型。 在生胎与金属模具的接触面，脱模剂就显得非常重要了，没有脱模剂，硫化时，生胎气密层的橡胶和金属模具就会粘在一起。根据不同工厂的工艺安排，脱模剂可以喷涂在生胎的内侧或者金属表面。一些工厂使用单次脱模的脱模剂，也有技术背景
          轮胎生产需经硫化机加热硫化，金属模具用于轮胎外表面花纹的成型，可伸缩胶囊用于轮胎内表面的成型。 在生胎与金属模具的接触面，脱模剂就显得非常重要了，技术背景 轮胎生产需经硫化机加热硫化，金属模具用于轮胎外表面花纹的成型，可伸缩胶囊用于轮胎内表面的成型。
          在生胎与金属模具的接触面，脱模剂就显得非常重要了，技术背景 轮胎生产需经硫化机加热硫化，金属模具用于轮胎外表面花纹的成型，可伸缩胶囊用于轮胎内表面的成型。 在生胎与金属模具的接触面，脱模剂就显得非常重要了，技术背景 轮胎生产需经硫化机加热硫化，金属模具用于轮胎外表面花纹的成型，可伸缩胶囊用于轮胎内表面的成型。
          在生胎与金属模具的接触面，脱模剂就显得非常重要了，技术背景 轮胎生产需经硫化机加热硫化，金属模具用于轮胎外表面花纹的成型，可伸缩胶囊用于轮胎内表面的成型。 在生胎与金属模具的接触面，脱模剂就显得非常重要了，些
        </el-col>

      </el-row>
    </div>
    <!-- 详情页右边的box -->
    <div class="mainRightBox">
      <el-row>
        <el-col :span="1">&nbsp;</el-col>
        <el-col :span="22" class="rightBoxR">
          <el-card :body-style="{ padding: '0px' }">
            <img src="../../assets/logo.png" class="image">
            <div style="padding: 14px;">
              <span>好吃的汉堡</span>
              <div class="bottom clearfix">
                <time class="time">{{ currentDate }}</time>
                <el-button type="text" class="button">操作按钮</el-button>
              </div>
            </div>
          </el-card>
        </el-col>
        <el-col :span="1">&nbsp;</el-col>
      </el-row>
      <el-row>
        <el-col :span="1">&nbsp;</el-col>
        <el-col :span="22" class="rightBoxR">
          <el-card :body-style="{ padding: '0px' }">
            <img src="../../assets/logo.png" class="image">
            <div style="padding: 14px;">
              <span>好吃的汉堡</span>
              <div class="bottom clearfix">
                <time class="time">{{ currentDate }}</time>
                <el-button type="text" class="button">操作按钮</el-button>
              </div>
            </div>
          </el-card>
        </el-col>
        <el-col :span="1">&nbsp;</el-col>
      </el-row>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'technicalDetailsMain',
    data() {
      return {
        tableData: [],
        currentDate: new Date(),
         lgfname: this.$route.query.name,
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
  .rightBoxR {
    padding: 10px 0 10px 0;
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

  .technicalDetailsMain {
    width: 1000px;
    margin: 0 auto;
    min-height: 2550px;
  }

  .technicalDetailsMain .mainBoxTop {
    width: 100%;
    min-height: 400px;
    /* border:1px solid #ddd; */
    background-color: #fff;
    padding: 20px;
  }

  .technicalDetailsMain .mainLeftBox {
    width: 700px;
    min-height: 2000px;
    /* border:1px solid #ddd; */
    float: left;
    margin: 20px 0 0 0;
    background-color: #fff;
  }

  .technicalDetailsMain .mainRightBox {
    width: 280px;
    min-height: 750px;
    /* border:1px solid #ddd; */
    float: left;
    margin: 20px 0 0 20px;
    background-color: #fff;
  }

  .border {
    border: 1px solid #ddd;
  }

  .imgTop {
    height: 250px;
    margin-right: 20px;
  }

  .imgTop .collaboratorsBoxImg {
    width: 100%;
    height: 100%;
  }

  .textTop {
    height: 250px;
  }
  .textTop .title{
       overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
  }


  .biaoqianText {
    height: 135px;
    margin-top: 20px;
    background: #eff6fe;
    padding: 20px;
  }

  .textTop {
    padding: 5px 20px 0 5px;
  }

  .textTop .title {
    text-align: left;
    margin: 0;
    padding: 0 0 10px 0;
    font-size: 1.4em;
  }

  .textTop .text {
    text-align: left;
    font-size: 0.9em;
    color: #727272;
    height: 50px;
    padding: 0 0 10px 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
  }

  .textTop .elTag {
    text-align: left;
    padding: 0 0 10px 0;
  }

  .TopBoxBtn {
    float: left;
    margin: 20px 20px 20px 0;
    width: 150px;
    font-size: 1.2em;
  }

  .fenleiJianjie {
    height: 30px;
    /* border:1px solid #ddd; */
    text-align: left;
    line-height: 30px;
    font-size: 0.9em;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 1;
    overflow: hidden;
  }

  .fenleiJianjie>span {
    font-weight: 800;
  }

  .titleLogoText {
    border-left: 8px solid #1f86ed;
    text-align: left;
    padding-left: 10px;
    color: #1f86ed;
    margin-left: 10px;
  }

  .mainLeftStyle {
    padding: 10px 15px 20px 10px;
    line-height: 30px;
    text-indent: 2em;
    text-align: left;
    overflow: hidden;
  }

  .mainLeftBox .title {
    font-size: 1.2em;
    text-indent: 0em;
    font-weight: 800;
    text-align: center;
    color: rgb(119, 119, 119);
  }

  .mainLeftBox .text {
    border-bottom: 1px solid #ddd;
  }

  .height1 {
    height: 710px;
  }

  .height2 {
    height: 175px;
  }

  .height3 {
    height: 505px;
  }

  .height4 {
    height: 512px;
  }

</style>
