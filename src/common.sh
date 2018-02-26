#!/usr/bin/env bash

php -v

cd ./creating

for i in {0..10..1}
do 
    printf "."

    cd ../creating
    ./common.sh  >/dev/null

    printf "."

    cd ../getters
    ./common.sh  >/dev/null

    printf "."

    cd ../setters
    ./common.sh  >/dev/null

done

cd ..

printf "\n"

php ./average.php

printf "\nDone\n"
