create table inscrit
(
    pseudo varchar(30),
    nom varchar(40),
    prenom varchar(40),
    adresse varchar(50),
    email varchar(50),
    mobile int(10),
    primary key(pseudo)

);

create table organisateur (
                              pseudoOrga varchar(30),
                              primary key (pseudoOrga)
);


create table participant (
                             pseudopart varchar(30),
                             surpris boolean,
                             primary key (pseudopart)
);


create table evenement (
                           idevent int(4),
                           description varchar(100),
                           datedebut date,
                           datefin date,
                           adresse varchar (50),
                           pseudoorganisateur varchar(30),
                           primary key (idevent)
);

create table article (
                         idarticle int(4),
                         libelle varchar(30),
                         image varchar(20),
                         type varchar(20),
                         primary key (idarticle)
);

create table apportearticle (
                                pseudopart varchar(30),
                                idarticle int(4),
                                quantitie int(3),
                                primary key (pseudopart, idarticle)
);


create table invite
(
    idinvite int(4),
    email    varchar(50),
    reponse  boolean,
    idevent  int(4),
    primary key (idinvite)
);


create table cadeau (
                        idcadeau int(4),
                        libelle varchar(30),
                        description varchar(50),
                        disponible boolean,
                        primary key (idcadeau)
);


create table wishlistcadeau (
                                pseudoorga varchar(30),
                                idcadeau int(4),
                                quantite int(3),
                                primary key (pseudoorga, idcadeau)
);

create table participe (
                           pseudopart varchar(30),
                           idevent int(4),
                           primary key (pseudopart, idevent)
);

create table wishlistarticle (
                                 idevent int(4),
                                 idarticle int(4),
                                 primary key (idevent, idarticle)
);

create table apportecadeau (
                               pseudopart varchar(30),
                               idcadeau int(4),
                               primary key (pseudopart, idcadeau)
);

alter table organisateur add constraint FK_organisateur foreign key (pseudoOrga) references inscrit (pseudo);

alter table participant add constraint FK_participant foreign key (pseudopart) references inscrit (pseudo);

alter table evenement add constraint FK_evenement foreign key (pseudoorganisateur) references organisateur (pseudoOrga);

/* alter table apportearticle add constraint FK_apportart foreign key (pseudoOrga) references inscrit (pseudo);
* a voir si on met particpant ou pas car ça veut dire que l'organisateur ne peut pas mettre ce qu'il veut dans la liste
* et pareil pour le apportecadeaux
*/

alter table apportearticle add constraint FK_apportart2 foreign key (idarticle) references article (idarticle);

alter table invite add constraint FK_invite foreign key (idevent) references evenement (idevent);

alter table organisateur add constraint FK_organisateur foreign key (pseudoOrga) references inscrit (pseudo);

