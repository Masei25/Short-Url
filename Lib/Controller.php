<?php

error_reporting(0);

//Starts a session
if(!isset($_SESSION)) {
    session_start();
}

// Include database configuration file
require_once 'Connect.php';

//include the index file from the root directory
require '../index.php';

//include the encryption file from the root directory
require 'encryption.php';


Class Controller
{
    private $d;

    /**
     * Create a construct to instatiate the data configuration file
     * And access the connection
     */
    public function __construct()
    {
        $this->db = (new Connect())->getConnection();
    }

    /**
     * Insert url into the database after checking if it exist in the db or not
     * 
     */
    public function insert()
    {   
        $statement = "INSERT INTO short_urls 
                        (long_url, short_code, created)
                        VALUES
                        (:long_url, :short_code, :created)";
        
        try {
            $rand = encrypt("localhost/".$this->getRandomString());
            $date = date("Y/m/d h:i:sa");

            $statement = $this->db->prepare($statement);

            $statement->bindParam(':long_url', $_POST['url']);
            $statement->bindParam(':short_code', $rand);
            $statement->bindParam(':created', $date);

            $statement->execute();

            $this->check_url($_POST['url']);

        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    /**
     * checks the url inputted
     * if the url exists it, redirect to show the short url page
     * if the url does not exist in the database, 
     * it calls the insert method and inserts into the database
     */
    public function check_url($url, $statusCode = 303)
    {
        $statement = "SELECT id, long_url, short_code FROM short_urls WHERE long_url = ?";

        try {
            $statement = $this->db->prepare($statement);
            $statement->execute([$url]);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            // dd($result);
        } catch (\PDOException $e) {
            exit($e->getMessage());
            header('Location: ./error.php', true, $statusCode); //redirect with error here
        }

        if(count($result) > 0) {
            $_SESSION['url'] = $result;
            $this->getUrl();
        }

        if(!count($result)) {
            $this->insert();
        }

    }

    /**
     * Redirect to display the short url
     */
    public function getUrl($statusCode = 303)
    {
        header('Location: ../short_url.php', true, $statusCode);  //redirect to display short url
        header("Refresh:0");
        die();
    }

    /**
     * Generates random number 
     * By randomly selecting from A-Z or 0-9
     */
    public function getRandomString($n = 5) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
      
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
      
        return $randomString;
    }

}