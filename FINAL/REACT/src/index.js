import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
// import App from './App';
import reportWebVitals from './reportWebVitals';
import Home from './Components/Home';
import Profile from './Components/Profile';
import Contact from './Components/Contact';
import Foot from "./Components/Foot";
import Head from './Components/Head';
import {BrowserRouter as Router, Route, Switch} from 'react-router-dom'
import ProductDetail from './Components/ProductDetail';
import ColorState from './Components/ColorState';
import EffectHookCheck from './Components/EffectHookCheck';
import AllPosts from './Components/AllPosts';
import Login from './Components/Login';


import APIProducts from './Components/APIProducts';
import DelivarymanList from './Components/DelivarymanList';
import CreateDelivaryman from './Components/CreateDelivaryman';
import SellsmanList from './Components/SellsmanList';
import CreateSellsman from './Components/CreateSellsman';
import axios from 'axios';

var token = null;
if(localStorage.getItem('user')){
  var obj = JSON.parse(localStorage.getItem('user'));
  token = obj.access_token;
}
axios.defaults.baseURL="http://127.0.0.1:8000/api/";
axios.defaults.headers.common["Authorization"] = token;


ReactDOM.render(
  <React.StrictMode>
    {/* <App /> */}
    <Router>
      <Head/>
      <Switch>
        <Route exact path="/">
          <Home/>
        </Route>
        <Route exact path="/profile">
          <Profile/>
        </Route>
        <Route exact path="/contact">
          <Contact/>
        </Route>
        <Route exact path="/product/:id">
          <ProductDetail/>
        </Route>
        <Route exact path="/color">
          <ColorState/>
        </Route>
        <Route exact path="/effect">
          <EffectHookCheck/>
        </Route>
        <Route exact path="/posts">
          <AllPosts/>
        </Route>
        <Route exact path="/login">
          <Login/>
        </Route>
        <Route exact path="/allproducts">
          <APIProducts/>
        </Route>
        <Route exact path="/delivarymanlist">
          <DelivarymanList/>
        </Route>
        <Route exact path="/CreateDelivaryman">
          <CreateDelivaryman/>
        </Route>


        <Route exact path="/SellsmanList">
          <SellsmanList/>
        </Route>
        
        <Route exact path="/CreateSellsman">
          <CreateSellsman/>
        </Route>

        <Route exact path="/Foot">
          <Foot/>
        </Route>

        

      </Switch>
      {/* <Foot/> */}
    </Router>
  </React.StrictMode>,
  document.getElementById('root')
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
