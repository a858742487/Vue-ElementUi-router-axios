<template>
  <div class="technologyMain">
    <!-- 技术页面 所属行业 + 列表页 -->
    <div>
      <!-- 这里面是固定的写法, {{$route.params.xx}} xx是传过来的参数 前面的params是固定的 --> 
      <!-- <div>{{$route.params.id}}</div> -->
      <tclBanner></tclBanner>
      <fenlei></fenlei>
      <tabs></tabs>
      </div>
      <!-- <div style="width:100px; height:1000px;"></div> -->
  </div>
</template>

<script>
  import tclBanner from './technology/banner'
  import fenlei from './technology/fenlei'
  import tabs from './technology/tabs'

  export default {
    name: "technologyMain",
    data() {
      return {
        
      }
    },
    components: {
        tclBanner,
        fenlei,
        tabs
    }
  }

</script>

<style scoped>


</style>
