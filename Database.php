<?php
/**
 *   BDD class file
 *
 *   Class do connect to the database
 *
 *
 * PHP Version 5.4
 *
 * @category Nothing
 * @package  Nothing
 * @author   coquel_d <christophe1.coquelet@epitech.eu>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://localhost:8080/rendu/
 */

/**
 *   BDD class
 *
 *   Class do connect to the database
 *
 * @category Nothing
 * @package  Nothing
 * @author   coquel_d <christophe1.coquelet@epitech.eu>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://localhost:8080/rendu/
 */
class Database
{
    protected $bdd;
    /**
     * Construct
     * Connect to bdd
     */
    public function __construct()
    {
        $database = "rss-feed";
        $os = $_SERVER['SERVER_SOFTWARE'];
        if (substr($os, 14, 1) === "L") {
            $socks = "/home/" . get_current_user() . "/.mysql/mysql.sock";
            $arg = 'mysql:host=localhost;dbname='.$database.';unix_socket='.$socks;
        } elseif (substr($os, 14, 1) === "W") {
            $arg = 'mysql:host=localhost;dbname=' . $database;
        }
        try
        {
            $this->bdd = new PDO($arg, 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     *   Get the connection with de database;
     *   @return bdd : the connection
     */
    public function getBdd()
    {
        return $this->bdd;
    }
}
?>
