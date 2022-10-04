<?php

class TeamModel{
    function getDB() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_nba;charset=utf8', 'root', '');
        return $db;
    }

    


    function getAllTeams() {
        // 1. abro conexión a la DB
        $db = $this->getDB();
    
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $db->prepare('SELECT * FROM team');
        $query->execute();
    
        // 3. obtengo los resultados
        $teams = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $teams;


}
    function insertTeam($team, $rings, $city) {
        $db = $this->getDB();
        $query = $db->prepare("INSERT INTO team ( Team, Rings, City) VALUES (?, ?, ?)");
        $query->execute([$team, $rings, $city, false]);

        return $db->lastInsertId();
}

    function deleteTeamById($id) {
        $db = $this->getDB();
        $query = $db->prepare('DELETE FROM team WHERE Team_id_fk = ?');
        $query->execute([$id]);
    }

    

}