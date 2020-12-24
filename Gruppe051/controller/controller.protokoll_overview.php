<?php
Core::setView("home", "view1", "list");
$protokoll_list=[];
$db = Core::$pdo;
$SQL = "SELECT * FROM Aktivitätenprotokoll WHERE User_uid=? ORDER BY m_ts DESC";
$stmt = $db->prepare($SQL);
$result = $stmt->execute([$_SESSION['uid']]);
$protokoll_list = $stmt->fetchAll(PDO::FETCH_CLASS);

Core::publish($protokoll_list, "protokoll_list");