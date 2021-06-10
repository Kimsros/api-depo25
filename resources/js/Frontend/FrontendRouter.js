import Blog from "./Blog/router.js";
import Buy from "./Buy/router.js";
import Checkout from "./Checkout/router.js";
import Contact from "./Contact/router.js";
import Home from "./Home/router.js";
import Order from "./Order/router.js";
import Rent from "./Rent/router.js";
import Sell from "./Sell/router.js";
import About from "./About/router.js";
import Term_And_Condition from "./Term_And_Condition/router.js";
import Auth from "./Auth/router.js";
const routes=[...Blog.router,...Buy.router,...Checkout.router,...Contact.router,...Home.router,...Order.router,...Rent.router,...Sell.router,...Term_And_Condition.router,...About.router,...Auth.router];
export default{
    router:routes
}