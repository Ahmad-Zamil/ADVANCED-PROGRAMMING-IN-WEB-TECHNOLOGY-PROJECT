import "bootstrap/dist/css/bootstrap.min.css";
import React, { useState, useEffect } from "react";
import axios from "axios";

import { useHistory } from "react-router";


import { Link } from "react-router-dom";

const SellsManList = () => {
  
  const history = useHistory();
  let [SellsMan, setSellsMan] = useState([]);


  let [error, setError] = useState("");

  useEffect(() => {
    axios
      .get("/sells_man/list" )
      .then((resp) => {
        setSellsMan(resp.data);
     
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
              <th scope="col"></th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            {SellsMan.map((SellsMan) => (
              <tr id={SellsMan.id}>
                <td>{SellsMan.name}</td>
                <td>{SellsMan.dob}</td>
                <td>{SellsMan.address}</td>
                <td>{SellsMan.phone}</td>
                <td>{SellsMan.salary}</td>
                <td>
                  <Link
                    className="btn btn-primary"
                    to={"/EditProjectDetails/" + SellsMan.id}
                  >
                    Edit
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
export default SellsManList;