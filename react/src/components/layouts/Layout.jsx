import React from "react";
import Navbar from "../navbar/Navbar";
import Footer from "../footer/Footer";

function Layout({ children }) {
    return (
        <div className="min-h-screen">
            <Navbar />
            <div className="">{children}</div>
            <Footer />
        </div>
    );
}
export default Layout;
