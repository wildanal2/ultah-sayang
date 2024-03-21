<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Happy birthday sayangku citaku cantikku</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('assets/css/sec2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/sec2-love.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/sec3.css') }}" rel="stylesheet">
    <style>
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 1);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .message {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
        }

        body {
            font-family: "Catamaran", sans-serif;
            font-optical-sizing: auto;
        }
    </style>
</head>

<body>
    <section id="section1" class="h-screen w-screen flex items-center justify-center relative overlay section1">
        <div class="mt-5 flex justify-center ">
            <div class="box z-50 bg-red-400">
                <div class="box-body">
                    <div class="img">
                        <span class="text-red-300">Klik Akuuu....</span>
                        <img onclick="scrollToSection('section2')" src="{{ asset('assets/img1.gif') }}">
                    </div>
                    <div class="box-lid">
                        <div class="box-bowtie"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 bottom-0 pb-32 flex items-center justify-center">
            <!-- <button  class="flex select-none items-center gap-3 rounded-lg bg-gradient-to-tr from-pink-600 to-pink-400 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" data-ripple-light="true">
                <i class="fa fa-solid fa-envelope-open"></i>
                Buka Hadiah
            </button> -->

        </div>
    </section>
    <section id="section2" class="bodysect2 relative">
        @include('section2')
        @include('section2-1')
    </section>
    <section id="section3" class="h-screen w-screen relative">
        <div id="header-plugin"></div>
        <div class="bg_heart"></div>
        <div class="absolute inset-0 flex justify-center items-center backdrop-blur-sm">
            <div class="text-center px-2 py-9">
                <span class="text-2xl px-3 font-semibold">Hadirmu didunia ini adalah kebahagiaan 🥰</span>
                <p class="text-xl mt-3">kehadiranmu membawa kebahagiaan untuk orang-orang disekitarmu <br>Terima kasih karena udah lahir didunia ini😘
                </p>
            </div>
        </div>
    </section>
    <section id="section4" class="h-screen w-screen relative" style="background-image: url('{{ asset('assets/bg1.jpg') }}'); background-size: cover; background-position: center;">


        <div class="absolute inset-0 flex justify-center items-center">
            <div class="text-center text-white px-2 py-2 backdrop-blur-sm">
                <span class="text-2xl px-3 font-semibold">Ulang tahunmu adalah hari pertama dari perjalanan 365 hari lainnya.</span>
                <p class="text-xl mt-3">aku mencintaimu di hari ulang tahunmu, dan setiap hari, sekarangg dan selamanyaaaaa.
                    hidupmu dimuali pada hari ini. hidupku dimulai saat aku bertemu denganmu. <br>selamat ulang tahun sayangg.
                    selamat ulang tahun ciptaan tuhan yang paling indahhh. sejauh aku yang ketahui, <br>serta mulia sayanggg✨
                </p>
            </div>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src='https://cdn.jsdelivr.net/mojs/latest/mo.min.js'></script>
    <script src="{{ asset('assets/js/script-sec2.js') }}"></script>
    <script src="{{ asset('assets/js/script-sec3.js') }}"></script>
    <script>
        // Fungsi untuk melakukan scroll ke bagian tertentu dengan ID yang diberikan
        function scrollToSection(sectionId) {
            var section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            }
            console.log(sectionId);
            if (sectionId == 'section2') {
                document.getElementById('section1').style.display = 'none';
                const c = setTimeout(() => {
                    console.log('fower start');
                    $('#anim-sec2').removeClass('not-loaded');
                    clearTimeout(c);
                }, 1000);
                const x = setTimeout(() => {
                    console.log('fower start');
                    $('.sound').click();
                    $('.sound').click();
                    clearTimeout(x);
                }, 1000);
            }
        }

        $(window).on('scroll', function() {
            var sections = $('section[id^="section"]');
            var currentSection = null;

            sections.each(function() {
                if (isInViewport($(this))) {
                    currentSection = $(this);
                }
            });

            if (currentSection) {
                console.log('Pengguna berada di:', currentSection.attr('id'));

                if (currentSection.attr('id') == "section2") {
                    $('#anim-sec2').removeClass('not-loaded');
                }

                // Lakukan tindakan atau operasi lain di sini jika diperlukan
            }
        });


        function isInViewport(element) {
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            var elementTop = element.offset().top;
            var elementBottom = elementTop + element.outerHeight();

            return elementBottom > viewportTop && elementTop < viewportBottom;
        }
    </script>
</body>

</html>