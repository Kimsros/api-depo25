import Add_blog from "./View/Add_blog.vue";
import Edit_blog_category from "./View/Edit_blog_category.vue";
import Index from "./View/Index.vue";
export default{
    router:[
        {path:"/admin/list_blog_category",component:Index},
        {path:"/admin/add_blog_category",component:Add_blog},
        {path:"/admin/edit_blog_category/:id",component:Edit_blog_category},

    ]
}
