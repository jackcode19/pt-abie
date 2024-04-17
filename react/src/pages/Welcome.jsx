import React from "react";

function Welcome() {
    return (
        <section className="w-full mx-auto top-0 bg-welcome bg-no-repeat bg-cover bg-center bg-gray-700 bg-blend-multiply pt-36 h-screen">
            <div className="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div className="mr-auto lg:col-span-7">
                    <h1 className="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-white">
                        Payments tool for software companies
                    </h1>
                    <p className="max-w-2xl mb-6 font-light text-slate-200 lg:mb-8 md:text-lg lg:text-xl">
                        From checkout to global sales tax compliance, companies
                        around the world use Flowbite to simplify their payment
                        stack.
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
    );
}
export default Welcome;
