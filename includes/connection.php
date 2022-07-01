
            <?php
                // DB credentials.
                define("DB_HOST","14.225.254.7");
                define("DB_USER","root");
                define("DB_PASS","tuanHuy1");
                define("DB_NAME","school");
                // Establish database connection.
                try
                {
                $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
                }
                catch (PDOException $e)
                {
                exit("Error: " . $e->getMessage());
                } 
    
                                                    
                if(isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on")   
                    $url = "https://";   
                else  
                    $url = "http://";   
                // Append the host(domain name, ip) to the URL.   
                $url.= $_SERVER["HTTP_HOST"];   
                
                // Append the requested resource location to the URL   
                $url.= $_SERVER["REQUEST_URI"];    
    
                define("BASE_URL", "http://localhost:3000/");
    
        