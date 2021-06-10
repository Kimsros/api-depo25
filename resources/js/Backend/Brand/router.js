import Index from "./View/Index.vue";
import Add_brand from "./View/Add_brand.vue";
import Edit_brand from "./View/Edit_brand.vue";
export default{
    router:[
        {path:"/admin/brand",component:Index},
        {path:"/admin/add_brand",component:Add_brand},
        {path:"/admin/edit_brand/:id",component:Edit_brand},

    ]
}
