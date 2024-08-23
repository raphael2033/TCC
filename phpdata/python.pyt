import email
import sqlite3
banco = sqlite3.connect('tinasecando.db')
cursor = banco.cursor()
Nome = "Raphaelsalvadorelias@hotmail.com"
Senha = "falsa"
telefone = 11972776992

cursor.execute ("insert into VALORES values('"+Nome+"','"+Senha+"',"+str(telefone)+")")

#cursor.execute ("insert into tinta values ('raphaelselias@gmail.com6','senha3','07012010')")
banco.commit ()