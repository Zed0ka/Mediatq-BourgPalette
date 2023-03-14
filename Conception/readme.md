# **Projet Mediathèque Bourg Palette :**

### **Objectif :**
- Créer un outil de gestion de réservations de livres en bibliothèque.
- Centré utilisateur : faciliter le suivi des réservations et aider à la prévention des retards.

### **Fonctionnalité principale :**
1. Retirer du stock + remettre en stock => CR (UD pas obligatoires)
2. Réservation de livre
3. Stocker adresse mail + tel du user (pas de compte)
4. interface utilisateur

### **Secondaire :**
5. interface admin (Bien structurer la BDDr pour l'admin)
6. Gestion date : date retrait + date retour prévue + calcul retard
7. Notif date approchant : mail (php: mail, cf config Apache)
8. Comptes membres
9. récompenses ponctualité

### **Organisation de la conception :**
NOTE : CHAQUE POINT DOIT SE CONCLURE PAR UNE ENTREVUE CLIENT (a minima : retour écrit)
0. Creation github
1. Diagramme cas d'utilisation
2. Wireframe du site
3. Choix design visuel
4. Choix de la stack
5. Prototypage du 1. des fonctionnalités principales
6. Prototypage du 2. des fonctionnalités principales
7. Prototypage du 3. des fonctionnalités principales
8. Prototypage du 4. des fonctionnalités principales
9. Lien entre les prototypes
10. Production MCD MLD
11. Création de la BDD (ajout des entrées, lien API?)
12. Lien prototypes - BDD.

##### **Informations sur le diagramme Use Case :**
J'ai créé l'objet "réservation" en imaginant que cliquer sur un bouton près d'un livre disponible produise une page/popup.  
Cette page contient un formulaire qui demandera l'adresse mail et le numéro de téléphone de l'utilisateur.  
Cette page/popup affichera aussi la nécessité de la personne de se présenter à la mdtq pour récupérer son exemplaire.  
Une fois les infos renseignées, le nombre d'exemplaires du livre est réduit de un.  
Si le nombre d'exemplaires du livre passe à zéro, l'état du livre passe de "disponible" à "indisponible".  

##### **Aide :**
Créer table de réservation  
Lier id du livre + infos user (toujours pas de compte!)  
Stack : php: Fetch + fichier JSON (a créer avant lien API - ATTENTION ID)  

Obj journée : envoyer du json en php plutôt que du html

_Notes :_  
_etv = entrevue_
_Fmt = Formateur_
_Clt = Client_
_BDDr = Base De Données relationnelle_