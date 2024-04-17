import React from "react";
import { Link } from "react-router-dom";
import { IoMenuOutline as Show } from "react-icons/io5";
import { AiOutlineClose as Close } from "react-icons/ai";

import logo from "../../assets/logo.png";
function Navbar() {
    const [toggleMenu, setToggleMenu] = React.useState(false);

    return (
        <div className="relative z-50">
            <nav className="w-full bg-gradient-to-r from-red-200 from-20% via-red-600 via-40% to-main to-100% flex justify-between md:justify-between items-center py-3 px-4">
                <div className="">
                    <img src={logo} width="70px" alt="" />
                </div>
                <div>
                    <ul className="hidden md:flex justify-between font-normal text-slate-100">
                        <li className="mx-6 text-lg">
                            <Link to="/">Home</Link>
                        </li>
                        <li className="mx-6 text-lg">
                            <Link to="/about">About</Link>
                        </li>
                        <li className="text-lg mx-6">
                            <Link to="/service">Service</Link>
                        </li>
                        <li className="text-lg mx-6">
                            <Link to="/product">Product</Link>
                        </li>
                        <li className="text-lg mx-6">
                            <Link to="/client">Client</Link>
                        </li>
                        <li className="text-lg mx-6">
                            <Link to="/article">Artikel</Link>
                        </li>
                        <li className="text-lg mx-6">
                            <Link to="/contact">Contact</Link>
                        </li>
                    </ul>
                </div>

                <div className="md:hidden">
                    {toggleMenu ? (
                        <Close
                            className="cursor-pointer "
                            fontSize={28}
                            onClick={() => setToggleMenu(false)}
                        />
                    ) : (
                        <Show
                            className="cursor-pointer text-slate-100 "
                            fontSize={28}
                            onClick={() => setToggleMenu(true)}
                        />
                    )}
                    {toggleMenu && (
                        <div className="w-[70vw] bg-gradient-to-t from-red-300 from-20% via-red-600 via-40% to-main to-100% backdrop-blur-sm h-screen right-0 top-0 absolute text-slate-100 px-4">
                            <Close
                                className="cursor-pointer absolute right-1 top-1"
                                fontSize={28}
                                onClick={() => setToggleMenu(false)}
                            />
                            <ul className="flex flex-col p-3 my-6">
                                <li className="text-lg">
                                    <Link to="/">Home</Link>
                                </li>
                                <li className="text-lg">
                                    <Link to="/about">About</Link>
                                </li>
                                <li className="text-lg">
                                    <Link to="/about">Work</Link>
                                </li>
                                <li className="text-lg">
                                    <Link to="/about">Contact</Link>
                                </li>
                            </ul>
                        </div>
                    )}
                </div>
            </nav>
        </div>
    );
}
export default Navbar;
