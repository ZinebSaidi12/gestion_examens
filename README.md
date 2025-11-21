# 🧮 Application de Gestion des Examens Universitaires  
**Projet de Génie Logiciel Avancé**

---

## 🏫 Informations Générales

**Université Ibn Zohr – Faculté des Sciences d’Agadir**  
**Centre d’Excellence IT – Master d’Excellence en Ingénierie Logicielle**  
**Encadré par : Pr. Jaafar IDRAIS**  
**Réalisé par :**  
- SAIDI Zineb  
- ABOUNACER Aya  
- RAIS Hiba  
- EL OMARI Ali  
- BOUARFA Yahya  
- ELABASSI Yassine  
**Année universitaire : 2024–2025**

---

## 🧠 Présentation du Projet

Le projet **Application de Gestion des Examens** a été réalisé dans le cadre de l’atelier 01 du module **Génie Logiciel Avancé (GLA)**.  
Il vise à concevoir et implémenter une **plateforme web** permettant de gérer efficacement les examens universitaires à travers :  
- la **saisie et la gestion des notes**,  
- la **consultation des résultats par les étudiants**,  
- la **soumission de réclamations**,  
- et la **mise à jour du profil utilisateur**.

Cette application repose sur une architecture bien structurée et une base de données relationnelle, garantissant la cohérence, la traçabilité et la sécurité des informations.

---

## 🎯 Objectifs du Projet

- 🔐 Authentification sécurisée des utilisateurs (étudiants, enseignants, administrateurs)  
- 🧾 Consultation et gestion des notes d’examens  
- 🗂️ Gestion des profils étudiants et enseignants  
- 💬 Système de réclamations pour les étudiants  
- 📊 Tableau de bord interactif et ergonomique  
- ⚙️ Collaboration via **GitHub** : commits, branches, pull requests, et versions stables  

---

## ⚙️ Technologies Utilisées

| Composant | Technologie | Description |
|------------|-------------|-------------|
| 💻 **Backend** | Spring Boot / Java EE | Gestion des fonctionnalités métier |
| 🌐 **Frontend** | HTML5, CSS3, JSP, Bootstrap | Interface utilisateur responsive |
| 🗄️ **Base de données** | MySQL | Stockage des données académiques |
| 🔐 **Sécurité** | Spring Security | Authentification et rôles |
| 🧩 **Outils Collaboratifs** | Git & GitHub | Gestion de version et intégration continue |

---

## 🧱 Conception du Système

### 🔹 Diagramme de Cas d’Utilisation
Le diagramme de cas d’utilisation présente les interactions entre les **étudiants**, **enseignants**, **administrateurs** et le système.  
Les utilisateurs peuvent s’inscrire, se connecter, consulter ou modifier leurs informations, gérer les notes et effectuer des réclamations.  
<img width="733" height="638" alt="image" src="https://github.com/user-attachments/assets/551ceb26-312a-40f1-b811-26efc412dd00" />


---

### 🔹 Diagramme de Classes
Le diagramme de classes définit les entités principales :  
`User`, `Compte`, `Role`, `Matiere`, `Examen`, `Note`, et leurs relations.  
Chaque entité est reliée selon le rôle joué dans le processus de gestion des examens.  

<img width="913" height="558" alt="image" src="https://github.com/user-attachments/assets/c17e6ee0-0d79-4e29-b55a-fd527c7f1216" />


---

### 🔹 Schéma de la Base de Données
La base de données est composée des tables :  
- **users** : informations personnelles  
- **comptes** : identifiants et sécurité  
- **roles** : gestion des permissions  
- **matieres** : matières enseignées  
- **examens** : détails des examens  
- **notes** : résultats des étudiants  

<img width="880" height="506" alt="image" src="https://github.com/user-attachments/assets/d3f5c966-62a3-4649-bd59-8b1e2855fa04" />


---

## 🧭 Gestion du Code Source – GitHub

Le développement collaboratif du projet a été organisé autour de **GitHub** :  
- Utilisation de **branches dédiées** pour chaque fonctionnalité  
- **Pull Requests** pour validation des changements  
- **Tags** pour versions stables (v1.0.0, v1.1.0, v1.2.0)

### 🔸 Versions stables :
| Version | Date | Description |
|----------|------|-------------|
| **1.0.0** | 31 Déc. 2024 | Login, base de données et dashboard initial |
| **1.1.0** | 11 Jan. 2025 | Ajout de la consultation des notes et gestion du profil |
| **1.2.0** | 14 Jan. 2025 | Améliorations mineures et correction de bugs |



---

## 💻 Interfaces Réalisées

### 🧾 Page d’Inscription (Register)
Interface intuitive permettant la création de compte avec rôles (étudiant, enseignant, admin).  
<img width="1021" height="505" alt="image" src="https://github.com/user-attachments/assets/af6b3aa1-eec1-4625-b406-244312aeb470" />


### 🔐 Page de Connexion (Login)
Interface minimaliste permettant l’accès sécurisé au compte utilisateur.  
<img width="1000" height="443" alt="image" src="https://github.com/user-attachments/assets/26533ce7-0a13-4c7b-b800-b678707e683e" />


### 🧭 Tableau de Bord Étudiant
Affichage des informations personnelles, des notes et accès rapide aux modules.  
<img width="1097" height="508" alt="image" src="https://github.com/user-attachments/assets/10d8291c-6564-483b-b44e-06113bff8831" />


### 📊 Consultation des Notes
Affichage des résultats détaillés et moyenne générale.  
<img width="1099" height="631" alt="image" src="https://github.com/user-attachments/assets/4206e39c-bc58-4830-8ecc-3a022e423ad6" />


### 🧍‍♂️ Profil Utilisateur
Affichage et mise à jour des informations personnelles.  
<img width="1077" height="501" alt="image" src="https://github.com/user-attachments/assets/2d647a4d-e8fe-47b8-aff9-62e62677c942" />


---

## 🧠 Points Techniques Réalisés

- Architecture MVC clairement définie  
- Authentification & rôles via Spring Security  
- Gestion dynamique des notes et examens  
- Collaboration via branches GitHub et Pull Requests  
- Base de données relationnelle optimisée  
- Interfaces responsive (HTML, JSP, Bootstrap)  

---

## 🧭 Perspectives d’Amélioration

- 📱 Version mobile étudiante  
- 🔔 Système de notification des résultats  
- 📈 Tableau de bord enseignant avec statistiques  
- 🧾 Export PDF / Excel des relevés de notes  
- ☁️ Hébergement cloud (AWS / Render / Azure)  

---

## 🎓 Contexte Académique

Projet réalisé dans le cadre du module  
**Génie Logiciel Avancé et Approches Agiles**  
du **Master d’Excellence en Ingénierie Logicielle** à  
**l’Université Ibn Zohr – Centre d’Excellence IT (Agadir)**.  

Application de gestion des examens avec des fonctionnalités de saisie de notes, réclamations et consultation des résultats.
