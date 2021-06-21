import Index from "./View/Index.vue";
import Detail from "./View/Detail.vue";
export default{
    router:[
        {path:"/blog",component:Index},
        {path:"/blog_detail/:id",component:Detail},
    ]
}