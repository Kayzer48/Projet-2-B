--Afficher tous les étudiants dont le nom est palmer.
SELECT * FROM `etudiants` WHERE `nom`='palmer' 

--Afficher tous les étudiants qui sont des femmes.
SELECT * FROM `etudiants` WHERE `sexe`='femme' 
--En fonction de cette table ce sera plutôt
SELECT * FROM `etudiants` WHERE `sexe`=1 

--Afficher tous les étudiants qui habite un département qui commence par la lettre N.
SELECT * FROM `etudiants` WHERE `departement` LIKE 'n%' 

--Afficher tous les étudiants dont l'email contient le mot google.
SELECT * FROM `etudiants` WHERE `email` LIKE '%google.com' 

--Afficher tous les étudiants trié par département par ordre alphabétique.
SELECT * FROM `etudiants` ORDER BY `departement` 

--Afficher le nombre de tous les étudiants trié par le sexe 1 (femme) ici 15
SELECT COUNT(sexe) FROM `etudiants` WHERE `sexe`=1

--Afficher le nombre de tous les étudiants trié par le sexe 0 (homme) ici 9
SELECT COUNT(sexe) FROM `etudiants` WHERE `sexe`=0

--Afficher l'âge des étudiants
SELECT id, prenom, nom, age FROM `etudiants`GROUP BY age

--Afficher la moyenne d'age des étudiants
SELECT AVG(age) FROM etudiants  

--Afficher la matière principale des étudiants
SELECT * FROM `etudiants` INNER JOIN `matieres` ON `matieres`.`matiere_id`= `etudiants`.`id_matieres`

--Afficher les données de l'étudiants numéro 9
SELECT * FROM `etudiants` WHERE`id`=9 

