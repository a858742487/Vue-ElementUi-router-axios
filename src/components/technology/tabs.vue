<template>
  <div class="tabs">
    <!-- 技术list页.技术组件列表页 -->
    <el-tabs v-model="activeName2" type="card" @tab-click="handleClick">
      <el-tab-pane label="默认" name="first" v-loading="isLoading">
        <el-row :gutter="0">
          <el-col :span="6" class="jishuBox" v-for="(itemjishu,index) in tableData" :key="tableData.title" v-if="itemjishu.imageUrls == null ? false : true && index < 10">
            <a href="#">
              <router-link :to="{path: '/technicalDetails', query: {index: index}}">
              <div class="jishuMainDan">
                <img :src="itemjishu.imageUrls" alt="" class="imgJishu">
                <p class="title">{{itemjishu.title}}</p>
                <p class="text">{{itemjishu.content}}</p>
                <p class="biaoqian">
                  <span class="fl">中国</span>
                  <span class="fr">
                    <el-tag>{{itemjishu.posterScreenName}}</el-tag>
                  </span>
                </p>
              </div>
              </router-link>
            </a>
          </el-col>
        </el-row>
      </el-tab-pane>
      <el-tab-pane label="关注度" name="second">关注度</el-tab-pane>
      <el-tab-pane label="发布时间" name="three">发布时间</el-tab-pane>
    </el-tabs>
    <div class="block">
      <el-pagination @size-change="changeSize" @current-change="changeCurrent" :current-page.sync="activePage" :page-size="activePageSize"
        :page-sizes="[12, 24]" :layout="'sizes, prev, pager, next'" :total="100">
      </el-pagination>
    </div>
  </div>

</template>

<script>
  export default {
    name: "tabs",
    data() {
      return {
        activeName2: 'first',
        tableData: [],
        isLoading: false,
        activePage: 1,
        activePageSize: 12
      }
    },
    methods: {
      handleClick(tab, event) {
        console.log(tab, event);
      },
      getList: function () {
        // var url = 
        this.$http.get('https://bird.ioliu.cn/v1?url=http://120.76.205.241:8000/news/qihoo?kw=%E4%B8%93%E5%AE%B6&site=http%3A%2F%2Fnews.sohu.com%2F&apikey=PXYYZZLJn5JSfTasvTJUai1bIjyQNT9g6rsPg2LXUWf44KimzdnXEamLhqJdVpLb', {
          params: {
            pageToken: this.activePage,
            // limit: this.activePageSize
          }
        }).then(res => {
          this.tableData = res.data.data;
          console.log(this.tableData[0].create_at);
        }, response => {
          console.log("res");
        })
      },
      changeCurrent: function (page) {
        this.activePage = page;
      },
      changeSize: function (size) {
        this.activePageSize = size;
      },
    },
    created() {
      this.getList();
    },
    watch: {
      activePage() {
        this.getList();
      },

      activePageSize() {
        this.getList();
      }
    }
  }

</script>

<style scoped>
  .fl {
    float: left;
  }

  .fr {
    float: right;
  }

  .tabs {
    width: 1000px;
    margin: 0 auto;
    margin-top: 30px;
  }

  .jishuBox {
    height: 300px;
    /* border: 1px solid #ddd; */
    padding: 10px;
  }

  .jishuBox .jishuMainDan img {
    width: 100%;
    height:130px;
  }

  .jishuBox .jishuMainDan {
    width: 100%;
    height: 100%;
    border: 1px solid #ddd;
  }

  .jishuMainDan .title {
    text-align: left;
    font-size: 0.9em;
    font-weight: 800;
    height: 40px;
    margin: 0;
    padding: 0 5px 0 5px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
  }

  .jishuMainDan .text {
    text-align: left;
    font-size: 0.9em;
    margin: 5px 0 0 0;
    color: #6f7372;
    padding: 0 5px 0 5px;
    /* height: 60px; */
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
  }

  .jishuMainDan .biaoqian {
    text-align: left;
    padding: 0 5px 0 5px;
    margin: 5px 0 0 0;
    color: #888888;
    /* width: 100%; */
    height: 30px;
    /* border:1px solid #ddd; */
    position: relative;
    top: 10px;
  }

  .jishuMainDan {
    overflow: hidden;
  }

  .jishuMainDan .biaoqian .fl {
    line-height: 25px;
  }

  .jishuMainDan:hover .title {
    color: #5babfa;
  }

  .jishuMainDan:hover .text {
    color: #5babfa;
  }

  .imgJishu {
    overflow: hidden;
  }

  .el-tag {
    height: 25px;
    line-height: 25px;
  }

  .block {
    margin: 30px 0 40px 0;
  }
  .jishuMainDan .text {
    height: 54px;
  }

</style>
