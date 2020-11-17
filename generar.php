<?php
if(isset($_POST['Generar'])){
            $connect = mysqli_connect("localhost", "root", "", "admin_productos");  
            header('Content-Type: text/csv; charset=utf-8');  
            header('Content-Disposition: attachment; filename=data.csv');  
            $output = fopen("php://output", "w");  
            fputcsv($output, array('id', 'nombre', 'marca', 'precio', 'descripcion'));  
            $query = "SELECT * from productos ORDER BY id DESC";  
            $result = mysqli_query($connect, $query);  
            while($row = mysqli_fetch_assoc($result))  
            {  
                fputcsv($output, $row);  
            }  
            fclose($output);  
        }
?>