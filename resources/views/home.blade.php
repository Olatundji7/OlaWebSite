<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Portfolio - Mousamilou ABOU</title>

    <!-- AOS (optionnel) -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    @vite('resources/css/app.css')

    <style>
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Navigation -->
<!-- HEADER -->
<header class="fixed top-0 left-0 right-0 h-16 bg-white shadow z-50">
  <div class="max-w-7xl mx-auto h-full px-6 flex items-center justify-between">
    <!-- Brand à gauche -->
    <a href="/" class="text-2xl font-bold text-blue-600">
      ABOU M. OLATUNDJI
    </a>

    <!-- Bloc NAV + ICONES à droite -->
    <div class="flex items-center space-x-6">
      <!-- Nav desktop -->
      <nav class="hidden md:flex space-x-6" aria-label="Navigation principale">
        <a href="#accueil" class="hover:text-blue-600">Accueil</a>
        <a href="#apropos" class="hover:text-blue-600">À propos</a>
        <a href="#competences" class="hover:text-blue-600">Compétences</a>
        <a href="#contact" class="hover:text-blue-600">Contact</a>
      </nav>

      <!-- Icônes sociales -->
      <div class="hidden md:flex items-center space-x-6 text-2xl text-gray-600">
        <a href="https://www.facebook.com/profile.php?id=61554466658450" target="_blank" rel="noopener" aria-label="Facebook"
           class="transition-transform transform hover:scale-125 hover:text-[#1877F2]">
          <i class="fab fa-facebook-f"></i>
        </a>

        <a href="https://wa.me/2290198519755" target="_blank" rel="noopener" aria-label="WhatsApp"
           class="transition-transform transform hover:scale-125 hover:text-[#25D366]">
          <i class="fab fa-whatsapp"></i>
        </a>

        <a href="https://www.linkedin.com/in/mousamilou-olatundji-abou-5a515127b/" target="_blank" rel="noopener" aria-label="LinkedIn"
           class="transition-transform transform hover:scale-125 hover:text-[#0A66C2]">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>

      <!-- Bouton menu mobile -->
      <button id="menu-btn"
              class="md:hidden text-3xl focus:outline-none"
              aria-controls="mobile-menu"
              aria-expanded="false"
              aria-label="Ouvrir le menu">☰
      </button>
    </div>
  </div>
</header>




    <!-- Sections -->
    <main class="pt-20">

        <!-- Section Accueil -->
        <section
    id="accueil"
    class="relative w-full h-screen bg-cover bg-center bg-no-repeat flex items-center justify-center text-white"
    style="background-image: url('{{ asset('img/bg.jpg') }}');"
>
    <!-- Voile sombre -->
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

    <!-- Texte centré -->
    <div class="relative z-20 text-center max-w-3xl px-6">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 animate-pulse">
            Bienvenue sur mon portfolio
        </h1>
        <p class="text-xl md:text-2xl mb-4">
            Je suis <span class="text-blue-300 font-semibold">Mousamilou Olatundji ABOU</span>, développeur web passionné
            avec une licence Professionnelle en Système Informatique et Logiciel.
        </p>
        <p class="text-lg text-gray-200">
            J’aime créer des solutions modernes et élégantes avec Laravel, Tailwind CSS, et d’autres technologies web.
            Actuellement en colaboration avec Ets Romaric TIC Services, j'occupe le poste du maintenancier et notre
            prestation s'opère jusqu'à dans les administration publique.
        </p>
    </div>
</section>

<br>
        <!-- Section À propos -->
        <section id="apropos" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4">

        <!-- Titre principal -->
        <h2 class="text-3xl font-bold text-blue-600 text-center mb-10">À propos de moi</h2>

        <!-- Intro -->
        <p class="text-center text-gray-700 text-lg max-w-3xl mx-auto mb-12">
            Développeur web passionné, je conçois des applications web modernes, sécurisées et performantes.
            J’ai également une solide expérience en maintenance informatique et réseaux.
        </p>

        <!-- 🔸 Expériences -->
        <div class="mb-16">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Mon Parcours</h3>

            <div class="space-y-8">
                <div class="flex flex-col md:flex-row md:items-start">
                    <div class="w-full md:w-1/4 text-blue-600 font-bold">2020 - 2023</div>
                    <div class="w-full md:w-3/4 text-gray-700">
                        <p><strong>Parcours Universitaires</strong></p>
                        <p>Etude universitaire en Système Informatique et Logiciel à ESCAE-BENIN pour
                            le compte de la licence professionnelle.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row md:items-start">
                    <div class="w-full md:w-1/4 text-blue-600 font-bold">2014 - 2020</div>
                    <div class="w-full md:w-3/4 text-gray-700">
                        <p><strong>Cursus Scolaire</strong></p>
                        <p>Etude secondaire jusqu'à l'obtention du Baccalauréat série D.</p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row md:items-start">
                    <div class="w-full md:w-1/4 text-blue-600 font-bold">Août 2016</div>
                    <div class="w-full md:w-3/4 text-gray-700">
                        <p><strong>Formation en Opération de saisie</strong></p>
                        <p>Formation en Informatique de base Word, Excel, Power Point... chez SuperMan Informatique.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!-- 🔹 Services -->
        <div>
            <h3 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Mes Services</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-bold text-blue-600 mb-2">Développement Web</h4>
                   <p class="text-gray-700">Création de sites web professionnels, responsives,
                    sécurisés et optimisés avec Laravel, Tailwind CSS, et plus.</p>
                </div>

                <div class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-bold text-blue-600 mb-2">Maintenance Informatique</h4>
                    <p class="text-gray-700">Dépannage, nettoyage, installation de logiciels,
                        mise à jour système, récupération de données, etc.</p>
                </div>

                <div class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-bold text-blue-600 mb-2">Assistant Réseau Informatique</h4>
                    <p class="text-gray-700">Configuration réseau, aide à l’installation
                        de matériels réseau, surveillance et assistance utilisateur.</p>
                </div>
            </div>
        </div>
<br>
        <!-- 📄 CV -->
<div class="mt-16 text-center">
    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Mon CV</h3>
    <p class="text-gray-600 mb-6">
        Consultez mon CV en cliquant sur le bouton ci-dessous :
    </p>
    <a href="{{ url('/cv/MonCV.pdf') }}" target="_blank"
       class="inline-block bg-blue-600 text-white px-6 py-3 rounded shadow hover:bg-blue-700 transition">
        Voir mon CV
    </a>
</div>


    <br>
</section>

        <!-- Section Compétences -->
        <section id="competences" class="py-16 bg-gray-100">
            <div class="max-w-5xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-blue-600 text-center mb-8">Mes compétences</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach([
                        ['name' => 'Laravel', 'level' => 80],
                        ['name' => 'PHP', 'level' => 80],
                        ['name' => 'HTML/CSS', 'level' => 95],
                        ['name' => 'JavaScript', 'level' => 70],
                        ['name' => 'MySQL', 'level' => 80],
                        ['name' => 'Tailwind CSS', 'level' => 70],
                    ] as $skill)
                        <div class="bg-white p-4 rounded shadow">
                            <h3 class="text-lg font-semibold mb-2">{{ $skill['name'] }}</h3>
                            <div class="w-full bg-gray-200 h-4 rounded-full">
                                <div class="h-4 bg-blue-500 rounded-full" style="width: {{ $skill['level'] }}%"></div>
                            </div>
                            <p class="text-right text-sm mt-1">{{ $skill['level'] }}%</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <br>
        </section>

        <!-- Section Contact -->
      <section id="contact" class="py-20 bg-gray-100">
    <div class="max-w-xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

        <!-- 📸 Image bien espacée et centrée -->
        <div class="flex justify-center">
            <img src="{{ asset('img/p1.png') }}"
                 alt="Image contact"
                 class="w-[250px] h-[250px] object-cover rounded-lg shadow-md" />
        </div>

        <!-- ✉️ Formulaire -->
        <div class="space-y-6">
            <h2 class="text-3xl font-bold text-blue-600">Contactez-moi</h2>

            @if(session('success'))
                <div class="bg-green-100 text-green-800 p-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('contact.send') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-gray-700">Nom</label>
                    <input type="text" name="name" class="w-full p-2 border rounded" required>
                </div>

                <div>
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" class="w-full p-2 border rounded" required>
                </div>

                <div>
                    <label class="block text-gray-700">Message</label>
                    <textarea name="message" rows="5" class="w-full p-2 border rounded" required></textarea>
                </div>

                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Envoyer</button>
            </form>
        </div>
    </div>
</section>

    </main>


 <!-- Footer -->
<footer class="bg-gray-800 text-white py-6 mt-20">
  <div class="max-w-6xl mx-auto flex flex-col items-center px-4">
      
      <!-- Texte -->
      <p class="text-sm text-center mb-4">
          &copy; Copyright {{ date('Y') }} Tous droits réservés <br>
          Développer par Mousamilou ABOU
      </p>

      <!-- Icônes sociales -->
      <div class="flex space-x-6 text-2xl">
          <a href="https://www.facebook.com/profile.php?id=61554466658450" target="_blank" class="hover:text-blue-500">
              <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://wa.me/2290198519755" target="_blank" class="hover:text-green-500">
              <i class="fab fa-whatsapp"></i>
          </a>
          <a href="https://www.linkedin.com/in/mousamilou-olatundji-abou-5a515127b/" target="_blank" class="hover:text-blue-400">
              <i class="fab fa-linkedin-in"></i>
          </a>
      </div>
  </div>
</footer>






    <script>
    const menuBtn = document.getElementById('menu-btn');
    const closeBtn = document.getElementById('close-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuLinks = document.querySelectorAll('.menu-link');

    // Ouvrir le menu
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
        menuBtn.classList.add('hidden');
    });

    // Fermer le menu (X)
    closeBtn.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        menuBtn.classList.remove('hidden');
    });

    // Fermer le menu si on clique sur un lien
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            menuBtn.classList.remove('hidden');
        });
    });
</script>



</body>
</html>
