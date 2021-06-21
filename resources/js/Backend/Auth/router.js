import Login from "./View/Login.vue";
import Register from "./View/Register.vue";
import ForgotPassword from "./View/ForgotPassword.vue";
import ResetPassword from "./View/ResetPassword.vue";
import store from "../../store";


export default{
    router:[{
        path:"/admin/login",component:Login,
        beforeEnter: (to, from, next) => {
            if ((store.getters['auth/authenticated'] && store.getters['auth/getUser'] == "") || (store.getters['auth/authenticated'] && store.getters['auth/getUser'] == "")) {
                window.location = "/admin";
            } else {
                next();
            }
        
        }
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