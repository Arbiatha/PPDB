<?php
require_once "koneksi.php";

class SessionHandlerPDO extends SessionHandler
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function open($savePath, $sessionName)
    {
        // Tidak perlu melakukan apapun, karena koneksi sudah dilakukan di konstruktor
        return true;
    }

    public function close()
    {
        $this->db = null; // Tutup koneksi dengan mengatur ke null
        return true;
    }

    public function read($id)
    {
        $stmt = $this->db->prepare("SELECT data FROM sessions WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return $row['data'];
        }

        return '';
    }

    public function write($id, $data)
    {
        $stmt = $this->db->prepare("REPLACE INTO sessions (id, data, timestamp) VALUES (:id, :data, :timestamp)");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':data', $data);
        $timestamp = time();
        $stmt->bindParam(':timestamp', $timestamp);

        return $stmt->execute();
    }

    public function destroy($id)
    {
        $stmt = $this->db->prepare("DELETE FROM sessions WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function gc($maxlifetime)
    {
        $stmt = $this->db->prepare("DELETE FROM sessions WHERE timestamp < :time");
        $old = time() - $maxlifetime;
        $stmt->bindParam(':time', $old);
        return $stmt->execute();
    }
}

// Mengatur handler sesi
$database = new Database();
$db = $database->getConnection();
$handler = new SessionHandlerPDO($db);
session_set_save_handler($handler, true);
session_start();
