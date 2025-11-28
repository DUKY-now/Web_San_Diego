# Projet Web San Diego

Lien GitHub : [Web_San_Diego](https://github.com/DUKY-now/Web_San_Diego)

## Description

San Diego est un site communautaire autour de factions, de membres et de roleplay basé sur l'univers de Fallout.  
Le projet est développé avec Symfony et Doctrine pour la gestion des entités et de la base de données.

---

## ✅ Roadmap / To-Do List

- Ajouter une interface d'administration (EasyAdmin)
- Mettre en place un système d'authentification / rôles (membre, chef de faction, admin)
- Créer une FAQ dynamique et éditable depuis le back-office
- Création de ticket pour les utilisateurs (Si demande d'ajout, correction)
- Implémenter un système de notifications pour les événements / annonces
- Améliorer l'UX et le design (responsive + dashboard)
- traduire le site.

---

## 💡 Idées supplémentaires

- Historique des actions administratives (si changement d'info dans une faction)
- Gestion des règles / chartes de chaque faction
- Tableau de bord statistiques pour admins (mettre des infos pour la faq, membre de faction)
- Intégration d'un calendrier d'événements (saisonnier et ponctuel)

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

Historique des modifications (audit log).

🔐 2. Comptes & Sécurité

Inscription + connexion (Symfony Security).

Rôles :ROLE_ADMIN. Voir l'utilité de compte utilisateur.

Permissions selon les rôles.

🧩 3. Factions (fonctionnalités principales)

Charte / règles propres à chaque faction.

Page publique d’une faction (membres, description, règles).

Les grades

💬 4. Communication interne

Announcements par les chefs → Message d'annonce sur la page de faction.

🔔 5. Notifications

icone dans la navbar

❓ 6. FAQ Dynamique

FAQ classée par rubriques : Faction / Règlement / Civil / Support.

Possibilité de gérer la FAQ depuis l’admin.

Page publique FAQ avec catégories.

<!-- 👤 7. Profils Utilisateurs

Page profil membre :

pseudo

faction

grade

biographie

historique de participation

Possibilité d’ajouter un avatar (image upload).

Paramètres du compte. -->

section a voir plus tard

📅 8. Événements

Création d’événements (Saisonnier, ponctuel et autre).

Inscription des membres.

Historique des événements passés 

page d'index des evenements.


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

stats du serveur (discord en premier puis arma)

événements à venir.

📊 15. Analytics

Statistiques par faction. (nombre de joueurs)

📁 17. Idées techniques supplémentaires

Upload d’images (avatars, images de faction).

Système de bannissement.

Journal de administration.

Sauvegarde régulière de la base de données.