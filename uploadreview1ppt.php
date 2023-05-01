<?php
			include('process/dbh.php');
			$id = $_GET['id'];
            
			$files = $_FILES['R1ppt'];
			$filename = $files['name'];
			$filrerror = $files['error'];
			$filetemp = $files['tmp_name'];
			$fileext = explode('.', $filename);
			$filecheck = strtolower(end($fileext));
			$fileextstored = array('png' , 'jpg' , 'jpeg' , 'pdf' , 'docx', 'pptx', 'ppt', 'doc');

            /*
            echo ("<SCRIPT LANGUAGE='JavaScript'>
    		 			window.alert('$id $filename')
    		 			window.location.href='javascript:history.go(-1)';
    		 			</SCRIPT>");
            */
            
            
            if(in_array($filecheck, $fileextstored))
			{
                $destinationfile = 'uploadstudent/'.$filename;
                move_uploaded_file($filetemp, $destinationfile);

                $sql = "UPDATE `employee` SET `R1ppt`= '$destinationfile' WHERE `id` = $id";
                $result = mysqli_query($conn, $sql);
                
                if(($result) == 1)
                {
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Sucessfully Updated')
                    window.location.href='javascript:history.go(-1)';
                    </SCRIPT>");
                }
			}
            
            
            		
	?>