import "bootstrap/dist/css/bootstrap.min.css";
import React, { useState, useEffect } from "react";
import axios from "axios";

import { useHistory } from "react-router";


import { Link } from "react-router-dom";

const DelivarymanList = () => {
  
  const history = useHistory();
  let [delivaryman, setDelivaryman] = useState([]);


  let [error, setError] = useState("");

  useEffect(() => {
    axios
      .get("/delivarymanList" )
      .then((resp) => {
        setDelivaryman(resp.data);
     
      })
      .catch((err) => {
        console.log(err);
      });
  }, []);

 

  return (
    <div>
    
      <div className="projectdetails-container">
     

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Date of birth</th>
              <th scope="col">address</th>
              <th scope="col">Phone</th>
              <th scope="col">Salary</th>
              <th scope="col">Actions</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            {delivaryman.map((delivaryman) => (
              <tr id={delivaryman.id}>
                <td>{delivaryman.name}</td>
                <td>{delivaryman.dob}</td>
                <td>{delivaryman.address}</td>
                <td>{delivaryman.phone}</td>
                <td>{delivaryman.salary}</td>
                <td>
                  <Link
                    className="btn btn-primary"
                    to={"/EditProjectDetails/" + delivaryman.id}
                  >
                    Edit
                  </Link>
                </td>
                <td>
                  <Link
                    className="btn btn-danger"
                    to={"/DeleteProjectDetails/" + delivaryman.id}
                  >
                    Delete
                  </Link>
                </td>
               
              
              </tr>
            ))}
          </tbody>
        </table>
        {error ? <div className="alert alert-danger">{error}</div> : ""}
      </div>
    </div>
  );
};
export default DelivarymanList;