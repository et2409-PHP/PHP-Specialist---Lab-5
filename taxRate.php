<?php

$name = $_REQUEST['name'];
$income = $_REQUEST['income'];    

    
if($income < 25000) 
        {
            $taxRate = 0.025;
        } 

        else if(($income > 25000) and ($income < 45000))

        {
            $taxRate = 0.0355;
        } 

        else if(($income > 45000) and ($income < 65000))

        {
            $taxRate = 0.0425;
        } 

        else if(($income > 65000) and ($income < 90000))

        {
            $taxRate = 0.0515;
        }  

        else if(($income > 90000) and ($income < 140000))

        {
            $taxRate = 0.0650;
        } 

        else if(($income > 140000) and ($income < 200000))

        {
            $taxRate = 0.0700;
        } 

        else if(($income > 200000) and ($income < 1000000))

        {
            $taxRate = 0.1000;
        } 

        else 
        
        {        
            $taxRate = 0.1250;
        
        }

        

print("<h2 style='color:blue';>The Name of the User: </h2>". $name);
print("<br/>");
              
print("<h2 style='color:blue';>The User's Income: </h2>" . "$" . number_format($income,2));
print("<br/>");
              
print("<h2 style='color:blue';>The User's Tax Rate: </h2>" . $taxRate);
print("<br/>");
              
print("<h2 style='color:green';>The Tax Owed: </h2>" . "$" . number_format($income * $taxRate,2));
print("<br/>");              
              


?>