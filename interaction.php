<?php
include 'database.php';

class Interaction extends Database
{
    public function getRequest(): array
    {
        $sql = "SELECT * FROM data";
        $data = $this->connect()->query($sql);
        return $data->fetchALL();
    }

    public function specific($id): array
    {
        $sql = "SELECT * FROM data WHERE id = ? ";
        $data = $this->connect()->prepare($sql);
        $data->execute([$id]);
        return $data->fetchAll();
    }

    public function create($name, $age, $address): bool
    {
        $sql = "INSERT INTO data(name, age, address) VALUES(?, ?, ?)";
        $data = $this->connect()->prepare($sql);
        if ($data->execute([$name, $age, $address])) {
            return true;
        } else {
            return false;
        }
    }

    public function update($name, $id)
    {
        $sql = "UPDATE data SET name= ?  WHERE id = ? ";
        $data = $this->connect()->prepare($sql);
        if ($data->execute([$name, $id])) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id): bool
    {
        $sql = "DELETE FROM data WHERE id = ? ";
        $data = $this->connect()->prepare($sql);
        if ($data->execute([$id])) {
            return true;
        } else {
            return false;
        }
    }
}
