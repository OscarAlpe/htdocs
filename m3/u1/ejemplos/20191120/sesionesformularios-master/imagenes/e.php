<?php

            $foto1= file_get_contents("imgs/infor.jpg");
            header("Content-Type: image/jpg");
            echo $foto1;

