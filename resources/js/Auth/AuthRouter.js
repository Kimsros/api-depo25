import Login from "./View/Login.vue";
import Register from "./View/Register.vue";
import ForgotPassword from "./View/ForgotPassword.vue";
import ResetPassword from "./View/ResetPassword.vue";
export default{
    router:[{
        path:"/login",component:Login
    },{
        path:"/register",component:Register
    },
    {
        path:"/forgot_password",component:ForgotPassword
    },{
        path:"/reset_password",component:ResetPassword
    }]
}