<?php


class blobs{
// $servername="localhost";
// $username="root";
// $password="password";
// $dbname="teams";


// $conn=mysqli_connect($servername,$username,$password,$dbname);
// //$conn = mysqli_connect("localhost","root","kalieshwar%25","footballers");
// //$conn1 = mysqli_connect('localhost','root','kalieshwar%25','footballers');

// if(!$conn)
// {
//     die("Connection failed:" . mysqli_connect_error());
// }
// else{
// 	echo "Succesful connection!";
// }

const DB_HOST = 'localhost';
    const DB_NAME = 'teams';
    const DB_USER = 'root';
    const DB_PASSWORD = '';

    /**
     * Open the database connection
     */
    public function __construct() {
        // open database connection
        $conStr = sprintf("mysql:host=%s;dbname=%s;charset=utf8", self::DB_HOST, self::DB_NAME);

        try {
            $this->pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
            //for prior PHP 5.3.6
            //$conn->exec("set names utf8");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * close the database connection
     */
    public function __destruct() {
        // close the database connection
        $this->pdo = null;
    }



public function insertBlob($filepath, $mime, $name)
{
	$blob = fopen($filepath, 'rb');
    
    $sql = "INSERT INTO images(mime, img, name) VALUES(:mime, :img,  :name)";
    $stmt = $this->pdo->prepare($sql);

    $stmt->bindParam(':mime', $mime);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':img', $blob, PDO::PARAM_LOB);

    return $stmt->execute();
}

public function selectBlob($id) 
{

        $sql = "SELECT mime,
                        img
                   FROM files
                  WHERE id = :id;";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array(":id" => $id));
        $stmt->bindColumn(1, $mime);
        $stmt->bindColumn(2, $img, PDO::PARAM_LOB);

        $stmt->fetch(PDO::FETCH_BOUND);

        return array("mime" => $mime,
            "img" => $img);
}
}

$blobObj = new blobs();

$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/team_images/kerala_blasters.png', "image/png", "Kerala Blasters FC");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/team_images/bengaluru_fc.png', "image/png", "Bengaluru FC");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/team_images/fc_goa.png', "image/png", "FC Goa");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/team_images/chennaiyin_fc.png', "image/png", "Chennaiyin FC");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/team_images/mumbai_cityfc.png', "image/png", "Mumbai City FC");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/team_images/sc_east_bengal.jpg', "image/jpg", "SC East Bengal");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/team_images/northeast_united.png', "image/png", "NorthEast United FC");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/team_images/jamshedpur_fc.png', "image/png", "Jamshedpur FC");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/team_images/hyderbad_fc.png', "image/png", "Hyderabad FC");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/team_images/fc_odisha.png', "image/png", "Odisha FC");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/team_images/atk_mohun_bagan.jpg', "image/jpg", "ATK Mohun Bagan FC");

//$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/team_imagesbengaluru_fc.png', "image/png");

// $a = $blobObj->selectBlob(1);
// header("Content-Type:" . $a['mime']);
// echo $a['img'];


//  FC Goa              | Virat Kohli, Goan Football Club Pvt. Ltd.        | Juan Fernando    |             45 |
// |  4 | Chennaiyin FC       | Abishek Bachan, MS Dhoni, Vita Dani              | Csaba Laszlo     |             99 |
// |  5 | Mumbai City FC      | Ranbir Kapoor, City Football Group, Bimal Parekh | Sergio Lobera    |             44 |
// |  6 | SC East Bengal      | Shree Cement East Bengal Foundation              | Robbie Fowler    |             66 |
// |  7 | NorthEast United FC | John Abraham                                     | Khaid Jamil      |             77 |
// |  8 | Jamshedpur FC       | Tata Group                                       | Owen Coyle       |             66 |
// |  9 | Hyderabad FC        | Rana Daggubati                                   | Manolo Marquez   |             99 |
// | 10 | Odisha FC           | GMS Inc.                                         | Steven Dias      |             33 |
// | 11 | ATK Mohun Bagan FC
