TO RUN THE PROJECT: php -S localhost:port -t your_folder/

Lux: page panier (ajout de produit, suppression de produit, modification de quantité, calcul du prix total) 

- admin panel (modification du compte utilisateur..)
- search bar
- historique des commandes (affichage des commandes, possibilité de télécharger les scripts)
- ✔paiement (paypal, cb, crypto ?)
- filters
- wishlist
- ✔modifier textes des pages
- ✔profil utilisateur (modification des informations, modification du mot de passe, modification de l'email)
- notation de produit/utilisateur

OPTIONS:
- verifications de l'email (envoi d'un mail de confirmation)
- verifications du mot de passe (8 caractères, 1 majuscule, 1 chiffre)
- ✔cookie data value regnerate timestamp
- coupon de réduction
- points de fidélité


Pour les notifications:
----> insert into notification values (id_user,context,description,date)
les contexts:
    Last order
    Audit
    Message from the staff
    Customer feedback


Pour send des popup:
Tu choisis ce que tu souhaite et tu envoie à toats()
<?php
    include_once('./src/notify.php');

    $a = blue("content","title");
    $b = green("content","title");
    $c = yellow("content","title");

    toast($a,$b,$c);
    
?>