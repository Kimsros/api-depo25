import Vue from 'vue';
import VueRouter from 'vue-router';
import BackendRouter from './Backend/BackendRouter';
import FrontendRouter from './Frontend/FrontendRouter';
import AuthRouter from "./Auth/AuthRouter";
Vue.use(VueRouter);
var a=[...BackendRouter.router,...FrontendRouter.router,...AuthRouter.router];
export default new VueRouter({
    routes:a,
    mode:'history',
    scrollBehavior () {
        return { x: 0, y: 0 }
    }
    
});