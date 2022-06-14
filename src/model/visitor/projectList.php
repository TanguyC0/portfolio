<?php

    function getListProjects()
    {
        $database = loginDB();
        $statement = $database->query("SELECT * FROM project");

        $datas = [];
        while (($row = $statement->fetch())) 
        {
            $data = [
                'title' => $row['title'],
                'abstract' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde est quisquam, dolor fugiat ex labore id sunt, suscipit quia magnam ut enim amet iure quam nobis. Nulla reprehenderit esse quaerat!",
                'picture' => "fond.jpg",
            ];

            $datas[] = $data;
        }

        return $datas;
    }
