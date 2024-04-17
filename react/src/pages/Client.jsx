import React from "react";

import clientImage from "../assets/client/grab.svg";
import clientImage2 from "../assets/client/wika.png";
import clientImage3 from "../assets/client/hk.png";
import clientImage4 from "../assets/client/focon.png";
import Layout from "../components/layouts/Layout";

function Client() {
    return (
        <Layout>
            <section
                id="client"
                className="pt-32 pb-32 bg-welcome bg-no-repeat bg-cover bg-center bg-gray-700 bg-blend-multiply"
            >
                <div className="container">
                    <div className="w-full px-4">
                        <div className="mx-auto text-center mb-16 lg:max-w-xl">
                            <p className="text-center text-base font-semibold leading-7 text-main">
                                Customer
                            </p>
                            <h2 className="text-center font-display text-3xl font-bold tracking-tight text-slate-100 md:text-4xl mb-5">
                                Bermitra
                            </h2>
                            <p className="font-display text-slate-100 leading-7 lg:text-md mt-6">
                                Kami bangga telah menjadi transportir
                                kepercayaan para klien kami pada hampir seluruh
                                jangkauan sektor industri. Perusahaan kami akan
                                terus berkembang sehingga mampu meningkatkan
                                kualitas serta pelayanan dari produk kami
                            </p>
                        </div>
                        <div className="w-full px-4">
                            <div className="flex flex-wrap justify-center items-center">
                                <a
                                    href
                                    className="max-w-[150px] grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition duration-300 ease-in-out mx-4 py-4 lg:mx-6 xl:mx-8 cursor-pointer"
                                >
                                    <img src={clientImage} alt />
                                </a>
                                <a
                                    href
                                    className="max-w-[150px] grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition duration-300 ease-in-out mx-4 py-4 lg:mx-6 xl:mx-8 cursor-pointer"
                                >
                                    <img src={clientImage2} alt />
                                </a>
                                <a
                                    href
                                    className="max-w-[150px] grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition duration-300 ease-in-out mx-4 py-4 lg:mx-6 xl:mx-8 cursor-pointer"
                                >
                                    <img src={clientImage3} alt />
                                </a>
                                <a
                                    href
                                    className="max-w-[150px] grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition duration-300 ease-in-out mx-4 py-4 lg:mx-6 xl:mx-8 cursor-pointer"
                                >
                                    <img src={clientImage4} alt />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </Layout>
    );
}
export default Client;
