# The Idiosyncratic Coding Standard

This is the coding standard used for all [Idiosyncratic Projects](https://github.com/idiosyncratic-code), based on the [Doctrine Coding Standard](https://www.doctrine-project.org/projects/coding-standard.html). Changes to the Doctrine Coding Standard are:

- Private properties that are intended to be public read-only (using a magic `__get()` method, for instance) should be marked as `@public-read-only`.
- Equals signs do not need to be aligned in assignments (Generic.Formatting.MultipleStatementAlignment.NotSame)
