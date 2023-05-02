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

FFoot = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/all")

cursor.execute("CREATE TABLE players (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")

data = FFoot.json()
for item in data:
        Pname = item["player_name"]
        Ppos = item["position"]
        Pfum = item["fumbles_lost"]
        Ppatt = item["stats"]["passing"]["passing_att"]
        Ppcmp = item["stats"]["passing"]["passing_cmp"]
        Pptd = item["stats"]["passing"]["passing_td"]
        Ppyds = item["stats"]["passing"]["passing_yds"]
        Prtd = item["stats"]["receiving"]["receiving_td"]
        Pryds = item["stats"]["receiving"]["receiving_yds"]
        Prec = item["stats"]["receiving"]["receptions"]
        Ptar = item["stats"]["receiving"]["targets"]
        Pratt = item["stats"]["rushing"]["rushing_att"]
        Prtd = item["stats"]["rushing"]["rushing_td"]
        Pruyds = item["stats"]["rushing"]["rushing_yds"]
        Pteam = item["team"]
        
        query = "INSERT INTO players (PlayerName, Position, Fumbles, pass_att, pass_cmp, pass_td, pass_yds, receive_td, receive_yds, receptions, targets, rush_att, rush_td, rush_yds, team) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)"
        values = (Pname, Ppos, Pfum, Ppatt, Ppcmp, Pptd, Ppyds, Prtd, Pryds, Prec, Ptar, Pratt, Prtd, Pruyds, Pteam)
        cursor.execute(query, values)
        
        db.commit()
        print(cursor.rowcount, "record inserted")

cursor.execute("SELECT * from players where pid = 1")