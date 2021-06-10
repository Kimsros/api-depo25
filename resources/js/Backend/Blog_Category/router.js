import Add_blog from "./View/Add_blog.vue";
import Index from "./View/Index.vue";
export default{
    router:[
        {path:"/admin/blog_category",component:Index},
        {path:"/admin/add_blog_category",component:Add_blog},

    ]
}
