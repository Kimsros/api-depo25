import Login from "./View/Login.vue";
import Register from "./View/Register.vue";
import ForgotPassword from "./View/ForgotPassword.vue";
import ResetPassword from "./View/ResetPassword.vue";
// import store from "../store";


export default{
    router:[{
        
        path:"admin/loginSotre",
        beforeEnter: (to, from, next) => {
            if ((store.getters['auth/authenticated'] && store.getters['auth/getUser'].role == "admin") || (store.getters['auth/authenticated'] && store.getters['auth/getUser'].role == "lecture")) {
                window.location = "/admin";
            } else if ((store.getters['auth/authenticated'] && store.getters['auth/getUser'].role == "student")) {
                window.location = "/my-course";
            } else {
                next();
            }
        
        }
    },
    {
        path:"/admin/login",component:Login
    },
    {
        path:"/admin/register",component:Register
    },
    {
        path:"/admin/forgot_password",component:ForgotPassword
    },{
        path:"/admin/reset_password",component:ResetPassword
    }]
}