<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails Produit - Boutique Mobile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">
    <!-- En-tête -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-mobile-alt text-blue-600 text-2xl mr-2"></i>
                <h1 class="text-xl font-bold text-gray-800">Nook Shop</h1>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a href="#" class="text-gray-600 hover:text-blue-600">Accueil</a>
                <a href="#" class="text-gray-600 hover:text-blue-600">Smartphones</a>
                <a href="#" class="text-gray-600 hover:text-blue-600">Accessoires</a>
                <a href="#" class="text-gray-600 hover:text-blue-600">Promotions</a>
            </nav>
            <div class="flex items-center space-x-4">
                <button class="text-gray-600 hover:text-blue-600">
                    <i class="fas fa-search"></i>
                </button>
                <button class="text-gray-600 hover:text-blue-600">
                    <i class="fas fa-shopping-cart"></i>
                </button>
                <button class="text-gray-600 hover:text-blue-600">
                    <i class="fas fa-user"></i>
                </button>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <!-- Navigation fil d'Ariane -->
        <div class="mb-6">
            <nav class="text-sm text-gray-500">
                <a href="#" class="hover:text-blue-600">Accueil</a> / 
                <a href="#" class="hover:text-blue-600">Smartphones</a> / 
                <a href="#" class="hover:text-blue-600">Apple</a> / 
                <span class="text-gray-800">iPhone 15 Pro</span>
            </nav>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="md:flex">
                <!-- Galerie d'images -->
                <div class="md:w-1/2 p-6">
                    <div class="mb-4">
                        <img id="mainImage" src="https://images.unsplash.com/photo-1592750475338-74b7b21085ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="iPhone 15 Pro" class="w-full h-80 object-contain rounded-lg">
                    </div>
                    <div class="flex space-x-2 overflow-x-auto">
                        <img src="https://images.unsplash.com/photo-1592750475338-74b7b21085ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="iPhone 15 Pro - Vue avant" 
                             class="w-20 h-20 object-cover rounded border border-gray-200 cursor-pointer hover:border-blue-500"
                             onclick="changeImage(this.src)">
                        <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="iPhone 15 Pro - Vue arrière" 
                             class="w-20 h-20 object-cover rounded border border-gray-200 cursor-pointer hover:border-blue-500"
                             onclick="changeImage(this.src)">
                        <img src="https://images.unsplash.com/photo-1583394838336-acd977736f90?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="iPhone 15 Pro - Détails" 
                             class="w-20 h-20 object-cover rounded border border-gray-200 cursor-pointer hover:border-blue-500"
                             onclick="changeImage(this.src)">
                        <img src="https://images.unsplash.com/photo-1565849904461-04a58ad377e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="iPhone 15 Pro - Écran" 
                             class="w-20 h-20 object-cover rounded border border-gray-200 cursor-pointer hover:border-blue-500"
                             onclick="changeImage(this.src)">
                    </div>
                </div>

                <!-- Détails du produit -->
                <div class="md:w-1/2 p-6">
                    <div class="mb-4">
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full uppercase font-semibold tracking-wide">Nouveau</span>
                        <span class="ml-2 inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">En stock</span>
                    </div>
                    
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">iPhone 15 Pro</h1>
                    
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="ml-2 text-gray-600">4.5 (128 avis)</span>
                    </div>
                    
                    <div class="mb-6">
                        <span class="text-3xl font-bold text-gray-900">1 299,00 €</span>
                        <span class="ml-2 text-lg text-gray-500 line-through">1 399,00 €</span>
                        <span class="ml-2 text-green-600 font-semibold">Économisez 100 €</span>
                    </div>
                    
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Couleur</h3>
                        <div class="flex space-x-3">
                            <button class="w-10 h-10 rounded-full bg-gray-800 border-2 border-gray-300 focus:border-blue-500"></button>
                            <button class="w-10 h-10 rounded-full bg-gray-200 border-2 border-gray-300 focus:border-blue-500"></button>
                            <button class="w-10 h-10 rounded-full bg-blue-900 border-2 border-gray-300 focus:border-blue-500"></button>
                            <button class="w-10 h-10 rounded-full bg-red-800 border-2 border-gray-300 focus:border-blue-500"></button>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Capacité de stockage</h3>
                        <div class="flex space-x-3">
                            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:border-blue-500 focus:border-blue-500 focus:bg-blue-50">128 Go</button>
                            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:border-blue-500 focus:border-blue-500 focus:bg-blue-50">256 Go</button>
                            <button class="px-4 py-2 border border-blue-500 bg-blue-50 text-blue-700 rounded-lg font-semibold">512 Go</button>
                            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:border-blue-500 focus:border-blue-500 focus:bg-blue-50">1 To</button>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Options de livraison</h3>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input type="radio" id="delivery1" name="delivery" class="mr-2" checked>
                                <label for="delivery1" class="text-gray-700">Livraison standard - Gratuite (3-5 jours ouvrés)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="delivery2" name="delivery" class="mr-2">
                                <label for="delivery2" class="text-gray-700">Livraison express - 9,90 € (1-2 jours ouvrés)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="delivery3" name="delivery" class="mr-2">
                                <label for="delivery3" class="text-gray-700">Retrait en magasin - Gratuit (Dès aujourd'hui)</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex space-x-4 mb-6">
                        <div class="flex items-center border border-gray-300 rounded-lg">
                            <button class="px-3 py-2 text-gray-600 hover:text-gray-800">
                                <i class="fas fa-minus"></i>
                            </button>
                            <span class="px-4 py-2">1</span>
                            <button class="px-3 py-2 text-gray-600 hover:text-gray-800">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg flex items-center justify-center">
                            <i class="fas fa-shopping-cart mr-2"></i>
                            Ajouter au panier
                        </button>
                    </div>
                    
                    <div class="flex space-x-4">
                        <button class="flex-1 border border-gray-300 hover:border-gray-400 text-gray-700 font-semibold py-3 px-6 rounded-lg flex items-center justify-center">
                            <i class="far fa-heart mr-2"></i>
                            Favoris
                        </button>
                        <button class="flex-1 border border-gray-300 hover:border-gray-400 text-gray-700 font-semibold py-3 px-6 rounded-lg flex items-center justify-center">
                            <i class="fas fa-share-alt mr-2"></i>
                            Partager
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Description détaillée et spécifications -->
        <div class="mt-8 bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="border-b border-gray-200">
                <nav class="flex -mb-px">
                    <button id="description-tab" class="tab-button py-4 px-6 text-center border-b-2 border-blue-500 font-medium text-blue-600">
                        Description
                    </button>
                    <button id="specs-tab" class="tab-button py-4 px-6 text-center border-b-2 border-transparent font-medium text-gray-500 hover:text-gray-700">
                        Spécifications
                    </button>
                    <button id="reviews-tab" class="tab-button py-4 px-6 text-center border-b-2 border-transparent font-medium text-gray-500 hover:text-gray-700">
                        Avis clients
                    </button>
                </nav>
            </div>
            
            <div class="p-6">
                <div id="description-content" class="tab-content">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">iPhone 15 Pro - L'innovation à son apogée</h2>
                    <p class="text-gray-700 mb-4">
                        Découvrez l'iPhone 15 Pro, le smartphone le plus avancé d'Apple. Avec son design en titane léger et résistant, 
                        son écran Super Retina XDR toujours activé et la puce A17 Pro révolutionnaire, il repousse les limites de la performance mobile.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Le système de caméra professionnel offre une qualité d'image inégalée, avec un objectif principal 48 Mpx, 
                        un téléobjectif et un ultra grand-angle. Capturez des photos époustouflantes et enregistrez des vidéos en résolution 4K.
                    </p>
                    <ul class="list-disc pl-5 text-gray-700 mb-4">
                        <li>Écran Super Retina XDR de 6,1 pouces avec technologie ProMotion</li>
                        <li>Puce A17 Pro avec GPU jusqu'à 20 % plus rapide</li>
                        <li>Système de caméra pro avec objectif principal 48 Mpx</li>
                        <li>Batterie toute la journée et charge rapide</li>
                        <li>Connexion USB-C pour des transferts ultra-rapides</li>
                        <li>iOS 17 avec de nouvelles fonctionnalités exclusives</li>
                    </ul>
                </div>
                
                <div id="specs-content" class="tab-content hidden">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Spécifications techniques</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Écran</h3>
                            <ul class="text-gray-700">
                                <li>Super Retina XDR</li>
                                <li>6,1 pouces (diagonale)</li>
                                <li>Résolution 2556 x 1179 pixels</li>
                                <li>Technologie ProMotion</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Puce</h3>
                            <ul class="text-gray-700">
                                <li>Puce A17 Pro</li>
                                <li>CPU 6 cœurs</li>
                                <li>GPU 6 cœurs</li>
                                <li>Neural Engine 16 cœurs</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Appareil photo</h3>
                            <ul class="text-gray-700">
                                <li>Objectif principal 48 Mpx</li>
                                <li>Ultra grand-angle 12 Mpx</li>
                                <li>Téléobjectif 12 Mpx (zoom 3x)</li>
                                <li>Enregistrement vidéo 4K à 60 i/s</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Batterie et recharge</h3>
                            <ul class="text-gray-700">
                                <li>Autonomie toute la journée</li>
                                <li>Recharge sans fil MagSafe</li>
                                <li>Recharge rapide USB-C</li>
                                <li>Recharge sans fil Qi</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div id="reviews-content" class="tab-content hidden">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Avis clients</h2>
                    <div class="space-y-6">
                        <div class="border-b border-gray-200 pb-6">
                            <div class="flex justify-between mb-2">
                                <h3 class="font-semibold text-gray-900">Excellent produit</h3>
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="text-gray-700 mb-2">Par Jean D. le 15 octobre 2023</p>
                            <p class="text-gray-700">
                                J'utilise cet iPhone depuis deux semaines et je suis impressionné par ses performances. 
                                La batterie dure toute la journée, les photos sont incroyables et le design en titane est à la fois élégant et résistant.
                            </p>
                        </div>
                        <div class="border-b border-gray-200 pb-6">
                            <div class="flex justify-between mb-2">
                                <h3 class="font-semibold text-gray-900">Très satisfait</h3>
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <p class="text-gray-700 mb-2">Par Marie L. le 10 octobre 2023</p>
                            <p class="text-gray-700">
                                La mise à niveau depuis mon iPhone 12 Pro en vaut vraiment la peine. L'écran est magnifique, 
                                les performances sont fluides et la nouvelle interface USB-C est pratique.
                            </p>
                        </div>
                    </div>
                    <button class="mt-6 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg">
                        Voir tous les avis
                    </button>
                </div>
            </div>
        </div>

        <!-- Produits similaires -->
        <div class="mt-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Produits similaires</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Produit 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="p-4">
                        <img src="https://images.unsplash.com/photo-1592899677977-9c10ca588bbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                             alt="Samsung Galaxy S23 Ultra" class="w-full h-48 object-contain mb-4">
                        <h3 class="font-semibold text-gray-900 mb-2">Samsung Galaxy S23 Ultra</h3>
                        <div class="flex text-yellow-400 mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="text-gray-700 mb-4">1 199,00 €</p>
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">
                            Voir le produit
                        </button>
                    </div>
                </div>
                
                <!-- Produit 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="p-4">
                        <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                             alt="Google Pixel 8 Pro" class="w-full h-48 object-contain mb-4">
                        <h3 class="font-semibold text-gray-900 mb-2">Google Pixel 8 Pro</h3>
                        <div class="flex text-yellow-400 mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="text-gray-700 mb-4">999,00 €</p>
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">
                            Voir le produit
                        </button>
                    </div>
                </div>
                
                <!-- Produit 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="p-4">
                        <img src="https://images.unsplash.com/photo-1592750475338-74b7b21085ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                             alt="iPhone 14 Pro" class="w-full h-48 object-contain mb-4">
                        <h3 class="font-semibold text-gray-900 mb-2">iPhone 14 Pro</h3>
                        <div class="flex text-yellow-400 mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-700 mb-4">1 149,00 €</p>
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">
                            Voir le produit
                        </button>
                    </div>
                </div>
                
                <!-- Produit 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="p-4">
                        <img src="https://images.unsplash.com/photo-1595941069915-4ebc5197c14a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                             alt="OnePlus 11" class="w-full h-48 object-contain mb-4">
                        <h3 class="font-semibold text-gray-900 mb-2">OnePlus 11</h3>
                        <div class="flex text-yellow-400 mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="text-gray-700 mb-4">849,00 €</p>
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">
                            Voir le produit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Pied de page -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">MobileShop</h3>
                    <p class="text-gray-400">Votre boutique en ligne de smartphones et accessoires. Nous proposons les dernières innovations technologiques au meilleur prix.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens rapides</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Accueil</a></li>
                        <li><a href="#" class="hover:text-white">Smartphones</a></li>
                        <li><a href="#" class="hover:text-white">Accessoires</a></li>
                        <li><a href="#" class="hover:text-white">Promotions</a></li>
                        <li><a href="#" class="hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Service client</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">FAQ</a></li>
                        <li><a href="#" class="hover:text-white">Livraison</a></li>
                        <li><a href="#" class="hover:text-white">Retours</a></li>
                        <li><a href="#" class="hover:text-white">Garantie</a></li>
                        <li><a href="#" class="hover:text-white">Paiement sécurisé</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            123 Rue de la Technologie, Paris
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-2"></i>
                            +33 1 23 45 67 89
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2"></i>
                            contact@mobileshop.fr
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
                <p>&copy; 2023 MobileShop. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Fonction pour changer l'image principale
        function changeImage(src) {
            document.getElementById('mainImage').src = src;
        }

        // Gestion des onglets
        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', function() {
                // Désactiver tous les onglets
                document.querySelectorAll('.tab-button').forEach(btn => {
                    btn.classList.remove('border-blue-500', 'text-blue-600');
                    btn.classList.add('border-transparent', 'text-gray-500');
                });
                
                // Activer l'onglet cliqué
                this.classList.remove('border-transparent', 'text-gray-500');
                this.classList.add('border-blue-500', 'text-blue-600');
                
                // Masquer tous les contenus
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.add('hidden');
                });
                
                // Afficher le contenu correspondant
                const tabId = this.id.replace('-tab', '-content');
                document.getElementById(tabId).classList.remove('hidden');
            });
        });
    </script>
</body>
</html>