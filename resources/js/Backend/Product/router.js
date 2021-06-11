import Add_product from "./View/Add_product.vue";
import Attribute from "./View/Attribute.vue";
import Product_brand from "./View/Product_brand.vue";
import Category from "./View/Category.vue";
import House_product from "./View/House_product.vue";
export default{
    router:[
        {path:"/admin/product/add_product",component:Add_product},
        {path:"/admin/product/list_attribute",component:Attribute},
        {path:"/admin/product/product_brand",component:Product_brand},
        {path:"/admin/product/list_product_category",component:Category},
        {path:"/admin/product/list_house_product",component:House_product},
    ]
}
