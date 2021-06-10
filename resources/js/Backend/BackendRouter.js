import Advertising from "./Advertising/router.js";
import Blog from "./Blog/router.js";
import Blog_Category from "./Blog_Category/router.js";
import Brand from "./Brand/router.js";
import Contact from "./Contact/router.js";
import Delivery from "./Delivery/router.js";
import Payment from "./Payment/router.js";
import Pricing from "./Pricing/router.js";
import Product from "./Product/router.js";
import Product_Category from "./Product_Category/router.js";
import Purchase from "./Purchase/router.js";
import Role_Permission from "./Role_Permission/router.js";
import User from "./User/router.js";
import Dashboard from "./Dashboard/router.js";
import Shop from "./Shop/router.js";
import Sale from "./Sale/router.js";
import System from "./System/router.js";
const routes=[...Advertising.router,...Blog.router,...Blog_Category.router,...Brand.router,...Contact.router,...Delivery.router,...Payment.router,...Pricing.router,...Product.router,...Product_Category.router,...Purchase.router,...Role_Permission.router,...User.router,...Dashboard.router,...Shop.router,...Sale.router,...System.router];
export default{
    router:routes
}
