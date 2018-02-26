# Performance test for objects and arrays

## Creating
```
ubuntu@ubuntu-xenial:/var/www/objects_vs_arrays/src/creating$ ./common.sh
PHP 7.1.14-1+ubuntu16.04.1+deb.sury.org+1 (cli) (built: Feb  9 2018 09:33:27) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.1.0, Copyright (c) 1998-2018 Zend Technologies
    with Zend OPcache v7.1.14-1+ubuntu16.04.1+deb.sury.org+1, Copyright (c) 1999-2018, by Zend Technologies
    with Xdebug v2.6.0, Copyright (c) 2002-2018, by Derick Rethans

Running ./arrays_simple.php for 1000
Time: 0.001; Memory: 0.81 MB;
Running ./arrays_with_consts.php for 1000
Time: 0.001; Memory: 0.81 MB;
Running ./objects_simple.php for 1000
Time: 0.001; Memory: 0.84 MB;
Running ./objects_with_constructor.php for 1000
Time: 0.001; Memory: 0.54 MB;
Running ./objects_without_constructor.php for 1000
Time: 0.001; Memory: 0.54 MB;

Running ./arrays_simple.php for 10000
Time: 0.006; Memory: 5.26 MB;
Running ./arrays_with_consts.php for 10000
Time: 0.006; Memory: 5.26 MB;
Running ./objects_simple.php for 10000
Time: 0.010; Memory: 5.76 MB;
Running ./objects_with_constructor.php for 10000
Time: 0.013; Memory: 2.71 MB;
Running ./objects_without_constructor.php for 10000
Time: 0.010; Memory: 2.71 MB;

Running ./arrays_simple.php for 100000
Time: 0.075; Memory: 48.58 MB;
Running ./arrays_with_consts.php for 100000
Time: 0.071; Memory: 48.58 MB;
Running ./objects_simple.php for 100000
Time: 0.119; Memory: 53.39 MB;
Running ./objects_with_constructor.php for 100000
Time: 0.138; Memory: 22.87 MB;
Running ./objects_without_constructor.php for 100000
Time: 0.098; Memory: 22.87 MB;

Running ./arrays_simple.php for 1000000
Time: 0.697; Memory: 474.84 MB;
Running ./arrays_with_consts.php for 1000000
Time: 0.804; Memory: 474.84 MB;
Running ./objects_simple.php for 1000000
Time: 1.227; Memory: 520.98 MB;
Running ./objects_with_constructor.php for 1000000
Time: 1.382; Memory: 215.80 MB;
Running ./objects_without_constructor.php for 1000000
Time: 1.045; Memory: 215.80 MB;
ubuntu@ubuntu-xenial:/var/www/objects_vs_arrays/src/creating$
```