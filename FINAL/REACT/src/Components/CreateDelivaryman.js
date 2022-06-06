import "bootstrap/dist/css/bootstrap.min.css";
import React, { useState, useEffect } from "react";
import axios from "axios";

import { useHistory } from "react-router";




const CreateDelivaryman = () => 
{

  const history = useHistory();

  let [name, setName] = useState("");
  let [dob, setDob] = useState("");
  let [address, setAddress] = useState("");
  let [phone, setPhone] = useState("");

  let [salary, setSalary] = useState("");



  let [password, setPassword] = useState("");


  useEffect(() => {
   
  }, []);

  const AddSubmit = () => 
  {


      var obj = {
        name: name,
        dob: dob,
        address: address,
        phone: phone,
        salary: salary,
        password: password,
      };

      console.log(obj);

      axios
        .post("/delivarymanCreate", obj)
        .then((resp) => {
          console.log(resp.data);
          history.push("/delivarymanlist" );
        })
        .catch((err) => {
          console.log(err);
        });
    
  };

  //Validation part

  let [nameError, setnameError] = useState("");
  let [dobError, setdobEroor] = useState("");
  let [addressError, setadressError] = useState("");
  let [phoneError, setphoneError] = useState("");
  let [salaryError, setsalaryError] = useState("");
  let [passwordError, setpasswordError] = useState("");

  const validateName = (e) => {
    setName(e.target.value);
    if (name == "") {
      setnameError("name is required");
    }  else {
        setnameError("");
      }
    

    console.log(e.target.value);
    
  };

  const validateDob = (e) => {
    setDob(e.target.value);
  
  };

  const validateAddress = (e) => {
    setAddress(e.target.value);
  
    
    console.log(e.target.value);
   
  };

  const validatePhone = (e) => {
    setPhone(e.target.value);
  

    console.log(e.target.value);
    
  };


  const validateSalary = (e) => {
    setSalary(e.target.value);
  

    console.log(e.target.value);

  };
  const validatePassword = (e) => {
    setPassword(e.target.value);
  

    console.log(e.target.value);
   
  };
  return (
    <div>

      <div className="signin-container">
        <form>
          <div class="form-outline">
            <label class="form-label" for="formControlLg">
             name:
            </label>
            <input
              className="form-control form-control-lg"
              type="text"
              value={name}
              onChange={validateName}
            />
           
          </div>
         

          <div class="form-outline">
            <label class="form-label" for="formControlLg">
              dob:
            </label>
            <input
              className="form-control form-control-lg"
              type="date"
              value={dob}
              onChange={validateDob}
            />
           
          </div>
          <div class="form-outline">
            <label class="form-label" for="formControlLg">
              Address:
            </label>
            <input
              className="form-control form-control-lg"
              type="text"
              value={address}
              onChange={validateAddress}
            />
         
          </div>
          <div class="form-outline">
            <label class="form-label" for="formControlLg">
              PHone:
            </label>
            <input
              className="form-control form-control-lg"
              type="number"
              value={phone}
              onChange={validatePhone}
            />
         
          </div>
          <div class="form-outline">
            <label class="form-label" for="formControlLg">
              salary:
            </label>
            <input
              className="form-control form-control-lg"
              type="text"
              value={salary}
              onChange={validateSalary}
            />
         
          </div>
          <div class="form-outline">
            <label class="form-label" for="formControlLg">
              password:
            </label>
            <input
              className="form-control form-control-lg"
              type="password"
              value={password}
              onChange={validatePassword}
            />
          </div>
        </form>
        <br></br>
        <button className="btn btn-primary" onClick={AddSubmit}>
          Add
        </button>
        <br />
        <br />
        
      </div>
    </div>
  );
};
export default CreateDelivaryman;