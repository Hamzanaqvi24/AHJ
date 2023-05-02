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

cursor.execute("CREATE TABLE teams (userId int(8) NOT NULL, Pid MEDIUMINT NOT NULL, teamId int(8) NOT NULL, PRIMARY KEY (teamId, Pid), FOREIGN KEY (userId) REFERENCES users(userId), FOREIGN KEY (Pid) REFERENCES players(Pid));")
