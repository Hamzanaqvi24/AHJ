import mysql.connector as mysql
import requests

#database connection
db = mysql.connect(
    host = "localhost",
    user = "root",
    passwd = "toor",
    database = "Apitest"
)

cursor = db.cursor()

#creating table
cursor.execute("CREATE TABLE users (userId int(8) NOT NULL, userName varchar(55) NOT NULL, password varchar(255) NOT NULL, displayName varchar(55) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;")

#populating table
cursor.execute("INSERT INTO users (userId, userName, password, displayName) VALUES (1, 'admin', '$2a$10$0FHEQ5/cplO3eEKillHvh.y009Wsf4WCKvQHsZntLamTUToIBe.fG', 'Admin');")
cursor.close()
db.commit()
