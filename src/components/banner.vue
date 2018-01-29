<template>
  <!-- 这个页面是主页的banner -->
  <div class="banner">
    <div class="block">
      <el-carousel trigger="click" height="550px"  :style="{background: 'url('+bottomBg+')'}">
        <div class="bannerSelectInput">
          <el-row :gutter="10">
            <el-col :span="8">
              <div class="grid-content bg-purple">
                <el-select v-model="value4" clearable placeholder="请选择">
                  <el-option v-for="selectItem in tableData" :key="selectItem.create_at" :label="selectItem.label" :value="selectItem.create_at">
                  </el-option>
                </el-select>
              </div>
            </el-col>
            <el-col :span="8">
              <div class="grid-content bg-purple-light">
                <el-input v-model="input" placeholder="请输入您要查找的技术"></el-input>
              </div>
            </el-col>
            <el-col :span="8">
              <div class="grid-content bg-purple-light">
                <el-button type="primary" icon="el-icon-search" @click="bannersearchbtn">搜索</el-button>
              </div>
            </el-col>
          </el-row>
        </div>
        <el-carousel-item v-for="item in tableData" :key="item.text" class="bannerText">
          <h3>{{ item.title }}</h3>
          <!-- <h6 v-html="item.content"></h6> -->
          <!-- <img src="pic/{{ item }}.jpg" alt=""> -->
        </el-carousel-item>
      </el-carousel>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'banner',
    data() {
      return {
        value4: '',
        input: '',
        tableData: '',
        bottomBg : require('../assets/images/banner.jpg')
        // bannersearchbtn : ''
      }
    },
    created() {
      this.$http.get('https://cnodejs.org/api/v1/topics', {
        params: {
          page: 1,
          limit: 5
        }
      }).then(res => {
        this.tableData = res.data.data;
        console.log(this.tableData[0].create_at);
      }, response => {
        console.log("res");
      })
    },
    methods: {
      bannersearchbtn() {
        if (this.input == '') {
          this.$message({
            message: '不能是空的哦，输入你要查询的内容吧',
            type: 'warning'
          })
        } else {
          console.log(this.input);
        }
      }
    }
  }

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .el-carousel {
    /* background: url(../assets/images/banner.jpg) */
  }

  .el-carousel__item h3 {
    color: #475669;
    font-size: 5em;
    opacity: 0.75;
    line-height: 50px;
    margin: 0;
  }
  /* .el-carousel__item:nth-child(2n) {
    background-color: #99a9bf;
  }

  .el-carousel__item:nth-child(2n+1) {
    background-color: #d3dce6;
  } */

  .bannerSelectInput {
    width: 30%;
    height: 70px;
    border: 1px solid rgb(218, 218, 218);
    border-radius: 5px;
    position: relative;
    top: 60%;
    left: 35%;
    z-index: 3;
    /* banner上面的input */
    padding-top: 30px;
    padding-left: 3%;
    background-color: rgba(0, 0, 0, 0.3);
  }

  .bannerText {
    padding-top: 6%;
    height: 250px !important;
  }

  .bannerText h3 {
    color: #fff;
    font-size: 4em;
  }

</style>
