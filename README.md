<br />
<div align="center">
<h3 align="center">PHP CLI Boilerplate</h3>

  <p align="center">
    Minimalist PHP boilerplate for CLI projects.
    <br />
    <a href="https://github.com/renoult/php-cli-boilerplate"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/renoult/php-cli-boilerplate/issues">Report Bug</a>
    ·
    <a href="https://github.com/renoult/php-cli-boilerplate/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

### Built With

* [![PHP][PHP]][PHP-url]
* [![PHPUnit][PHPUnit]][PHPUnit-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

This boilerplate can help you speed up development. It contains the bare minimum to start a small PHP project such as a CLI executable or similar.
Examples included.

### Prerequisites

Make sure you have `composer` installed: https://getcomposer.org/

### Installation

* `git-clone`
* `composer install`

Files with logic are located in `./src/Services` folder, see example.
They are called by `main.php` in root folder, then unit tested in `tests` folder.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- USAGE EXAMPLES -->
## Usage

By default examples are provided in a Service and in Unit Tests.
This section shows how to use examples, but feel free to remove and replace with your code.

Run script:
```
➜  php-cli-boilerplate git:(master) ✗ php main.php
Hello World!
```

Run unit tests:
```
➜  php-cli-boilerplate git:(master) ✗ ./vendor/bin/phpunit tests
PHPUnit 9.5.27 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 00:00.003, Memory: 4.00 MB

OK (1 test, 1 assertion)
```

Verify coding style using [PSR-12](https://www.php-fig.org/psr/psr-12/):
```
➜  php-cli-boilerplate git:(master) ✗ ./vendor/bin/phpcs --standard=PSR12 tests src
```

These recommendations also apply for other PHP projects:

* Use your IDE to indicate when your styling is incorrect, with PHPCS and PSR-12. This will save you time.
* Maintain your code [SOLID](https://www.freecodecamp.org/news/solid-principles-explained-in-plain-english/): break it down if a function or a class is getting large.
* Follow [TTD](https://en.wikipedia.org/wiki/Test-driven_development): write unit tests first, then your code. This will slow you down initially but you will see design issues sooner.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ROADMAP -->
## Roadmap

(none)

See the [open issues](https://github.com/renoult/php-cli-boilerplate/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Project Link: [https://github.com/renoult/php-cli-boilerplate](https://github.com/renoult/php-cli-boilerplate)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

* []()
* []()
* []()

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[PHPUnit]: https://img.shields.io/badge/phpunit-3f9ed8?style=for-the-badge&logo=php&logoColor=white
[PHPUnit-url]: https://phpunit.de/
[PHP]: https://img.shields.io/badge/php-4c5b93?style=for-the-badge&logo=php&logoColor=white
[PHP-url]: https://www.php.com
