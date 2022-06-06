import React from "react";
import { Link } from "react-router-dom";
const Head = () => {
    return(
        <div>
            <Link to="/">Home</Link><br></br>
            {/* <Link to="/profile">Profile</Link>
            <Link to="/contact">Contact</Link>
            <Link to="/color">Color State</Link>
            <Link to="/effect">Effect State</Link>
            <Link to="/posts">All Posts</Link> */}
            <Link to="/login">Login</Link><br></br>
            <Link to="/allproducts">Products</Link><br></br>
            <Link to="/delivarymanlist">DelivarymanList</Link><br></br>
            <Link to="/CreateDelivaryman">DelivarymanAdd</Link><br></br>
            <Link to="/Sellsmanlist">SellsmanList</Link><br></br>
            <Link to="/CreateSellsman">SellsmanAdd</Link><br></br>
            <Link to="/Foot">Footer</Link><br></br>
        </div>
    )
}

export default Head;