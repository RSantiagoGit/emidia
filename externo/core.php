<?php
session_start();

/**
 * Created by PhpStorm.
 * User: raphael
 * Date: 12/01/2019
 * Time: 18:07
 */
class core
{

    public function __construct()
    {
        echo "working";
    }

    static function cadastro()
    {
        var_dump($_POST);
        if (!empty($_POST['nome']) || !empty($_POST['email']) || !empty($_POST['senha'])) {
            $sql = "INSERT INTO ex_usuarios(nome, email, senha) VALUES ('" . $_POST['nome'] . "','" . $_POST['email'] . "','" . $_POST['senha'] . "')";
            self::BD($sql);

            $_SESSION['login'] = $_POST['nome'];
            header('location:../postagem.php');
        } else {
            $_SESSION['status'] = "true";
            header('location:../cadastro.php');
        }
    }

    static function login()
    {
        if (!empty($_POST['email']) || !empty($_POST['senha'])) {
            $user = self::BD(("SELECT * FROM ex_usuarios where email = '" . $_POST['email'] . "' and senha = '" . $_POST['senha'] . "'"));

            var_dump($user);

            if (count($user) == 0) {
                $_SESSION['status'] = "true";
                header('location:../login.php');
            } else {
                echo $user[0]['nome'];
                $_SESSION['login'] = $user[0]['nome'];
                header('location:../postagem.php');
            }

        }
    }

    static function postagem()
    {
        if (count($_POST) > 0 ) {
            $post_name = str_replace(' ', '-', $_POST['titulo']);
            $post_name = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $post_name));

            $user = self::BD("SELECT MAX(ID) AS id FROM wp_posts");

            $next_post = $user[0]['id']+ 1;

            $guid = "http://localhost/apps/emidia/?p=".$next_post;

            $sql = "INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, to_ping, pinged, post_content_filtered, ping_status, post_name, post_modified, post_modified_gmt, post_parent, menu_order, guid, post_type) VALUES (1, '". date("Y-m-d H:i:s") . "', '" . date("Y-m-d H:i:s", strtotime('+2 hours')) . "','" . $_POST['editordata'] . "','" . $_POST['titulo'] . "', '','" . $_POST['status'] . "','" . $_POST['comment'] . "', '', '', '','open', '" . $post_name . "', '" . date("Y-m-d H:i:s") . "', '" . date("Y-m-d H:i:s", strtotime('+2 hours')). "', '0','0', '".$guid."', 'post')";
            
            self::BD($sql);

            $_SESSION['status'] = "true";
            header('location:../postagem.php');

        }else{
            header('location:../postagem.php');
        }
    }

        protected
        static function BD($sql)
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "wordpress_emidia";

            try {

                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                return $stmt->fetchAll();

            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }

            $conn = null;
        }

    }

inicializa();

    function inicializa()
    {
        $action = explode('/', $_SERVER['REQUEST_URI']);

        if ($action[4] == "core.php") {
            switch ($action[5]) {
                case "cadastro";
                    core::cadastro();
                    break;
                case "login";
                    core::login();
                    break;
                case "logout";
                    unset($_SESSION['login']);
                    header('location:../cadastro.php');
                    break;
                case "addpost";
                    core::postagem();
                    break;
                default:
                    header("Location:../index.php");
            }
        }
    }
