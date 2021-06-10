import Add_blog from "./View/Add_blog.vue";
import Index from "./View/Index.vue";
export default{
    router:[
        {path:"/admin/blog_category",component:Index},
        {path:"/admin/Add_blog",component:Add_blog},

    ]
}
