<?php

function findAll(): array
{
    $db = getDBConnection();

    $request = $db->query('SELECT id, title, LEFT(content, 100) as content, user, date FROM post ORDER BY date DESC');
    $request->setFetchMode(PDO::FETCH_ASSOC);
    $result = $request->fetchAll();
    $request->closeCursor();

    return $result;
}

function findOneById(int $id): array
{
    $db = getDBConnection();

    $request = $db->prepare('SELECT * FROM post WHERE id = :id');
    $request->bindParam(':id', $id, PDO::PARAM_INT);
    $request->execute();

    $request->setFetchMode(PDO::FETCH_ASSOC);
    $result = $request->fetch();
    $request->closeCursor();

    return $result;
}

function getDBConnection(): PDO
{
    try {
        $option = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        return new PDO('mysql:host=localhost;dbname=blog', 'root', '', $option);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
