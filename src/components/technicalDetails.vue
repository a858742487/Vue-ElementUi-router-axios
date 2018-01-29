<template>
  <!-- 这个页面是技术详情页 -->
  <div class="technicalDetails">
    <div class="Breadcrumb">
      <el-breadcrumb separator="/">
        <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
        <el-breadcrumb-item>活动管理</el-breadcrumb-item>
        <el-breadcrumb-item>活动列表</el-breadcrumb-item>
        <el-breadcrumb-item>活动详情</el-breadcrumb-item>
      </el-breadcrumb>
    </div>
    <technicalDetailsMain></technicalDetailsMain>



  </div>
</template>

<script>
import technicalDetailsMain from '../components/technicalDetails/technicalDetailsMain'

  export default {
    name: 'technicalDetails',
    data() {
      return {}
    },
    methods: {},
    components: {
        technicalDetailsMain
    }
  }

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .technicalDetails {
    width: 100%;
    height: auto;
    background-color: #eee;
  }

  .Breadcrumb {
    width: 1000px;
    height: 45px;
    /* border: 1px solid #ddd; */
    margin: 0 auto;
    padding-top: 35px;
  }

</style>
