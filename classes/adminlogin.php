<?php  
    include __DIR__ . '/../lib/database.php';
    include __DIR__ . '/../helper/format.php';
    include __DIR__ . '/../lib/session.php';
    Session::checkLogin(); // Chữ 'S' viết hoa

    class Adminlogin
    {   
        private $db;
        private $fm;
        
        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        
        public function Login_admin($username, $password)
        {
            $username = $this->fm->validation($username);
            $password = $this->fm->validation($password);

            // Kiểm tra hợp lệ
            $username = mysqli_real_escape_string($this->db->link, $username);
            $password = mysqli_real_escape_string($this->db->link, $password);
            
            if (empty($username) || empty($password)) {
                $alert = "Không được để trống";
                return $alert;
            } else {
                $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                $result = $this->db->select(query: $query);

                if ($result != false) {
                    $value = $result->fetch_assoc();
                    Session::set('login', true); // Chữ 'S' viết hoa
                    Session::set('userID', $value['user_id']);
                    Session::set('username', $value['username']);
                    Session::set('fullname', $value['full_name']);
                    Session::set('role_id', $value['role_id']);
                if ($value['role_id']=='0' ){
                        header('location: admin/admin.php');
                    }else {
                        header('location: customer/Shop.php');
                    }
                } 
                else {
                    $alert = "Sai tài khoản hoặc mật khẩu";
                    return $alert;
                }
            }
        }
    }
?>;
