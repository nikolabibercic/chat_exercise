<?php
    class Chat extends Core {
        public function fetchMessages() {
            $this->query("
                SELECT 
                m.message,
                u.username,
                u.user_id
                FROM messages m
                INNER JOIN users u on m.user_id = u.user_id
                ORDER BY m.timestamp DESC
            ");

            return $this->rows();
        }

        public function throwMessage($user_id, $message){
            $this->query("
                INSERT INTO messages (user_id,message,timestamp)
                VALUES (". (int)$user_id .",'" .$this->db->real_escape_string(htmlentities($message)) ."',UNIX_TIMESTAMP())
            ");
        }
    }
?>