import React, { Component } from "react";
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import Home from "./pages/Home/Home";
import Login from "./pages/Login/Login";

export default class Root extends Component {
  render() {
    return (
      <Router>
        <Switch>
          <Route path="/Login">
            <Login />
          </Route>
          <Route path="/">
            <Home />
          </Route>
        </Switch>
      </Router>
    );
  }
}
let container = document.getElementById("app");
let component = <Root />;
ReactDOM.render(component, container);
