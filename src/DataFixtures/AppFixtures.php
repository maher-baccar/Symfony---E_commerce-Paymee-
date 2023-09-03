<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Category; 
use App\Entity\Carrier;
use App\Entity\Product;
use App\Entity\Headers;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager): void
    {
        $categoryRepository = $manager->getRepository(Category::class);
    
        // Create and persist user entity
        $user = new User();
        $user->setFirstname('admin');
        $user->setLastname('admin');
        $user->setEmail('admin@admin.com');
    
        // Encode the password
        $encodedPassword = $this->passwordEncoder->encodePassword($user, '12345678');
        $user->setPassword($encodedPassword);
    
        $user->setRoles(['ROLE_ADMIN']);
    
        $manager->persist($user);
    
        // Create and persist categories
        $categoryNames = [
            "Tablette",
            "Smartphone",
            "Ordinateur_Portable",
            "Ordinateur_de_Bureau",
        ];
        foreach ($categoryNames as $key => $name) {
            $category = new Category();
            $category->setName($name);
            $manager->persist($category);
        }
        //create banniers
        $headersData = [
            [
                'title' => 'Asus VivoBook15',
                'content' => 'Pc Portable Asus VivoBook15 M1502IA',
                'btnTitle' => 'Voir',
                'btnUrl' => '/articles',
                'image' => '659e049706f012fd0892f9f1917165e885d379c1.jpg',
            ],
            [
                'title' => 'MSI - Aegis 3',
                'content' => 'Pc Gamer MSI Aegis 3 VR7RC-004EU',
                'btnTitle' => 'Voir',
                'btnUrl' => '/articles',
                'image' => 'c738f71c8defef5dfae58123e8ca3b0eece58280.jpg',
            ], 
            [
                'title' => 'IPHONE 14',
                'content' => 'Apple - IPHONE 14',
                'btnTitle' => 'Voir',
                'btnUrl' => '/articles',
                'image' => '55fddb6581223cd2432d07218f612b7f6e42c6e1.jpg',
            ],
        ];
    
        // Iterate through the array and create/persist Header entities
        foreach ($headersData as $headerData) {
            $header = new Headers();
            $header->setTitle($headerData['title']);
            $header->setContent($headerData['content']);
            $header->setBtnTitle($headerData['btnTitle']);
            $header->setBtnUrl($headerData['btnUrl']);
            $header->setImage($headerData['image']);
    
            // Persist the entity to the database
            $manager->persist($header);
        }
        // Create carriers
        $carriersData = [
            [
                'name' => 'Aramex',
                'description' => 'Livraison Express à domicile dans 48 heures',
                'price' => 1500,
            ],
            [
                'name' => 'Tunisia express',
                'description' => 'Livraison standard à domicile en 4 jours ouvrés.',
                'price' => 700,
            ],
            [
                'name' => 'La Poste',
                'description' => 'Livraison standard au plus proche Bureau de poste en 6 jours ouvrés.',
                'price' => 500,
            ],
        ];
    
        foreach ($carriersData as $data) {
            $carrier = new Carrier();
            $carrier->setName($data['name']);
            $carrier->setDescription($data['description']);
            $carrier->setPrice($data['price']);
            $manager->persist($carrier);
        }
    
        $manager->flush();
        $productsData = [
            [
                'category_name' => 'Tablette', 
                'name' => 'TABLETTE SAMSUNG GALAXY TAB S8 PLUS 5G 12.4 - GRAPHITE',
                'slug' => 'tablette-samsung-galaxy-tab-s8-plus-5g-124-graphite',
                'image' => 'f57862e831c073d3291e2244568d95c111766ea9.jpg',
                'subtitle' => 'TABLETTE SAMSUNG GALAXY TAB S8 PLUS 5G 12.4 - GRAPHITE',
                'description' => "Écran 12.4'' WQXGA+ (2800 x 1752 pixels) avec taux de rafraîchissement de 120 Hz - Systéme d'exploitation: Android 12 - Processeur: Octa-Core (2.99GHz, 2.4GHz, 1.7GHz) - Mémoire RAM: 8 Go - Stockage: 128 Go - Appareil photo Arrière: 13.0 MP (Principal) + 6.0 MP (Ultra large) et Avant: 12.0 MP - Batterie: Li-Po 10090 MAh avec Wi-Fi, 5G, GPS , Bluetooth V5.2 - Couleur: Graphite - Garantie: 1 an + Stylet S-PEN",
                'price' => 362900,
                'is_in_home' => 1,
            ],
            [
                'category_name' => 'Tablette', 
                'name' => 'Apple iPad Pro 6è Génération (2022) 12.9\'\' 256Go WiFi - Gris Sidéral (MNXR3LL/A)',
                'slug' => 'apple-ipad-pro-6e-generation-2022-129-256go-wifi-gris-sideral-mnxr3lla',
                'image' => 'b17a8fae72b66ad6b2d5122d3b86c736b15bb683.jpg',
                'subtitle' => 'Apple iPad Pro 6è Génération (2022) 12.9\'\' 256Go WiFi - Gris Sidéral (MNXR3LL/A)',
                'description' => "Écran 12.9 Liquid Retina XDR Tactile (2732 x 2048 pixels) - Processeur: Apple M2 avec (CPU 8 cœurs / GPU 10 cœurs /Neural Engine 16 cœurs) - Système d'exploitation: iPadOS - Mémoire: 8 Go - Stockage: 256 Go - Appareil Photo Arrière: 12 MP + 10 MP, Appareil Photo avant: 12 MP, avec Wi‑Fi et Bluetooth 5.3 - Batterie: Lithium polymère -  Capacité de la Batterie: 40,88 Wh - Capteur: Face ID - Couleur: Gris sidéral - Garantie: 1 an",
                'price' => 543900,
                'is_in_home' => 0,
            ],
            [
                'category_name' => 'Smartphone', 
                'name' => 'iPhone 14 Pro Max 512Go Violet Foncé - APPLE',
                'slug' => 'iphone-14-pro-max-512go-violet-fonce-apple',
                'image' => '340ae2d7dcea4640426f745fdfdbcfcff638816d.jpg',
                'subtitle' => 'iPhone 14 Pro Max 512Go Violet Foncé - APPLE',
                'description' => "Écran 6,7 OLED Super Retina XDR HDR10, Dolby Vision, 120Hz - Écran toujours actif - Résolution: 2796x1290 pixels - Processeur: Apple A16 bionique (4 nm) Hexa-core (2x3.46 GHz Everest + 4x2.02 GHz Sawtooth) - GPU Graphics Apple 5 Coeurs - Système d'exploitation: iOS 16 - Mémoire RAM: 6 Go - Stockage: 512Go - Appareil photo Arrière: Trio Pixels: 48 MP, f/1.8, 24mm (large), 1/1.28 , 1.22µm, PDAF double pixel + 12 MP, f/2.8, 77mm (téléobjectif), 1/3.5 + 12 MP, f/2.2, 13mm, 120˚ (ultra large), 1/2.55 , 1.4µm - Appareil Avant: 12 MégaPixels f/1.9, 23 mm (large), 1/3.6 - Video 4K HDR avec Wifi, Réseau 5G , GPS , et Bluetooth 5.3 - Streaming vidéo : jusqu’à 25 heures - Batterie: Li-Ion 4323mAh - Charge rapide, PD2.0, 50% en 30 min - 15W sans fil (MagSafe) - sans fil Qi jusqu’à 7,5 W - Face ID - Apple Pay - Siri - NFC - Indice de protection IP68 - Détection des accidents - Appel d’urgence - Couleur: Violet - Garantie: 1 an",
                'price' => 767900,
                'is_in_home' => 0,
            ],
            [
                'category_name' => 'Smartphone', 
                'name' => 'IPHONE 14 512GO VIOLET - APPLE',
                'slug' => 'iphone-14-512go-violet-apple',
                'image' => '72daabe39c4dabeb04ee7ffd378123f1e45d3e67.jpg',
                'subtitle' => 'IPHONE 14 512GO VIOLET - APPLE',
                'description' => "Écran 6,1\" OLED Super Retina XDR HDR10, Dolby Vision - Résolution: 1170 x 2532 pixels - Processeur: Puce A15 bionique (5 nm) Hexa-core(2x3.23 GHz Avalanche + 4x1.82 GHz Blizzard) - GPU Graphics Apple 5 Coeurs - Système d'exploitation: iOS 16 - Mémoire RAM: 6 Go - Stockage: 512 Go - Appareil photo Arrière: Dual Pixels: 12 MégaPixels f/1.5, 26mm (large), 1/1.7\", 1.9µm, PDAF double pixel + 12 MégaPixels f/2.4, 13mm, 120˚ (ultra large) - Appareil Avant: 12 MégaPixels f/1.9, 23 mm (large), 1/3.6\", PDAF - Vidéo 4K HDR à 24, 25, 30 ou 60 i/s - Connectivité: 5G NR, Wi‑Fi 6, Bluetooth 5.3 - Autonomie jusqu’à 20 heures de lecture vidéo - Batterie: Li-Ion 3279mAh - Charge rapide, PD2.0, 50% en 30 min - 15W sans fil (MagSafe) - Face ID - Apple Pay - Siri - NFC - Indice de protection IP68 - Détection des accidents - Appel d’urgence - Couleur: Violet - Garantie: 1 an",
                'price' => 519900,
                'is_in_home' => 1,
            ],
            [
                'category_name' => 'Smartphone', 
                'name' => 'IPHONE 14 PRO MAX 256GO NOIR - APPLE',
                'slug' => 'iphone-14-pro-max-256go-noir-apple',
                'image' => 'e759ebd1b47fc8f90d2b5d465fc9570ab564dc02.jpg',
                'subtitle' => 'IPHONE 14 PRO MAX 256GO NOIR - APPLE',
                'description' => "Écran 6,7 OLED Super Retina XDR HDR10, Dolby Vision, 120Hz - Écran toujours actif - Résolution: 2796x1290 pixels - Processeur: Apple A16 bionique (4 nm) Hexa-core (2x3.46 GHz Everest + 4x2.02 GHz Sawtooth) - GPU Graphics Apple 5 Coeurs - Système d'exploitation: iOS 16 - Mémoire RAM: 6 Go - Stockage: 256Go - Appareil photo Arrière: Trio Pixels: 48 MP, f/1.8, 24mm (large), 1/1.28 , 1.22µm, PDAF double pixel + 12 MP, f/2.8, 77mm (téléobjectif), 1/3.5 + 12 MP, f/2.2, 13mm, 120˚ (ultra large), 1/2.55 , 1.4µm - Appareil Avant: 12 MégaPixels f/1.9, 23 mm (large), 1/3.6 - Video 4K HDR avec Wifi, Réseau 5G , GPS , et Bluetooth 5.3 - Streaming vidéo : jusqu’à 25 heures - Batterie: Li-Ion 4323mAh - Charge rapide, PD2.0, 50% en 30 min - 15W sans fil (MagSafe) - sans fil Qi jusqu’à 7,5 W - Face ID - Apple Pay - Siri - NFC - Indice de protection IP68 - Détection des accidents - Appel d’urgence - Couleur: Noir - Garantie: 1 an",
                'price' => 699900,
                'is_in_home' => 0,
            ],
            [
                'category_name' => 'Smartphone',
                'name' => 'SMARTPHONE SAMSUNG GALAXY Z FOLD 5 12GO 256GO - GRIS GRAPHITE',
                'slug' => 'smartphone-samsung-galaxy-z-fold-5-12go-256go-gris-graphite',
                'image' => '3e1cb1141c3ddf60cc2be30bd60497629b9b1d42.jpg',
                'subtitle' => 'SMARTPHONE SAMSUNG GALAXY Z FOLD 5 12GO 256GO - GRIS GRAPHITE',
                'description' => 'Écran principal 7.6" AMOLED dynamique 2X, 120Hz, 2176 x 1812px (QXGA+) - Écran externe: 6.2" AMOLED dynamique 2X 2316 x 904px (HD+) - Processeur: Snapdragon 8 Gen 2 (4 nm) Octa-core 3.2GHz - Système d\'exploitation: Android 13 une interface utilisateur 5.1 - Mémoire RAM: 12Go - Stockage: 256 Go - Caméra arrière: Trio 50 MP, f/1.8 + 12 MP, f/2.2 + 10 MP, f/2.4 - Avant: 10 MP - Caméra sous écran: 4MP - Enregistrement vidéo: UHD 8K (7680 x 4320px) - WiFi 5G, Bluetooth 5.2 - NFC - Lecteur d\'empreinte digitale - Batterie: 4400 mAh - Charge rapide 25W, 15W Sans fil - Résistant à l\'eau: IPX8 - Couleur: Gris Graphite - Garantie: 1 an',
                'price' => 800000,
                'is_in_home' => 0,
            ],
            [
                'category_name' => 'Smartphone',
                'name' => 'SMARTPHONE SAMSUNG GALAXY S23 ULTRA 12GO 256GO - NOIR',
                'slug' => 'smartphone-samsung-galaxy-s23-ultra-12go-256go-noir',
                'image' => '75ea4b715d4e929f291991b539c4e048f6e34dda.jpg',
                'subtitle' => 'SMARTPHONE SAMSUNG GALAXY S23 ULTRA 12GO 256GO - NOIR',
                'description' => 'Écran 6.8" AMOLED dynamique 2X, 120Hz, HDR10+, 1750 nits(1440 x 3088pixels) Corning Gorilla Verre Victus 2 - Processeur: Qualcomm SM8550-AC Snapdragon 8 Gen 2 (4 nm) Octa-core, Adréno 740 - Système d\'exploitation: Android 13 une interface utilisateur 5.1 - Mémoire RAM: 12Go - Stockage: 256 Go - Caméra arrière: 200 MP, f/1.7, 24mm (large) + 10 MP, f/4.9, 230mm (téléobjectif périscope) + 10 MP, f/2.4, 70mm (téléobjectif) + 12 MP, f/2.2, 13mm, 120˚(ultra large) - Avant: 12 MP, f/2.2, 26 mm (large) - WiFi 5G, Bluetooth 5.3 - Lecteur d\'empreinte digitale - Batterie: 5000 mAh - Charge rapide 45W - résistant à l\'eau: IPX8 - Couleur: Noir - Garantie: 1 an',
                'price' => 589900,
                'is_in_home' => 0,
            ],
            [
                'category_name' => 'Smartphone',
                'name' => 'SMARTPHONE SAMSUNG GALAXY S23 PLUS 8GO 256GO - NOIR',
                'slug' => 'smartphone-samsung-galaxy-s23-plus-8go-256go-noir',
                'image' => 'eaf8d2ac21aaef50fc6154d8cd1474d63bd441d6.jpg',
                'subtitle' => 'SMARTPHONE SAMSUNG GALAXY S23 PLUS 8GO 256GO - NOIR',
                'description' => 'Écran 6.6" AMOLED dynamique 2X, 120Hz, HDR10+, 1750 nits(1080 x 2340pixels) Corning Gorilla 2 - Processeur: Qualcomm SM8550-AC Snapdragon 8 Gen 2 (4 nm) Octa-core, Adréno 740 - Système d\'exploitation: Android 13 une interface utilisateur 5.1 - Mémoire RAM: 8Go - Stockage: 256 Go - Caméra arrière: Trio 50 MP, f/1.8, 24 mm (large) + 10 MP, f/2.4, 70mm (téléobjectif), 1/3.94" + 12 MP, f/2.2, 13mm, 120˚ (ultra large) - Avant: 12 MP, f/2.2, 26 mm (large), PDAF double pixels - WiFi 5G, Bluetooth 5.3 - Lecteur d\'empreinte digitale - Batterie: 4700 mAh - Charge rapide 45W - résistant à l\'eau: IPX8 - Couleur: Noir - Garantie: 1 an',
                'price' => 459900,
                'is_in_home' => 0,
            ],
            [
                'category_name' => 'Smartphone',
                'name' => 'SMARTPHONE SAMSUNG GALAXY Z FLIP 5 8GO 256GO - GRIS GRAPHITE',
                'slug' => 'smartphone-samsung-galaxy-z-flip-5-8go-256go-gris-graphite',
                'image' => 'd259fa38e1c0102e99e331c95a0b97319b70e33b.jpg',
                'subtitle' => 'SMARTPHONE SAMSUNG GALAXY Z FLIP 5 8GO 256GO - GRIS GRAPHITE',
                'description' => 'Écran principal 6.7" AMOLED dynamique 2X, 120Hz, 2640 x 1080px (FHD+) - Écran externe: 3.4" Super AMOLED 720 x 748px - Processeur: Snapdragon 8 Gen 2 (4 nm) Octa-core 3.36GHz - Système d\'exploitation: Android 13 une interface utilisateur 5.1 - Mémoire RAM: 8Go - Stockage: 256 Go - Caméra arrière: Dual 12MP + 12 MP - Avant: 10 MP - Enregistrement vidéo: UHD 4K (3840 x 2160px) - WiFi 5G, Bluetooth 5.2 - NFC - Lecteur d\'empreinte digitale - Batterie: 3700 mAh - Charge rapide 25W, 15W Sans fil - Résistant à l\'eau: IPX8 - Couleur: Gris Graphite - Garantie: 1 an',
                'price' => 459900,
                'is_in_home' => 0,
            ],
            [
                'category_name' => 'Smartphone',
                'name' => 'iPhone 14 Pro 128Go Gold - APPLE',
                'slug' => 'iphone-14-pro-128go-gold-apple',
                'image' => '46bf79e4444f6d6bf995547ea6252c52c857ffb9.jpg',
                'subtitle' => 'iPhone 14 Pro 128Go Gold - APPLE',
                'description' => 'Écran 6,1 OLED Super Retina XDR HDR10, Dolby Vision, 120Hz - Écran toujours actif - Résolution: 2556 x 1179 pixels - Processeur: Apple A16 bionique (4 nm) Hexa-core (2x3.46 GHz Everest + 4x2.02 GHz Sawtooth) - GPU Graphics Apple 5 Coeurs - Système d\'exploitation: iOS 16 - Mémoire RAM: 6 Go - Stockage: 128Go - Appareil photo Arrière: Trio Pixels: 48 MP, f/1.8, 24mm (large), 1/1.28 , 1.22µm, PDAF double pixel + 12 MP, f/2.8, 77mm (téléobjectif), 1/3.5 + 12 MP, f/2.2, 13mm, 120˚ (ultra large), 1/2.55 , 1.4µm - Appareil Avant: 12 MégaPixels f/1.9, 23 mm (large), 1/3.6 - Video 4K HDR avec Wifi, Réseau 5G , GPS , et Bluetooth 5.3 - Streaming vidéo : jusqu’à 20 heures - Batterie: Li-Ion 3200mAh - Charge rapide, PD2.0, 50% en 30 min - 15W sans fil (MagSafe) - sans fil Qi jusqu’à 7,5 W - Face ID - Apple Pay - Siri - NFC - Indice de protection IP68 - Détection des accidents - Appel d’urgence - Couleur: Gold - Garantie: 1 an',
                'price' => 580000,
                'is_in_home' => 1,
            ],
            [
                'category_name' => 'Ordinateur_Portable',
                'name' => 'PC Portable Gamer MSI Raider GE78HX 13VI i9 13è Gén 16Go RTX 4090',
                'slug' => 'pc-portable-gamer-msi-raider-ge78hx-13vi-i9-13e-gen-16go-rtx-4090',
                'image' => '31fd36c75049b8435ae5319c7c04b4ea3798e5c1.jpg',
                'subtitle' => 'PC Portable Gamer MSI Raider GE78HX 13VI i9 13è Gén 16Go RTX 4090',
                'description' => 'Écran 17" QHD+, IPS, 240 Hz - Processeur: Intel Core i9-13980HX (up to 5,60 GHz Turbo max, 36 Mo de mémoire cache, 24-Cores) - Système d\'exploitation: FreeDos - Mémoire RAM: 16 Go DDR5 - Disque dur: 1 To SSD - Carte graphique: NVIDIA GeForce RTX 4090 (16 Go de mémoire dédiée GDDR6) avec Wi-Fi, Bluetooth, 2x (USB3.2 Gen2 / DP) Type-C, 1x (USB / DP / Thunderbolt™ 4) Type-C, 1x USB 3.2 Gen1 Type-A, 1x USB 3.2 Gen2 Type-A, 1x HDMI 2.1, 1x RJ45, 1x prise combo entrée micro/sortie casque et lecteur de carte SD Express - Clavier RVB par touche par SteelSeries - Couleur: Noir - Garantie: 1 an',
                'price' => 1499900,
                'is_in_home' => 0,
            ],
            [
                'category_name' => 'Ordinateur_Portable',
                'name' => 'PC Portable Gamer ASUS ROG Zephyrus M16 i7 12è Gén 16Go RTX 3050Ti',
                'slug' => 'pc-portable-gamer-asus-rog-zephyrus-m16-i7-12e-gen-16go-rtx-3050ti',
                'image' => '7a7a69ebe21830aa434c6c132bb97d8d112991ff.jpg',
                'subtitle' => 'PC Portable Gamer ASUS ROG Zephyrus M16 i7 12è Gén 16Go RTX 3050Ti',
                'description' => 'Écran 15.6 Full HD IPS, 165Hz - Processeur: Intel Core i7-12700H (up to 4,70 GHz Turbo max, 24 Mo de mémoire cache, 14-Cores) - Système d\'exploitation: Windows 11 Famille - Mémoire: 16 Go - Disque dur: 512 Go SSD - Carte graphique: NVIDIA GeForce RTX 3050Ti (4 Go de mémoire dédiée GDDR6), avec Wi-Fi, Bluetooth, 2x USB 3.2 Gen 2 Type-A, 1x USB 3.2 Gen 2 Type-C, 1x Thunderbolt™ 4, 1x HDMI 2.0b, 1xRJ45, 1 prise audio combinée 3,5 mm - Clavier chiclet rétroéclairé RGB - Couleur: Noir - Garantie: 2 ans',
                'price' => 589900,
                'is_in_home' => 1,
            ],
            [
                'category_name' => 'Ordinateur_de_Bureau',
                'name' => 'PC DE BUREAU GAMER DELL ALIENWARE AURORA R13 I7 12È GÉN 32GO RTX 3080',
                'slug' => 'pc-de-bureau-gamer-dell-alienware-aurora-r13-i7-12e-gen-32go-rtx-3080',
                'image' => '1dbc8570491bbf99a7c318e08bb6cc65ab23eb8f.jpg',
                'subtitle' => 'PC DE BUREAU GAMER DELL ALIENWARE AURORA R13 I7 12È GÉN 32GO RTX 3080',
                'description' => 'Processeur: Intel Core i7-12700KF (3,60 GHz up to 5,00 GHz Turbo max, 25 Mo de Mémoire Cache, 12-Cores) - Système d\'exploitation: Windows 11 - Mémoire RAM: 32 Go DDR5 - Disque Dur: 1To + 512Go SSD - Carte Graphique: NVIDIA GeForce RTX 3080 (10Go de mémoire dédiée GDDR6X) avec 5x USB 3.2 Gen 1, 4x USB 2.0, 2x USB 3.2 Gen 2 Type-C, 1x USB 3.2 Gen 2x2 Type-C, 1x RJ45, 1x HDMI 2.1, 3x DisplayPort 1.4, 1x port d\'entrée, 1x entrée audio/prise microphone, 1x prise casque - Couleur: Noir - Garantie: 1 an',
                'price' => 1299500,
                'is_in_home' => 0,
            ],
            [
                'category_name' => 'Ordinateur_de_Bureau',
                'name' => 'PC DE BUREAU GAMER MYTEK AMD RYZEN 5 8GO RTX 2060',
                'slug' => 'pc-de-bureau-gamer-mytek-amd-ryzen-5-8go-rtx-2060',
                'image' => 'c944a548ec5cd1ceec2213ea157e8c9d01cf3c90.jpg',
                'subtitle' => 'PC DE BUREAU GAMER MYTEK AMD RYZEN 5 8GO RTX 2060',
                'description' => 'Processeur: AMD Ryzen 5-5600X (3.7 GHz up to 4.6 GHz, L2: 3Mo/ L3: 32Mo Mémoire cache, Hexa-Core) - Système d\'exploitation: FreeDos - Mémoire RAM: 8Go DDR4  - Disque Dur: 256 Go SSD M.2 MP33 - Carte mère: B450M  BAZOOKA MAX - Carte graphique: Nvidia GeForce RTX 2060 (6Go de Mémoire Dédiée) - Boitier MB500 ARGB - Alimentation MWE 650W V2 80+ BRONZE - Garantie: 1 an',
                'price' => 279900,
                'is_in_home' => 0,
            ],
        ];
    
        foreach ($productsData as $data) {
            $categoryName = $data['category_name'];

            $category = $categoryRepository->findOneBy(['name' => $categoryName]); // Find the category by name
            $product = new Product();
            $product->setCategory($category);
            $product->setName($data['name']);
            $product->setSlug($data['slug']);
            $product->setImage($data['image']);
            $product->setSubtitle($data['subtitle']);
            $product->setDescription($data['description']);
            $product->setPrice($data['price']);
            $product->setIsInHome($data['is_in_home']);
            $manager->persist($product);
        }
        $manager->flush();

    }
    
}
