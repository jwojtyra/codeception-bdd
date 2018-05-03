# php7.2 bin/codecept run acceptance -v > README.md
```
Codeception PHP Testing Framework v2.4.1
Powered by PHPUnit 7.1.4 by Sebastian Bergmann and contributors.

[1mAcceptance Tests (1) [22m---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Modules: [32mAsserts, PhpBrowser, \Helper\Acceptance[39m
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
- [35;1mcheckout:[39;22m try checkout
[31;1mE[39;22m [35;1mcheckout:[39;22m try checkout [32m(0.00s)[39m
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


Time: 141 ms, Memory: 10.00MB

There was 1 error:

---------
1) [35;1mcheckout:[39;22m try checkout
[37;41;1m Test [39;49;22m tests/acceptance/checkout.feature:try checkout
[37;41;1m                 [39;49;22m
[37;41;1m  [Exception] B  [39;49;22m
[37;41;1m                 [39;49;22m
[33m
Scenario Steps:
[39m
 4. // I need to ...
 3. // As a ...
 2. // In order to ...

#1  /workspace/codeception/tests/_support/step/B.php:16
#2  step\B->aIs

[37;41mERRORS![0m
[37;41mTests: 1[0m[37;41m, Assertions: 0[0m[37;41m, Errors: 1[0m[37;41m.[0m

```
# php7.2 bin/codecept run acceptance -v -g a > README.md
```
Codeception PHP Testing Framework v2.4.1
Powered by PHPUnit 7.1.4 by Sebastian Bergmann and contributors.
[Groups] a 

[1mAcceptance Tests (1) [22m---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Modules: [32mAsserts, PhpBrowser, \Helper\Acceptance[39m
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
- [35;1mcheckout:[39;22m try checkout
[31;1mE[39;22m [35;1mcheckout:[39;22m try checkout [32m(0.00s)[39m
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


Time: 142 ms, Memory: 10.00MB

There was 1 error:

---------
1) [35;1mcheckout:[39;22m try checkout
[37;41;1m Test [39;49;22m tests/acceptance/checkout.feature:try checkout
[37;41;1m                 [39;49;22m
[37;41;1m  [Exception] B  [39;49;22m
[37;41;1m                 [39;49;22m
[33m
Scenario Steps:
[39m
 4. // I need to ...
 3. // As a ...
 2. // In order to ...

#1  /workspace/codeception/tests/_support/step/B.php:16
#2  step\B->aIs

[37;41mERRORS![0m
[37;41mTests: 1[0m[37;41m, Assertions: 0[0m[37;41m, Errors: 1[0m[37;41m.[0m
```

# php7.2 bin/codecept run acceptance -v -g b > README.md
```
Codeception PHP Testing Framework v2.4.1
Powered by PHPUnit 7.1.4 by Sebastian Bergmann and contributors.
[Groups] b 

[1mAcceptance Tests (1) [22m---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Modules: [32mAsserts, PhpBrowser, \Helper\Acceptance[39m
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
- [35;1mcheckout:[39;22m try checkout
[31;1mE[39;22m [35;1mcheckout:[39;22m try checkout [32m(0.00s)[39m
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


Time: 147 ms, Memory: 10.00MB

There was 1 error:

---------
1) [35;1mcheckout:[39;22m try checkout
[37;41;1m Test [39;49;22m tests/acceptance/checkout.feature:try checkout
[37;41;1m                 [39;49;22m
[37;41;1m  [Exception] B  [39;49;22m
[37;41;1m                 [39;49;22m
[33m
Scenario Steps:
[39m
 4. // I need to ...
 3. // As a ...
 2. // In order to ...

#1  /workspace/codeception/tests/_support/step/B.php:16
#2  step\B->aIs

[37;41mERRORS![0m
[37;41mTests: 1[0m[37;41m, Assertions: 0[0m[37;41m, Errors: 1[0m[37;41m.[0m
```
