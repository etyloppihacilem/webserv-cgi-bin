#!/usr/bin/perl
use strict;
use warnings;

print("Content-type: text/html; charset=UTF-8\r\n\r\n");
print("Hello World in perl !\n<br>\n");
my $datestring = localtime();
print "Local date and time $datestring\n";
