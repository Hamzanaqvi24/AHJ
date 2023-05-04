from flask import Flask, request, abort, jsonify
import mysql.connector as mysql

#database connection
db = mysql.connect(
    host = "localhost",
    user = "root",
    passwd = "toor",
    database = "apitest"
)

app = Flask(__name__)

#Actual useful API methods for project
@app.route('/getPid', methods=['GET'])
def GET_pid1():
    searchPid = request.args.get('pid', '')
    cursor = db.cursor()
    dbquery = "SELECT * from players where Pid=" + searchPid + ";"
    print(dbquery)
    cursor.execute(dbquery)
    result = cursor.fetchall()
    print(result)
    return jsonify({
        "Player ID": result[0][0],
        "Name" : result[0][1],
        "Position" : result[0][2],
        "Fumbles" : result[0][3],
        "Passes Attempted" : result[0][4],
        "Passes Completed" : result[0][5],
        "Passes Touchdown" : result[0][6],
        "Passes Yards" : result[0][7],
        "Received Touchdowns" : result[0][8],
        "Received Yards" : result[0][9],
        "Receptions" : result[0][10],
        "Targets" : result[0][11],
        "Rush Attempts" : result[0][12],
        "Rush Touchdowns" : result[0][13],
        "Rushed Yards" : result[0][14],
        "Team" : result[0][15]})

@app.route('/getPos', methods=['GET'])
def GET_position():
    searchPos = request.args.get('pos', '')
    dbquery = "SELECT * from players where Position=" + searchPos + ";"
    cursor = db.cursor()
    cursor.execute(dbquery)
    result = cursor.fetchall()
    return jsonify({
        "Player ID": result[0][0],
        "Name" : result[0][1],
        "Position" : result[0][2],
        "Fumbles" : result[0][3],
        "Passes Attempted" : result[0][4],
        "Passes Completed" : result[0][5],
        "Passes Touchdown" : result[0][6],
        "Passes Yards" : result[0][7],
        "Received Touchdowns" : result[0][8],
        "Received Yards" : result[0][9],
        "Receptions" : result[0][10],
        "Targets" : result[0][11],
        "Rush Attempts" : result[0][12],
        "Rush Touchdowns" : result[0][13],
        "Rushed Yards" : result[0][14],
        "Team" : result[0][15]})

@app.route('/getName', methods=['GET'])
def GET_name():
    searchName = request.args.get('pos', '')
    dbquery = "SELECT * from players where PlayerName=" + searchName + ";"
    cursor = db.cursor()
    cursor.execute(dbquery)
    result = cursor.fetchall()
    return jsonify({
        "Player ID": result[0][0],
        "Name" : result[0][1],
        "Position" : result[0][2],
        "Fumbles" : result[0][3],
        "Passes Attempted" : result[0][4],
        "Passes Completed" : result[0][5],
        "Passes Touchdown" : result[0][6],
        "Passes Yards" : result[0][7],
        "Received Touchdowns" : result[0][8],
        "Received Yards" : result[0][9],
        "Receptions" : result[0][10],
        "Targets" : result[0][11],
        "Rush Attempts" : result[0][12],
        "Rush Touchdowns" : result[0][13],
        "Rushed Yards" : result[0][14],
        "Team" : result[0][15]})

@app.route('/getPlayers', methods=['GET'])
def GET_players():
    dbquery = "SELECT * from players;"
    cursor = db.cursor()
    cursor.execute(dbquery)
    result = cursor.fetchall()
    return jsonify({
        "Player ID": result[0][0],
        "Name" : result[0][1],
        "Position" : result[0][2],
        "Fumbles" : result[0][3],
        "Passes Attempted" : result[0][4],
        "Passes Completed" : result[0][5],
        "Passes Touchdown" : result[0][6],
        "Passes Yards" : result[0][7],
        "Received Touchdowns" : result[0][8],
        "Received Yards" : result[0][9],
        "Receptions" : result[0][10],
        "Targets" : result[0][11],
        "Rush Attempts" : result[0][12],
        "Rush Touchdowns" : result[0][13],
        "Rushed Yards" : result[0][14],
        "Team" : result[0][15]})

#Inserting Player based on Player ID value
@app.route('/addPlayer', methods=['POST'])
def add_Player():
    PidQuery = request.args.get('pid', '')
    dbquery = "INSERT INTO teams (userId, Pid, teamId) VALUES (1, " + PidQuery + ", 1);"
    cursor = db.cursor()
    cursor.execute(dbquery)
    cursor.close()
    db.commit()
    return "Player added"

#Removing Player based on Player ID value
@app.route('/dropPlayer', methods=['GET'])
def rm_Player():
    PidQuery = request.args.get('pid', '')
    dbquery = "DELETE FROM teams WHERE pid=" + PidQuery + ";"
    cursor = db.cursor()
    cursor.execute(dbquery)
    cursor.close()
    db.commit()
    return "Player removed"

#Showing a userId's team
@app.route('/showTeam', methods=['GET'])
def show_Team():
    userIdQuery = request.args.get('userId', '')
    dbquery = "SELECT * from teams WHERE userId=" + str(userIdQuery) + ";"
    cursor = db.cursor()
    cursor.execute(dbquery)
    result = cursor.fetchall()
    cursor.close()
    return jsonify(result) 

@app.route('/getStats', methods=['GET'])
def GET_stats():
    searchWeek = request.args.get('week', '')
    dbquery = "SELECT * from playerswk" + searchWeek + ";"
    cursor = db.cursor()
    cursor.execute(dbquery)
    result = cursor.fetchall()
    cursor.close()
    return jsonify(result)

#for this specific call, the format is curl http://127.0.0.1:80/getPStats?week=_'&'name=FirstName%20LastName
@app.route('/getPStats', methods=['GET'])
def GET_Pstats():
    searchName = request.args.get('name', '')
    searchWeek = request.args.get('week', '')
    dbquery = "SELECT * from playerswk" + searchWeek + " where PlayerName=" +  "'" + searchName + "'" + ";"
    cursor = db.cursor()
    cursor.execute(dbquery)
    result = cursor.fetchall()
    cursor.close()
    return result

#Comparing user teams
@app.route('/fpts', methods=['GET'])
def GET_fp():
    searchWeek = request.args.get('week', '')
    searchuid = request.args.get('userId', '')
    dbquery = "SELECT teams.Pid, teams.userId, players.PlayerName, Sum(playerswk" + searchWeek + ".Fantasypts) AS FantasyTotal from ((players INNER JOIN teams ON players.Pid = teams.Pid) INNER JOIN playerswk" + searchWeek + " ON players.PlayerName = playerswk" + searchWeek + ".PlayerName) WHERE teams.userId =" + searchuid + " GROUP BY Pid;"
    cursor = db.cursor()
    cursor.execute(dbquery)
    result = cursor.fetchall()
    cursor.close()
    return result

@app.route('/compareFP', methods=['GET'])
def compare_fp():
    searchWeek = request.args.get('week', '')
    dbquery = "SELECT teams.Pid, teams.userId, players.PlayerName, Sum(playerswk" + searchWeek + ".Fantasypts) AS FantasyTotal from ((players INNER JOIN teams ON players.Pid = teams.Pid) INNER JOIN playerswk" + searchWeek + " ON players.PlayerName = playerswk" + searchWeek + ".PlayerName) WHERE teams.userId = 1 GROUP BY Pid;"
    cursor = db.cursor()
    cursor.execute(dbquery)
    result1 = cursor.fetchall()
    #dbquery = "SELECT teams.Pid, teams.userId, players.PlayerName, Sum(playerswk" + searchWeek + ".Fantasypts) AS FantasyTotal from ((players INNER JOIN teams ON players.Pid = teams.Pid) INNER JOIN playerswk" + searchWeek + " ON players.PlayerName = playerswk" + searchWeek + ".PlayerName) WHERE teams.userId = 2 GROUP BY Pid;"
    cursor.execute(dbquery)
    result2 = cursor.fetchall()
    score1 = 0
    score2 = 0
    for result in result1:
        points = []
        player = {
            "Fantasy Points Total": result1[3]
        }
    return jsonify(player)




@app.route('/getAllPid', methods=['GET'])
def GET_all_pids():
    cursor = db.cursor()
    dbquery = "SELECT * from players;"
    cursor.execute(dbquery)
    results = cursor.fetchall()
    cursor.close()
    players = []
    for result in results:
        player = {
            "Player ID": result[0],
            "Name": result[1],
            "Position": result[2],
            "Fumbles": result[3],
            "Passes Attempted": result[4],
            "Passes Completed": result[5],
            "Passes Touchdown": result[6],
            "Passes Yards": result[7],
            "Received Touchdowns": result[8],
            "Received Yards": result[9],
            "Receptions": result[10],
            "Targets": result[11],
            "Rush Attempts": result[12],
            "Rush Touchdowns": result[13],
            "Rushed Yards": result[14],
            "Team": result[15]
        }
        players.append(player)
    return jsonify(players)

#starting API
if __name__ == '__main__':
    app.run(host='127.0.0.1', port=9999, debug=True)

# pip install -r requirement.txt
