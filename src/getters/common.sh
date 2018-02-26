#!/usr/bin/env bash

php -v

for i in 10000 100000 1000000 3000000
do 
    printf "\n"
    php ./arrays_simple.php $i
    php ./arrays_with_consts.php $i
    php ./objects_with_getter.php $i
    php ./objects_with_public.php $i
done
printf "\nDone\n"
