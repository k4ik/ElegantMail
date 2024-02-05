import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import App from './App.vue'
import RegisterView from './views/RegisterView.vue'
import SuccessView from './views/SuccessView.vue'

const routes = [
  { path: '/', component: RegisterView },
  { path: '/success', component: SuccessView },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

createApp(App).use(router).mount('#app')
