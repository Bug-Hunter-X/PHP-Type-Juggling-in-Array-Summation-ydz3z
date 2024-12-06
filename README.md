# PHP Type Juggling Bug

This repository demonstrates a common error in PHP related to type juggling when working with arrays and numerical operations.

The `bug.php` file contains code that calculates the sum of an array. However, due to the presence of a string element ('4') within the array, PHP's loose typing leads to unexpected behavior during summation. The `bugSolution.php` file provides a corrected version that explicitly handles type issues.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter (e.g., `php bug.php`).
3. Observe the unexpected output.
4. Run `bugSolution.php` to see the correct output.

## Lessons Learned

* Be mindful of data types in PHP, especially when performing arithmetic operations.
* Use strict comparison (`===`) instead of loose comparison (`==`) when checking data types.
* Implement explicit type checking and conversion to avoid unintended type juggling.