<template>
  <div class="yuanxiaoMain">
    <!-- 院校合作 + 多边矩形 -->
    <div class="titleTop">
      <p class="borderLeft"></p>
      <p class="borderText">合作院校</p>
      <p class="borderRight"></p>
    </div>
    <div class="jigouMainBox">
      <div class="boxeee"></div>
      <div style="padding-top:90px;"></div>
      <h3 class="title">丰富的技术资源</h3>
      <p class="text">平台汇聚了大量技术信息资源，一手掌握国
        <br>内外的顶尖高校和科研院所等优质技术力量</p>
      <div style="clear:both;"></div>
      <ul>
        <li class="LiHezuoJiGou">
          <a href="">
            <span :style="{background:'url('+back+')'+'no-repeat'}" class="imgLiRotate"></span>
          </a>
        </li><li class="LiHezuoJiGou">
          <a href="">
            <span :style="{background:'url('+back+')'+'no-repeat'}" class="imgLiRotate"></span>
          </a>
        </li><li class="LiHezuoJiGou">
          <a href="">
            <span :style="{background:'url('+back+')'+'no-repeat'}" class="imgLiRotate"></span>
          </a>
        </li>
      </ul>
      <div style="clear:both;"></div>
      <ul class="liMargin">
        <li style='width:200px; height:200px;  float:left; margin-left:10px'></li>
        <li class="LiHezuoJiGou">
          <a href="">
            <span :style="{background:'url('+back+')'+'no-repeat'}" class="imgLiRotate"></span>
          </a>
        </li>
        <li class="LiHezuoJiGou">
          <a href="">
            <span :style="{background:'url('+back+')'+'no-repeat'}" class="imgLiRotate"></span>
          </a>
        </li>
        <li class="LiHezuoJiGou">
          <a href="">
            <span :style="{background:'url('+back+')'+'no-repeat'}" class="imgLiRotate"></span>
          </a>
        </li>
      </ul>
      <div style="clear:both;"></div>
      <ul class="liMargin">
        <li style='width:200px; height:200px;  float:left; margin-left:10px'></li>
        <li style='width:200px; height:200px;  float:left; margin-left:10px'></li>
        <li class="LiHezuoJiGou">
          <a href="">
            <span :style="{background:'url('+back+')'+'no-repeat'}" class="imgLiRotate"></span>
          </a>
        </li>
        <div class="boxeee"></div>
      </ul>
    </div>
     <div style="clear:both;"></div>
    <h2 class="more"><a href="">查看更多合作机构</a></h2>
  </div>
</template>

<script>
  export default {
    name: "yuanxiaoMain",
    data() {
      return {
        back: require('../../assets/images/bjdaxue.jpg')
      }
    }
  }

</script>

<style scoped>
  .yuanxiaoMain {
    width: 1000px;
    height: 850px;
    margin: 0 auto;
    /* border: 1px solid #ddd; */
    overflow: hidden;
    position: relative;
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

  .jigouMainBox {
    width: 1000px;
    height: 800px !important;
    /* border: 1px solid #ddd;  */
    transform: rotate(-45deg);
    text-align: left;
    position: relative;
    top: -140px;
    left: 30px;
  }

  .jigouMainBox .title {
    color: #01aef0;
    font-size: 1.2em;
  }

  .jigouMainBox .text {
    font-size: 0.9em;
    font-weight: 800;
  }

  .boxeee {
    background: #ddd;
    width: 200px;
    height: 200px;
    float: left;
    margin-right: 50px;
    margin-left: 10px;
  }

  ul {
    margin: 0;
    padding: 0;
  }

  .liMargin {
    margin-top: 10px;
  }

  .imgLiRotate {
    width: 140%;
    height: 140%;
    transform: rotate(45deg);
    display: block;
    position: relative;
    right: 13%;
    left: -15%;
  }

  .LiHezuoJiGou {
      width:200px; height:200px; border:1px solid #ddd; float:left; margin-left:10px; overflow:hidden;
  }
  .LiHezuoJiGou:hover {
      border-color:#2bbbf2;
  }
    .more {
        position: relative;
        bottom:20%;
        left: 0%;
    }
    .more a {
        color: #156fb8;
    }
</style>
