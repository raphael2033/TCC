import email 
import sqlite3

#nome ="Nycole"
#idade= 19
#email= "nycolesantos19032007@gmail.com"

banco=sqlite3.connect('.db')

cursor=banco.cursor()
#cursor.execute ('INSERT INTO cadastro VALUES ("nome" + "','" +str(idade)+ '"+email+"') ")

cursor.execute ("INSERT INTO  VALUES (19, 'Nycole','veterinaria','tocantins' )")
