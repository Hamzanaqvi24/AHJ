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

cursor.execute("CREATE TABLE comments (comment_id int(11)  NOT NULL AUTO_INCREMENT, comment_subject varchar(250) NOT NULL, comment_text text NOT NULL, comment_status int(1) NOT NULL);")

cursor.execute("ALTER TABLE comments ADD PRIMARY KEY (comment_id);")
