import Index from "./View/Index.vue";
import Add_blog from "./View/Add_blog.vue";
export default{
    router:[
        {path:"/admin/blog",component:Index},
        {path:"/admin/add_blog",component:Add_blog},
    ]
}