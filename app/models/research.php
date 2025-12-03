<?php

class Research {
    private $conn;
    private $table = 'research';

    public function __construct($db) {
        $this->conn = $db;
    }

    // Get all research
    public function getAll($limit = null, $status = 'active') {
        $query = "SELECT r.*, u.username as leader_name 
                  FROM " . $this->table . " r
                  LEFT JOIN users u ON r.leader_id = u.id
                  WHERE r.status = $1
                  ORDER BY r.created_at DESC";
        
        if ($limit) {
            $query .= " LIMIT " . intval($limit);
        }

        $result = pg_query_params($this->conn, $query, array($status));
        
        if (!$result) {
            return [];
        }

        $research = array();
        while ($row = pg_fetch_assoc($result)) {
            $research[] = $row;
        }
        return $research;
    }

    // Get research details
    public function getById($id) {
        $query = "SELECT r.*, u.username as leader_name 
                  FROM " . $this->table . " r
                  LEFT JOIN users u ON r.leader_id = u.id
                  WHERE r.id = $1";
        
        $result = pg_query_params($this->conn, $query, array($id));
        
        if (!$result) {
            return false;
        }
        
        return pg_fetch_assoc($result);
    }

    // Get research members using function get_research_members()
    public function getMembers($research_id) {
        $query = "SELECT * FROM get_research_members($1)";
        
        $result = pg_query_params($this->conn, $query, array($research_id));
        
        if (!$result) {
            return [];
        }

        $members = array();
        while ($row = pg_fetch_assoc($result)) {
            $members[] = $row;
        }
        return $members;
    }

    // Add member using procedure add_member_to_research()
    public function addMember($research_id, $user_id, $role = 'member') {
        $query = "CALL add_member_to_research($1, $2, $3)";
        
        $result = pg_query_params($this->conn, $query, array($research_id, $user_id, $role));
        
        return $result !== false;
    }

    // Remove member using procedure remove_member_from_research()
    public function removeMember($research_id, $user_id) {
        $query = "CALL remove_member_from_research($1, $2)";
        
        $result = pg_query_params($this->conn, $query, array($research_id, $user_id));
        
        return $result !== false;
    }

    // Get statistics using function get_research_statistics()
    public function getStats() {
        $query = "SELECT * FROM get_research_statistics()";
        
        $result = pg_query($this->conn, $query);
        
        if (!$result) {
            return false;
        }
        
        return pg_fetch_assoc($result);
    }
}
