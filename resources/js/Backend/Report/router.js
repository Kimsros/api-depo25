import InHouseProduct from "./View/InHouseProduct.vue";
import ProductWishlist from "./View/Product_wishlist.vue";
import Purchase from "./View/Purchase.vue";
import UserSearch from "./View/User_search.vue";
export default{
    router:[
        {path:"/admin/in_house_products",component:InHouseProduct},
        {path:"/admin/product_wishlist",component:ProductWishlist},
        {path:"/admin/purchase",component:Purchase},
        {path:"/admin/user_search",component:UserSearch},
    ]
}
