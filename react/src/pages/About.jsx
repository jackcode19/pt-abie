import React from "react";
import Layout from "../components/layouts/Layout";

function About() {
    return (
        <Layout>
            <section class="w-full mx-auto top-0 bg-welcome bg-no-repeat bg-cover bg-center bg-gray-700 bg-blend-multiply pt-36 pb-28">
                <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl text-white">
                        About
                    </h1>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                        Here at Flowbite we focus on markets where technology,
                    </p>
                </div>
            </section>

            <section className="container w-full">
                <div id="about" className="px-4 pt-20 pb-16">
                    <div className="max-w-full mb-16">
                        <h2 className="text-3xl sm:text-5xl text-dark">
                            Profile
                        </h2>
                    </div>
                    <div className="px-4 max-w-full mx-auto">
                        <p className="font-light text-slate-900 text-md lg:text-lg">
                            PT. ANAK BUNGSU INDONESIA ENERGI adalah perusahaan
                            yang bergerak dalam bidang niaga Bahan Bakar Minyak
                            (BBM) yang terdaftar secara resmi sebagai Agen dan
                            Transportir BBM Industri Pertamina. Kami juga
                            perusahaan yang bergerak dalam bidang Kontruksi
                            Pembangunan yang dapat bersaing secara profesional
                            baik dalam bidang jasa, alat dan bahan kontruksi
                            bangunan. Perusahaan kami memasarkan dan menjual BBM
                            non subsidi untuk sektor industri, transportasi,
                            kontraktor, pertambangan, perkebunan, kapal dan lain
                            sebagainya. Memiliki tim yang sudah berpengalaman
                            sebagai Mobile Bunker Agen / Agen Insdutri
                            Pertamina, kami berkomitmen dalam menjaga standar
                            mutu produk dan pelayanan pelanggan.
                        </p>
                    </div>
                </div>
            </section>
        </Layout>
    );
}
export default About;
