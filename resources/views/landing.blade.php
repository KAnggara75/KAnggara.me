<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="https://github.com/KAnggara75.png" type="image/x-icon" />
  <title>Kelvin Anggara</title>
</head>

<body>
  <!-- navbar Start -->
  <header class="bg-transparent absolute mt-0 left-0 w-full flex items-center z-10">
    <div class="container">
      <div class="flex items-center justify-between relative">
        <div class="px-4">
          <a href="#home" class="font-bold text-lg text-primary block py-6">Kelvin Anggara</a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="humberger" type="button" class="absolute flex items-center right-4 lg:invisible">
            <div class="w-8 flex items-center justify-center relative">
              <span class="hamburger-line -translate-y-2"></span>
              <span class="hamburger-line"></span>
              <span class="hamburger-line translate-y-2"></span>
            </div>
          </button>
          <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex">
              <li class="group"><a href="#home" class="nav-menu">Home</a></li>
              <li class="group"><a href="#about" class="nav-menu">About Me</a></li>
              <li class="group"><a href="#portfolio" class="nav-menu">Portfolio</a></li>
              <li class="group"><a href="#client" class="nav-menu">Client</a></li>
              <li class="group"><a href="#blog" class="nav-menu">Blog</a></li>
              <li class="group"><a href="#contact" class="nav-menu">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- Top bar -->
      <!-- Progress bar -->
      <div class="fixed inset-x-0 -translate-y-[2px] z-50">
        <div id="progress-bar" class="h-[2px] bg-primary" style="width: 0%;"></div>
      </div>
  </header>
  <!-- navbar end -->

  <!-- Hero Start -->
  <section id="home" class="pt-36">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-4 lg:w-1/2 mb-10">
          <h1 class="text-base font-semibold text-primary md:text-xl">
            Hallo Semuanya, <img src="img/hi.gif" alt="hi" width="20px" class="inline-block" /> Perkenalkan Saya
            <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">Kelvin Anggara</span>
          </h1>
          <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl"><span class="text-dark">Software Developer </span> | PHP-Flutter-IoT</h2>
          <p class="font-medium text-secondary mb-10 leading-relaxed">Saat ini sedang belajar Web dan Mobile Developer.</p>
          <a href="#" class="text-base font-semibold bg-primary py-3 px-8 text-white rounded-full hover:shadow-xl hover:opacity-80 transition duration-300 ease-in-out">Hubungi Saya</a>
        </div>
        <div class="w-full self-end px-4 lg:w-1/2">
          <div class="mt-10 relative lg:mt-0 lg:right-0">
            <img src="img/hero.png" alt="Kelvin" class="max-w-full mx-auto" />
            <span class="absolute -bottom-3 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
              <svg width="300" heigh="300" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#0EA5E9" d="M41.4,-61.8C51.5,-49.6,56.3,-34.7,59.9,-20.2C63.6,-5.8,66.2,8.3,64.5,23.3C62.9,38.3,56.9,54.2,45.5,64.2C34,74.1,17,78,2.1,75.1C-12.8,72.3,-25.7,62.6,-41,54C-56.4,45.3,-74.2,37.6,-81.8,24.2C-89.4,10.8,-86.7,-8.2,-79.5,-24.4C-72.3,-40.6,-60.5,-53.8,-46.5,-64.8C-32.5,-75.7,-16.2,-84.3,-0.3,-83.8C15.6,-83.4,31.2,-73.9,41.4,-61.8Z" transform="translate(100 100) scale(1.1) rotate(-30)" />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero End -->

  <!-- About Section Start -->
  <section id="about" class="py-36">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full mb-10 px-4 lg:w-1/2">
          <h4 class="font-bold uppercase text-primary text-lg mb-3">Tentang Saya</h4>
          <h2 class="text-3xl font-bold mb-5 text-dark max-w-md lg:text-4xl">Kunjungi Repo Saya</h2>
          <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nulla reiciendis facilis nihil sint unde beatae?</p>
        </div>
        <div class="w-full px-4 lg:w-1/2">
          <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Let's Connect!</h3>
          <p class="font-medium text-base text-secondary mb-6 lg:text-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, dolores iusto vero atque odio pariatur earum! At rem eligendi molestias!
          </p>
          <div class="flex items-center">
            <!-- YouTube -->
            <a href="https://www.youtube.com/channel/UCt8g8m9iw39HB7Hb_m43BBQ" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
              <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>YouTube</title>
                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
              </svg>
            </a>
            <!-- Instagram -->
            <a href="http://instagram.com/kanggara75" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
              <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Instagram</title>
                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
              </svg>
            </a>
            <!-- Github -->
            <a href="http://github.com/kanggara75" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
              <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>GitHub</title>
                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
              </svg>
            </a>
            <!-- LinkedIn -->
            <a href="https://id.linkedin.com/in/kanggara75" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
              <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>LinkedIn</title>
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Portofolio Start -->
  <section id="portfolio" class="pt-36 pb-16 bg-slate-100">
    <div class="container">
      <div class="w-full px-4">
        <div class="mx-auto text-center mb-16">
          <h4 class="font-semibold text-lg text-primary mb-2 sm:text-4xl lg:text-5xl">Portfolio</h4>
          <h2 class="font-bold text-dark text-3xl mb-4 md:text-lg">Project Terbaru</h2>
          <p class="font-medium text-md text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. At est doloribus voluptatibus, eos beatae sed ea sequi odio vel dolores?</p>
        </div>
      </div>
      <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden">
            <img src="img/porto/p1.jpeg" alt="Landing Page" width="w-full" />
          </div>
          <h3 class="font-semibold text-xl text-dark mt-5 mb-2">Kelvin Anggara</h3>
          <div class="flex">
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-php hover:bg-php hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>PHP</title>
                <path d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z" />
              </svg>
            </span>
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-html hover:bg-html hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>HTML5</title>
                <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z" />
              </svg>
            </span>
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-css hover:bg-css hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>CSS3</title>
                <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z" />
              </svg>
            </span>
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-javascript hover:bg-javascript hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>JavaScript</title>
                <path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z" />
              </svg>
            </span>
          </div>
          <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aliquid aut ipsum!</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden">
            <img src="img/porto/p2.jpeg" alt="E-Commerce" width="w-full" />
          </div>
          <h3 class="font-semibold text-xl text-dark mt-5 mb-2">E-Commerce</h3>
          <div class="flex">
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-primary hover:bg-primary hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>PHP</title>
                <path d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z" />
              </svg>
            </span>
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-primary hover:bg-primary hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>HTML5</title>
                <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z" />
              </svg>
            </span>
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-primary hover:bg-primary hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>CSS3</title>
                <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z" />
              </svg>
            </span>
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-primary hover:bg-primary hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>JavaScript</title>
                <path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z" />
              </svg>
            </span>
          </div>
          <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aliquid aut ipsum!</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden">
            <img src="img/porto/p3.jpeg" alt="Technical Documentation" width="w-full" />
          </div>
          <h3 class="font-semibold text-xl text-dark mt-5 mb-2">Technical Documentation</h3>
          <div class="flex">
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-mongo hover:bg-mongo hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>MongoDB</title>
                <path d="M17.193 9.555c-1.264-5.58-4.252-7.414-4.573-8.115-.28-.394-.53-.954-.735-1.44-.036.495-.055.685-.523 1.184-.723.566-4.438 3.682-4.74 10.02-.282 5.912 4.27 9.435 4.888 9.884l.07.05A73.49 73.49 0 0111.91 24h.481c.114-1.032.284-2.056.51-3.07.417-.296.604-.463.85-.693a11.342 11.342 0 003.639-8.464c.01-.814-.103-1.662-.197-2.218zm-5.336 8.195s0-8.291.275-8.29c.213 0 .49 10.695.49 10.695-.381-.045-.765-1.76-.765-2.405z" />
              </svg>
            </span>
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-black hover:bg-black hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Express</title>
                <path d="M24 18.588a1.529 1.529 0 01-1.895-.72l-3.45-4.771-.5-.667-4.003 5.444a1.466 1.466 0 01-1.802.708l5.158-6.92-4.798-6.251a1.595 1.595 0 011.9.666l3.576 4.83 3.596-4.81a1.435 1.435 0 011.788-.668L21.708 7.9l-2.522 3.283a.666.666 0 000 .994l4.804 6.412zM.002 11.576l.42-2.075c1.154-4.103 5.858-5.81 9.094-3.27 1.895 1.489 2.368 3.597 2.275 5.973H1.116C.943 16.447 4.005 19.009 7.92 17.7a4.078 4.078 0 002.582-2.876c.207-.666.548-.78 1.174-.588a5.417 5.417 0 01-2.589 3.957 6.272 6.272 0 01-7.306-.933 6.575 6.575 0 01-1.64-3.858c0-.235-.08-.455-.134-.666A88.33 88.33 0 010 11.577zm1.127-.286h9.654c-.06-3.076-2.001-5.258-4.59-5.278-2.882-.04-4.944 2.094-5.071 5.264z" />
              </svg>
            </span>
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-react hover:bg-react hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>React</title>
                <path d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38-.318-.184-.688-.277-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44-.96-.236-2.006-.417-3.107-.534-.66-.905-1.345-1.727-2.035-2.447 1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442-1.107.117-2.154.298-3.113.538-.112-.49-.195-.964-.254-1.42-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87-.728.063-1.466.098-2.21.098-.74 0-1.477-.035-2.202-.093-.406-.582-.802-1.204-1.183-1.86-.372-.64-.71-1.29-1.018-1.946.303-.657.646-1.313 1.013-1.954.38-.66.773-1.286 1.18-1.868.728-.064 1.466-.098 2.21-.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933-.2-.39-.41-.783-.64-1.174-.225-.392-.465-.774-.705-1.146zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493-.28-.958-.646-1.956-1.1-2.98.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98-.45 1.017-.812 2.01-1.086 2.964-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39.24-.375.48-.762.705-1.158.225-.39.435-.788.636-1.18zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143-.695-.102-1.365-.23-2.006-.386.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295-.22-.005-.406-.05-.553-.132-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z" />
              </svg>
            </span>
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-node hover:bg-node hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Node.js</title>
                <path d="M11.998,24c-0.321,0-0.641-0.084-0.922-0.247l-2.936-1.737c-0.438-0.245-0.224-0.332-0.08-0.383 c0.585-0.203,0.703-0.25,1.328-0.604c0.065-0.037,0.151-0.023,0.218,0.017l2.256,1.339c0.082,0.045,0.197,0.045,0.272,0l8.795-5.076 c0.082-0.047,0.134-0.141,0.134-0.238V6.921c0-0.099-0.053-0.192-0.137-0.242l-8.791-5.072c-0.081-0.047-0.189-0.047-0.271,0 L3.075,6.68C2.99,6.729,2.936,6.825,2.936,6.921v10.15c0,0.097,0.054,0.189,0.139,0.235l2.409,1.392 c1.307,0.654,2.108-0.116,2.108-0.89V7.787c0-0.142,0.114-0.253,0.256-0.253h1.115c0.139,0,0.255,0.112,0.255,0.253v10.021 c0,1.745-0.95,2.745-2.604,2.745c-0.508,0-0.909,0-2.026-0.551L2.28,18.675c-0.57-0.329-0.922-0.945-0.922-1.604V6.921 c0-0.659,0.353-1.275,0.922-1.603l8.795-5.082c0.557-0.315,1.296-0.315,1.848,0l8.794,5.082c0.57,0.329,0.924,0.944,0.924,1.603 v10.15c0,0.659-0.354,1.273-0.924,1.604l-8.794,5.078C12.643,23.916,12.324,24,11.998,24z M19.099,13.993 c0-1.9-1.284-2.406-3.987-2.763c-2.731-0.361-3.009-0.548-3.009-1.187c0-0.528,0.235-1.233,2.258-1.233 c1.807,0,2.473,0.389,2.747,1.607c0.024,0.115,0.129,0.199,0.247,0.199h1.141c0.071,0,0.138-0.031,0.186-0.081 c0.048-0.054,0.074-0.123,0.067-0.196c-0.177-2.098-1.571-3.076-4.388-3.076c-2.508,0-4.004,1.058-4.004,2.833 c0,1.925,1.488,2.457,3.895,2.695c2.88,0.282,3.103,0.703,3.103,1.269c0,0.983-0.789,1.402-2.642,1.402 c-2.327,0-2.839-0.584-3.011-1.742c-0.02-0.124-0.126-0.215-0.253-0.215h-1.137c-0.141,0-0.254,0.112-0.254,0.253 c0,1.482,0.806,3.248,4.655,3.248C17.501,17.007,19.099,15.91,19.099,13.993z" />
              </svg>
            </span>
          </div>
          <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aliquid aut ipsum!</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden">
            <img src="img/porto/p4.jpeg" alt="Tribute Page" width="w-full" />
          </div>
          <h3 class="font-semibold text-xl text-dark mt-5 mb-2">Tribute Page</h3>
          <div class="flex">
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-mysql hover:bg-mysql hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>MySQL</title>
                <path d="M16.405 5.501c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333-.04-.047-.046-.094-.08-.14-.04-.067-.126-.1-.18-.153zM5.77 18.695h-.927a50.854 50.854 0 00-.27-4.41h-.008l-1.41 4.41H2.45l-1.4-4.41h-.01a72.892 72.892 0 00-.195 4.41H0c.055-1.966.192-3.81.41-5.53h1.15l1.335 4.064h.008l1.347-4.064h1.095c.242 2.015.384 3.86.428 5.53zm4.017-4.08c-.378 2.045-.876 3.533-1.492 4.46-.482.716-1.01 1.073-1.583 1.073-.153 0-.34-.046-.566-.138v-.494c.11.017.24.026.386.026.268 0 .483-.075.647-.222.197-.18.295-.382.295-.605 0-.155-.077-.47-.23-.944L6.23 14.615h.91l.727 2.36c.164.536.233.91.205 1.123.4-1.064.678-2.227.835-3.483zm12.325 4.08h-2.63v-5.53h.885v4.85h1.745zm-3.32.135l-1.016-.5c.09-.076.177-.158.255-.25.433-.506.648-1.258.648-2.253 0-1.83-.718-2.746-2.155-2.746-.704 0-1.254.232-1.65.697-.43.508-.646 1.256-.646 2.245 0 .972.19 1.686.574 2.14.35.41.877.615 1.583.615.264 0 .506-.033.725-.098l1.325.772.36-.622zM15.5 17.588c-.225-.36-.337-.94-.337-1.736 0-1.393.424-2.09 1.27-2.09.443 0 .77.167.977.5.224.362.336.936.336 1.723 0 1.404-.424 2.108-1.27 2.108-.445 0-.77-.167-.978-.5zm-1.658-.425c0 .47-.172.856-.516 1.156-.344.3-.803.45-1.384.45-.543 0-1.064-.172-1.573-.515l.237-.476c.438.22.833.328 1.19.328.332 0 .593-.073.783-.22a.754.754 0 00.3-.615c0-.33-.23-.61-.648-.845-.388-.213-1.163-.657-1.163-.657-.422-.307-.632-.636-.632-1.177 0-.45.157-.81.47-1.085.315-.278.72-.415 1.22-.415.512 0 .98.136 1.4.41l-.213.476a2.726 2.726 0 00-1.064-.23c-.283 0-.502.068-.654.206a.685.685 0 00-.248.524c0 .328.234.61.666.85.393.215 1.187.67 1.187.67.433.305.648.63.648 1.168zm9.382-5.852c-.535-.014-.95.04-1.297.188-.1.04-.26.04-.274.167.055.053.063.14.11.214.08.134.218.313.346.407.14.11.28.216.427.31.26.16.555.255.81.416.145.094.293.213.44.313.073.05.12.14.214.172v-.02c-.046-.06-.06-.147-.105-.214-.067-.067-.134-.127-.2-.193a3.223 3.223 0 00-.695-.675c-.214-.146-.682-.35-.77-.595l-.013-.014c.146-.013.32-.066.46-.106.227-.06.435-.047.67-.106.106-.027.213-.06.32-.094v-.06c-.12-.12-.21-.283-.334-.395a8.867 8.867 0 00-1.104-.823c-.21-.134-.476-.22-.697-.334-.08-.04-.214-.06-.26-.127-.12-.146-.19-.34-.275-.514a17.69 17.69 0 01-.547-1.163c-.12-.262-.193-.523-.34-.763-.69-1.137-1.437-1.826-2.586-2.5-.247-.14-.543-.2-.856-.274-.167-.008-.334-.02-.5-.027-.11-.047-.216-.174-.31-.235-.38-.24-1.364-.76-1.644-.072-.18.434.267.862.422 1.082.115.153.26.328.34.5.047.116.06.235.107.356.106.294.207.622.347.897.073.14.153.287.247.413.054.073.146.107.167.227-.094.136-.1.334-.154.5-.24.757-.146 1.693.194 2.25.107.166.362.534.703.393.3-.12.234-.5.32-.835.02-.08.007-.133.048-.187v.015c.094.188.188.367.274.555.206.328.566.668.867.895.16.12.287.328.487.402v-.02h-.015c-.043-.058-.1-.086-.154-.133a3.445 3.445 0 01-.35-.4 8.76 8.76 0 01-.747-1.218c-.11-.21-.202-.436-.29-.643-.04-.08-.04-.2-.107-.24-.1.146-.247.273-.32.453-.127.288-.14.642-.188 1.01-.027.007-.014 0-.027.014-.214-.052-.287-.274-.367-.46-.2-.475-.233-1.238-.06-1.785.047-.14.247-.582.167-.716-.042-.127-.174-.2-.247-.303a2.478 2.478 0 01-.24-.427c-.16-.374-.24-.788-.414-1.162-.08-.173-.22-.354-.334-.513-.127-.18-.267-.307-.368-.52-.033-.073-.08-.194-.027-.274.014-.054.042-.075.094-.09.088-.072.335.022.422.062.247.1.455.194.662.334.094.066.195.193.315.226h.14c.214.047.455.014.655.073.355.114.675.28.962.46a5.953 5.953 0 012.085 2.286c.08.154.115.295.188.455.14.33.313.663.455.982.14.315.275.636.476.897.1.14.502.213.682.286.133.06.34.115.46.188.23.14.454.3.67.454.11.076.443.243.463.378z" />
              </svg>
            </span>
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-black hover:bg-black hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Express</title>
                <path d="M24 18.588a1.529 1.529 0 01-1.895-.72l-3.45-4.771-.5-.667-4.003 5.444a1.466 1.466 0 01-1.802.708l5.158-6.92-4.798-6.251a1.595 1.595 0 011.9.666l3.576 4.83 3.596-4.81a1.435 1.435 0 011.788-.668L21.708 7.9l-2.522 3.283a.666.666 0 000 .994l4.804 6.412zM.002 11.576l.42-2.075c1.154-4.103 5.858-5.81 9.094-3.27 1.895 1.489 2.368 3.597 2.275 5.973H1.116C.943 16.447 4.005 19.009 7.92 17.7a4.078 4.078 0 002.582-2.876c.207-.666.548-.78 1.174-.588a5.417 5.417 0 01-2.589 3.957 6.272 6.272 0 01-7.306-.933 6.575 6.575 0 01-1.64-3.858c0-.235-.08-.455-.134-.666A88.33 88.33 0 010 11.577zm1.127-.286h9.654c-.06-3.076-2.001-5.258-4.59-5.278-2.882-.04-4.944 2.094-5.071 5.264z" />
              </svg>
            </span>
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-react hover:bg-react hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>React</title>
                <path d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38-.318-.184-.688-.277-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44-.96-.236-2.006-.417-3.107-.534-.66-.905-1.345-1.727-2.035-2.447 1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442-1.107.117-2.154.298-3.113.538-.112-.49-.195-.964-.254-1.42-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87-.728.063-1.466.098-2.21.098-.74 0-1.477-.035-2.202-.093-.406-.582-.802-1.204-1.183-1.86-.372-.64-.71-1.29-1.018-1.946.303-.657.646-1.313 1.013-1.954.38-.66.773-1.286 1.18-1.868.728-.064 1.466-.098 2.21-.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933-.2-.39-.41-.783-.64-1.174-.225-.392-.465-.774-.705-1.146zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493-.28-.958-.646-1.956-1.1-2.98.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98-.45 1.017-.812 2.01-1.086 2.964-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39.24-.375.48-.762.705-1.158.225-.39.435-.788.636-1.18zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143-.695-.102-1.365-.23-2.006-.386.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295-.22-.005-.406-.05-.553-.132-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z" />
              </svg>
            </span>
            <span class="w-6 h-6 mr-[5px] mb-1 rounded-full flex justify-center items-center border border-slate-500 text-slate-500 hover:border-node hover:bg-node hover:text-white">
              <svg class="fill-current" width="15px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Node.js</title>
                <path d="M11.998,24c-0.321,0-0.641-0.084-0.922-0.247l-2.936-1.737c-0.438-0.245-0.224-0.332-0.08-0.383 c0.585-0.203,0.703-0.25,1.328-0.604c0.065-0.037,0.151-0.023,0.218,0.017l2.256,1.339c0.082,0.045,0.197,0.045,0.272,0l8.795-5.076 c0.082-0.047,0.134-0.141,0.134-0.238V6.921c0-0.099-0.053-0.192-0.137-0.242l-8.791-5.072c-0.081-0.047-0.189-0.047-0.271,0 L3.075,6.68C2.99,6.729,2.936,6.825,2.936,6.921v10.15c0,0.097,0.054,0.189,0.139,0.235l2.409,1.392 c1.307,0.654,2.108-0.116,2.108-0.89V7.787c0-0.142,0.114-0.253,0.256-0.253h1.115c0.139,0,0.255,0.112,0.255,0.253v10.021 c0,1.745-0.95,2.745-2.604,2.745c-0.508,0-0.909,0-2.026-0.551L2.28,18.675c-0.57-0.329-0.922-0.945-0.922-1.604V6.921 c0-0.659,0.353-1.275,0.922-1.603l8.795-5.082c0.557-0.315,1.296-0.315,1.848,0l8.794,5.082c0.57,0.329,0.924,0.944,0.924,1.603 v10.15c0,0.659-0.354,1.273-0.924,1.604l-8.794,5.078C12.643,23.916,12.324,24,11.998,24z M19.099,13.993 c0-1.9-1.284-2.406-3.987-2.763c-2.731-0.361-3.009-0.548-3.009-1.187c0-0.528,0.235-1.233,2.258-1.233 c1.807,0,2.473,0.389,2.747,1.607c0.024,0.115,0.129,0.199,0.247,0.199h1.141c0.071,0,0.138-0.031,0.186-0.081 c0.048-0.054,0.074-0.123,0.067-0.196c-0.177-2.098-1.571-3.076-4.388-3.076c-2.508,0-4.004,1.058-4.004,2.833 c0,1.925,1.488,2.457,3.895,2.695c2.88,0.282,3.103,0.703,3.103,1.269c0,0.983-0.789,1.402-2.642,1.402 c-2.327,0-2.839-0.584-3.011-1.742c-0.02-0.124-0.126-0.215-0.253-0.215h-1.137c-0.141,0-0.254,0.112-0.254,0.253 c0,1.482,0.806,3.248,4.655,3.248C17.501,17.007,19.099,15.91,19.099,13.993z" />
              </svg>
            </span>
          </div>
          <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aliquid aut ipsum!</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Portofolio End -->

  <!-- Client Start -->
  <section id="client" class="pt-36 pb-32 bg-slate-700">
    <div class="container">
      <div class="w-full px-4">
        <div class="mx-auto text-center mb-16">
          <h4 class="font-semibold text-lg text-primary mb-2">Clients</h4>
          <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Yang Pernah Bekerja Sama</h2>
          <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima amet esse possimus.</p>
        </div>
      </div>

      <div class="w-full px-4">
        <div class="flex flex-wrap items-center justify-center">
          <a href="#">
            <img src="img/hero.png" alt="WA" class="max-w-[120px] mx-4 py-4 grayscale transition duration-500 opacity-60 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" />
          </a>
          <a href="#">
            <img src="img/hero.png" alt="WA" class="max-w-[120px] mx-4 py-4 grayscale transition duration-500 opacity-60 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" />
          </a>
          <a href="#">
            <img src="img/hero.png" alt="WA" class="max-w-[120px] mx-4 py-4 grayscale transition duration-500 opacity-60 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" />
          </a>
          <a href="#">
            <img src="img/hero.png" alt="WA" class="max-w-[120px] mx-4 py-4 grayscale transition duration-500 opacity-60 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" />
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Client End -->

  <!-- Blog Start -->
  <section id="blog" class="pt-36 pb-32 bg-slate-100">
    <div class="container">
      <div class="w-full px-4">
        <div class="mx-auto text-center mb-16">
          <h4 class="font-semibold text-lg text-primary mb-2">Blog</h4>
          <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Tulisan Terkini</h2>
          <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, consequatur. Non, harum autem.</p>
        </div>
      </div>
      <div class="flex flex-wrap">
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img src="https://source.unsplash.com/360x240?programming" alt="Programming" class="w-full" />
            <div class="py-8 px-6">
              <h3>
                <a href="" class="block font-semibold text-dark text-xl hover:text-primary truncate"> Tips Belajar Programming </a>
              </h3>
              <p class="font-medium text-base text-secondary mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, sit!</p>
              <a href="#" class="font-medium bg-primary text-white text-sm py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img src="https://source.unsplash.com/360x240?web" alt="Programming" class="w-full" />
            <div class="py-8 px-6">
              <h3>
                <a href="" class="block font-semibold text-dark text-xl hover:text-primary truncate"> Tips Belajar Programming </a>
              </h3>
              <p class="font-medium text-base text-secondary mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, sit!</p>
              <a href="#" class="font-medium bg-primary text-white text-sm py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img src="https://source.unsplash.com/360x240?backend" alt="Programming" class="w-full" />
            <div class="py-8 px-6">
              <h3>
                <a href="" class="block font-semibold text-dark text-xl hover:text-primary truncate"> Tips Belajar Programming </a>
              </h3>
              <p class="font-medium text-base text-secondary mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, sit!</p>
              <a href="#" class="font-medium bg-primary text-white text-sm py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img src="https://source.unsplash.com/360x240?frontend" alt="Programming" class="w-full" />
            <div class="py-8 px-6">
              <h3>
                <a href="" class="block font-semibold text-dark text-xl hover:text-primary truncate"> Tips Belajar Programming </a>
              </h3>
              <p class="font-medium text-base text-secondary mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, sit!</p>
              <a href="#" class="font-medium bg-primary text-white text-sm py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img src="https://source.unsplash.com/360x240?hacking" alt="Programming" class="w-full" />
            <div class="py-8 px-6">
              <h3>
                <a href="" class="block font-semibold text-dark text-xl hover:text-primary truncate"> Tips Belajar Programming </a>
              </h3>
              <p class="font-medium text-base text-secondary mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, sit!</p>
              <a href="#" class="font-medium bg-primary text-white text-sm py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img src="https://source.unsplash.com/360x240?devops" alt="Programming" class="w-full" />
            <div class="py-8 px-6">
              <h3>
                <a href="" class="block font-semibold text-dark text-xl hover:text-primary truncate"> Tips Belajar Programming </a>
              </h3>
              <p class="font-medium text-base text-secondary mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, sit!</p>
              <a href="#" class="font-medium bg-primary text-white text-sm py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog End -->

  <!-- Contact Start -->
  <section id="contact" class="pt-36 pb-32">
    <div class="container">
      <div class="w-full px-4">
        <div class="mx-auto text-center mb-16">
          <h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
          <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Hubungi Kami</h2>
          <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, consequatur. Non, harum autem.</p>
        </div>
      </div>

      <div class="w-full lg:w-2/3 lg:mx-auto">
        <form action="">
          <div class="w-full px-4 mb-8">
            <label for="name" class="text-base text-primary font-bold">Nama</label>
            <input type="text" name="name" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-xl focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
          </div>
          <div class="w-full px-4 mb-8">
            <label for="email" class="text-base text-primary font-bold">E-Mail</label>
            <input type="text" name="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-xl focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
          </div>
          <div class="w-full px-4 mb-8">
            <label for="msg" class="text-base text-primary font-bold">Nama</label>
            <textarea type="text" name="msg" id="msg" class="w-full bg-slate-200 text-dark p-3 rounded-xl focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-30"></textarea>
          </div>
          <div class="w-full px-4">
            <button class="text-base font-semibold text-white py-3 px-8 bg-primary rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- Contact End -->

  <!-- Footer Start -->
  <footer class="bg-dark pt-24 pb-12">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
          <h2 class="font-bold text-4xl text-white mb-5">Kelvin Anggara</h2>
          <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
          <p><a href="mailto:kelvin.kanggara@gmail.com">kelvin.kanggara@gmail.com</a></p>
          <p>Jl. Sepakat No. 35 Garuda Sakti</p>
          <p>Pekanbari, Riau</p>
        </div>

        <div class="w-full px-4 mb-12 md:w-1/3">
          <h3 class="font-semibold text-xl text-white mb-5">Kategori Tulisan</h3>
          <ul class="text-slate-300">
            <li>
              <a href="#" class="inline-block text-base hover:text-primary mb-3">Programing</a>
            </li>
            <li>
              <a href="#" class="inline-block text-base hover:text-primary mb-3">Teknologi</a>
            </li>
            <li>
              <a href="#" class="inline-block text-base hover:text-primary mb-3">Tips & Trik</a>
            </li>
          </ul>
        </div>

        <div class="w-full px-4 mb-12 md:w-1/3">
          <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
          <ul class="text-slate-300">
            <li>
              <a href="#home" class="inline-block text-base hover:text-primary mb-3">Beranda</a>
            </li>
            <li>
              <a href="#about" class="inline-block text-base hover:text-primary mb-3">About Me</a>
            </li>
            <li>
              <a href="#portfolio" class="inline-block text-base hover:text-primary mb-3">Portfolio</a>
            </li>
            <li>
              <a href="#client" class="inline-block text-base hover:text-primary mb-3">Client</a>
            </li>
            <li>
              <a href="#blog" class="inline-block text-base hover:text-primary mb-3">Blog</a>
            </li>
            <li>
              <a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="w-full pt-10 border-t border-slate-700">
        <div class="flex items-center justify-center mb-5">
          <!-- YouTube -->
          <a href="https://www.youtube.com/channel/UCt8g8m9iw39HB7Hb_m43BBQ" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>YouTube</title>
              <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
            </svg>
          </a>
          <!-- Instagram -->
          <a href="http://instagram.com/kanggara75" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Instagram</title>
              <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
            </svg>
          </a>
          <!-- Github -->
          <a href="http://github.com/kanggara75" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>GitHub</title>
              <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
            </svg>
          </a>
          <!-- LinkedIn -->
          <a href="https://id.linkedin.com/in/kanggara75" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>LinkedIn</title>
              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
            </svg>
          </a>
        </div>
        <p class="text-medium text-xs text-slate-500 text-center">
          Dibuat dengan <span class="text-pink-500"> ♥️ </span> oleh <a href="https://instagram.com/kanggara75" target="_blank" class="font-bold text-primary"> Kelvin Anggara </a> menggunakan
          <a href="https://laravel.com" target="_blank" class="font-bold text-[#FF2D20]"> Laravel </a> &
          <a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500"> Tailwind CSS </a>
        </p>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <script src="js/script.js"></script>
</body>

</html>