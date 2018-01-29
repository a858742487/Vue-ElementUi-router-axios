<template>
  <div id="app">
    <div class="navMainTop">
      <el-row :gutter="20" :style="{background:'url('+logoBackground+')'}" style="padding-top: 10px;">
        <el-col :span="12" :offset="4">
          <div class="grid-content bg-purple">
            <el-row>
              <el-col :span="3">
                <div class="grid-content bg-purple logo">
                  <img :src="bgBanner" alt="">
                </div>
              </el-col>
              <el-col :span="16" class="navMain">
                <div class="grid-content bg-purple">
                  <ul>
                    <li class="navLiList">
                      <router-link  v-for="(item,index) in items" :to="item.link" :key="item.link"><a href="" class="navList" @click="addColor(index)" :class="{fontWeight:fontColor == index}">{{item.nav}}</a></router-link> 
                    </li>
                  </ul>
                </div>
              </el-col>
              <el-col :span="5" class="hidden-xs-only">
                <div class="grid-content bg-purple hidden-xs-only hidden-sm-only hidden-md-and-down">
                  <el-input placeholder="请输入内容" v-model="input5" class="input-with-select">
                    <el-button slot="append" icon="el-icon-search"></el-button>
                  </el-input>
                </div>
              </el-col>
            </el-row>
          </div>
        </el-col>
        <el-col :span="4" class="hidden-xs-only hidden-sm-only hidden-md-and-down hidden-lg-only">
          <div class="grid-content bg-purple navLogin">
            <i class="el-icon-info"></i>
            <span class="placeLogin">请登录</span>
            <el-tooltip class="item" effect="dark" content="发布技术或发布需求" placement="bottom">
              <el-button plain >发布</el-button>
            </el-tooltip>
            <el-button type="primary" plain>需求库</el-button>
          </div>
        </el-col>
      </el-row>
    </div>
    <router-view/>
    <bottom-index></bottom-index>
  </div>
</template>

<script>
  import banner from './components/banner.vue'
  import Mainindexfour from './components/index/indexboxfour'
  import hotTechnology from './components/index/hotTechnology'
  import expertIndex from './components/index/expertIndex'
  import policyIndex from './components/index/policyIndex'
  import advanback from './components/index/advanback'
  import newIndex from './components/index/newIndex'
  import numberIndex from './components/index/numberIndex'
  import bottomIndex from './components/index/bottomIndex'
  // 引用图片地址
  import bg from './assets/images/logo.png'
  
  
  export default {
    name: 'app',
    data() {
      return {
        logoBackground: require('./assets/indexBanner.jpg'),
        items: [{
            nav: '首页',
            link : 'shouye'
          },
          {
            nav: '技术',
            link : 'jishu'
          },
          {
            nav: '专家',
            link : 'zhuanjia'
          },
          {
            nav: '政策计划',
            link : 'zhengche'
          },
          {
            nav: '服务流程',
            link : 'fuwu'
          }
        ],
        input5: "",
        bgBanner: bg,
        // 图片引用的话, 需要用require
        bottomBg : require("./assets/images/hotback.png"),
        fontColor : ""
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
    },
    methods : {
      addColor : function (index) {
        this.fontColor = index;
      }
    }
  }
</script>

<style>
  #app {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 0px;
  }
  .fontWeight {
    font-weight: 800;
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
  .navMain {
    min-width: 400px;
  }
  .navList {
    font-size: 1.3em;
    font-family: "楷体";
    padding-right: 15px;
    color: #0972d4;
  }
  
  .navList:hover {
    font-weight: 800;
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
