<?php
include_once 'config/conn.php';

class Contact
{
    static function select($id = '')
    {
        global $conn;
        $sql = "SELECT * FROM contactss";
        if ($id) {
            $sql = "SELECT * FROM contacts WHERE id = ?";
        }
        $result = $conn->query($sql);
        $rows = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        $result->free();
        $conn->close();
        return $rows;
    }


    // static function update($data = [])
    // {
    //     $id = $data['id'];
    //     $phone = $data['phone'];
    //     $name = $data['name'];

    //     global $conn;
    //     $sql = "UPDATE contacts SET phone = ?, name = ? WHERE id = ?";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bind_param('ssi', $phone, $name, $id);
    //     $stmt->execute();

    //     $result = $stmt->affected_rows > 0 ? true : false;
    //     return $result;
    // }

    // static function insert($data = [])
    // {
    //     $phone = $data['phone'];
    //     $name = $data['name'];
    //     $user_id = $data['user_id'];
    //     $created_at = date('Y-m-d H:i:s', strtotime('now'));

    //     global $conn;
    //     $sql = "INSERT INTO contacts SET phone = ?, name = ?, user_id = ?, created_at = ?";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bind_param('ssis', $phone, $name, $user_id, $created_at);
    //     $stmt->execute();

    //     $result = $stmt->affected_rows > 0 ? true : false;
    //     return $result;

    // }

    // static function delete($id = '')
    // {
    //     global $conn;

    //     $deleted_at = date('Y-m-d H:i:s', strtotime('now'));
    //     $sql = "UPDATE contacts SET deleted_at = ? WHERE id = ?";

    //     $stmt = $conn->prepare($sql);
    //     $stmt->bind_param('si', $deleted_at, $id);
    //     $stmt->execute();

    //     $result = $stmt->affected_rows > 0 ? true : false;
    //     return $result;
    // }

}