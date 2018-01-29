<template>
  <!-- 默认首页 index -->
  <div class="hello">
    <div style="width:100%; height:550px; background:#eee;">
      <banner></banner>
    </div>
    <div style="width:1000px; height:260px; border-bottom:1px solid #ddd; margin:0 auto">
      <mainindexfour></mainindexfour>
    </div>
    <div style="width:100%; height:600px;" class="lunboIndexThree" :style="{background: 'url('+bottomBg+')'}">
      <div style="width:1000px; margin:0 auto;">
        <hotTechnology></hotTechnology>
      </div>
    </div>
    <expert-index></expert-index>
    <policy-index></policy-index>
    <advanback></advanback>
    <new-index></new-index>
    <number-index></number-index>
    <!-- <bottom-index></bottom-index> -->
  </div>
</template>

<script>
  import banner from '../components/banner.vue'
  import Mainindexfour from '../components/index/indexboxfour'
  import hotTechnology from '../components/index/hotTechnology'
  import expertIndex from '../components/index/expertIndex'
  import policyIndex from '../components/index/policyIndex'
  import advanback from '../components/index/advanback'
  import newIndex from '../components/index/newIndex'
  import numberIndex from '../components/index/numberIndex'
  import bottomIndex from '../components/index/bottomIndex'
  import bg from '../assets/images/logo.png'

  export default {
    name: 'HelloWorld',
    data() {
      return {
        input5: "",
        bgBanner: bg,
        bottomBg: require("../assets/images/hotback.png")
      }
    },
    components: {
      banner,
      Mainindexfour,
      hotTechnology,
      expertIndex,
      policyIndex,
      advanback,
      newIndex,
      numberIndex,
      bottomIndex
    }
  }

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .navMainTop {
    margin-top: 10px;
  }

  .el-row {
    margin-right: 0 !important;
  }

  li,
  a {
    list-style: none;
    text-decoration: none;
    color: #000;
  }

  body {
    margin: 0;
    padding: 0;
  }

  .grid-content {
    /* border: 1px solid #ddd; */
    height: 60px;
    text-align: left;
  }

  .logo img {
    width: 120px;
    line-height: 60px;
    padding-top: 5px;
  }

  .navList {
    font-size: 1.2em;
    font-family: "黑体";
    padding-right: 15px;
    color: #0972d4;
  }

  .navList:hover {
    font-weight: 800;
  }

  .navMain {
    min-width: 470px !important;
  }

  .input-with-select {
    padding-top: 10px;
  }

  .navLogin {
    margin-top: 10px;
    padding-left: 10px;
  }

  .navLogin .placeLogin {
    font-size: 1em;
    padding-right: 10px;
  }

  .lunboIndexThree {
    /* background: url(./assets/images/hotback.png); */
    /* 如果上线在qqq文件夹内,此处应修改为 ~/qqqq/static/assets/images/hotback.png */
    background-size: 100%;
  }

</style>
