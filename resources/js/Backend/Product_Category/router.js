import Add_category from "./View/Add_category.vue";
import Edit_category from "./View/Edit_category.vue";
import Index from "./View/Index.vue";
export default{
    router:[
        {path:"/admin/add_category",component:Add_category},
        {path:"/admin/edit_category/:id",component:Edit_category},
        {path:"/admin/list_category",component:Index},

    ]
}
