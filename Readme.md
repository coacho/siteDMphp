# - TP PHP  UserManager -

## - liste des classe :

- Controller
  - UserController
    - login()
    - create(User user)
    - findAll()
    - findAll(id)
    - findEmail(email)
    - findPass(password)
    - update(User user)
    - delete(User user)

- Model
  -  Connection()
  -  User()
  -  UserManager
  
- View 
  - default
  - footer -->(vide)
  - header -->(vide)
  - home
  - register
  - unauthorized -->(vide)
  - login
  - userList
______

Le site ne fonctionne pas correctement, j'ai réussit çà faire la connexion à la base, mais la pluspart des  fonctionnalité du tp ne sont ne marchent pas.

Je n'ai pas compris comment récupérer les données depuis la base, mais j'arrive à en envoyer.
______
### Points Fonctionnel:
- Ajout d'un utilisateur à la base
  - j'ai fait génénérer un random int entre 0 et 99 pour le champs id des users dans la methode setId de la classe User, sinon l'id restait instancier à 0 pour chaque user ce qui créait une erreur.
_____
### Points Manquant/Inachevé:
  - doLogin
    - la connexion vers listUser se fait même si l'identifiant est incorrecte.
  - delete
    - je n'ai pas eu le temps pour essayer de faire fonctionner cette méthode
  - listUser
    - On accède à cette page après le login, mais elle ne fait rien
  - admin
    - pas de gestion admin/non admin
  - encryptage mot de passe
    - pas de gestion de l'encryptage
