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
    const DB_NAME = 'footballers';
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
    
    $sql = "INSERT INTO images(mime, img, name) VALUES(:mime, :img, :name)";
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

$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/dheeraj_singh.jpg', "image", "Dheeraj Singh");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/sumith_rathi.jpg', "image", "Sumit Rathi");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/sandesh_jhingan.jpg', "image", "Sandesh Jhingan");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/manvir_singh.jpg', "image", "Manvir Singh");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/komal_thital.jpg', "image", "Komal Thatal");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/carl_mchugh.jpg', "image", "Carl McHugh");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/david_williams.jpg', "image", "David Williams");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/edu_garcia.jpg', "image", "Edu García");

$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/bradden_inman.jpg', "image", "Brad Inman");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/avilash_paul.jpg', "image", "Avilash Paul");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/glan_martins.jpg', "image", "Glan Martins");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/subhasish_bose.jpg', "image", "Subhasish Bose");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/jayesh_rane.jpg', "image", "Jayesh Rane");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/pronay_halder.jpg', "image", "Pronay Halder");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/sk_sahil.jpg', "image", "SK Sahil");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/javi_hernadez.png', "image", "Javi Hernández");

$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/pritam_kotal.jpg', "image", "Pritam Kotal");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/roy_krishna.jpg', "image", "Roy Krishna");
$blobObj->insertBlob('file:///C:/xampp/htdocs/indianfootball/WT_PROJECT_1941027/footballers/ATK_mohun_bagan/jobby_justin.jpg', "image", "Jobby Justin");
//$blobObj->insertBlob('file:///D:/xamp/htdocs/WT_PROJECT/team_images/bengaluru_fc.png', "image/png");

// $a = $blobObj->selectBlob(1);
// header("Content-Type:" . $a['mime']);
// echo $a['img'];

