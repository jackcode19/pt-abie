import { useState } from "react";
// import "./App.css";
import React from "react";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import Home from "./pages/Home";
import About from "./pages/About";
import Service from "./pages/Service";
import Product from "./pages/Product";
import Client from "./pages/Client";
import News from "./pages/News";

function App() {
    return (
        <Router>
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/about" element={<About />} />
                <Route path="/service" element={<Service />} />
                <Route path="/product" element={<Product />} />
                <Route path="/client" element={<Client />} />
                <Route path="/article" element={<News />} />
            </Routes>
        </Router>
    );
}

export default App;
