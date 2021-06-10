import Vue from 'vue';
import VueRouter from 'vue-router';
import BackendRouter from './Backend/BackendRouter';
import FrontendRouter from './Frontend/FrontendRouter';

Vue.use(VueRouter);
var a=[...BackendRouter.router,...FrontendRouter.router];
export default new VueRouter({
    routes:a,
    mode:'history',
    scrollBehavior () {
        return { x: 0, y: 0 }
    }

});
