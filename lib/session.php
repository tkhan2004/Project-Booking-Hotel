<?php
/**
 * Lưu phiên giao dịch khi refesh
 */
class Session {
    public static function init() {
        if (version_compare(phpversion(), '5.4.0', '<')) {
            if (session_id() == '') {
                session_start();
            }
        } else {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        }
    }
    
    public static function set($key, $val) {
        $_SESSION[$key] = $val;
    }

    public static function get($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    public static function checkSession() {
        self::init();
        if (self::get("login") == false) {
            self::destroy();
            header("Location:UIlogin.php");
        }
    }

    public static function checkLogin() {
        self::init();
        if (self::get("login") == true) {
            header("Location:main1.php");
        }
    }

    public static function destroy() {
        session_destroy();
        header("Location:../UIlogin.php");
    }
    public static function checkAdminRole() {
        self::init();
        if(self::get("role_id") !=0){
            session_destroy();
            header("Location:admin/admin.php");
            exit();

        }
    }
    public static function checkCustomer(){
        self::init();
        if(self::get("role_id")==0){
            session_destroy();
            header("Location:customer/Shop.php");
            exit();

        }
    }
}
?>;
