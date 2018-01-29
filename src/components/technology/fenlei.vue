<template>
  <!-- 技术页面组件(所属行业 所属地区) 分类 -->
  <div class="fenlei">
    <div class="lgf">
      <div class="mainBox">
        <p class="title">所属领域：</p>
        <ul>
          <li class="itemtext" v-for="itemtext in itemArrayZong">
            <a href="#">{{itemtext.zong}}</a>
          </li>
        </ul>
      </div>
      <div class="mainBox">
        <p class="title">应用行业：</p>
        <ul>
          <li class="itemtext" v-for="itemtext in itemArrayZong"><a href="#">{{itemtext.yingyong}}</a></li>
        </ul>
      </div>
      <div class="mainBox">
        <p class="title">成熟度：</p>
        <ul>
          <li class="itemtext" v-for="itemtext in itemArrayZong"><a href="#">{{itemtext.chengshu}}</a></li>
        </ul>
      </div>
      <div class="mainBox">
        <p class="title">来源地：</p>
        <ul>
          <li class="itemtext" v-for="itemtext in itemArrayZong"><a href="#">{{itemtext.laiyuandi}}</a></li>
        </ul>
      </div>
      <div class="mainBox">
        <p class="title">合作标签：</p>
        <ul>
          <li class="itemtext" v-for="itemtext in itemArrayZong"><a href="#">{{itemtext.biaoqian}}</a></li>
        </ul>
      </div>
    </div>
    <div class="hotpic">
      <img src="../../assets/logo.png" alt="">
    </div>
  </div>

  </el-tabs>
  </div>
</template>

<script>
  export default {
    name: "fenlei",
    data() {
      return {
        itemArrayZong: [{
          zong: "不限",
          yingyong: "不限",
          chengshu: "不限",
          laiyuandi: "不限",
          biaoqian: "不限"
        }, {
          zong: "能源电力",
          yingyong: "环保行业",
          chengshu: "小试",
          laiyuandi: "中国",
          biaoqian: "缺启动资金"
        }, {
          zong: "环境工程",
          yingyong: "化工新材料行业",
          chengshu: "中试",
          laiyuandi: "中国(香港)",
          biaoqian: "缺市场渠道"
        }, {
          zong: "化学化工",
          yingyong: "IT|通信|电子|互联网",
          chengshu: "生试",
          laiyuandi: "美国",
          biaoqian: "缺落地方案"
        }, {
          zong: "材料科技",
          yingyong: "生产|加工|制造",
          chengshu: "",
          laiyuandi: "德国",
          biaoqian: ""
        }, {
          zong: "圣农医药",
          yingyong: "",
          chengshu: "",
          laiyuandi: "英国",
          biaoqian: ""
        }, {
          zong: "机械电子",
          yingyong: "",
          chengshu: "",
          laiyuandi: "日本",
          biaoqian: " "
        }]
      }
    }
  }

</script>

<style scoped>
  .fenlei {
    width: 1000px;
    height: 240px;
    /* border: 1px solid #ddd; */
    margin: 0 auto;
    margin-top: 40px;
    padding: 10px;
  }

  .lgf {
    width: 70%;
    /* border: 1px solid #ddd; */
    float: left;
  }

  .mainBox {
    width: 100%;
    border-bottom: 1px dashed #409eff;
    height: 30px;
  }

  .mainBox .title {
    text-align: left;
    font-weight: 800;
    font-size: 0.9em;
    float: left;
    padding-right: 20px;
    margin-top: 0;
    color: #000;
  }

  .itemtext {
    float: left;
    padding: 0 11px 0 11px;

    font-size: 0.9em;
  }

  .itemtext a {
    color: #707070;padding:0 4px 0 4px;
  }
  .itemtext:hover a {
    background:#0972d4;
    color:#fff;
    
  }

  .hotpic {
    width: 25%;
    height: 240px;
    /* border:1px solid #ddd; */
    float: left;
    margin-left: 3%;
  }

  .hotpic img {
    width: 100%;
    height: 100%;
  }

</style>
