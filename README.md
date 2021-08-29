Powered by ENG Muhammad Abdullah El Nahtta @ Copyright © 2021 All rights reserved 
Powered by ENG Muhammad Abdullah El Nahtta @ Copyright © 2021 All rights reserved 

                                 &&&&&&&&&&&&&&&&,@                             
                              &&&&&&&&&&&&&&&&&@&&&%&%                          
                            *%&%&&%%%%#%%%%%%&%&&&&&&&                          
                            &&&/,,,,,,...*,*,,***//(&&&%                        
                          %&%&,,.....,,,,,,,,,,****//%&&                        
                          %%#*,..... .........,,,,***/#&&                       
                          &#*...........,...,,,,,,,****%&                       
                          %(,....,...,......,,,###((***/&&*                     
                        ..,#*,&#/,****@&*,,%/((#((/((*@#*,*                     
                        .,..,@,,*(.&@(/,/.,@/((((*//*,*%**/                     
                          ,,(,/..,,**,./..,**@,**,%&***//*                      
                           .(,....,,,.....,******,,,,*/#,.                      
                             (....,(...*..,*//***/#*//%                         
                             %#,,//#(///((((#*//%%&/(%&                         
                              #/#/*(..,,,,*,*//**#/%&&.                         
                               /%#*/,...,,///****#&&&                           
                                ,*%%#/(*//#(###%&&#/*,                          
                               ,&..*/&&%&&&&&&&&#***,.&&                        
                             @%   (....,,*///*****,  ..&&&&&&&&&&@              
                        &&&&&%%%     *...,,,*,,,    ...&&&&&&&&&&&&&&&&&&&&&    
                &%%%%%%%&&&%%%%%         ,,,,        .,&&&&&&&&&&&&&&&&&&&&&&&&&
          %%%&&&%%%%%%%%%%&%%%%%%      @&#%%&&&&%  ...,&&&&&&&%&&&&%%%&&%&&&&&&&
       %&&&%%%%%%%###%%%#%%%%%%%.     ,(/%#&&&&,.,# ...(&&&&&&&%&&&%%%%%%%%%%%&&
       %%%%%%%#######%####%%%%%%%   ... *%#&&&,....   .*&&&&%&%%&&&&&%%%%%%%%%&&
       %%################%%%%%%%&.        %%%&,....    /&&&%&%%%%&&&&&%%%%&&%&&%
       %%###(#(((#(#(####%%%%%%%&,       %%%&&&...     .&&&&%%%%%&&&&&&&&&&&&&&&

Powered by ENG Muhammad Abdullah El Nahtta @ Copyright © 2021 All rights reserved 


Greeting 

This a very small project to pervent Multiple session login per user using PHP and Mysql,
NO CSS or jquery or any lib.  just HTML 

# Note

```txt
the purpose of this only the idea of preventing multiple user login sessions so

- there is no hashing for password 
- there is no escaping for user name and password strings
- the user name or the password may be case sensitive

// you can find the datbase with extension .sql in databse folder 

// tables as the below 

users, and  login-sessions

```

# Illustration

```txt
.
├── Include
│   ├──config.php
│   └── README.md
├── Database
│   └── test.sql
├── login.php
├── logout.php
├── index.php
├── pageone.php
├── pagetwo.php
├── pagethree.php
└── README.md
.
```


# Installation 

- after importing the database (test.sql) from the Database folder
- modifay the config file which stored in include folder with your mysql IP, and credinail 


# TODO

 Adding an interface to control the session count per user 




