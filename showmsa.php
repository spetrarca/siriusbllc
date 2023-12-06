<?php
                //set the file name as variables to use below
                $filename = './assets/MSA-Sirius-B-Communications-LLC.pdf';

                //let the browser know what kind of file it is
                header('Content-type: application/pdf');

                header('Content-Length: ' .filesize($filename));

                readfile($filename);

                
                ?>