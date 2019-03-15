#!/usr/bin/env bash

php -v



for i in 100 4000
do 
    printf "\n"
    php ./testClassCreate.php $i
    php ./testOneFileSimpleClass.php $i
    php ./testOneFileNormalClass.php $i
    php ./testRequireSimpleClass.php $i
    php ./testRequireNormalClass.php $i
    php ./testComposerSimpleClass.php $i
    php ./testComposerNormalClass.php $i
    php ./testClassDelete.php $i
done
printf "\nDone\n"
