<?php
			include('process/dbh.php');
			$id = $_GET['id'];
            
			$files = $_FILES['offer'];
			$filename = $files['name'];
			$filrerror = $files['error'];
			$filetemp = $files['tmp_name'];
			$fileext = explode('.', $filename);
			$filecheck = strtolower(end($fileext));
			$fileextstored = array('png' , 'jpg' , 'jpeg' , 'pdf' , 'docx');

            $files1 = $_FILES['Annexure'];
			$filename1 = $files1['name'];
			$filrerror1 = $files1['error'];
			$filetemp1 = $files1['tmp_name'];
			$fileext1 = explode('.', $filename1);
			$filecheck1 = strtolower(end($fileext1));

			$files2 = $_FILES['Annexure2'];
			$filename2 = $files2['name'];
			$filrerror2 = $files2['error'];
			$filetemp2 = $files2['tmp_name'];
			$fileext2 = explode('.', $filename2);
			$filecheck2 = strtolower(end($fileext2));

			$files3 = $_FILES['Annexure3'];
			$filename3 = $files3['name'];
			$filrerror3 = $files3['error'];
			$filetemp3 = $files3['tmp_name'];
			$fileext3 = explode('.', $filename3);
			$filecheck3 = strtolower(end($fileext3));

            /*
            echo ("<SCRIPT LANGUAGE='JavaScript'>
    		 			window.alert('$id $filename $filename1')
    		 			window.location.href='javascript:history.go(-1)';
    		 			</SCRIPT>");

            */

            if(in_array($filecheck, $fileextstored) and in_array($filecheck1,$fileextstored) and in_array($filecheck2,$fileextstored) and in_array($filecheck3,$fileextstored))
			{
                $destinationfile = 'uploadstudent/'.$filename;
                move_uploaded_file($filetemp, $destinationfile);

                $destinationfile1 = 'uploadstudent/'.$filename1;
                move_uploaded_file($filetemp1, $destinationfile1);

				$destinationfile2 = 'uploadstudent/'.$filename2;
                move_uploaded_file($filetemp2, $destinationfile2);

				$destinationfile3 = 'uploadstudent/'.$filename3;
                move_uploaded_file($filetemp3, $destinationfile3);


                $sql = "UPDATE `employee` SET `offerletter`= '$destinationfile', `Anexure`='$destinationfile1', `Anexure2`='$destinationfile2', `Anexure3`='$destinationfile3' WHERE `id` = $id";
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