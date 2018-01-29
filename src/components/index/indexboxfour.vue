<template>
<!-- 首页 banner下面 四个大分类 -->
  <div class="indexbox">
    <el-row :gutter="10">
      <el-col :span="6" class="boxFour" v-for="itemcol6 in vforitem" :key="itemcol6.icon">
        <router-link :to="itemcol6.link">
        <a>
          <i :class="itemcol6.icon"></i>
          <h3>{{itemcol6.name}}</h3>
          <h5>{{itemcol6.english}}</h5>
          <p class="look">立即查看</p>
        </a>
        </router-link>
      </el-col>
    </el-row>
  </div>
</template>
<script>
  export default {
    name: 'indexbox',
    data() {
      return {
        vforitem: [{
            name: "找项目",
            english: "Look for technology",
            icon: "el-icon-document",
            link : "jishu"
          },
          {
            name: "问专家",
            english: "Ask experts",
            icon: "el-icon-date",
            link : "zhuanjia"
          },
          {
            name: "看服务",
            english: "Application Policy",
            icon: "el-icon-edit-outline",
            link : "fuwu"
          },
          {
            name: "报活动",
            english: "Registration activities",
            icon: "el-icon-message",
            link : "zhengce"
          }
        ]
      }
    },
    methods: {

    }
  }

</script>

<style scoped>
  .boxFour {
    line-height: 10px;
    margin: 0;
    -webkit-margin-before: 0em;
    -webkit-margin-after: 0em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    padding-top: 70px;
    /* border:1px solid #ddd; */
  }

  .boxFour:hover a {
    color: #0972d4;
  }

  .boxFour .look {
    color: dimgray;
    font-size: 0.8em;
  }

</style>
