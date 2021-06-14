import Index from "./View/Index.vue";
import Add_shop from "./View/Add_shop.vue";
import Edit_shop from "./View/Edit_shop.vue";
export default{
    router:[
        {path:"/admin/shop",component:Index},
        {path:"/admin/add_shop",component:Add_shop},
        {path:"/admin/edit_shop/:id",component:Edit_shop},

    ]
}
