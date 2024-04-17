import React from "react";
import Layout from "../components/layouts/Layout";
import { Link } from "react-router-dom";

import aboutImage1 from "../assets/img/image2.jpg";
import aboutImage2 from "../assets/img/image3.jpg";

import serviceImage1 from "../assets/service/bbm.svg";
import serviceImage2 from "../assets/service/metal.svg";
import serviceImage3 from "../assets/service/construction.svg";

import clientImage1 from "../assets/client/wika.png";
import clientImage3 from "../assets/client/hk.png";
import clientImage4 from "../assets/client/focon.png";

import productImage1 from "../assets/product/b30.jpg";
import productImage2 from "../assets/product/b35.jpeg";
import productImage3 from "../assets/product/b100.jpg";

function Home() {
    return (
        <Layout>
            <section className="w-full mx-auto top-0 bg-welcome bg-no-repeat bg-cover bg-center bg-gray-700 bg-blend-multiply pt-36 h-screen">
                <div className="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                    <div className="mr-auto lg:col-span-7">
                        <h1 className="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-white">
                            Payments tool for software companies
                        </h1>
                        <p className="max-w-2xl mb-6 font-light text-slate-200 lg:mb-8 md:text-lg lg:text-xl">
                            From checkout to global sales tax compliance,
                            companies around the world use Flowbite to simplify
                            their payment stack.
                        </p>
                        <a
                            href="#"
                            className="inline-flex items-center justify-center px-7 py-2.5 text-base font-medium text-center bg-main text-white rounded-md hover:bg-red-800 focus:ring-4 focus:ring-gray-100 "
                        >
                            Contact
                        </a>
                    </div>
                    <div className="hidden lg:mt-0 lg:col-span-5 lg:flex">
                        {/* <img
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png"
                            alt="mockup"
                        /> */}
                    </div>
                </div>
            </section>

            <section id="about" className="bg-white pt-28 pb-20">
                {/* <div className="max-w-full text-center">
                    <h2 className="text-3xl sm:text-5xl text-dark">
                        Kami Wujudkan Inovasi
                    </h2>
                </div> */}
                <div className="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                    <div className=" text-slate-700 md:text-md  leading-8">
                        <h2 className="text-3xl sm:text-5xl text-gray-900 mb-10">
                            Kami Wujudkan Inovasi
                        </h2>

                        <div className="flex flex-col">
                            <p className="mb-4">
                                PT. ANAK BUNGSU INDONESIA ENERGI adalah
                                perusahaan yang bergerak dalam bidang niaga
                                Bahan Bakar Minyak (BBM) yang terdaftar secara
                                resmi sebagai Agen dan Transportir BBM Industri
                                Pertamina. Kami juga perusahaan yang bergerak
                                dalam bidang Kontruksi Pembangunan yang dapat
                                bersaing secara profesional baik dalam bidang
                                jasa, alat dan bahan kontruksi bangunan.
                                Perusahaan kami memasarkan dan menjual BBM non
                                subsidi untuk sektor industri, transportasi,
                                kontraktor, pertambangan, perkebunan, kapal dan
                                lain sebagainya. Memiliki tim yang sudah
                                berpengalaman sebagai Mobile Bunker Agen / Agen
                                Insdutri Pertamina, kami berkomitmen dalam
                                menjaga standar mutu produk dan pelayanan
                                pelanggan..
                            </p>
                        </div>
                        <a
                            href="#"
                            className="inline-block rounded-md text-main font-medium py-2 px-4 hover:bg-main mb-2 hover:text-white"
                        >
                            <Link to="/about">Baca Selengkapnya</Link>
                        </a>
                    </div>
                    <div className="grid grid-cols-1 gap-4 mt-8">
                        <img
                            className="w-full h-96 rounded-lg"
                            src={aboutImage2}
                            alt="office content 1"
                        />
                    </div>
                </div>
            </section>

            <section
                id="service"
                className="w-full bg-gray-100 pt-24 pb-28 p-4"
            >
                <div className="mx-auto text-center mb-16 lg:max-w-xl">
                    <h2 className="text-center font-display text-3xl font-bold tracking-tight text-gray-900 md:text-4xl mb-3">
                        Layanan Kami
                    </h2>
                    <p className="font-display text-slate-700 leading-7 lg:text-md">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Rerum, dignissimos.
                    </p>
                </div>
                <div className="grid gap-14 md:grid-cols-3 md:gap-5 container">
                    <div className="rounded-xl bg-white p-6 text-center shadow-md">
                        <div className="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-gray-100 shadow-md shadow-slate-500">
                            <img
                                src={serviceImage1}
                                alt
                                className="mx-auto h-10 w-10"
                            />
                        </div>
                        <h1 className="text-darken mb-3 text-xl font-medium lg:px-14">
                            TREE AND SHRUB PRUNING
                        </h1>
                        <p className="px-4 text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Quo iure inventore amet modi accusantium vero
                            perspiciatis, incidunt dicta sed aspernatur!
                        </p>
                    </div>
                    <div className="rounded-xl bg-white p-6 text-center shadow-md">
                        <div className="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full shadow-md bg-gray-100 shadow-slate-500">
                            <img
                                src={serviceImage2}
                                alt
                                className="mx-auto h-10 w-10"
                            />
                        </div>
                        <h1 className="text-darken mb-3 text-xl font-medium lg:px-14 ">
                            IRRIGATION &amp; DRAINAGE
                        </h1>
                        <p className="px-4 text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Quo iure inventore amet modi accusantium vero
                            perspiciatis, incidunt dicta sed aspernatur!
                        </p>
                    </div>
                    <div className="rounded-xl bg-white p-6 text-center shadow-md">
                        <div className="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full shadow-md bg-gray-100 shadow-slate-500">
                            <img
                                src={serviceImage3}
                                alt
                                className="mx-auto h-10 w-10"
                            />
                        </div>
                        <h1 className="text-darken mb-3 text-xl font-medium lg:h-14 lg:px-14">
                            GARDEN BED MAINTENANCE
                        </h1>
                        <p className="px-4 text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Quo iure inventore amet modi accusantium vero
                            perspiciatis, incidunt dicta sed aspernatur!
                        </p>
                    </div>
                </div>
            </section>

            <section
                id="product"
                className="flex flex-col justify-center max-w-7xl pt-24 pb-28 px-4 py-10 mx-auto sm:px-6"
            >
                <div className="flex flex-col items-center justify-between mb-16">
                    <h2 className="text-center font-display text-3xl font-bold tracking-tight text-gray-900 md:text-4xl mb-3">
                        Produk Kami
                    </h2>
                    <p className="font-display text-slate-700 leading-7 lg:text-md">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Rerum, dignissimos.
                    </p>
                </div>
                <div className=" mb-5 flex justify-end text-sm">
                    <a
                        href="#"
                        className="inline-block rounded-md text-main font-medium py-2 px-4 hover:bg-main mb-2 hover:text-white"
                    >
                        <Link to="/product">Produk Lainnya</Link>
                    </a>
                </div>
                <div className="flex flex-wrap -mx-4">
                    <div className="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
                        <img
                            src={productImage1}
                            alt="Card img"
                            className="object-cover object-center w-full h-48"
                        />
                        <div className="flex flex-grow">
                            <div className="triangle" />
                            <div className="flex flex-col justify-between px-4 py-6 bg-gray-100 shadow-sm ">
                                <div>
                                    {/* <a
                                        href="#"
                                        className="inline-block mb-4 text-xs font-bold capitalize border-b-2 border-blue-600 hover:text-blue-600"
                                    >
                                        Reliable Schemas
                                    </a> */}
                                    <a
                                        href="#"
                                        className="block mb-4 text-2xl font-black leading-tight  hover:text-red-700"
                                    >
                                        B30 Biosolar
                                    </a>
                                    <p className="mb-4 text-slate-700">
                                        Dengan mengikuti program pemerintah yang
                                        mewajibkan pencampuran 30% biodesel
                                        dengan 70% bahan bakar jenis solar yang
                                        menghasilkan produk B30.
                                    </p>
                                </div>
                                <div>
                                    <a
                                        href="#"
                                        className="inline-block pb-1 mt-2 text-md font-semibold text-red-700  border-b border-transparent hover:border-red-700"
                                    >
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col ">
                        <img
                            src={productImage2}
                            alt="Card img"
                            className="object-cover object-center w-full h-48"
                        />
                        <div className="flex flex-grow">
                            <div className="triangle" />
                            <div className="flex flex-col justify-between px-4 py-6 bg-gray-100 shadow-sm">
                                <div>
                                    <a
                                        href="#"
                                        className="block mb-4 text-2xl font-black leading-tight  hover:text-red-700"
                                    >
                                        B35 Biosolar
                                    </a>
                                    <p className="mb-4 text-slate-700">
                                        Bahan bakar dengan mutu dan standar
                                        pemerintah, yang mewajibkan pencampuran
                                        35% biodesel dengan 65% bahan bakar
                                        jenis solar yang menghasilkan produk
                                        B35.
                                    </p>
                                </div>
                                <div>
                                    <a
                                        href="#"
                                        className="inline-block pb-1 mt-2 text-md font-semibold text-red-700  border-b border-transparent hover:border-red-700"
                                    >
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
                        <img
                            src={productImage3}
                            alt="Card img"
                            className="object-cover object-center w-full h-48"
                        />
                        <div className="flex flex-grow">
                            <div className="triangle" />
                            <div className="flex flex-col justify-between px-4 py-6 bg-gray-100 shadow-sm">
                                <div>
                                    <a
                                        href="#"
                                        className="block mb-4 text-2xl font-black leading-tight  hover:text-red-700"
                                    >
                                        B100 Biodiesel
                                    </a>
                                    <p className="mb-4 text-slate-700">
                                        merupakan bahan bakar nabati untuk
                                        aplikasi mesi /motor diesel berupa metil
                                        asam lemak (Fatty Acid Metly Ester/FAME)
                                        yang dibuat dari minyak nabati atau
                                        lemak hewan melalui proses
                                        seterifikasi/transterifikasi.
                                    </p>
                                </div>
                                <div>
                                    <a
                                        href="#"
                                        className="inline-block pb-1 mt-2 text-md font-semibold text-red-700  border-b border-transparent hover:border-red-700"
                                    >
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                id="client"
                class="py-20 bg-gray-800 lg:py-[120px] pt-24 pb-28"
            >
                <div class="container mx-auto">
                    <div className="mx-auto text-center mb-16 lg:max-w-3xl">
                        <h2 className="text-center font-display text-3xl font-bold tracking-tight text-slate-300 md:text-4xl mb-5">
                            Bermitra
                        </h2>
                        <p className="font-display text-slate-300 leading-7 lg:text-md mt-6">
                            Kami bangga telah menjadi transportir kepercayaan
                            para klien kami pada hampir seluruh jangkauan sektor
                            industri. Perusahaan kami akan terus berkembang
                            sehingga mampu meningkatkan kualitas serta pelayanan
                            dari produk kami
                        </p>
                    </div>
                    <div class="-mx-4 flex flex-wrap">
                        <div class="w-full px-4">
                            <div class="flex flex-wrap items-center justify-center">
                                <a
                                    href="javascript:void(0)"
                                    class="mx-6 flex w-[130px] items-center justify-center py-5 2xl:w-[150px] grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition duration-300 ease-in-out"
                                >
                                    <img
                                        src={clientImage1}
                                        alt="image"
                                        class=" w-full"
                                    />
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="mx-6 flex w-[130px] items-center justify-center py-5 2xl:w-[150px] grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition duration-300 ease-in-out"
                                >
                                    <img
                                        src={clientImage3}
                                        alt="image"
                                        class=" w-full"
                                    />
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="mx-6 flex w-[130px] items-center justify-center py-5 2xl:w-[150px] grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition duration-300 ease-in-out"
                                >
                                    <img
                                        src={clientImage4}
                                        alt="image"
                                        class=" w-full"
                                    />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                id="article"
                className="flex flex-col justify-center max-w-7xl pt-24 pb-28 px-4 py-10 mx-auto sm:px-6"
            >
                <div className="flex flex-col items-center justify-between mb-16">
                    <h2 className="text-center font-display text-3xl font-bold tracking-tight text-gray-900 md:text-4xl mb-3">
                        Artikel
                    </h2>
                    <p className="font-display text-slate-700 leading-7 lg:text-md">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Rerum, dignissimos.
                    </p>
                </div>

                <div className=" mb-5 flex justify-end text-sm">
                    <a
                        href="#"
                        className="inline-block rounded-md text-main font-medium py-2 px-4 hover:bg-main mb-2 hover:text-white"
                    >
                        <Link to="/article">Artikel Lainnya</Link>
                    </a>
                </div>
                <div className="flex flex-wrap -mx-4">
                    <div className="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
                        <img
                            src="https://source.unsplash.com/400x300?oil"
                            alt="Card img"
                            className="object-cover object-center w-full h-48"
                        />
                        <div className="flex flex-grow">
                            <div className="triangle" />
                            <div className="flex flex-col justify-between px-4 py-6 bg-gray-100 shadow-sm ">
                                <div>
                                    <a
                                        href="#"
                                        className="block mb-4 text-2xl font-black leading-tight  hover:text-red-700"
                                    >
                                        What Zombies Can Teach You About Food
                                    </a>
                                    {/* <a
                                        href="#"
                                        className="inline-block mb-4 text-xs font-bold capitalize border-b-2 border-blue-600 hover:text-blue-600"
                                    >
                                        Kategori
                                    </a> */}
                                    <p className="mb-4 text-slate-700">
                                        Lorem ipsum dolor, sit amet consectetur
                                        adipisicing elit. Nulla delectus
                                        corporis commodi aperiam, amet
                                        cupiditate?
                                    </p>
                                </div>
                                <div>
                                    <a
                                        href="#"
                                        className="inline-block pb-1 mt-2 text-md font-semibold text-red-700  border-b border-transparent hover:border-red-700"
                                    >
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div className="px-4 py-3 flex flex-row items-center justify-between bg-gray-200">
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
                    <div className="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
                        <img
                            src="https://source.unsplash.com/400x300?oil"
                            alt="Card img"
                            className="object-cover object-center w-full h-48"
                        />
                        <div className="flex flex-grow">
                            <div className="triangle" />
                            <div className="flex flex-col justify-between px-4 py-6 bg-gray-100 shadow-sm ">
                                <div>
                                    <a
                                        href="#"
                                        className="block mb-4 text-2xl font-black leading-tight  hover:text-red-700"
                                    >
                                        What Zombies Can Teach You About Food
                                    </a>
                                    {/* <a
                                        href="#"
                                        className="inline-block mb-4 text-xs font-bold capitalize border-b-2 border-blue-600 hover:text-blue-600"
                                    >
                                        Kategori
                                    </a> */}
                                    <p className="mb-4 text-slate-700">
                                        Lorem ipsum dolor, sit amet consectetur
                                        adipisicing elit. Nulla delectus
                                        corporis commodi aperiam, amet
                                        cupiditate?
                                    </p>
                                </div>
                                <div>
                                    <a
                                        href="#"
                                        className="inline-block pb-1 mt-2 text-md font-semibold text-red-700  border-b border-transparent hover:border-red-700"
                                    >
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div className="px-4 py-3 flex flex-row items-center justify-between bg-gray-200">
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
                    <div className="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
                        <img
                            src="https://source.unsplash.com/400x300?oil"
                            alt="Card img"
                            className="object-cover object-center w-full h-48"
                        />
                        <div className="flex flex-grow">
                            <div className="triangle" />
                            <div className="flex flex-col justify-between px-4 py-6 bg-gray-100 shadow-sm ">
                                <div>
                                    <a
                                        href="#"
                                        className="block mb-4 text-2xl font-black leading-tight  hover:text-red-700"
                                    >
                                        What Zombies Can Teach You About Food
                                    </a>
                                    {/* <a
                                        href="#"
                                        className="inline-block mb-4 text-xs font-bold capitalize border-b-2 border-blue-600 hover:text-blue-600"
                                    >
                                        Kategori
                                    </a> */}
                                    <p className="mb-4 text-slate-700">
                                        Lorem ipsum dolor, sit amet consectetur
                                        adipisicing elit. Nulla delectus
                                        corporis commodi aperiam, amet
                                        cupiditate?
                                    </p>
                                </div>
                                <div>
                                    <a
                                        href="#"
                                        className="inline-block pb-1 mt-2 text-md font-semibold text-red-700  border-b border-transparent hover:border-red-700"
                                    >
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div className="px-4 py-3 flex flex-row items-center justify-between bg-gray-200">
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
export default Home;
