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
        $socks = "/home/" . get_current_user() . "/.mysql/mysql.sock";
        try
        {
            $this->bdd = new PDO('mysql:host=localhost;dbname=rss-feed;unix_socket=' . $socks, 'root', '');
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