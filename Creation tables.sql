CREATE TABLE clients(
	Idclient INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nomclient VARCHAR(40),
	prenomclient VARCHAR (40),
	emailclient VARCHAR(255) NOT NULL UNIQUE,
	pseudoclient VARCHAR(255) NOT NULL UNIQUE,
	passwordclient TEXT NOT NULL
	);
	
INSERT INTO clients(Idclient,nomclient,prenomclient,emailclient,pseudoclient,passwordclient) VALUES

 (0001,'Kameni','Kevin','kameni.kevin@gmail.com','kvnk91','jesuisbo'),
 (0002,'Lacour','Marius','lacourmarius@gmail.com','marius.lcr','azerty91'),
 (0003,'Gay','Jade','jadou91@gmail.com','_jxde_','avrainville!'),
 (0004,'Bosseboeuf','Quentin','quentin.bosseboeuf@yahoo.fr','quentinbsbf','vivelansi'),
 (0005,'Kabanga Muya','Ruben','rubenmuya@hotmail.com','R2J','stoplepiratage'),
 (0006,'Dezay','Paul','dezayp@orange.fr','MarcoPaulo','09mars1990'),
 (0007,'Maréchal','Juliette','juliette-marechal@free.fr','jujulamaligne','blaise_matuidi'),
 (0008,'Giroud','Olivier','Giroud.olivier@gmail.com','Grd91','mercideschamps'),
 (0009,'Macron','Emmanuel','Macron.emmanuel@elysee.com','manudu75','covid-19');
 
 CREATE TABLE coin(
	Idcoin INT PRIMARY KEY,
	nomcoin VARCHAR(40),
	symbolecoin VARCHAR (5),
	quantitecoin REAL,
	prixcoin REAL,
	evolutioncoin REAL
	);
	
CREATE TABLE commande(
	Idcommande INTEGER PRIMARY KEY,
	emailclient VARCHAR(255) NOT NULL UNIQUE,
	prixtotal REAL,
	Idcoin INT
	);

ALTER TABLE commande ADD CONSTRAINT emailclient FOREIGN KEY (emailclient) REFERENCES clients(emailclient);
ALTER TABLE commande ADD CONSTRAINT Idcoin FOREIGN KEY (Idcoin) REFERENCES coin(Idcoin);
	
INSERT INTO coin(Idcoin,nomcoin,symbolecoin,quantitecoin,prixcoin,evolutioncoin) VALUES

 (1,'Botcoin','BOC',100.43,1340.02,+34.54),
 (2,'Maki','MXK',50.21,23.90,+2.98),
 (3,'Tornado','TRD',54.61,657.21,+6.78),
 (4,'Plural','PLR',94.09,12.45,-0.32),
 (5,'Venom','VNM',13.45,98.54,+3.21),
 (6,'Gury','GUR',137.25,73.21,+8.11),
 (7,'Harch','HAR',23.07,142.56,+12.90),
 (8,'Girco','GRC',76.88,54.93,-7.22),
 (9,'Cista','CST',35.76,32.06,+0.12),
 (10,'Magi','MAG',167.05,12.30,+3.56);