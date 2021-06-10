import Login from "./View/Login.vue";
import Register from "./View/Register.vue";
import ForgotPassword from "./View/ForgotPassword.vue";
import ResetPassword from "./View/ResetPassword.vue";
export default{
    router:[{
        path:"/admin/login",component:Login
    },{
        path:"/admin/register",component:Register
    },
    {
        path:"/admin/forgot_password",component:ForgotPassword
    },{
        path:"/admin/reset_password",component:ResetPassword
    }]
}