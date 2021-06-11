import Add_pricing from "./View/Add_pricing.vue";
import Index from "./View/Index.vue";
import Edit_pricing from "./View/Edit_pricing.vue";
export default{
    router:[
        {path:"/admin/list_pricing",component:Index},
        {path:"/admin/add_pricing",component:Add_pricing},
        {path:"/admin/edit_pricing/:id",component:Edit_pricing},

    ]
}
