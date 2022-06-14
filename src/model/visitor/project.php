<?php

    function generate()
    {
        $tmp = [];
        for($i = 0;$i < 10;$i++)
        {
            $buffer =   [
                        'title' => 'projet '.$i,
                        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde est quisquam, dolor fugiat ex labore id sunt, suscipit quia magnam ut enim amet iure quam nobis. Nulla reprehenderit esse quaerat!'
                        ];
            array_push($tmp,$buffer);
        }

        return $tmp;
    }