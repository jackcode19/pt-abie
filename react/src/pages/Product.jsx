import React from "react";
import image from "../assets/img/image1.jpg";
import Layout from "../components/layouts/Layout";

function Product() {
    return (
        <Layout>
            <section class="w-full mx-auto top-0 bg-welcome bg-no-repeat bg-cover bg-center bg-gray-700 bg-blend-multiply pt-36 pb-28">
                <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl text-white">
                        Produk
                    </h1>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                        Here at Flowbite we focus on markets where technology,
                    </p>
                </div>
            </section>

            <section className="bg-white py-8 sm:py-16 pt-32 pb-24">
                <div className="max-w-full text-center">
                    <p className="text-center text-base font-semibold leading-7 text-main mb-3">
                        Our Produk
                    </p>
                    <h2 className="text-center font-display text-3xl font-bold tracking-tight text-gray-900 md:text-4xl">
                        Produk Kami
                    </h2>
                </div>

                <div className="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
                    <div className=" mb-5 flex justify-end text-sm">
                        <a
                            href="#"
                            className="inline-block rounded-md text-main font-medium py-2 px-4 hover:bg-main mb-2 hover:text-white"
                        >
                            Produk Lainnya
                        </a>
                    </div>
                    <div className="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-3">
                        <div className="p-6">
                            <img
                                className="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl"
                                src="https://source.unsplash.com/500x300?minning"
                                alt="blog"
                            />
                            <h1 className="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl">
                                B30 BIOSOLAR
                            </h1>
                            <p className="mx-auto text-base leading-relaxed text-gray-500">
                                Dengan mengikuti program pemerintah yang
                                mewajibkan pencampuran 30% biodesel dengan 70%
                                bahan bakar jenis solar yang menghasilkan produk
                                B30.
                            </p>{" "}
                            <div className="mt-4">
                                <a
                                    href="#"
                                    className="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-neutral-600"
                                    title="read more"
                                >
                                    {" "}
                                    Read More »{" "}
                                </a>
                            </div>
                        </div>
                        <div className="p-6">
                            <img
                                className="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl"
                                src="https://source.unsplash.com/500x300?school"
                                alt="blog"
                            />
                            <h1 className="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl">
                                B10 BIOSOLAR
                            </h1>
                            <p className="mx-auto text-base leading-relaxed text-gray-500">
                                Bahan bakar dengan mutu dan standar pemerintah,
                                yang mewajibkan pencampuran 35% biodesel dengan
                                65% bahan bakar jenis solar yang menghasilkan
                                produk B35.
                            </p>{" "}
                            <div className="mt-4">
                                <a
                                    href="#"
                                    className="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-neutral-600"
                                    title="read more"
                                >
                                    {" "}
                                    Read More »{" "}
                                </a>
                            </div>
                        </div>
                        <div className="p-6">
                            <img
                                className="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl"
                                src="https://source.unsplash.com/500x300?gas"
                                alt="blog"
                            />
                            <h1 className="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl">
                                B100 BIOSOLAR
                            </h1>
                            <p className="mx-auto text-base leading-relaxed text-gray-500">
                                Istilah untuk biodesel yang merupakan bahan
                                bakar nabati untuk aplikasi mesi /motor diesel
                                berupa metil asam lemak
                            </p>{" "}
                            <div className="mt-4">
                                <a
                                    href="#"
                                    className="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-neutral-600"
                                    title="read more"
                                >
                                    {" "}
                                    Read More »{" "}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </Layout>

        // <section className="px-4 pt-32 pb-28">
        //     <div className="container">
        //         <div class="w-full px-4 mb-16">
        //             <div className="max-w-2xl text-center mx-auto">
        //                 {/* <h4 class="text-lg md:text-xl text-primary font-semibold mb-5">
        //                     Our Produk
        //                 </h4> */}
        //                 <h2 className="text-3xl sm:text-5xl text-dark mb-5">
        //                     Produk Kami
        //                 </h2>
        //             </div>
        //         </div>

        //         <div className="flex flex-wrap justify-center">
        //             <div className="w-full px-4 sm:w-1/2 lg:w-1/3 xl:w-1/4 mb-4">
        //                 <div className="bg-white rounded-xl shadow-lg overflow-hidden">
        //                     <img
        //                         src="https://source.unsplash.com/360x200?programming"
        //                         className="w-full hover:scale-110 transition duration-300 ease-in-out"
        //                         alt
        //                     />
        //                     <div className="px-6 py-6">
        //                         <h3>
        //                             <a
        //                                 href
        //                                 className="font-semibold text-lg text-dark hover:text-primary mb-4"
        //                             >
        //                                 Tips Programming
        //                             </a>
        //                             <p className="text-secondary mb-5">
        //                                 Lorem ipsum dolor sit, amet consectetur
        //                                 adipisicing elit. Perferendis.
        //                             </p>
        //                             <a
        //                                 href
        //                                 className="bg-gradient-to-r from-primary to-primary2 font-semibold text-sm text-white px-6 py-2 rounded-md hover:opacity-80"
        //                             >
        //                                 Baca Selengkapnya
        //                             </a>
        //                         </h3>
        //                     </div>
        //                 </div>
        //             </div>
        //             <div className="w-full px-4 sm:w-1/2 lg:w-1/3 xl:w-1/4 mb-4">
        //                 <div className="bg-white rounded-xl shadow-lg overflow-hidden">
        //                     <img
        //                         src="https://source.unsplash.com/360x200?database"
        //                         className="w-full hover:scale-110 transition duration-300 ease-in-out"
        //                         alt
        //                     />
        //                     <div className="px-6 py-6">
        //                         <h3>
        //                             <a
        //                                 href
        //                                 className="font-semibold text-lg text-dark hover:text-primary mb-4"
        //                             >
        //                                 Tips Programming
        //                             </a>
        //                             <p className="text-secondary mb-5">
        //                                 Lorem ipsum dolor sit, amet consectetur
        //                                 adipisicing elit. Perferendis.
        //                             </p>
        //                             <a
        //                                 href
        //                                 className="bg-gradient-to-r from-primary to-primary2 font-semibold text-sm text-white px-6 py-2 rounded-md hover:opacity-80"
        //                             >
        //                                 Baca Selengkapnya
        //                             </a>
        //                         </h3>
        //                     </div>
        //                 </div>
        //             </div>
        //             <div className="w-full px-4 sm:w-1/2 lg:w-1/3 xl:w-1/4 mb-4">
        //                 <div className="bg-white rounded-xl shadow-lg overflow-hidden">
        //                     <img
        //                         src="https://source.unsplash.com/360x200?office"
        //                         className="w-full hover:scale-110 transition duration-300 ease-in-out"
        //                         alt
        //                     />
        //                     <div className="px-6 py-6">
        //                         <h3>
        //                             <a
        //                                 href
        //                                 className="font-semibold text-lg text-dark hover:text-primary mb-4"
        //                             >
        //                                 Tips Programming
        //                             </a>
        //                             <p className="text-secondary mb-5">
        //                                 Lorem ipsum dolor sit, amet consectetur
        //                                 adipisicing elit. Perferendis.
        //                             </p>
        //                             <a
        //                                 href
        //                                 className="bg-gradient-to-r from-primary to-primary2 font-semibold text-sm text-white px-6 py-2 rounded-md hover:opacity-80"
        //                             >
        //                                 Baca Selengkapnya
        //                             </a>
        //                         </h3>
        //                     </div>
        //                 </div>
        //             </div>
        //             <div className="w-full px-4 sm:w-1/2 lg:w-1/3 xl:w-1/4 mb-4">
        //                 <div className="bg-white rounded-xl shadow-lg overflow-hidden">
        //                     <img
        //                         src="https://source.unsplash.com/360x200?programming"
        //                         className="w-full hover:scale-110 transition duration-300 ease-in-out"
        //                         alt
        //                     />
        //                     <div className="px-6 py-6">
        //                         <h3>
        //                             <a
        //                                 href
        //                                 className="font-semibold text-lg text-dark hover:text-primary mb-4"
        //                             >
        //                                 Tips Programming
        //                             </a>
        //                             <p className="text-secondary mb-5">
        //                                 Lorem ipsum dolor sit, amet consectetur
        //                                 adipisicing elit. Perferendis.
        //                             </p>
        //                             <a
        //                                 href
        //                                 className="bg-gradient-to-r from-primary to-primary2 font-semibold text-sm text-white px-6 py-2 rounded-md hover:opacity-80"
        //                             >
        //                                 Baca Selengkapnya
        //                             </a>
        //                         </h3>
        //                     </div>
        //                 </div>
        //             </div>
        //         </div>
        //     </div>
        // </section>
    );
}
export default Product;
