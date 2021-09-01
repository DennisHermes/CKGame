<?php
    session_start();

    require 'DatabaseHandler.php';

    if (isset($_GET["zin"])) {
        $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='zin0';";
        if (htmlspecialchars($_GET["zin"]) == '1') {
            $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='zin1';";
        } else if (htmlspecialchars($_GET["zin"]) == '2') {
            $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='zin2';";
        } else if (htmlspecialchars($_GET["zin"]) == '3') {
            $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='zin3';";
        } else if (htmlspecialchars($_GET["zin"]) == '4') {
            $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='zin4';";
        } else if (htmlspecialchars($_GET["zin"]) == '5') {
            $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='zin5';";
        } else if (htmlspecialchars($_GET["zin"]) == '6') {
            $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='zin6';";
        } else if (htmlspecialchars($_GET["zin"]) == '7') {
            $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='zin7';";
        } else if (htmlspecialchars($_GET["zin"]) == '8') {
            $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='zin8';";
        } else if (htmlspecialchars($_GET["zin"]) == '9') {
            $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='zin9';";
        } else if (htmlspecialchars($_GET["zin"]) == '10') {
            $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='zin10';";
        } else if (htmlspecialchars($_GET["zin"]) == '11') {
            $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='game2done';";
        } 
        $stmt = mysqli_stmt_init($connection);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_execute($stmt);
        }
    } else {
        $playerName = array();
        $gameData = array();

        $sql = "SELECT * FROM `".$_SESSION['hostPin']."` ORDER BY GameData DESC;";
        $stmt = mysqli_stmt_init($connection);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if (is_numeric($row['GameData'])) {
                        array_push($playerName, $row['Players']);
                        array_push($gameData, $row['GameData']);
                    }
                }
                $array['playerName'] = $playerName;
                $array['gameData'] = $gameData;
                if (!empty($playerName)) {
                    echo json_encode($array);
                } else {
                    echo 'none';
                }
            }
        }
    }
?>