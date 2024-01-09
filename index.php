<!DOCTYPE html>
<html lang="en" class=" scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="src/output.css" rel="stylesheet" />
</head>

<body>
    <!-- header -->
    <header class=" bg-white absolute top-0 left-0 w-full flex items-center z-10  ">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class=" font-extrabold text-lg text-primary  uppercase block py-6">
                        andi muh arif
                    </a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class=" block absolute right-4  lg:hidden">
                        <span class=" hamburger-line origin-top-left"></span>
                        <span class=" hamburger-line"></span>
                        <span class=" hamburger-line origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu" class=" hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full 
                    lg:static lg:block lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block">
                            <li class="grup lg:flex pr-10  ">
                                <a href="#home"
                                    class="text-base border p-3 border-transparent  rounded-lg font-bold mr-1 text-black py-2 mx-8 flex hover:border-primary hover:bg-primary hover:text-white duration-150">
                                    beranda
                                </a>
                                <a href="#about"
                                    class="text-base border p-3 border-transparent rounded-lg font-bold mr-1 text-black py-2 mx-8 flex hover:border-primary hover:bg-primary hover:text-white duration-150 "">
                                    tentang saya
                                </a>
                                <a href=" #Portofolio"
                                    class="text-base border p-3 border-transparent rounded-lg font-bold mr-1 text-black py-2 mx-8 flex hover:border-primary hover:bg-primary hover:text-white duration-150"">
                                    portofolio
                                </a>
                                <a href=" #blog"
                                    class="text-base border p-3 border-transparent rounded-lg font-bold mr-1 text-black py-2 mx-8 flex hover:border-primary hover:bg-primary hover:text-white duration-150"">
                                    blog
                                </a>
                                <a href=" #contact"
                                    class="text-base border p-3 border-transparent rounded-lg font-bold mr-1 text-black py-2 mx-8 flex hover:border-primary hover:bg-primary hover:text-white duration-150"">
                                    kontak
                                </a>
                            
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- akhir header -->

    <!-- hero  -->
    <section id="home" class="pt-36 ">
        <div class="container ">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl mb-3">
                        halo temen temen nama saya,
                    </h1>
                    <span class=" block font-extrabold text-black md:text-xl lg:text-5xl mb-3 uppercase">
                        andi muh
                        arif darma </span>
                    <h2 class=" font-medium text-secondary text-lg mb-5 lg:text-2xl">mahasiswa telkom university</h2>
                    <p class=" font-medium text-secondary mb-10 leading-relaxed">saya mahasiswa semester 3 yang ingin
                        belajar
                        <span class=" font-bold text-secondary"> kodingan </span>
                    </p>
                    <a href="#" class=" text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 
          transition duration-150 ease-in-out">konta saya</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class=" relative mt-10">
                        <img src="foto/saputra.png" alt="andi muh arif" class=" max-w-full mx-auto mb-4">

                        <!-- Dekorasi SVG di belakang gambar -->
                        <span class=" absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#38bdf8"
                                    d="M45.1,-53.5C56.6,-44,63.1,-28.1,69.1,-9.8C75.1,8.4,80.7,29.1,72.8,41.4C64.9,53.6,43.6,57.4,25.3,59.9C7,62.4,-8.3,63.6,-18.2,57C-28.1,50.4,-32.6,35.9,-43.1,22.6C-53.6,9.2,-70,-3,-73.3,-17.9C-76.6,-32.8,-66.8,-50.4,-52.4,-59.4C-38,-68.4,-19,-68.8,-1.1,-67.5C16.7,-66.1,33.5,-63,45.1,-53.5Z"
                                    transform="translate(100 100)" scale(1.1) />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir hero -->

    <!-- awal saya -->
    <section id="about" class=" pt-36 pb-32">
        <div class="container">
            <div class=" flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3 ">Tentang saya</h4>
                    <h2 class=" font-bold text-black text-3xl mb-4 max-w-xl lg:text-4xl">Yuk belahar bersama</h2>
                    <p class="font-medium text-base text-slate-500 max-w-xl lg:text-lg">Lorem, ipsum dolor sit amet
                        consectetur
                        adipisicing
                        elit. Modi ducimus laborum repellat dolore iure aliquam assumenda. Perferendis distinctio
                        dolorem totam.</p>
                </div>
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h3 class=" font-semibold text-slate-950 text-2xl mb-4 lg:text-3xl lg:pt-10">kontak saya</h3>
                    <p class=" font-medium text-base text-slate-500 mb-6">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.
                        Aut et eius provident itaque commodi ex.</p>
                    <!-- icon -->
                    <!-- WhatsApp -->
                    <div class="flex items-center">
                        <!-- WhatsApp -->
                        <a href="" target="_blank"
                            class=" w-9 h-9 mr-3 rounded-full flex justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class=" fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>WhatsApp</title>
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg>
                        </a>
                        <!-- tiktok -->
                        <a href="" target="_blank"
                            class=" w-9 h-9 mr-3 rounded-full flex justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class=" fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>TikTok</title>
                                <path
                                    d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir saya -->

    <!-- porto folio -->
    <section id="Portofolio" class="pt-36 pb-16 bg-slate-100 ">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-2xl text-primary uppercase mb-4 ">portofolio</h4>
                    <h2 class=" font-extrabold text-black text-3xl mb-4 sm:text-4xl lg:text-5xl">Projek saya</h2>
                    <p class=" font-medium text-md text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Nobis facilis laboriosam vero dicta eveniet explicabo corporis
                        eaque nostrum voluptates, quis repellendus expedita, fuga sed,
                        eos neque officia quasi magnam odit.</p>
                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap justify-senter">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow overflow-hidden">
                        <img src=" foto/pj1.png" alt="landing page" width=" w-full">
                    </div>
                    <h3 class=" font-semibold text-xl text-black mt-5 mb-3">dasbord editor</h3>
                    <p class=" text-secondary text-base font-medium">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Tempore excepturi, vero, blanditiis
                        fugit aut maiores voluptatem provident error, eum at nihil.
                        Ipsum explicabo suscipit deserunt dolor quisquam quae voluptatem esse!</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow overflow-hidden">
                        <img src=" foto/pj1.png" alt="landing page" width=" w-full">
                    </div>
                    <h3 class=" font-semibold text-xl text-black mt-5 mb-3">dasbord editor</h3>
                    <p class=" text-secondary text-base font-medium">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Tempore excepturi, vero, blanditiis
                        fugit aut maiores voluptatem provident error, eum at nihil.
                        Ipsum explicabo suscipit deserunt dolor quisquam quae voluptatem esse!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- porto akhir -->

    <!-- clients star -->
    <section id="clients" class=" pt-36 pb-32  bg-clieny">
        <div class="container">
            <div class="w-full px-4">
                <div class=" mx-auto text-center  mb-16">
                    <h4 class="font-semibold text-2xl text-primary uppercase mb-4">clients</h4>
                    <h2 class=" font-extrabold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl"> Yang pernah Bekerja
                        sama</h2>
                    <p class=" font-medium text-md text-white md:text-lg">Lorem ipsum dolor sit, amet consectetur
                        adipisicing elit. Exercitationem sint harum ex?</p>
                </div>
            </div>
            <div class="w-full px-4">
                <div class="flex flex-wrap item-center justify-center">
                    <a href="#"
                        class=" max-w-[120px] mx-4 py-4 grayscale opacity-65 transition duration-700 hover:grayscale-0 hover:opacity-100 ">
                        <img src="foto/kolab.jpeg" alt="kolab" class=" rounded-lg">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->

    <!-- blog -->
    <section id="blog" class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-2xl text-primary uppercase mb-4 ">blog</h4>
                    <h2 class=" font-extrabold text-black text-3xl mb-4 sm:text-4xl lg:text-5xl">Info terkini </h2>
                    <p class=" font-medium text-md text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Quas, quasi?</p>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/360x200?programming" alt="programning" class=" w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#"
                                    class="block mb-3 font-semibold text-xl text-black duration-150 hover:text-primary truncate">tips
                                    belajar programing</a>
                            </h3>
                            <p class="font-medium text-base mb-7 text-secondary">
                                Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit. Enim, beatae!
                            </p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg duration-150 hover:opacity-50">selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/360x200?computer" alt="programning" class=" w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#"
                                    class="block mb-3 font-semibold text-xl text-black duration-150 hover:text-primary truncate">tips
                                    belajar programing</a>
                            </h3>
                            <p class="font-medium text-base mb-7 text-secondary">
                                Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit. Enim, beatae!
                            </p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg duration-150 hover:opacity-50">selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/360x200?coffie" alt="programning" class=" w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#"
                                    class="block mb-3 font-semibold text-xl text-black duration-150 hover:text-primary truncate">tips
                                    belajar programing</a>
                            </h3>
                            <p class="font-medium text-base mb-7 text-secondary">
                                Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit. Enim, beatae!
                            </p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg duration-150 hover:opacity-50">selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/360x200?city" alt="programning" class=" w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#"
                                    class="block mb-3 font-semibold text-xl text-black duration-150 hover:text-primary truncate">tips
                                    belajar programing</a>
                            </h3>
                            <p class="font-medium text-base mb-7 text-secondary">
                                Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit. Enim, beatae!
                            </p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg duration-150 hover:opacity-50">selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->


    <!-- footer -->
    <footer class="bg-sky-950 pt-24 pb-12 ">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-100 md:w-1/3 ">
                    <h2 class=" font-bold text-4xl text-white mb-6">Rumah</h2>
                    <h3 class="text-2xl mb-2">Hubungi kami</h3>
                    <p>andi.alumni08pagi@gmail.com</p>
                    <p>Jl.Pancawarga4 Rt007 Rw004 No 30</p>
                    <p>Jakarta timur</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-3">Kategori Tulisan</h3>
                    <ul class=" text-slate-300">
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">
                                programning
                            </a>
                        </li>
                    </ul>
                    <ul class=" text-slate-300">
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">
                                coffie
                            </a>
                        </li>
                    </ul>
                    <ul class=" text-slate-300">
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">
                                city

                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-3">Tautan</h3>
                    <ul class=" text-slate-300">
                        <li>
                            <a href="#home" class="inline-block text-base hover:text-primary mb-3">
                                beranda
                            </a>
                        </li>
                    </ul>
                    <ul class=" text-slate-300">
                        <li>
                            <a href="#about" class="inline-block text-base hover:text-primary mb-3">
                                tentang saya
                            </a>
                        </li>
                    </ul>
                    <ul class=" text-slate-300">
                        <li>
                            <a href="#Portofolio" class="inline-block text-base hover:text-primary mb-3">
                                portofolio

                            </a>
                        </li>
                    </ul>
                    <ul class=" text-slate-300">
                        <li>
                            <a href="blog" class="inline-block text-base hover:text-primary mb-3">
                                blog
                            </a>
                        </li>
                    </ul>
                    <ul class=" text-slate-300">
                        <li>
                            <a href="#contact" class="inline-block text-base hover:text-primary mb-3">
                                kontak
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full pt-10 border-t border-slate-100 ">
                <div class="flex items-center justify-center mb-5">
                    <!-- WhatsApp -->
                    <a href="" target="_blank"
                        class=" w-9 h-9 mr-3 rounded-full flex justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class=" fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>WhatsApp</title>
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                        </svg>
                    </a>
                    <!-- tiktok -->
                    <a href="" target="_blank"
                        class=" w-9 h-9 mr-3 rounded-full flex justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class=" fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>TikTok</title>
                            <path
                                d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                        </svg>
                    </a>
                </div>
                <p class="font-medium text-xs text-slate-400 text-center">Dibuat dengan ❤️ oleh
                    <a href="#" target="_balnk" class="font-bold text-sky-300 duration-150 hover:opacity-80">andi muh
                        arif</a>,
                    menggunakan <a href="https://tailwindcss.com" target="_blank"
                        class="font-bold text-sky-500 duration-150 hover:opacity-80"">tailwind css 3</a></p>       
          </div>
        </div>

    </footer>
    <!-- end -->


<script src=" dist/script.js">
</script>
</body>

</html>