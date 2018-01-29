import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import technologyMain from '@/components/technologyMain'
import Mainindexfour from '@/components/index/indexboxfour'
import zhuanjiaMain from '@/components/zhuanjiaMain'
import technicalDetails from '@/components/technicalDetails'
import zhuanjiaList from '@/components/zhuanjiaList'
import ExpertIntroductionDetails from '@/components/ExpertIntroductionDetails'
import policyIndex from '@/components/policy/policyIndex'





Vue.use(Router)

export default new Router({
  // 定义路由地址
  routes: [{
      // 默认地址
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/shouye',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/jishu',
      props: true,
      // name: 'technologyMain',
      component: technologyMain
    },
    {
      path: '/zhuanjia',
      name: 'zhuanjiaMain',
      component: zhuanjiaMain
    },
    {
      path: '/technicalDetails',
      name: 'technicalDetails',
      component: technicalDetails
    },
    {
      path: '/zhuanjiaList',
      name: 'zhuanjiaList',
      component: zhuanjiaList
    },
    {
      path: '/ExpertIntroductionDetails',
      name: 'ExpertIntroductionDetails',
      component: ExpertIntroductionDetails
    },
    {
      path: '/zhengche',
      name: 'policyIndex',
      component: policyIndex
    }
  ]
})
