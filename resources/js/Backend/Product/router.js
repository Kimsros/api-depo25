import Index from "./View/Index.vue";
import Attribute from "./View/Attribute.vue";
import Brand from "./View/Brand.vue";
import Category from "./View/Category.vue";
import House_product from "./View/House_product.vue";
export default{
    router:[
        {path:"/admin/list_product",component:Index},
        {path:"/admin/list_attribute",component:Attribute},
        {path:"/admin/list_brand",component:Brand},
        {path:"/admin/list_product_category",component:Category},
        {path:"/admin/list_house_product",component:House_product},
    ]
}
