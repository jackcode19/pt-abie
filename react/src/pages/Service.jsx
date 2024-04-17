import React from "react";
import serviceImage1 from "../assets/service/bbm.svg";
import serviceImage2 from "../assets/service/metal.svg";
import serviceImage3 from "../assets/service/construction.svg";
import Layout from "../components/layouts/Layout";

function Service() {
    return (
        <Layout>
            <section class="w-full mx-auto top-0 bg-welcome bg-no-repeat bg-cover bg-center bg-gray-700 bg-blend-multiply pt-36 pb-28">
                <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl text-white">
                        Service
                    </h1>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                        Here at Flowbite we focus on markets where technology,
                    </p>
                </div>
            </section>

            <section className="bg-gray-100 px-2 py-10 pt-32 pb-24">
                <div id="features" className="mx-auto max-w-6xl">
                    <p className="text-center text-base font-semibold leading-7 text-main">
                        Our Service
                    </p>
                    <h2 className="text-center font-display text-3xl font-bold tracking-tight text-gray-900 md:text-4xl">
                        Layanan Kami
                    </h2>
                    <ul className="mt-16 grid grid-cols-1 gap-6 text-center text-slate-700 md:grid-cols-3">
                        <li className="rounded bg-white px-6 py-8 shadow-sm">
                            <img
                                src={serviceImage1}
                                alt
                                className="mx-auto h-10 w-10"
                            />
                            <h3 className="my-3 font-medium">
                                Perdagangan BBM
                            </h3>
                            <p className="mt-1.5 text-md leading-6 text-secondary-500">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ut, tempore quibusdam?
                            </p>
                        </li>
                        <li className="rounded bg-white px-6 py-8 shadow-sm">
                            <img
                                src={serviceImage2}
                                alt
                                className="mx-auto h-10 w-10"
                            />
                            <h3 className="my-3 font-medium">
                                Perdagangan Material Bangunan
                            </h3>
                            <p className="mt-1.5 text-md leading-6 text-secondary-500">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Amet.
                            </p>
                        </li>
                        <li className="rounded bg-white px-6 py-8 shadow-sm">
                            <img
                                src={serviceImage3}
                                alt
                                className="mx-auto h-10 w-10"
                            />
                            <h3 className="my-3 font-medium">
                                Perdagangan Logam Bahan Kontruksi
                            </h3>
                            <p className="mt-1.5 text-md leading-6 text-secondary-500">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Vero, iure?
                            </p>
                        </li>
                    </ul>
                </div>
                <div />
            </section>
        </Layout>
    );
}
export default Service;
