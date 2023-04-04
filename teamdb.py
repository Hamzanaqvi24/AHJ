import mysql.connector as mysql
import requests

#database
db = mysql.connect(
    host = "localhost",
    user = "root",
    passwd = "toor",
    database = "ffootball"
)

cursor = db.cursor()

cursor.execute("CREATE TABLE teams (teamID MEDIUMINT AUTO_INCREMENT PRIMARY KEY, pid MEDIUMINT, uid MEDIUMINT, FOREIGN KEY (pid) REFERENCES players(Pid), FOREIGN KEY (uid) REFERENCES users(uid))")