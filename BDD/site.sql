-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 13 jan. 2019 à 13:33
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site`
--

-- --------------------------------------------------------

--
-- Structure de la table `nbnewspage`
--

DROP TABLE IF EXISTS `nbnewspage`;
CREATE TABLE IF NOT EXISTS `nbnewspage` (
  `nbNews` int(100) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `nbnewspage`
--

INSERT INTO `nbnewspage` (`nbNews`) VALUES
(20);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `GUID` varchar(191) NOT NULL,
  `TITRE` varchar(200) NOT NULL,
  `DESCRIPTION` varchar(500) NOT NULL,
  `LIEN` varchar(1000) NOT NULL,
  `DATE_PUBLICATION` datetime NOT NULL,
  `CATEGORIE` varchar(30) NOT NULL,
  `source` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`GUID`),
  KEY `NewsSource` (`source`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`GUID`, `TITRE`, `DESCRIPTION`, `LIEN`, `DATE_PUBLICATION`, `CATEGORIE`, `source`) VALUES
('3452349 at http://evene.lefigaro.fr', 'Cinq choses à savoir sur l’expo Velázquez', '&nbsp;De longues négociations à l’internationalLe commissaire de l’exposition Guillaume Kientz lance les demandes de prêt pour l’exposition dès le printemps 2012, quasiment trois ans avant le début de l\'événement. Les derniers contrats ont été signés au début de l’année. De longues tractations qui ont conduit le spécialiste aux quatre coins du monde.Un prêt exceptionnel du musée du PradoC’est le &nbsp;musée espagnol qui conserve le plus grand nombre de toiles du maître. Il a pour règle de ne jam', '', '2015-03-19 14:54:43', '', 'Le Figaro'),
('3455784 at http://evene.lefigaro.fr', 'Les 5 musées les plus suivis sur Twitter', '1.	@MuseeLouvre – 289 220 followers Le Louvre&nbsp;est le grand gagnant en termes de popularité sur Twitter. Et cela n’allait pas de soi : inscrit en 2009, il était distancé de plus de 28.000 personnes par le Centre Pompidou en août 2013, ne rassemblant que 53.462 followers. Depuis, le musée le plus fréquenté du monde a redoublé d’efforts pour rattraper son retard face à cette véritable révolution numérique. Le ton de ses publications est moins rigide et le musée dévoile des anecdotes qui donnen', '', '2015-03-23 17:00:32', '', 'Le Figaro'),
('3455825 at http://evene.lefigaro.fr', 'Centre Pompidou à Malaga : les musées se délocalisent', '&nbsp;Centre Pompidou Malaga Cette nouvelle annexe temporaire implantée dans la ville natale de Pablo Picasso en Andalousie est prévue pour une durée de cinq ans. Considérée comme un laboratoire, cette antenne a pour but de développer un concept pérenne. L’édifice mis à disposition par la mairie de Malaga accueillera une sélection d\'œuvres provenant des collections du célèbre musée parisien sous forme de parcours chronologique et renouvelée tous les deux ans, ainsi que deux à trois expositions t', '', '2015-03-24 10:50:46', '', 'Le Figaro'),
('3459944 at http://evene.lefigaro.fr', 'Le 1er avril, à chacun son poisson', 'La petite histoireEn 1564, à la demande du roi Charles IX, on fixa le début de l\'année civile non plus au 1er avril mais au 1er janvier, qui devint Jour de l\'An. Les étrennes furent aussi avancées mais quelques nostalgiques continuèrent à faire des petits cadeaux et des farces le 1er avril. Aujourd\'hui, la coutume veut que l\'on accroche un poisson au dos des personnes distraites...Et nous nous en tiendrons là, préférant de loin une approche plus culturelle à cette journée bon enfant. Même si tou', '', '2015-03-27 15:00:31', '', 'Le Figaro'),
('3472683 at http://evene.lefigaro.fr', 'Entre tradition et innovation, six expos des JEMA à voir', 'Mutations Neuf œuvres historiques issues des collections du musée des Arts Décoratifs sont confrontées à neuf réalisations inspirées de celles-ci, conçues par un collectif d’artisans et d’artistes appartenant à divers corps de métier. La première pièce est un hanap (coupe à boire au Moyen-âge) datant de 1896 créée par Lucien Falize pour l’exposition universelle de 1900. Cet objet phare de l’exposition a la particularité, comme l’avait souhaité l’auteur, d’utiliser huit matières essentielles : bo', '', '2015-03-26 12:48:27', '', 'Le Figaro'),
('3472686 at http://evene.lefigaro.fr', 'Cinq bibliothèques ouvertes le dimanche à Paris', '&nbsp;BPI (Bibliothèque Publique d’Information)La bibliothèque publique d’information est ouverte à tout public sans formalités.&nbsp; Les places sont rapidement prises le week-end et une queue se met en place tout au long de la journée. Une webcam filme la file d\'attente en direct et une application, Affluences, permet de connaître l\'attente estimée en direct. On trouve sur trois niveaux près de 430 000&nbsp; de documents sur tous supports et dans tous les domaines. Trois thématiques sont parti', '', '2015-03-26 14:12:50', '', 'Le Figaro'),
('3472696 at http://evene.lefigaro.fr', 'Les grands travaux des Présidents', '1. Le Centre PompidouGeorge Pompidou est Président depuis un an à peine lorsqu’il décide de relancer un &nbsp;grand projet culturel auquel de Gaulle pensait depuis la Libération. Le plateau Beaubourg est choisi pour accueillir une nouvelle bibliothèque, le Musée d’art moderne qui dépérissait alors dans une aile du Palais de Tokyo et le Centre d’art contemporain installé rue Berryer. Un an plus tard, en 1970, on ajoute au projet un centre de création musicale. 681 architectes seront candidats ; P', '', '2015-03-26 15:53:15', '', 'Le Figaro'),
('3472894 at http://evene.lefigaro.fr', 'Fast and Furious 8 : cinq films de courses poursuites', '&nbsp;Taxi (1998)Produit par &nbsp;Luc Besson, Taxi a créé l’événement lors de sa sortie en salle. Grâce à sa Peugeot 406 blanche customisée, Daniel (Samy Naceri) se fait plaisir en conduisant en ville comme un pilote de F1. Les courses poursuites dans Marseille sont vite légendaires et le film devient une référence française dans ce genre de longs métrages.&nbsp; Trois autres volets complètent la saga.&nbsp;60 secondes chrono (2000)Randall « Menphis » Raines&nbsp; (&nbsp;Nicolas Cage) ancien br', '', '2015-03-27 18:07:28', '', 'Le Figaro'),
('3473034 at http://evene.lefigaro.fr', '5 stars habillées par Jean Paul Gaultier', 'Farida KhelfaC’est une longue et belle histoire qui unit le &nbsp;mannequin d’origine algérienne à Jean-Paul Gaultier. Ils se rencontrent en 1979, au Palace, club mythique des années 80. Sous le charme, il est le premier à la faire défiler et ne tarira jamais d’éloges sur elle : « Farida avait une beauté incroyable, ce nez, cette allure, ces cheveux. Ce n’était pas seulement ces traits magnifiques, mais cette façon de se tenir, très altière, une noblesse naturelle sans rien de prétentieux ». En ', '', '2015-03-30 13:53:09', '', 'Le Figaro'),
('3473059 at http://evene.lefigaro.fr', 'Harry Potter dans tous ses états', '1.	Les livresL’aventure Harry Potter commence dans un train. A bord, Joanne Rowling, une trentenaire écossaise, mère de famille célibataire. Elle a soudain l’idée d’écrire les aventures d’un jeune sorcier. La maison d’édition Bloomsbury accepte de publier le premier tome et verse à la romancière un acompte de 2.500 livres. Un bon investissement puisque le livre se vend à 120 millions d’exemplaires ! Suivront six autres tomes dont le succès ne fera que croître. Au total, la saga s’est vendue à pl', '', '2015-03-30 14:45:50', '', 'Le Figaro'),
('3473077 at http://evene.lefigaro.fr', '5 facettes de Jamel Debbouze', '1.	L’humoristeSon premier spectacle, C’est tout neuf, date de 1995. Depuis, Jamel a eu le temps de nous faire beaucoup rire. Notamment dans la série H, aux côtés d’&nbsp;Eric et Ramzy, de 1998 à 2002, puis dans le film Le ciel, les oiseaux… et ta mère !&nbsp;de &nbsp;Djamel Bensalah en 1999. Suivent de nombreux one-man shows, comme Tout sur Jamel&nbsp;en 2011 qui se joue à guichets fermés. Il prête également sa voix à de nombreux personnages de films d’animation, souvent très drôles, comme le lé', '', '2015-03-30 15:54:08', '', 'Le Figaro'),
('3488647 at http://evene.lefigaro.fr', 'Un dimanche de Pâques tout chocolat', 'Connaissez-vous&nbsp;Choco-Story, le Musée Gourmand du Chocolat? Non? Alors pourquoi ne pas profiter de ce week-end prolongé pour remédier à cette injustice. Cet établissement privé, inauguré à Paris en 2010, est le troisième de la série a ouvrir après Bruges en Belgique et&nbsp;Prague en République Tchèque, à l\'initiative d\'une famille belge de collectionneurs passionnés... de chocolat.Petits et grands sont les bienvenus dans ce lieu magique ouvert tous les jours tout au long de l\'année pour le', '', '2015-04-03 12:23:04', '', 'Le Figaro'),
('3488654 at http://evene.lefigaro.fr', 'La Géode, 30 ans de documentaires à couper le souffle', 'Rolling Stones at the MaxLe 28 octobre 1991, Mick Jagger en personne, vient présenter à la Géode le premier film concert filmé en Imax, une première européenne. En s’appuyant sur l’album Steel Wheels, Il suit les performances des Stones dans leur tournée à Londres, Turin et Berlin. Les passionnés des Rolling Stones les retrouvent au top de leur forme, électrisant le public avec 15 tubes tels que Satisfaction, Ruby Tuesday et Brown Sugar.EverestSorti en 1999, le film Everest de David Breashears, ', '', '2015-04-02 16:51:43', '', 'Le Figaro'),
('3488657 at http://evene.lefigaro.fr', 'L\'art contemporain en cinq adresses à petit prix', '1.	Le Palais de TokyoC’est l’institution d’art contemporain la plus branchée du moment. Créé en 2002, le &nbsp;Palais de Tokyo est devenu un centre à la programmation ambitieuse et à la superficie (22 000m²) lui permettant toutes les audaces. Laissant une quasi carte blanche aux artistes invités, il n’en oublie pas pour autant la dimension pédagogique de son travail.L’adresse : 13 avenue du Président Wilson, 75016Les horaires : de midi à minuit tous les jours sauf le mardi Les prix : 10€ (plein ', '', '2015-04-02 17:03:04', '', 'Le Figaro'),
('3488787 at http://evene.lefigaro.fr', '5 arrondissements parisiens où admirer du street art', '1.	Le XXeEpicentre du street art s’il en est, le XXème arrondissement regorge de petites merveilles. Commencez par la rue Dénoyez dont aucune façade n’a été oubliée. Elle est d’ailleurs menacée de destruction : foncez avant qu’il n’y ait plus rien à voir ! Continuez avec le parc de Belleville. Vous trouverez des œuvres de l’artiste &nbsp;Seth sur les colonnes du belvédère et des fresques de l’association Art Azoï un peu partout ailleurs. Descendez enfin jusqu’à la rue Louis Delgré, où les murs d', '', '2015-04-03 15:34:37', '', 'Le Figaro'),
('3496895 at http://evene.lefigaro.fr', 'Lastournelle, Thaïs, Villars…les grottes touristiques à visiter ce week-end', 'Pour les adeptes de sport ou d’émotions fortesVous pouvez descendre en rappel sur 50m dans la grotte d’Orgnac, site de l’Aven, pour des randonnées souterraines. Au gouffre de Proumeyssac dans le Périgord, vous pouvez admirer et frémir devant les funambules de l’extrême qui circulent sur une slackline (sangle souple). Cette expérience est aussi possible avec \"La grande traversée lumineuse\" de la cathédrale souterraine de la grotte&nbsp;des Demoiselles à Saint Bauzille de Putois dans le Languedoc.', '', '2015-04-09 11:20:29', '', 'Le Figaro'),
('3505308 at http://evene.lefigaro.fr', 'Cinq Afro-américains sous les feux de la rampe', '1.	Joséphine BakerCe 12 avril 2015, cela fait 40 ans que Joséphine Baker nous a quitté. La meneuse de revue, chanteuse et danseuse est souvent considérée comme la première star noire. En 1925, armée de son talent et de son pagne de bananes, elle hypnotise le public du Théâtre des Champs-Elysées en dansant sur un rythme charleston dans la Revue nègre. Si de nombreux spectateurs dénoncent un spectacle stéréotypé, il permet à Joséphine de devenir l’égérie des artistes cubistes et de diffuser la mus', '', '2015-04-09 16:04:59', '', 'Le Figaro'),
('3505865 at http://evene.lefigaro.fr', 'Dix idées de sorties hors des sentiers battus', 'Un cimetière insolitePremier cimetière pour animaux domestiques au monde, inscrit à l’Inventaire des monuments historiques, il accueille depuis 1899, les dépouilles mortelles d’animaux de compagnie anonymes ou célèbres, comme Rintintin, héros d’une série télévisée. En bord de Seine, il fait bon déambuler au milieu des sépultures richement sculptées ou simplement fleuries, témoignages de l’affection des maîtres envers leurs compagnons.Cimetière des Chiens d’Asnières, 4, pont de Clichy 92600 Asniè', '', '2015-04-14 15:37:40', '', 'Le Figaro'),
('3512707 at http://evene.lefigaro.fr', 'Les meilleures séries littéraires pour adolescents', '&nbsp;L’Expérience Noa Torson – tome 1La jeune hackeuse Noa se retrouve à l’hôpital sans savoir pourquoi. Échappant à des tueurs elle va rapidement être embarquée dans une aventure qui la dépasse. Cette série a tous les ingrédients pour fonctionner : action haletante, intrigues subtiles, rebondissements saisissants. Pris dans une course époustouflante, on suit l’histoire à cent à l’heure. Le discours politisé sur la recherche médicale donne de la hauteur&nbsp; à l’ouvrage et incite les adolescen', '', '2015-04-15 14:22:27', '', 'Le Figaro'),
('3522304 at http://evene.lefigaro.fr', 'Cinq musées parisiens où flâner au printemps', '1. La Fondation Louis VuittonCe &nbsp;voilier de verre inauguré le 20 octobre 2014 se situe à l’orée du Bois de Boulogne : un lieu idéal pour allier art et promenade&nbsp;! Le billet d’entrée de la Fondation donne accès au Jardin d’Acclimatation. Ainsi, aux beaux jours, vous pourrez profiter des chefs-d’œuvre de l’exposition «&nbsp;Les Clefs d’une Passion&nbsp;» avant de déambuler dans le parc. Un petit creux&nbsp;? Le Franck, le restaurant de la Fondation, propose des pâtisseries et des glaces.', '', '2015-04-16 10:53:09', '', 'Le Figaro'),
('3522317 at http://evene.lefigaro.fr', 'L\'Hermione sur les traces de La Fayette', 'Là où naquit le célèbre marquis le 6 septembre 1757La demeure natale de Gilbert du Motier de La Fayette, une maison forte du XIVe siècle à l’origine, est  située dans le petit village de Chavaniac en Haute-Loire. Maintes fois remanié, le château, classé  à l’Inventaire Supplémentaire des Monuments Historiques en 1989, est la propriété du département de Haute-Loire depuis 2009. Il abrite aujourd’hui le musée du général. Rouvert depuis le 28 mars 2015 après une campagne de restauration, la fortere', '', '2015-04-17 08:43:04', '', 'Le Figaro'),
('3522492 at http://evene.lefigaro.fr', 'Livres audio : dix acteurs à écouter lire', 'Pierre Arditi&nbsp;confiait au Point en 2014 son amour pour la lecture, publique ou personnelle, indiquant à l\'occasion qu\'elle est la base du métier d\'acteur. Il lit Philippe Delerm avec jubilation mettant&nbsp;tout son talent et sa sa voie rocailleuse à lire un texte précis et rythmé,&nbsp;avec lequel il se sent en résonnace,&nbsp;Je vais passer pour un vieux con. On l\'imagine, un petit sourire en coin et l\'oeil plissé.&nbsp;(Audiolib, 1h40, 17€)&nbsp;Edouard Baer,&nbsp;lecteur assidu de Modia', '', '2015-04-19 11:56:37', '', 'Le Figaro'),
('3522506 at http://evene.lefigaro.fr', '10 idées de sorties pour les vacances de printemps', '&nbsp;Les expos&nbsp;Aardman, l\'art qui prend formeTous les héros qui ont fait le succès des studios britanniques ont pris leur quartier au musée Art Ludique. Wallace et Gromit, les poulets de Chicken Run évoluent au milieu de cinquante décors reconstitués pour l’occasion. Les visiteurs pourront également admirer le travail des graphistes à travers plus de 350 dessins, aquarelles et story boards.Jusqu’au 30 août 2015. Musée Art ludique 34 quai d\'Austerlitz, 75013 Paris. Du lundi au vendredi de 1', '', '2015-04-17 14:45:40', '', 'Le Figaro'),
('3522748 at http://evene.lefigaro.fr', 'Gauguin, Quasimodo, Zorba...Anthony Quinn en cinq rôles', 'Eufemio,&nbsp;Viva Zapata!&nbsp;(1952)Après ses débuts au théatre auprès de Mae West&nbsp;et au cinéma, figurant \"typé\" dans les westerns, tour à tour brute basanée, méchant Indien, aventurier douteux, saltimbanque roublard,&nbsp;Kazan offre à Anthony Quinn son premier beau rôle, en le coiffant du chapeau du chantre de la révolution mexicaine pour Viva Zapata!. Son interprétation d\'Eufemio, le frère d\'Emiliano Zapata, un des principaux acteurs de la révolution mexicaine, lui vaut sa première réc', '', '2015-04-20 13:27:30', '', 'Le Figaro'),
('3522851 at http://evene.lefigaro.fr', 'Les 10 superwomen du Printemps de Bourges 2015', 'Juliette Gréco L’&nbsp;interprète mythique de Jolie Môme, La Javanaise et Jolie Môme, muse de Saint-Germain-des-Prés et de Sartre, Vian ou Gainsbourg, a annoncé son retrait de la scène. Question «&nbsp;de courtoisie, de dignité&nbsp;», a-t-elle expliqué au Parisien. Sa dernière tournée débute à Bourges, où elle n’était pas venue depuis 2007. C’est au Palais d’Auron qu’elle se produit ce vendredi 24 avril. Gageons que l’émotion sera au rendez-vous pour les adieux de la reine de la chanson françai', '', '2015-04-20 16:05:32', '', 'Le Figaro'),
('https://www.lemonde.fr/tiny/5406983/', 'Un député de la majorité porte plainte à cause de tags « racistes et homophobes » sur sa permanence', 'En l’espace de deux mois de mobilisation contre la politique gouvernementale, « une cinquantaine » de députés ont été la cible d’intimidations, selon la présidence du groupe LRM à l’Assemblée.', 'https://www.lemonde.fr/politique/article/2019/01/09/retour-sur-les-actes-d-intimidations-visant-les-deputes-lrm_5406983_823448.html?xtor=RSS-3208', '2019-01-09 19:44:41', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407119/', 'Handball : l’abondance de gauchers inverse le jeu de l’équipe de France', 'Après une longue période de pénurie, les Bleus s’appuient aujourd’hui sur un vivier d’arrières droit gauchers polyvalents.', 'https://www.lemonde.fr/sport/article/2019/01/10/handball-l-abondance-de-gauchers-inverse-le-jeu-de-l-equipe-de-france_5407119_3242.html?xtor=RSS-3208', '2019-01-10 08:11:17', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407633/', 'Enquêtes, climat, budget : la préparation mouvementée des JO de Tokyo 2020', 'Si les travaux avancent à un bon rythme à dix-huit mois des Jeux, les organisateurs sont confrontés à la crainte des fortes chaleurs et à l’augmentation du budget initial.', 'https://www.lemonde.fr/sport/article/2019/01/11/enquetes-climat-budget-la-preparation-mouvementee-des-jo-de-tokyo-2020_5407633_3242.html?xtor=RSS-3208', '2019-01-11 09:01:56', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407691/', 'Pollution de l’air : une réglementation inadaptée pour protéger la santé', 'Les particules fines (PM2,5), pourtant considérées comme les plus dangereuses, ne sont toujours pas prises en compte pour les alertes pollution.', 'https://www.lemonde.fr/planete/article/2019/01/11/pollution-de-l-air-une-reglementation-inadaptee-face-au-danger_5407691_3244.html?xtor=RSS-3208', '2019-01-11 11:00:16', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407696/', 'Ségolène Royal renonce à mener une liste aux élections européennes', 'L’ancienne ministre a annoncé sa décision vendredi sur France Inter. Elle voulait créer une liste de rassemblement, mais les discussions ont échoué.', 'https://www.lemonde.fr/politique/article/2019/01/11/segolene-royal-renonce-a-mener-une-liste-aux-elections-europeennes_5407696_823448.html?xtor=RSS-3208', '2019-01-11 11:13:09', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407709/', 'Les « foulards rouges » organisent la riposte face aux « gilets jaunes »', 'Opposés à la violence de certains manifestants, ils veulent défiler le 27 janvier à Paris.', 'https://www.lemonde.fr/politique/article/2019/01/11/les-foulards-rouges-organisent-la-riposte-face-aux-gilets-jaunes_5407709_823448.html?xtor=RSS-3208', '2019-01-11 11:28:20', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407711/', 'Violences scolaires : Jean-Michel Blanquer n’exclut pas les sanctions financières', 'La forme que pourraient prendre ces sanctions à l’encontre des parents d’élèves violents ferait débat au sein même du groupe de travail en charge du dossier.', 'https://www.lemonde.fr/education/article/2019/01/11/violences-scolaires-jean-michel-blanquer-n-exclut-pas-les-sanctions-financieres_5407711_1473685.html?xtor=RSS-3208', '2019-01-11 11:28:52', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407733/', 'Action Logement débloque 9 milliards d’euros en faveur des plus modestes', 'Ce « plan d’investissement massif » pour la période 2019-2022 est destiné en priorité à aider les locataires et propriétaires aux moyens limités à rénover leur habitat.', 'https://www.lemonde.fr/economie/article/2019/01/11/action-logement-debloque-9-milliards-d-euros-en-faveur-des-plus-modestes_5407733_3234.html?xtor=RSS-3208', '2019-01-11 11:45:26', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407739/', 'Barbarin : un procès exemplaire par sa solennité et son écoute', 'Pour la première fois, la hiérarchie de l’Eglise a été confrontée à des victimes d’actes pédophiles.', 'https://www.lemonde.fr/police-justice/article/2019/01/11/barbarin-un-proces-exemplaire-par-sa-solennite-et-son-ecoute_5407739_1653578.html?xtor=RSS-3208', '2019-01-11 11:48:58', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407742/', 'L’e-santé française s’expose au CES de Las Vegas', 'Les progrès de la technologie permettent à des pépites tricolores de présenter des solutions innovantes de prévention ou de suivi de certaines pathologies.', 'https://www.lemonde.fr/economie/article/2019/01/11/l-e-sante-francaise-s-expose-au-ces-de-las-vegas_5407742_3234.html?xtor=RSS-3208', '2019-01-11 11:49:24', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407749/', 'L’Etat va créer 1 200 places de mise à l’abri pour les migrants à Paris', 'Selon la préfecture d’Ile-de-France, la région a connu « une augmentation de 45 % du nombre de demandeurs d’asile » en 2018, ce qui a « saturé les centres d’hébergement ».', 'https://www.lemonde.fr/societe/article/2019/01/11/l-etat-va-creer-1-200-places-de-mise-a-l-abri-pour-les-migrants-a-paris_5407749_3224.html?xtor=RSS-3208', '2019-01-11 11:56:27', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407815/', 'Climat : deux millions de signataires appuient le recours contre l’Etat', 'Le seuil de deux millions a été franchi jeudi 10 janvier, selon les quatre ONG portant cet appel. Un résultat inégalé en France pour une pétition en ligne.', 'https://www.lemonde.fr/climat/article/2019/01/11/climat-deux-millions-de-signataires-appuient-le-recours-contre-l-etat_5407815_1652612.html?xtor=RSS-3208', '2019-01-11 13:55:01', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407882/', 'Macron n’ira pas à Davos mais réunira des patrons à Versailles', 'Cette année, le président ne se rendra pas au Forum économique mondial « en raison d’un agenda chargé », a fait savoir l’Elysée.', 'https://www.lemonde.fr/politique/article/2019/01/11/macron-n-ira-pas-a-davos-mais-reunira-des-patrons-a-versailles_5407882_823448.html?xtor=RSS-3208', '2019-01-11 15:15:00', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407888/', 'La libération conditionnelle de Jean-Claude Romand soumise à une nouvelle audience', 'La décision concernant la demande de libération du faux médecin, qui a tué son épouse, ses deux enfants et ses parents, est reportée au 31 janvier.', 'https://www.lemonde.fr/police-justice/article/2019/01/11/la-liberation-conditionnelle-de-jean-claude-romand-soumise-a-une-nouvelle-audience_5407888_1653578.html?xtor=RSS-3208', '2019-01-11 15:21:11', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407902/', 'Présidentielle en RDC : Martin Fayulu va saisir la Cour constitutionnelle', 'Le candidat revendique la victoire à l’élection du 30 décembre, alors que les résultats provisoires donnent Félix Tshisekedi gagnant.', 'https://www.lemonde.fr/afrique/article/2019/01/11/presidentielle-en-rdc-martin-fayulu-va-saisir-la-cour-constitutionnelle_5407902_3212.html?xtor=RSS-3208', '2019-01-11 15:49:41', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407920/', 'Le parquet requiert le renvoi du couple Fillon en correctionnelle', 'Si, comme c’est probable, le juge Serge Tournaire suit les réquisitions du parquet, l’affaire Fillon trouvera son épilogue au tribunal. Le procès pourrait avoir lieu avant la fin de l’année 2019.', 'https://www.lemonde.fr/politique/article/2019/01/11/le-parquet-requiert-le-renvoi-du-couple-fillon-en-correctionnelle_5407920_823448.html?xtor=RSS-3208', '2019-01-11 16:26:26', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407929/', 'Quatre corps exhumés dans l’affaire de l’empoisonnement de patients à Besançon', 'Ces autopsies visent à mettre au jour les liens éventuels entre leur décès et l’anesthésiste soupçonné d’empoisonnement avec préméditation sur sept personnes.', 'https://www.lemonde.fr/police-justice/article/2019/01/11/quatre-corps-exhumes-dans-l-affaire-de-l-empoisonnement-de-patients-a-besancon_5407929_1653578.html?xtor=RSS-3208', '2019-01-11 16:54:19', '', 'Le Monde Une'),
('https://www.lemonde.fr/tiny/5407947/', 'Le budget de la région Auvergne - Rhône-Alpes, présidée par Wauquiez, annulé une nouvelle fois', 'Saisie par les quatre groupes d’opposition de gauche à l’assemblée régionale, la juridiction estime que « le droit d’amendement n’a pas été respecté » par l’exécutif lors de l’examen du budget 2017.', 'https://www.lemonde.fr/politique/article/2019/01/11/le-budget-de-la-region-auvergne-rhone-alpes-presidee-par-wauquiez-annule-une-nouvelle-fois_5407947_823448.html?xtor=RSS-3208', '2019-01-11 17:12:10', '', 'Le Monde Une');

-- --------------------------------------------------------

--
-- Structure de la table `rss`
--

DROP TABLE IF EXISTS `rss`;
CREATE TABLE IF NOT EXISTS `rss` (
  `nom` varchar(190) NOT NULL,
  `lien` varchar(191) NOT NULL,
  PRIMARY KEY (`lien`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rss`
--

INSERT INTO `rss` (`nom`, `lien`) VALUES
('Le Figaro', 'http://evene.lefigaro.fr/rss/a_la_une.xml'),
('Le Monde Une', 'https://www.lemonde.fr/rss/une.xml');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `password` varchar(230) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `isAdmin`) VALUES
(1, 'romondiere', 'romondiere', 1),
(2, 'thfague', '$2y$10$34OjW5jgnK3JVwKD6nlmu./.rSZ0IU6jZViwf1cCCsLk4aNXtazaW', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `NewsSource` FOREIGN KEY (`source`) REFERENCES `rss` (`nom`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
