import Add_user from "./View/Add_user.vue";
import Admin from "./View/Admin.vue";
import Seller from "./View/Seller.vue";
import Buyer from "./View/Buyer.vue";
export default{
    router:[
        {path:"/admin/add_user",component:Add_user},
        {path:"/admin/admin",component:Admin},
        {path:"/admin/seller",component:Seller},
        {path:"/admin/suyer",component:Buyer},
    ]
}
