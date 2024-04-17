import React from "react";
import Layout from "../components/layouts/Layout";

function News() {
    return (
        <Layout>
            <section
                id="news"
                className="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16"
            >
                <div className="max-w-full text-center mb-16">
                    <h2 className="text-center font-display text-3xl font-bold tracking-tight text-gray-900 md:text-4xl">
                        Artikel
                    </h2>
                </div>
                <div className="border-b mb-5 flex justify-end text-sm">
                    <a
                        href="#"
                        className="inline-block rounded-md text-main font-medium py-2 px-4 hover:bg-main mb-2 hover:text-white"
                    >
                        Berita Lainnya
                    </a>
                </div>
                <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                    {/* CARD 1 */}
                    <div className="rounded overflow-hidden shadow-lg flex flex-col">
                        <a href="#" />
                        <div className="relative">
                            <a href="#">
                                <img
                                    className="w-full"
                                    src="https://source.unsplash.com/500x300?gas"
                                    alt="Sunset in the mountains"
                                />
                                <div className="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
                            </a>
                        </div>
                        <div className="px-6 py-4 mb-auto">
                            <a
                                href="#"
                                className="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out mb-2"
                            >
                                Lorem, ipsum
                            </a>
                            <p className="text-gray-500 text-sm">
                                Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry.
                            </p>
                        </div>
                        <div className="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                            <span
                                href="#"
                                className="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center"
                            >
                                <svg
                                    height="13px"
                                    width="13px"
                                    version="1.1"
                                    id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlnsXlink="http://www.w3.org/1999/xlink"
                                    x="0px"
                                    y="0px"
                                    viewBox="0 0 512 512"
                                    style={{
                                        enableBackground: "new 0 0 512 512",
                                    }}
                                    xmlSpace="preserve"
                                >
                                    <g>
                                        <g>
                                            <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"></path>
                                        </g>
                                    </g>
                                </svg>
                                <span className="ml-1">March 18th, 2024</span>
                            </span>
                        </div>
                    </div>

                    <div className="rounded overflow-hidden shadow-lg flex flex-col">
                        <a href="#" />
                        <div className="relative">
                            <a href="#">
                                <img
                                    className="w-full"
                                    src="https://source.unsplash.com/500x300?construction"
                                    alt="Sunset in the mountains"
                                />
                                <div className="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
                            </a>
                        </div>
                        <div className="px-6 py-4 mb-auto">
                            <a
                                href="#"
                                className="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out mb-2"
                            >
                                Lorem, ipsum
                            </a>
                            <p className="text-gray-500 text-sm">
                                Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry.
                            </p>
                        </div>
                        <div className="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                            <span
                                href="#"
                                className="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center"
                            >
                                <svg
                                    height="13px"
                                    width="13px"
                                    version="1.1"
                                    id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlnsXlink="http://www.w3.org/1999/xlink"
                                    x="0px"
                                    y="0px"
                                    viewBox="0 0 512 512"
                                    style={{
                                        enableBackground: "new 0 0 512 512",
                                    }}
                                    xmlSpace="preserve"
                                >
                                    <g>
                                        <g>
                                            <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"></path>
                                        </g>
                                    </g>
                                </svg>
                                <span className="ml-1">March 18th, 2024</span>
                            </span>
                        </div>
                    </div>

                    <div className="rounded overflow-hidden shadow-lg flex flex-col">
                        <a href="#" />
                        <div className="relative">
                            <a href="#">
                                <img
                                    className="w-full"
                                    src="https://source.unsplash.com/500x300?minning"
                                    alt="Sunset in the mountains"
                                />
                                <div className="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
                            </a>
                        </div>
                        <div className="px-6 py-4 mb-auto">
                            <a
                                href="#"
                                className="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out mb-2"
                            >
                                Lorem, ipsum
                            </a>
                            <p className="text-gray-500 text-sm">
                                Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry.
                            </p>
                        </div>
                        <div className="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                            <span
                                href="#"
                                className="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center"
                            >
                                <svg
                                    height="13px"
                                    width="13px"
                                    version="1.1"
                                    id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlnsXlink="http://www.w3.org/1999/xlink"
                                    x="0px"
                                    y="0px"
                                    viewBox="0 0 512 512"
                                    style={{
                                        enableBackground: "new 0 0 512 512",
                                    }}
                                    xmlSpace="preserve"
                                >
                                    <g>
                                        <g>
                                            <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"></path>
                                        </g>
                                    </g>
                                </svg>
                                <span className="ml-1">March 18th, 2024</span>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
        </Layout>
    );
}
export default News;
