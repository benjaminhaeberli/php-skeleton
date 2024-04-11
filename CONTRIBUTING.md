# CONTRIBUTING

Contributions are welcome, and are accepted via pull requests.
Please review these guidelines before submitting any pull requests.

## Process

1. Fork the project
1. Create a new branch
1. Code, test, commit and push
1. Open a pull request detailing your changes.

## Guidelines

-   Please ensure the coding style running `composer pint`.
-   Send a coherent commit history, making sure each individual commit in your pull request is meaningful.
-   You may need to [rebase](https://git-scm.com/book/en/v2/Git-Branching-Rebasing) to avoid merge conflicts.
-   Please remember that we follow [SemVer](http://semver.org/).

## Setup

Clone your fork, then install the dev dependencies:

```bash
composer install
```

## Lint

Lint your code:

```bash
composer pint
```

## Tests

Run all tests:

```bash
composer test
```

Check types:

```bash
composer phpstan
```

Unit tests:

```bash
composer pest
```