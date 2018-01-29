// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
import 'element-ui/lib/theme-chalk/display.css'
// axios1.npm下载完 引用axios
import axios from 'axios'
import App from './App'
import router from './router'
import banner from './components/banner'
import technologyMain from './components/technologyMain'
import zhuanjiaMain from './components/zhuanjiaMain'
import technicalDetails from './components/technicalDetails'
import zhuanjiaList from './components/zhuanjiaList'
import ExpertIntroductionDetails from './components/ExpertIntroductionDetails'

import Mainindexfour from './components/index/indexboxfour'
import hotTechnology from './components/index/hotTechnology'
import expertIndex from './components/index/expertIndex'
import policyIndex from './components/index/policyIndex'
import advanback from './components/index/advanback'
import newIndex from './components/index/newIndex'
import numberIndex from './components/index/numberIndex'
import bottomIndex from './components/index/bottomIndex'
import tclBanner from './components/technology/banner'
import fenlei from './components/technology/fenlei'
import tabs from './components/technology/tabs'
import zhuanjiaBanner from './components/zhuanjiaMain/zhuanjiaBanner'
import yuanxiaoMain from './components/zhuanjiaMain/yuanxiaoMain'
import ruzhuMainPeople from './components/zhuanjiaMain/ruzhuMainPeople'
import technicalDetailsMain from './components/technicalDetails/technicalDetailsMain'







// axios2.引用完 $http这样定义.省略Vue.use()注册步骤
Vue.prototype.$http = axios
Vue.config.productionTip = false
Vue.use(ElementUI)

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App, ElementUI}
})
