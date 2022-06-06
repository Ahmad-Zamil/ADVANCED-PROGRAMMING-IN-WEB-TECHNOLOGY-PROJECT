import React from "react"
const Product = (props) =>{
    return(
        <div>
            <p>Product: <b>{props.name}</b> Price: <b>{props.price}</b></p>
        </div>
    )
}
export default Product; 