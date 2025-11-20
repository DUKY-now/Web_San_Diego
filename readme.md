# Projet Web San Diego

Lien GitHub : [Web_San_Diego](https://github.com/DUKY-now/Web_San_Diego)

## Description

San Diego est un site communautaire autour de factions et de membres.  
Le projet est développé avec Symfony et Doctrine pour la gestion des entités et de la base de données.

---

## ✅ Roadmap / To-Do List

- Proposer un Swagger API
- Ajouter une interface d'administration (EasyAdmin)
- Mettre en place un système d'authentification / rôles (membre, chef de faction, admin)
- Créer une FAQ dynamique et éditable depuis le back-office
- Ajouter un profil membre avec faction, statut et statistiques
- Implémenter un système de notifications pour les événements / annonces
- Ajouter un système de rang / grade pour les membres
- Gérer les événements / activités de faction
- Ajouter un système de récompenses / achievements
- Améliorer l'UX et le design (responsive + dashboard)
- Mettre en place des tests unitaires et fonctionnels
- Optimiser la sécurité (validation, CSRF, logs)
- Préparer une API REST / GraphQL pour les données de factions et membres
- Intégrer l’internationalisation (i18n)
- Ajouter des analytics / statistiques pour les factions et membres
- Optimiser le SEO (titres, meta, URLs propres)

---

## 💡 Idées supplémentaires

- Messagerie interne pour les factions
- Historique des actions administratives
- Gestion des règles / chartes de chaque faction
- Tableau de bord statistiques pour admins
- Intégration d'un calendrier d'événements
- Notifications par email
- Leaderboard / classement des factions et membres
- API documentation avec Swagger
- Optimisation des performances (cache, indexes DB)

---

## 📂 Organisation du projet

- `src/Entity` : entités Symfony / Doctrine  
- `src/Controller` : contrôleurs Symfony  
- `templates/` : fichiers Twig  
- `public/` : fichiers CSS, JS, images  
- `migrations/` : migrations Doctrine  
- `.env` : configuration de la base de données

---

## 🔧 Technologies utilisées

- PHP 8.x + Symfony 6.x  
- Doctrine ORM  
- Twig pour les templates  
- MySQL / MariaDB  
- Git / GitHub  

---

## 📝 Notes

- Certaines fonctionnalités sont encore à implémenter (voir Roadmap).  
- Le projet est évolutif et peut intégrer une API, un système de chat ou un back-office complet.



🛠️ 1. Back-office / Administration

Installer EasyAdminBundle.

Gérer les utilisateurs (membres), factions, candidatures.

Modifier/Supprimer factions depuis l’admin.

Ajouter une gestion des grades : Chef / Officier / Membre / Recrue.

Historique des modifications (audit log).

🔐 2. Comptes & Sécurité

Inscription + connexion (Symfony Security).

Rôles : ROLE_USER, ROLE_LEADER, ROLE_ADMIN.

Permissions selon les rôles.

Protection CSRF sur les formulaires.

Validation des formulaires (constraints Symfony).

🧩 3. Factions (fonctionnalités principales)

Candidature pour rejoindre une faction.

Validation par le chef de faction.

Charte / règles propres à chaque faction.

Page publique d’une faction (membres, description, règles).

Système de grades interne.

Système de points ou réputation.

💬 4. Communication interne

Chat interne de faction (simple version : messages enregistrés en BDD).

Messagerie privée entre membres.

Announcements par les chefs → notifications.

🔔 5. Notifications

Notifications internes sur ton site.

Notifications email (ex : “Vous avez été accepté dans la faction”).

Badge de notification sur la navbar.

❓ 6. FAQ Dynamique

FAQ classée par rubriques : Faction / Règlement / Civil / Support.

Possibilité de gérer la FAQ depuis l’admin.

Page publique FAQ avec catégories.

👤 7. Profils Utilisateurs

Page profil membre :

pseudo

faction

grade

biographie

historique de participation

Possibilité d’ajouter un avatar (image upload).

Paramètres du compte.

📅 8. Événements

Création d’événements (raids, réunions).

Inscription des membres.

Historique des événements passés 

🏆 9. Succès / Achievements

Succès individuels : recruteur, ancien, actif…

Succès de faction : nombre de membres, activité.

Page leaderboard.

🚀 10. Optimisation & Bonnes pratiques

Utiliser Symfony Messenger pour :

emails

notifications

tâches asynchrones

Mise en cache de pages importantes.

Index sur les colonnes fréquemment utilisées (faction_id, user_id).

Formulaires ultra propres avec Twig Components.

🌍 11. Internationalisation (i18n)

Activer Translation.

Prévoir au minimum FR / EN.

Sections traduisibles : règles, FAQ, interface.

🔌 12. API (optionnel mais très pro)

API REST / GraphQL pour les factions et membres.

Documentation via Swagger ou API Platform.

Utile si tu fais une application mobile plus tard.

🧪 13. Tests (qualité du code)

Tester la création de membre.

Tester l’appartenance faction (OneToMany / ManyToOne).

Tester les formulaires.

Automatiser avec GitHub Actions.

🎨 14. UI / UX / Design

Dashboard utilisateur + dashboard faction.

Graphiques (Recharts ou Chart.js).

Version mobile optimisée.

Page d’accueil avec :

stats du serveur

top factions

événements à venir.

📊 15. Analytics

Statistiques des membres.

Statistiques par faction.

Graphique activité hebdomadaire/mensuelle.


🔍 16. SEO

Titres dynamiques.

Meta descriptions.

Sitemap.xml.

URLs propres.

📁 17. Idées techniques supplémentaires

Upload d’images (avatars, images de faction).

Système de bannissement.

Journal de administration.

Mode sombre / Mode clair.

Sauvegarde régulière de la base de données.