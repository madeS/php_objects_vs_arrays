#!/usr/bin/env bash

php -v

for i in 10000 1000000 
do 
    printf "\n"
    php ./arrays_simple.php $i
    php ./arrays_with_consts.php $i
    php ./objects_simple.php $i
    php ./objects_with_constructor.php $i
    php ./objects_without_constructor.php $i
done
printf "\nDone\n"