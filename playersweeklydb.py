import mysql.connector as mysql
import requests

#data collection (each week being stored for rainy day reasons)
#FFwk1 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/1")
#FFwk2 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/2")
#FFwk3 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/3")
#FFwk4 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/4")
#FFwk5 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/5")
#FFwk6 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/6")
#FFwk7 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/7")
#FFwk8 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/8")
#FFwk9 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/9")
#FFwk10 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/10")
#FFwk11 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/11")
#FFwk12 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/12")
#FFwk13 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/13")
#FFwk14 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/14")
#FFwk15 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/15")
#FFwk16 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/16")
#FFwk17 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/17")
#FFwk18 = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/18")
    
#database
db = mysql.connect(
    host = "localhost",
    user = "root",
    passwd = "toor",
    database = "ffootball"
)

cursor = db.cursor()

#Database Creation
cursor.execute("CREATE TABLE playersWk1 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk2 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk3 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk4 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk5 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk6 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk7 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk8 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk9 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk10 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk11 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk12 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk13 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk14 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk15 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk16 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
cursor.execute("CREATE TABLE playersWk17 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")
#cursor.execute("CREATE TABLE playersWk18 (Pid MEDIUMINT AUTO_INCREMENT PRIMARY KEY, PlayerName VARCHAR(255) NOT NULL, Position VARCHAR(255) NOT NULL, FantasyPts int, Fumbles int NOT NULL, pass_att int NOT NULL, pass_cmp int NOT NULL, pass_td int NOT NULL, pass_yds int NOT NULL, receive_td int NOT NULL, receive_yds int NOT NULL, receptions int NOT NULL, targets int NOT NULL, rush_att int NOT NULL, rush_td int NOT NULL, rush_yds int NOT NULL, team CHAR(5) NOT NULL)")

#Database Population
for i in range(17):
    FFwk = requests.get("https://www.fantasyfootballdatapros.com/api/players/2019/" + str(i+1))
    data = FFwk.json()
    for item in data:
        Pname = item["player_name"]
        Ppos = item["position"]
        Pfp = round(item["fantasy_points"]["standard"])
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
        
        query = "INSERT INTO playersWk" + str(i+1) + "(PlayerName, Position, FantasyPts, Fumbles, pass_att, pass_cmp, pass_td, pass_yds, receive_td, receive_yds, receptions, targets, rush_att, rush_td, rush_yds, team) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)"
        values = (Pname, Ppos, Pfp, Pfum, Ppatt, Ppcmp, Pptd, Ppyds, Prtd, Pryds, Prec, Ptar, Pratt, Prtd, Pruyds, Pteam)
        print(values)
        cursor.execute(query, values)
        
        db.commit()
        print(cursor.rowcount, "record inserted")