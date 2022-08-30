<?php

class Crud
{


    public $id;
    public $table_name;
    public $db_fields;


    public function find_all()
    {

        global $db;
        $sql = "SELECT * FROM `$this->table_name`";

        $result_set = $db->query($sql);


        $result = [];
        while ($row = $db->fetch_assoc($result_set)) {
            $result[] = $row;
        }

        echo "<pre>";
        // print_r($result);

        return $result;

    }

    public function find_by_id($id)
    {

        global $db;
        $result_set = $db->query("select * from {$this->table_name} where  id={$id}");
        $found = $db->fetch_assoc($result_set);

        echo "<pre/>";

        return $found;


    }


    public function clean__attributes($data = [])
    {

        $attributes = [];

        foreach ($data as $key => $value) {
            if (in_array($key, $this->db_fields)) {
                $attributes["{$key}"] = $value;
            }
        }

        return $attributes;
    }


    public function insert($data = [])
    {

        global $db;

        $cleanedAttr = $this->clean__attributes($data);

        $sql = "INSERT INTO {$this->table_name} ( `";
        $sql .= join("`, `", array_keys($cleanedAttr));
        $sql .= "` ) VALUES ('";
        $sql .= join("', '", array_values($cleanedAttr));
        $sql .= "')";


        $result = $db->query($sql);

        return $result;

    }

    public function edit($id, $data = [])
    {

        global $db;

        $clean_attr = $this->clean__attributes($data);

        $edit_attr = [];
        foreach ($clean_attr as $key => $value) {
            $edit_attr[] = "`{$key}`='{$value}'";
        }

        $sql = "UPDATE {$this->table_name} SET ";
        $sql .= join(", ", $edit_attr);
        $sql .= " WHERE id=" . $id;

        $result = $db->query($sql);

        return $result;

    }

    public function delete($id)
    {

        global $db;
        $result_set = $db->query(" DELETE FROM {$this->table_name} where id={$id}");
        $result = $db->affected_rows($result_set);

        echo "row deleted successfully";

        return $result;


    }


}

$crud = new Crud();